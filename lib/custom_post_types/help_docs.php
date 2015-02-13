<?php

//
// Add Help docs
//----------------------
function register_help_post_type () {
  // Help docs
  $labels = array(
    'name' => __( 'Help Docs' ),
    'singular_name' => __( 'Help Doc' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => '/wp-content/themes/vero/assets/images/icons/api.png',
    'has_archive' => true,
    'hierarchical' => false,
    'taxonomies' => array( 'help_docs_categories'),
    'capability_type' => 'post',
    'query_var' => true,
    'rewrite' => array('slug' => 'help/%help_docs_categories%', 'with_front' => FALSE)
  );

  register_post_type( 'help_docs', $args);
  add_post_type_support( 'help_docs', 'genesis-layouts' );
}

function create_help_docs_post_type() {
  if(genesis_get_option('help_docs') == true){
    register_help_post_type();
  }
}

// Custom Taxonomy
function add_help_docs_taxonomies() {

  register_taxonomy('help_docs_categories', 'help_docs', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Docs Category', 'taxonomy general name' ),
      'singular_name' => _x( 'Docs-Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Docs-Categories' ),
      'all_items' => __( 'All Docs-Categories' ),
      'parent_item' => __( 'Parent Docs-Category' ),
      'parent_item_colon' => __( 'Parent Docs-Category:' ),
      'edit_item' => __( 'Edit Docs-Category' ),
      'update_item' => __( 'Update Docs-Category' ),
      'add_new_item' => __( 'Add New Docs-Category' ),
      'new_item_name' => __( 'New Docs-Category Name' ),
      'menu_name' => __( 'Docs Categories' ),
    ),

    'query_var'     => true,

    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'help', // This controls the base slug that will display before each term
      'with_front' => false // Don't display the category base before "/locations/"
    ),
  ));
}

function filter_help_docs_link( $link, $post) {
    if ( $post->post_type != 'help_docs' )
        return $link;

    if ( $cats = get_the_terms( $post->ID, 'help_docs_categories' ) )
        $link = str_replace( '%help_docs_categories%', array_pop($cats)->slug, $link );
    return $link;
}


function help_docs_layout($opt) {
if ( 'help_docs' == get_post_type() )
  $opt = 'full-width-content';
  return $opt;
}

#function help_docs_sidebar_logic() {
#  if ( is_singular('help_docs') ) {
#    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
#    add_action( 'genesis_sidebar', 'get_help_docs_sidebar' );
#  } 
#}
#
#function get_help_docs_sidebar() {
#  genesis_widget_area( 'help_docs_sidebar' );
#}

function add_help_docs_breadcrumbs(){
  global $post;
  $terms = wp_get_post_terms( $post->ID, 'help_docs_categories'); 
  $term = $terms[0];
  $title = $term->name;
  $slug = $term->slug;
  ?>
  <div class="help-docs-crumbs">
    <ul class="list-unstyled list-inline">
      <li><a href="/help">Help</a></li>
      &#10095;
      <li><a href="/help/<?php echo $slug ?>"><?php echo $title; ?></a></li>
      &#10095;
      <li class="active"><?php echo get_the_title(); ?></li>
    </ul>
  </div>
  <?php 
}

function add_help_docs_footer(){
  ?>
  <section id="bottom">
    <div class="inner center-text">
      <h1>Need more help?</h1>
      <h2 class="h5">If you can't find the answer you're after, click the button below to shoot our super support team an email.</h2>
      <a href="mailto:support@getvero.com" class="btn btn-large btn-primary">Email Us</a>
    </div>
  </section>
  <?php
}