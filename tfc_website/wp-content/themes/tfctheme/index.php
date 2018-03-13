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
      <div class="medium-5 cell">
        <a href="#"><div class="logo"></div></a>
      </div>
      <div class="medium-7 cell">
        <div class="navigation">
          <ul class="menu align-right">
            <li><a href="#">Agentur</a></li>
            <li><a href="#">Angebot</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="grid-container-fluid">
    <div class="grid-x">
      <div class="cell">
        <div class="heroSection">
          <?php
          $image = get_field('hauptbild');
          if( !empty($image) ): ?>
          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="grid-container-fluid">
    <div class="grid-x">
      <div class="cell">
        <?php
          // vars
          $intro = get_field('intro');

          if( $intro ): ?>
            <div class="intro">
              <div class="grid-container">
                <div class="cell small-12 medium-12 large-12">
                	<h1><?php echo $intro['titel']; ?></h1>
                  <p><?php echo $intro['text']; ?></p>
                </div>
              </div>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="grid-container content">
    <h2>Aktuelles aus dem Blog</h2>

    <?php if (is_page('10')) { // ID der gewünschten Seite ?>
      <?php
      global $post;
      $tmp_post = $post;
      $args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 1 );
      $myposts = get_posts( $args ); ?>

      <div class="grid-x grid-margin-x">
      <?php foreach( $myposts as $post ) : setup_postdata($post); ?>
          <div class="small-12 medium-4 large-4 cell">
            <div class="card">
              <?php the_post_thumbnail() ?>
              <div class="card-section">
                    <?php the_title( sprintf( '<p class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
              </div>
            </div>
          </div>
      <?php endforeach; ?>
      <?php  $post = $tmp_post; ?>
    <?php } // end of is_page ?>
    </div>
  </div>

  <div class="grid-container-fluid">
    <div class="grid-x">
      <div class="cell">
        <div class="footer">
          <div class="grid-container">
            <div class="grid-x">
              <div class="cell medium-9">
                <p><b>The Fundraising Company Fribourg AG</b> – solutions to success</p>
                <p>Route du Grand-Pré 26, 1700 Fribourg</p>
                <p>T +41 (0)26 426 00 60  |  <a href="mailto:office@fundraising-company.ch">office (at) fundraising-company.ch</a></p>
              </div>
              <div class="cell medium-3">
                <ul class="footermenu">
                  <li>Allgemeine Geschäftsbedinungen</li>
                  <li>Impressum</li>
                  <li>Datenschutzerklärung</li>
                  <li>Kontakt</li>
                  <li>Newsletter abonnieren</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="<?php bloginfo('template_directory'); ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/node_modules/what-input/dist/what-input.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/node_modules/foundation-sites/dist/js/foundation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
  </body>
</html>
