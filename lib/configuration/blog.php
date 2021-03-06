<?php

  function custom_prev_page_link ( $text ) {
    return 'Prev';
  }
  function custom_next_page_link ( $text ) {
    return 'Next';
  }

  function get_primary_category() {
    # SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
    $category   = get_the_category();
    $useCatLink = true;

    # If post has a category assigned.
    if ($category) {
      $category_display = '';
      $category_link = '';
      if ( class_exists('WPSEO_Primary_Term') )
      {
        # Show the post's 'Primary' category, if this Yoast feature is available, & one is set
        $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
        $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
        $term = get_term( $wpseo_primary_term );
        if (is_wp_error($term)) {
          # Default to first category (not Yoast) if an error is returned
          $category_display = $category[0]->name;
          $category_link = get_category_link( $category[0]->term_id );
        } else {
          # Yoast Primary category
          $category_display = $term->name;
          $category_link = get_category_link( $term->term_id );
        }
      }
      else {
        # Default, display the first category in WP's list of assigned categories
        $category_display = $category[0]->name;
        $category_link = get_category_link( $category[0]->term_id );
      }
      # Display category
      if ( !empty($category_display) ) {
        if ( $useCatLink == true && !empty($category_link) ){
          echo '<a class="unstyled" href="'.$category_link.'">'.$category_display.'</a>';
        } else {
          echo '<span class="badge">'.$category_display.'</span>';
        }
      }
    }

  }

  function add_custom_types( $query ) {
    global $wp_the_query;

  if( ( is_post_type_archive('post') || is_home() || is_archive() ) && $query === $wp_the_query && !is_admin() && !is_post_type_archive('release-notes') ) {
    $query->set( 'post_type', array(
      'post', 'guides', 'tutorials'
    ));

      $query->set( 'post_parent', 0 );

      return $query;
    } else if ( is_search() && $query === $wp_the_query && !is_admin()) {
      $query->set('post_type', array(
        'post'
      ));

      $query->set( 'post_parent', 0 );

      return $query;
    }
  }

  function custom_entry_header() {
    add_action( 'genesis_before_content', 'move_feature_image' );

    if ( is_blog_post_or_guide() ) {
      remove_action( 'genesis_entry_header', 'genesis_post_info', 12);
      add_action( 'genesis_entry_header', 'genesis_post_info', 9 );
    }
  }

  function change_post_structure() {
    if ( is_single() || is_archive() || is_search() ) {
      // Position entry meta above title
      remove_action( 'genesis_entry_header', 'genesis_post_info', 12);
      add_action( 'genesis_entry_header', 'genesis_post_info', 9 );
    }

    if ( is_single() ) {
      // Customise entry title markup
      add_filter( 'genesis_post_title_output', 'post_title_output', 15 );
      function post_title_output( $title ) {
        if ( is_singular() ) {
          $title = sprintf( '<h1 class="entry-title">%s</h1>', apply_filters( 'genesis_post_title_text', get_the_title() ) );
          return $title;
        }
      }

      // Remove the post format image (requires HTML5 theme support)
      remove_action( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );
    }
  }

  function change_post_info($post_meta) {
    if ( !is_blog() ) {
      // return '';
    }

    global $post;
    $categories = get_the_category();
    //$categories = get_the_category($post->ID);
    $category = $categories[0]->cat_name;

    if ( is_single() ) {
      ?>
      <div class="entry-meta">
        <?php if( $category == 'Uncategorized' || $category == '' ) { ?>
          <a class="badge" href="/resources"><?php if( is_singular('guide') ) { ?>Guide<?php } else { ?>Article<?php } ?></a>
        <?php } else { ?>
          <span class="badge"><?php get_primary_category(); ?></span>
        <?php } ?>
      </div>
      <?php
    } else if ( is_search() ) {
      ?>
      <div class="entry-meta flex items-center bottom-margin-sm">
        <?php if( $category == 'Uncategorized' || $category == '' ) { ?>
          <a class="badge" href="/resources"><?php if( is_singular('guide') ) { ?>Guide<?php } else { ?>Article<?php } ?></a>
        <?php } else { ?>
          <span class="badge"><?php get_primary_category(); ?></a>
        <?php } ?>
      </div>
      <?php
    } else {
      ?>
        <div class="entry-meta bottom-margin-sm">
          <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
        </div>
      <?php
    }
  }

  function is_active($page) {
    if( is_category($page) ) {
      return 'active';
    } else if ( $page == 'all' && is_home() ) {
      return 'active';
    } else if ( in_category($page) && is_single() ) {
      return 'active';
    } else {
      return '';
    }
  }

?>