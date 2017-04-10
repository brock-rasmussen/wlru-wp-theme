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
<meta name="theme-color" content="<?php echo get_theme_mod( 'wlru_theme_color', '#337ab7' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a id="skip-link" class="sr-only sr-only-focusable btn btn-default" href="#main"><?php esc_html_e( 'Skip to content', 'wlru' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="navbar <?php echo get_theme_mod( 'wlru_navbar_position', 'navbar-static-top') . ' ' . get_theme_mod( 'wlru_navbar_mode', 'navbar-default' ); ?>">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false">
						<span class="sr-only"><?php esc_html_e( 'Toggle Navigation', 'wlru' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php if ( get_header_image() ) : ?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ) ?>">
						</a>
					<?php endif;

					if ( display_header_text() ) : ?>
						<a class="site-title navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<p class="site-description navbar-text"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
				</div><!-- .navbar-header -->

				<nav id="site-navigation" class="main-navigation collapse navbar-collapse">
					<?php
					if ( has_nav_menu('primary') ) {
						wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'depth'						=> 2,
							'container'				=> FALSE,
							'menu_class'			=> 'nav navbar-nav',
							'fallback_cb'			=> 'wp_bootstrap_navwalker::fallback',
							'walker'					=> new wp_bootstrap_navwalker(),
						) );
					} ?>
				</nav>
			</div><!-- .container-fluid -->
		</div><!-- .navbar -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
