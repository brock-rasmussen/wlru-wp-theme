<?php
/**
 * The template for the front page (whether a static page or the blog).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wlru
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div id="slider">
        <?php
        $wlru_slide_qty = 5;
        for ( $i = 1; $i <= $wlru_slide_qty; $i++ ) {
          if ( get_theme_mod( 'slide_' . $i . '_display' ) ) : ?>
            <div class="jumbotron <?php echo get_theme_mod( 'slide_' . $i . '_focal_point', 'center-center' ); ?>"<?php if ( get_theme_mod( 'slide_' . $i . '_image', '' ) ) {
              echo ' style="background-image: url(' . esc_url_raw( set_url_scheme( get_theme_mod( 'slide_' . $i . '_image', '' ) ) ) . ');"';
            } ?>>
              <div class="jumbotron-overlay">
                <?php if ( get_theme_mod( 'slide_' . $i . '_heading', '' ) ) : ?>
                  <h1><?php echo get_theme_mod( 'slide_' . $i . '_heading', '' ); ?></h1>
                <?php endif; ?>
                <?php if ( get_theme_mod( 'slide_' . $i . '_text' ) ) : ?>
                  <p><?php echo get_theme_mod( 'slide_' . $i . '_text', '' ); ?></p>
                <?php endif; ?>
                <?php if ( get_theme_mod( 'slide_' . $i . '_button_link', '' ) && get_theme_mod( 'slide_' . $i . '_button_text', '' ) ) : ?>
                  <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod( 'slide_' . $i . '_button_link' , '' ); ?>" role="button"><?php echo get_theme_mod( 'slide_' . $i . '_button_text', '' ); ?></a></p>
                <?php endif ?>
              </div>
            </div>
          <?php endif;
        }
        ?>
      </div><!-- #slider -->

			<div class="container-fluid">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- .container-fluid -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
