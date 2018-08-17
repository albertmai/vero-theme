<?php

function add_logo_and_menu_toggle_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];

  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;

  ob_start();
  ?>
  <ul id="menu-marketing-navbar-left" class="menu">
    <li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img data-no-retina src="/wp-content/themes/vero/assets/images/home/logo/logo-blue.svg" width="104" height="36"></a></li>
    <li><a href="https://www.getvero.com/careers" class="hiring-pill">We're Hiring!</a></li>
  </ul>
  <?php $logo = ob_get_clean();

  ob_start();
  ?>
  <div class="nav-menu-toggle"><a href="#">Menu</a></div>
  <?php $responsive_toggle = ob_get_clean();

  return $logo . $menu . $responsive_toggle;
}

function add_responsive_menu_toggle_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];

  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;

  ob_start();
  ?>
  <ul id="menu-marketing-navbar-left" class="menu">
    <li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>
    <li id="what-is-vero" class="menu-item menu-item-type-custom menu-item-object-custom"><span>Sweet ass emails!</span></li>
  </ul>
  <?php $logo = ob_get_clean();

  return $logo . $menu;
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
    if ( strtolower($menu_item->title) == 'tour' && ( is_page('features') || is_page('triggered-emails') || is_page('smart-newsletters') || is_page('external-attributes') || is_page('individual-contact-profiles')  ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'idea lab' && ( is_singular('campaigns') || is_post_type_archive('campaigns')) ) {
      $classes[] = 'current-menu-item';
    } else if ( $menu_item->title == 'Pricing' && (is_page('pricing') || is_page('growth') || is_page('entrepreneur') || is_page('enterprise')  || is_page('full-pricing') ) ) {
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

function workflows_banner(){
  if(is_page('homepage')){
    ?>
      <div class="homepage-banner">
        <a href="/workflows" class="unstyled">
          <p class="large banner-heading inline-block right-margin-medium">Introducing <span class="bold">Workflows</span></p>
          <p class="regular banner-sub-heading inline-block">A visual way to build your campaigns.</p>
          <p class="regular banner-button inline-block">Find out more</p>
          <p class="regular banner-arrow inline-block">
            <svg height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg"><path d="m6.328 14.263c-.407.373-.435 1.006-.061 1.413.373.407 1.006.435 1.413.061l5.998-5.498c.432-.396.432-1.078 0-1.474l-5.998-5.502c-.407-.373-1.04-.346-1.413.061s-.346 1.04.061 1.413l5.194 4.764z" fill="#d8d8d8"/></svg>
          </p>
        </a>
      </div>
    <?php 
  }
}

?>
