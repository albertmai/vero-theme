<?php

include_once( CHILD_DIR . '/lib/custom_post_types/guides.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/resources.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/help_docs.php' );

//
//Tweaks to Genesis
//----------------------

function child_output_filter( $backtotop_text, $creds_text ) {
	$first_column = wp_nav_menu( array( 'menu' => 'vero_footer' ));
  $second_column = wp_nav_menu( array( 'menu' => 'vero_footer_second' ));
  $third_column = wp_nav_menu( array( 'menu' => 'vero_footer_third' ));
	return '<div class="pull-right">' . $third_column . '</div>' . '<div>' . $first_column . '</div>' . '<div>' . $second_column . '</div>';
}
function add_logo_to_navbar($menu, $args) {
  $args = (array)$args;
  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;
  ob_start();
  echo '<li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>';
  $logo = ob_get_clean();
  return $logo . $menu;
}

function custom_favicon( $favicon_url ) {
  return '/wp-content/themes/vero/assets/images/favicon.png';
}

function add_body_classes($classes) {
  global $post;

  if ( is_singular('help_docs') ) {
    $classes[] = 'help-docs sidebar-content';
    return $classes;
  } else if ( is_singular('post') ) {
    $post_style = get_post_meta($post->ID, 'post_style', true); 
    if ( $post_style == 'centered' ) {
      $classes[] = 'blog centered';
    } else {
      $classes[] = 'blog';
    }
    return $classes;
  } else if ( is_singular('kb') || is_post_type_archive('kb') || is_tax('topic') ) {
    $classes[] = 'kb';
    return $classes;
  } else if ( is_singular('api_docs') ) {
    $classes[] = 'api-docs sidebar-content';
    return $classes;
  } else if ( is_singular('guides') ) {
    $classes[] = 'guides sidebar-content';
    return $classes;
  } else if ( is_home('post') || is_archive('post') ) {
    $classes[] = 'blog archive';
    return $classes;
  } else {
    return $classes;
  }
}

function add_blue_navbar_logic() {
  global $wp_query;
  if ( is_singular('post') || is_home() || is_post_type_archive('post') || is_category() ) {
    wp_nav_menu( array(
    'theme_location' => 'third-menu-blog',
    'container_class' => 'blue-nav-menu'
    ) );

    echo '<div class="search-bar">';
    genesis_widget_area( 'docs_topbar' );
    echo '</div>';

  } else if ( is_singular('help_docs') || is_singular('api_docs') || is_singular('kb') || is_post_type_archive('kb') || is_tax('topic') ) {
    wp_nav_menu( array(
    'theme_location' => 'third-menu-docs',
    'container_class' => 'blue-nav-menu'
    ) );

    echo '<div class="search-bar">';
    genesis_widget_area( 'docs_topbar' );
    echo '</div>';
  }
}

