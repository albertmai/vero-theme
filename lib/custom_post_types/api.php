<?php

//
// Add API docs
//----------------------
function register_api_post_type () {
  // API docs
  $labels = array(
    'name' => __( 'API Docs' ),
    'singular_name' => __( 'API Doc' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => '/wp-content/themes/vero/assets/images/icons/api.png',
    'has_archive' => true,
    'hierarchical' => true,
    'with_front' => false,
    'rewrite' => array('slug' => 'api')
  );

  register_post_type( 'api_docs', $args);
  add_post_type_support( 'api_docs', 'genesis-layouts' );
}

function create_all_docs_post_type() {
  if(genesis_get_option('api') == true){
    register_api_post_type();
  }
}

function all_docs_sidebar_logic() {
  if ( is_singular('api_docs') ) {
    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
    add_action( 'genesis_sidebar', 'get_api_docs_sidebar' );
  } 
}

function get_api_docs_sidebar() {
  genesis_widget_area( 'api_docs_sidebar' );
}

function remove_post_info($post_info) {
  if ( is_singular('help_docs') || is_singular('resources') || is_page_template('page_blog_home.php') || is_tax('topic') || is_singular('guides')) {
  } else {
    $post_info = 'Published on [post_date]';
    return $post_info;
  }
}