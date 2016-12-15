<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wlru
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php echo wp_kses( get_theme_mod( 'google_fonts_link', '<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Roboto+Slab" rel="stylesheet">' ), array( 'link' => array( 'href' => array(), 'rel' => array() ) ) ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only sr-only-focusable btn btn-default" href="#main"><?php esc_html_e( 'Skip to content', 'wlru' ); ?></a>

	<header id="masthead" role="banner">
		<div class="navbar navbar-static-top <?php echo get_theme_mod( 'wlru_navbar_mode', 'navbar-default' ); ?>">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false">
						<span class="sr-only"><?php esc_html_e( 'Toggle Navigation', 'wlru' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php if ( get_header_image() ) : ?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
						</a>
					<?php endif; ?>
					<a class="navbar-brand site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div><!-- .navbar-header -->

				<nav id="site-navigation" class="collapse navbar-collapse" role="navigation">
					<?php
					// get_search_form();
					$nav_args = array(
						'theme_location'	=> 'primary',
						'depth'						=> 2,
						'container'				=> false,
						'menu_class'			=> 'nav navbar-nav navbar-right',
						'fallback_cb'			=> 'wp_bootstrap_navwalker::fallback',
						'walker'					=> new wp_bootstrap_navwalker(),
					);

					if ( has_nav_menu('primary') ) {
						wp_nav_menu( $nav_args );
					} ?>
				</nav><!-- #site-navigation -->
			</div><!-- .container -->
		</div><!-- .navbar -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
