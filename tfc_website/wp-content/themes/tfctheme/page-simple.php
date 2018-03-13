<?php
/**
 * Template Name: Einfach
 *
 * @package WordPress
 * @subpackage TFC
 * @since TFC 1.0
 */
?>


<?php get_header() ?>

  <div class="grid-container content">
      <div class="cell">
        <div class="cell small-12 medium-12 large-12">
        <?php the_field('inhalt'); ?>
        </div>
      </div>
  </div>

<?php get_footer() ?>
