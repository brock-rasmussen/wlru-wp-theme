<?php
/**
 * Template Name: Content
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/#creating-custom-page-templates-for-global-use
 *
 * @package wlru
 */

get_header(); ?>

  <div id="primary" class="content-area">
  	<main id="main" class="site-main" role="main">
      <div class="container">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

      </div><!-- .container -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
