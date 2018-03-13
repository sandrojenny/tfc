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
?>
