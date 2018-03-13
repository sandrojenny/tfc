<?php

// Navi
  function register_my_menus() {
  register_nav_menus(
    array(
      'main' => __( 'main' ),
      'footer' => __( 'footer' )
      )
    );
  }

  add_action( 'init', 'register_my_menus' );

// Basic Example
add_theme_support('post-thumbnails');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 90;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>
