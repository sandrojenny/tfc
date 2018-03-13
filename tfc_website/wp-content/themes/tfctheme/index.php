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

  <div class="grid-container blog">
    <div class="grid-x">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="blog-image small-12 medium-12 large-5">
          <?php the_post_thumbnail() ?>
        </div>
        <div class="blog-content small-12 medium-12 large-7">
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
              <?php the_excerpt(); ?>
            </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <p><?php next_posts_link('&laquo; Old Posts') ?> |
          <?php previous_posts_link('New Posts &raquo;') ?></p>
    </div>
  </div>

<?php get_footer() ?>