function additional_active_item_classes($classes = array(), $menu_item = false){
    if(is_singular('kb')) {
      $post = get_post();
      $terms = get_the_terms( $post->ID, 'topic' );
      $term_array = array();
      $count = count($terms);
      if ( $count > 0 ){
        foreach ( $terms as $term ) {
            $term_array[] = $term->name;
        }
      }
    } else if(is_tax('topic')) {
      $q_object = get_queried_object();
      if( isset($q_object->taxonomy) ){
        $taxonomy = $q_object->taxonomy;
      }
    }
    //global $wp_query;
    if ( strtolower($menu_item->title) == 'docs' && ( is_post_type_archive('help_docs') || is_singular('help_docs') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'knowledge base' && ( is_post_type_archive('kb') || is_singular('kb') || is_tax('topic') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'api docs' && ( is_post_type_archive('api_docs') || is_singular('api_docs') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( $menu_item->title == 'Pricing' && is_page('high-volume-senders') ) {
      $classes[] = 'current-menu-item';
    }  else if ( ( is_singular('kb') && in_array($menu_item->title, $term_array) ) || ( is_tax('topic') && ($menu_item->title == $taxonomy) ) ) {
      $classes[] = 'current-menu-item';
    } else if ( $menu_item->title == 'Email Marketing Resources' && (is_page('email-marketing-resources') || is_singular('guides') || is_singular('resources') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'blog' && (array_shift(explode(".",$_SERVER['HTTP_HOST'])) == 'blog') ) {
      $classes[] = 'current-menu-item';
    } 
    return $classes;
}

function add_js() {
  wp_register_script('numeral', get_stylesheet_directory_uri() . '/assets/scripts/vendor/numeral.min.js', array('jquery'), NULL, true);
  wp_register_script('lead_modal', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.leanModal.min.js', array('jquery'), NULL, true);
  wp_register_script('vero-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), NULL, true);
  wp_enqueue_script('numeral');
  wp_enqueue_script('lead_modal');
  wp_enqueue_script('vero-js');
}


function add_gtm_identify() {
  $email = urldecode($_GET['vero_e']);
  if($_GET['vero_e'] != "") {
  ?>
    <script type="text/javascript" charset="utf-8">
      dataLayer = []
      dataLayer.push({'current_user_email': '<?php echo $email?>'});
    </script>
  <?php
  }
}

function read_more_link() {
  return '<a class="more-link btn btn-success" href="' . get_permalink() . '">Read more &rarr;</a>';
}

function custom_popups() {
  $post = get_post();
  $with_scroll = (get_post_meta($post->ID, 'percent', true));
  $popup_value = (do_shortcode(get_post_meta($post->ID, 'popup_value', true)));
  if (!empty($popup_value)){
  ?>
    <div id="blog-popup" style="display:none;"><?php echo $popup_value ?></div>
  <?php if ($with_scroll == false) { ?>
    <script>jQuery(document).ready(function(){
      jQuery("#blog-popup").loadLeanModal();
    });</script>
  <?php } else { ?>
    <script>
      var body = document.body,
      html = document.documentElement;
      var height = Math.max( body.scrollHeight, body.offsetHeight, 
                           html.clientHeight, html.scrollHeight, html.offsetHeight );

      var interval = setInterval(function() {
          if (jQuery(window).scrollTop() >= (height * 0.75)) {
            jQuery("#blog-popup").loadLeanModal();
            clearInterval(interval);
          }
      }, 250);
    </script>
  <?php }
  }
}

function remove_digg_digg() {
  if ( !is_singular('post') ) {
    remove_filter('the_excerpt', 'dd_hook_wp_content');
    remove_filter('the_content', 'dd_hook_wp_content');
  } 
}


//
// Customise blog posts
//----------------------
function add_blog_navbar_logic() {
  if ( is_singular('post') || is_singular('guides') || is_post_type_archive('post') || is_category() || is_home() || is_singular('resources') ) {
    echo '<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"><div class="wrap">';
    wp_nav_menu( array(
      'theme_location' => 'blog-secondary-nav-menu',
      'container_class' => 'menu-primary'
    ) );
    echo '</div></nav>';
  }
}

function add_blog_cta_before_footer() {
  if ( is_singular('post') ) { ?>

  <section class="post-entry-widget">
    <?php dynamic_sidebar( 'after-post-widget' ); ?>
  </section>
  <?php }
}

function blog_post_featured_image () {
  if ( ! is_singular( 'post' ) )
    return;
  $img = genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
  printf( '<a class="post-image-link" href="%s" title="%s">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), $img );
}

function fix_blog_navs_and_header () {
  global $post;
  if( is_singular('post') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    $post_style = get_post_meta($post->ID, 'post_style', true); 
    if ( $post_style == 'centered' ) {
      add_action( 'genesis_before_content', 'blog_post_featured_image', 8);
    } else {
      add_action( 'genesis_entry_header', 'blog_post_featured_image', 15);
    }
    add_action( 'genesis_before_content', 'genesis_do_post_title', 9 );
    add_action( 'genesis_before_content', 'genesis_post_info', 9 );
    add_action( 'genesis_before_content', 'before_entry_widget', 9 );
    remove_action('genesis_after_header', 'genesis_do_nav');
  } else if ( is_singular('resources') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    remove_action('genesis_after_header', 'genesis_do_nav');
  } else if (is_singular('guides') ) {
    remove_action('genesis_after_header', 'genesis_do_nav');
  } else if ( is_author() || is_search()) {
    add_action( 'genesis_before_entry_content', 'genesis_entry_header_markup_open', 5 );
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
    add_action( 'genesis_before_entry_content', 'genesis_post_info', 12 );
    add_action( 'genesis_before_entry_content', 'genesis_entry_header_markup_close', 15 );
  } else if ( is_post_type_archive('post') || is_home() || is_category() ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
    add_action( 'genesis_before_entry_content', 'genesis_post_info', 12 );
    remove_action('genesis_after_header', 'genesis_do_nav');
  }
}

function before_entry_widget() {
  genesis_widget_area( 'before-entry', array(
    'before' => '<div class="before-entry-widgets">',
    'after'  => '</div>',
  ) );
}


//
// Add and customise blog home page
//----------------------
function create_sidebars_blog_home() {
  genesis_register_sidebar( array(
    'id'      => 'home-featured-full',
    'name'      => __( 'Home Featured Full', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area if you want full width.', 'CHILD_THEME_NAME' ),
  ) );
  genesis_register_sidebar( array(
    'id'      => 'home-featured-left',
    'name'      => __( 'Home Featured Left', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area left side.', 'CHILD_THEME_NAME' ),
  ) );
  genesis_register_sidebar( array(
    'id'      => 'home-featured-right',
    'name'      => __( 'Home Featured Right', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area right side.', 'CHILD_THEME_NAME' ),
  ) );
  genesis_register_sidebar( array(
    'id'      => 'editors-pick-featured',
    'name'      => __( 'Editor\'s Pick Featured', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the Editor\'s Pick featured area.', 'CHILD_THEME_NAME' ),
  ) );
}



//
// Add and customise blog resources page
//----------------------
function create_sidebars_blog_resources() {
  genesis_register_sidebar( array(
    'id'      => 'resources-featured-full',
    'name'      => __( 'Resources Featured Full', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area if you want full width.', 'CHILD_THEME_NAME' ),
  ) );
}


//
// Images
//------------------------
function add_class_to_small_images( $content ) {
  $dom = new DOMDocument();
  @$dom->loadHTML( $content );
  $dom->preserveWhiteSpace = false;
  $images = $dom->getElementsByTagName('img');
  foreach ($images as $image) {
    $parent = $image->parentNode;
    if ($parent->nodeName == 'a') {
      $parent = $parent->parentNode;
    }

    // get the widths of each image
    $width = $image->getAttribute('width');

    // the existing classes already on the images
    $existing_classes = $parent->getAttribute('class');

    // the class we're adding
    $new_class = ' small-image';

    // the existing classes plus the new class
    $class_names_to_add = $existing_classes . $new_class;

    // if image is less than 480px, add their old classes back in plus our new class
    if( $width < 1080) {
        $parent->setAttribute('class', $class_names_to_add);
    }
  }
  $iframes = $dom->getElementsByTagName('iframe');
  foreach ($iframes as $iframe) {
    $parent = $iframe->parentNode;
    if ($parent->nodeName == 'a') {
      $parent = $parent->parentNode;
    }
    // the existing classes already on the images
    $existing_classes = $parent->getAttribute('class');

    // the class we're adding
    $new_class = ' aspect-ratio';

    // the existing classes plus the new class
    $class_names_to_add = $existing_classes . $new_class;

    // if iframe is less than 480px, add their old classes back in plus our new class
    $parent->setAttribute('class', $class_names_to_add);
  }
  $content = $dom->saveHTML();
  return $content;
}

?>