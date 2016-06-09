<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wlru
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-9">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

							wlru_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div><!-- .col-xs-12 .col-md-9 -->
					<div class="col-xs-12 col-md-3">
						<?php get_sidebar(); ?>
					</div><!-- .col-xs-12 .col-md-3 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
