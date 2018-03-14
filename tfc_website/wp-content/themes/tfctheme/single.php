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

  <div class="grid-container blog-single">
    <div class="grid-x">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="blog-content small-12 medium-12 large-12">
            <div class="blog-image">
              <?php the_post_thumbnail() ?>
            </div>
            <div class="infos">
              <p>Datum: <?php the_date() ?> / <?php the_author() ?></p>
            </div>
            <h1><?php the_title(); ?></h1>
            <div class="entry">
              <?php the_content(); ?>
            </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>

<?php get_footer() ?>
