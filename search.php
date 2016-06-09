<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wlru
 */

get_header();

$search_sidebar = is_active_sidebar( 'sidebar-search' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12<?php if ( $search_sidebar ) { echo ' col-md-9'; }; ?>">

						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wlru' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->

							<?php get_search_form(); ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							wlru_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</div><!-- .col-xs-12 .col-md-9 -->
					<?php if ( $search_sidebar ) : ?>
						<div class="col-xs-12 col-md-3">
							<aside id="secondary-search" class="widget-area" role="complementary">
								<?php dynamic_sidebar( 'sidebar-search' ); ?>
							</aside><!-- #secondary-search -->
						</div><!-- .col-xs-12 .col-md-3 -->
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
