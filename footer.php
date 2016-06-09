<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wlru
 */

$footer_areas = 0;

$footer_area_1 = false;
$footer_area_2 = false;
$footer_area_3 = false;
$footer_area_4 = false;

$footer_area_classes = "";

if ( is_active_sidebar( 'footer-area' ) ) {
	$footer_areas++;
	$footer_area_1 = true;
}
if ( is_active_sidebar( 'footer-area-2' ) ) {
	$footer_areas++;
	$footer_area_2 = true;
}
if ( is_active_sidebar( 'footer-area-3' ) ) {
	$footer_areas++;
	$footer_area_3 = true;
}
if ( is_active_sidebar( 'footer-area-4' ) ) {
	$footer_areas++;
	$footer_area_4 = true;
}

switch ( $footer_areas ) {
	case 4:
		$footer_area_classes = "col-xs-6 col-md-3";
		break;
	case 3:
		$footer_area_classes = "col-xs-6 col-sm-4";
		break;
	case 2:
		$footer_area_classes = "col-xs-6";
		break;
	case 1:
		$footer_area_classes = "col-xs-12";
		break;
}
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">

			<div class="row">
				<?php if ( $footer_area_1 ) : ?>
					<div class="<?php echo $footer_area_classes; ?>">
						<aside id="secondary-search" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-area' ); ?>
						</aside><!-- #secondary-search -->
					</div>
				<?php endif;

				if ( $footer_area_2 ) : ?>
					<div class="<?php echo $footer_area_classes; ?>">
						<aside id="secondary-search" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-area-2' ); ?>
						</aside><!-- #secondary-search -->
					</div>
				<?php endif;

				if ( $footer_area_3 ) : ?>
					<div class="<?php echo $footer_area_classes; ?>">
						<aside id="secondary-search" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-area-3' ); ?>
						</aside><!-- #secondary-search -->
					</div>
				<?php endif;

				if ( $footer_area_4 ) : ?>
					<div class="<?php echo $footer_area_classes; ?>">
						<aside id="secondary-search" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-area-4' ); ?>
						</aside><!-- #secondary-search -->
					</div>
				<?php endif; ?>
			</div><!-- .row -->

			<div class="row">
				<div class="col-xs-12">
					<p class="text-center">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
				</div>
			</div><!-- .row -->

		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
