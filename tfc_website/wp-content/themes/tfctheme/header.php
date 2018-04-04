<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the fundraising company – solutions to success.</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  </head>
  <body>

  <div class="grid-container">
    <div class="grid-x grid-padding-x">
    <div class="medium-12 cell topnav">
        <div class="languageSwitcher">
          <a href="#" class="active">Deutsch</a> | <a href="#">Français</a>
        </div>
      </div>
    </div>
    <div class="nav grid-x grid-padding-x">
      <div class="logobox small-12 medium-12 large-5 cell">
        <a href="#"><div class="logo"></div></a>
      </div>
      <div class="small-12 medium-12 large-7 cell">
        <div class="navigation">

          <?php wp_nav_menu(
      			array(
      				'theme_location' => 'main',
      				'container'	 => false,
      				'menu_id'	 => 'nav-primary',
              'menu_class' => 'dropdown menu',
      				'fallback_cb'	 => '',
      				"walker"	 => new Drop_Menu_Walker(),
      			)
      		); ?>

          </ul>
        </div>

        <div class="mobile-nav">
          <div class="mobile-icon">&#9776;</div>

          <?php wp_nav_menu(
      			array(
      				'theme_location' => 'main',
      				'container'	 => 'ul',
              'menu_class' => 'mobile-menu'
      			)
      		); ?>

          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <?php wp_head() ?>
