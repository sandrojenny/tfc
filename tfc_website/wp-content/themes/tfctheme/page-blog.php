<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @package WordPress
 * @subpackage TFC
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

<?php get_footer() ?>
