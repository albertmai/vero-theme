<?php

function add_feature_image_to_posts() {
  
  if ( is_blog_post_or_guide() ){
    global $post;
    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    if( $image != '' ){
    ?>
      <img src="<?php echo $image; ?>">
    <?php
    }
  }
}

function force_full_width_on_posts( $options ) {
  if( is_blog_post_or_guide() ) {
    $options = 'full-width-content'; 
    return $options;
  }
}

function add_blog_post_back_button() {
  global $post;
  
  if( is_child_guide() ){?>
    <a href="<?php echo get_permalink($post->post_parent); ?>" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Table of Contents</a>
  <?php } else if ( is_singular('changelogs') ) { ?>
    <a href="/changelog" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Changelog</a>
  <?php } else if( is_blog_post_or_guide() ){ ?>
    <a href="/resources" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Blog</a>
  <?php }
}

function add_shares_to_post() {
  global $post;
  if( is_blog_post_or_guide() ){
    ?>
      <div class='shares-block'>
        <!-- <div class='total-shares'>
          <span><?php 
            //$share_obj = new Naked_Social_Share_Buttons($post);
            //$final_shares = get_field('naked_shares_count');
            //if ( is_numeric( $final_shares['expire'] ) && $final_shares['expire'] > time() ) {
            //  $shares = get_field('naked_shares_count')['shares'];
            //} else {
              $share_obj = new Naked_Social_Share_Buttons();
              $shares = $share_obj->get_share_numbers['shares'];
            //}
            echo $shares['facebook'] + $shares['twitter'] + $shares['linkedin'];
          ?></span>Shares
        </div> -->
        <?php echo naked_social_share_buttons(); ?>
      </div>
    <?php
  }
}

function post_remove_footer() {
  if( is_blog_post_or_guide() ){
    remove_action( 'genesis_entry_footer', 'add_shares' );
  }
}

function add_contributors() {
  if( is_singular('changelogs') ){
    global $post;
    $contributors = get_post_meta($post->ID, 'contributors', true);
    ?>
    <div class='contributor-bio'>
      <div class='contributor-title'>Who helped out</div>
      <ul class='contributor-details unstyled-list'>
      <?php foreach($contributors as $contributor) { ?>
        <li>
          <div class="contributor-image"><?php echo get_avatar( get_the_author_meta( 'ID', $contributor ) ); ?></div>
          <div class='contributor-name'><a href="https://twitter.com/<?php echo get_the_author_meta( 'twitter', $contributor ); ?>" target="_blank">@<?php echo get_the_author_meta( 'twitter', $contributor ); ?></a></div>
        </li>
      <?php } ?>
      </ul>
    </div>
  <?php }
}

function add_subscribe_form() {
  if( is_blog_post_or_guide() ){
    ?>
    <div class='subscribe-form center-block'>
      <h2>We dissect email for a living.</h2>
      <p>More than 10,000 marketers, developers and product managers enjoy our newsletter every week.</p>
      <form action='https://app.getvero.com/forms/d18fad198e3fb6d5d641d602ba7006f1' method='post'>
          <input id="footer-email-address"  name='email' type='email' class="form-control" placeholder="email@address.com"></input>
          <input type='submit' value='Join us' class="btn btn-success"/>
      </form>
    </div>
  <?php
  }
}

function add_author_bio() {
  if( is_blog_post_or_guide() ){
    global $post;
    ?>
    <div class='author-bio'>
      <div class='author-title'>Written by</div>
      <div class='author-image'><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
      <div class='author-details'>
        <p class='author-name'><?php echo get_the_author_meta( 'display_name' ); ?></p>
        <p class='author-description'><?php echo get_the_author_meta( 'description' ); ?></p>
      </div>
    </div>
    <?php
  }
}

function add_class_to_small_images( $content ) {
  global $post;

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
    $child_classes = $image->getAttribute('class');
    // the existing classes already on the images
    $existing_classes = $parent->getAttribute('class');
    $existing_styles = $parent->getAttribute('style');
    
    if( $width < 628) {
      // the class we're adding
      $new_class = ' small-image';
      $new_style = $width .'px';
      // the existing classes plus the new class
      $class_names_to_add = $existing_classes . $new_class;
      $parent->setAttribute('class', $class_names_to_add);
      // add width as a style
      $styles_to_add = $existing_styles . $new_style;
      $parent->setAttribute('style', $styles_to_add);
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

function add_post_sidebar() {
  if ( is_blog_post_or_guide() ) {
    genesis_widget_area( 'post-sidebar' );
  }
}

function post_is_long() {
  $content = get_the_content();
  $length  = sizeof( explode(" ", $content) );

  return $length > 950;
}

function add_blue_signup_boxes( $content ) {
  global $post;
  $index = 5;

  $dom = new DOMDocument();
  @$dom->loadHTML( $content );
  $dom->preserveWhiteSpace = false;

  $insert_blue_box = get_field('insert_blue_box');

  if ( is_blog_post_or_guide() && post_is_long() && ( isset($insert_blue_box) && $insert_blue_box ) ) {
    $tags = $dom->getElementsByTagName('p');
    $total_p_tags = $tags->length;

    $content = blue_signup_box_content();
    $frag = $dom->createDocumentFragment(); 
    $frag->appendXML( $content ); 

    $div = $dom->createElement( 'div', '' ); 
    $div->setAttribute( "class", "blue-signup" );
    
    $div->appendChild($frag); 

    $insertion_point = get_element($tags, (($total_p_tags/2)-1));
    $insertion_point->insertBefore( $div, $index_p );  
  }

  return $dom->saveHTML();
}

function get_element($tags, $i) {
  $index_p = $tags->item( $i );
  $non_objects = array('h1','h2','h3','h4');

  if( $index_p->parentNode->tagName == 'blockquote' ) {
    $index_p = get_element($tags, $i + 1);
  } else if ( in_array($index_p->previousSibling->tagName, $non_objects) ) {
    $index_p = get_element($tags, $i + 1);
  } else if ( $index_p->nextSibling->tagName == 'img' ) {
    $index_p = get_element($tags, $i + 1);
  }

  return $index_p;
}

function blue_signup_box_content() {
  return "<div class='interstitial'><div class='interstitial-left'><div class='blog-cta-content'><h1>Create better customer experiences</h1><p>Send super targeted messages with Vero.</p><a class='btn btn-success' href='https://app.getvero.com/signup' target='_blank'>Start a free trial</a></div></div><div class='interstitial-right'><img class='no-border' src='/wp-content/themes/vero/assets/images/blog-cta@2x.png'/></div></div>";
}

?>