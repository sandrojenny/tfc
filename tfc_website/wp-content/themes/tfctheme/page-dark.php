<?php
/**
 * Template Name: Dark Gray Intro
 *
 * @package WordPress
 * @subpackage TFC
 * @since TFC 1.0
 */
?>

<?php get_header() ?>

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
            <div class="intro dark">
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
      <div class="cell">
        <div class="cell small-12 medium-12 large-12">
        <?php the_field('inhalt'); ?>
        </div>
      </div>
  </div>

<?php get_footer() ?>
