<?php
/**
 * wlru Theme Customizer.
 *
 * @package wlru
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wlru_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	require get_template_directory() . '/inc/customizer/colors.php';
	require get_template_directory() . '/inc/customizer/typography.php';
	require get_template_directory() . '/inc/customizer/slider.php';
}
add_action( 'customize_register', 'wlru_customize_register' );

function wlru_customize_css() {
  ?>
		<style type="text/css">
		#slider .jumbotron { min-height: <?php echo get_theme_mod( 'slide_min_height', '50vh' ); ?>; }

		/* body-bg */
		<?php $body_bg = get_background_color(); ?>
		.table .table { background-color: <?php echo $body_bg; ?>; }

		/* text-color */
		<?php $text_color = get_theme_mod( 'text_color', '#555' ); ?>
		body,
		.thumbnail .caption { color: <?php echo $text_color; ?>; }
		/* lighten 25% */
		.help-block { color: ; }

		/* link-color */
		<?php $link_color = get_theme_mod( 'link-color', '#337ab7' ); ?>
		a, .btn-link,
		.pagination > li > a,
		.pagination > li > span,
		.list-group-item.active > .badge,
		.nav-pills > .active > a > .badge { color: <?php echo $link_color; ?>; }
		.open > a,
		.open > a:hover,
		.open > a:focus,
		a.thumbnail:hover,
		a.thumbnail:focus,
		a.thumbnail.active { border-color: <?php echo $link_color; ?>; }
		/* darken 15% */
		a:hover,
		a:focus,
		.btn-link:hover,
		.btn-link:focus,
		.pagination > li > a:hover,
		.pagination > li > a:focus,
		.pagination > li > span:hover,
		.pagination > li > span:focus { color: ; }

		/* font-family-base */
		<?php $font_family_base = get_theme_mod( 'font_family_base', '"Open Sans", sans-serif' ); ?>
		body,
		.tooltip,
		.popover { font-family: <?php echo $font_family_base; ?>; }

		/* headings_color */
		/* headings-font-family */
		/* headings-font-weight */
		<?
		$headings_color = get_theme_mod( 'headings_color', '#555' );
		$headings_font_family = get_theme_mod( 'headings_font_family', '"Roboto Slab", serif' );
		$headings_font_weight = get_theme_mod( 'headings_font_weight', '400' );
		?>
		h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
			color: <?php echo $headings_color; ?>;
			font-family: <?php echo $headings_font_family; ?>;
			font-weight: <?php echo $headings_font_weight; ?>;
		}

		/* btn-default-color */
		<?php $btn_default_color = get_theme_mod( 'btn_default_color', '#333' ); ?>
		.btn-default,
		.btn-default:focus,
		.btn-default.focus,
		.btn-default:hover,
		.btn-default:active,
		.btn-default.active,
		.open > .btn-default.dropdown-toggle,
		.btn-default:active:hover,
		.btn-default.active:hover,
		.open > .btn-default.dropdown-toggle:hover,
		.btn-default:active:focus,
		.btn-default.active:focus,
		.open > .btn-default.dropdown-toggle:focus,
		.btn-default:active.focus,
		.btn-default.active.focus,
		.open > .btn-default.dropdown-toggle.focus { color: <?php echo $btn_default_color; ?>; }
		.btn-default .badge { background-color: <?php echo $btn_default_color; ?>; }

		/* btn-default-bg */
		<?php $btn_default_bg = get_theme_mod( 'btn_default_bg', '#fff' ); ?>
		.btn-default,
		.btn-default.disabled:hover,
		.btn-default[disabled]:hover,
		fieldset[disabled] .btn-default:hover,
		.btn-default.disabled:focus,
		.btn-default[disabled]:focus,
		fieldset[disabled] .btn-default:focus,
		.btn-default.disabled.focus,
		.btn-default[disabled].focus,
		fieldset[disabled] .btn-default.focus { background-color: <?php echo $btn_default_bg; ?>; }
		.btn-default .badge { color: <?php echo $btn_default_bg; ?>; }
		/* darken 10% */
		.btn-default:focus,
		.btn-default.focus,
		.btn-default:hover,
		.btn-default:active,
		.btn-default.active,
		.open > .btn-default.dropdown-toggle { background-color: ; }
		/* darken 17% */
		.btn-default:active:hover,
		.btn-default.active:hover,
		.open > .btn-default.dropdown-toggle:hover,
		.btn-default:active:focus,
		.btn-default.active:focus,
		.open > .btn-default.dropdown-toggle:focus,
		.btn-default:active.focus,
		.btn-default.active.focus,
		.open > .btn-default.dropdown-toggle.focus { background-color: ; }

		/* btn-default-border */
		<?php $btn_default_border = get_theme_mod( 'btn_default_border', '#ccc' ); ?>
		.btn-default,
		.btn-default.disabled:hover,
		.btn-default[disabled]:hover,
		fieldset[disabled] .btn-default:hover,
		.btn-default.disabled:focus,
		.btn-default[disabled]:focus,
		fieldset[disabled] .btn-default:focus,
		.btn-default.disabled.focus,
		.btn-default[disabled].focus,
		fieldset[disabled] .btn-default.focus,
		{ border-color: <?php echo $btn_default_border; ?>; }
		/* darken 25% */
		.btn-default:focus,
		.btn-default.focus,
		.btn-default:active,
		.btn-default.active,
		.open > .btn-default.dropdown-toggle
		{ border-color: ; }
		/* darken 12% */
		.btn-default:hover,
		.btn-default:active:hover,
		.btn-default.active:hover,
		.open > .btn-default.dropdown-toggle:hover,
		.btn-default:active:focus,
		.btn-default.active:focus,
		.open > .btn-default.dropdown-toggle:focus,
		.btn-default:active.focus,
		.btn-default.active.focus,
		.open > .btn-default.dropdown-toggle.focus,
		{ border-color: ; }

		/* navbar-height */
		<?php $navbar_height = get_theme_mod( 'navbar_height', 50 ); ?>
		.navbar { min-height: <?php echo $navbar_height; ?>px; }
		.navbar-brand { height: <?php echo $navbar_height; ?>px; }
		/* navbar-padding-vertical */
		<?php $navbar_padding_vertical = get_theme_mod('navbar_height', 50 ) -  floor( get_theme_mod( 'font_size_base', 14 ) * 1.428571429 ); ?>
		.navbar-brand {
			padding-top: <?php echo $navbar_padding_vertical; ?>px;
			padding-bottom: <?php echo $navbar_padding_vertical; ?>px;
		}
		.navbar-nav {
			margin-top: <?php echo $navbar_padding_vertical / 2; ?>px;
			margin-bottom: <?php echo $navbar_padding_vertical / 2; ?>px;
		}
		@media (min-width: 768px) {
			.navbar-nav > li > a {
				padding-top: <?php echo $navbar_padding_vertical; ?>px;
				padding-bottom: <?php echo $navbar_padding_vertical; ?>px;
			}
		}

		<?php
		$navbar_mode = get_theme_mod( 'navbar_mode', 'navbar-default' );
		switch( $navbar_mode ) {
			case 'navbar-inverse':
				$navbar_color = get_theme_mod( 'navbar_inverse_color', '' );
				$navbar_bg = get_theme_mod( 'navbar_inverse_bg', '' );

				$navbar_border = ; // darken navbar_bg 6.5%
				$navbar_link_active_bg = ; // darken navbar_bg 6.5%

				$navbar_link_color = ; // lighten gray_light 15% (should have a theme_mod)
				$navbar_link_hover_color = get_theme_mod( 'navbar_inverse_link_hover_color', '#fff' );
				$navbar_link_active_color = get_theme_mod( 'navbar_inverse_link_active_color', '#fff' );

				$navbar_toggle_hover_bg = get_theme_mod( 'navbar_inverse_toggle_hover_bg', '#333' );
				$navbar_toggle_icon_bar_bg = get_theme_mod( 'navbar_inverse_toggle_icon_bar_bg', '' );
				$navbar_toggle_border_color = get_theme_mod( 'navbar_inverse_toggle_border_color', '' );
				break;
			default:
				$navbar_color = get_theme_mod( 'navbar_default_color', '#777' );
				$navbar_bg = get_theme_mod( 'navbar_default_bg', '' );

				$navbar_border = ; // darken navbar_bg 10%
				$navbar_link_active_bg = ; // darken navbar_bg 10%

				$navbar_link_color = get_theme_mod( 'navbar_default_link_color', '#777' );
				$navbar_link_hover_color = get_theme_mod( 'navbar_default_link_hover_color', '#333' );
				$navbar_link_active_color = get_theme_mod( 'navbar_default_link_active_color', '#555' );

				$navbar_toggle_hover_bg = get_theme_mod( 'navbar_default_toggle_hover_bg', '' );
				$navbar_toggle_icon_bar_bg = get_theme_mod( 'navbar_default_toggle_icon_bar_bg', '' );
				$navbar_toggle_border_color = get_theme_mod( 'navbar_default_toggle_border_color', '' );
				break;
		}
		?>
		.<?php echo $navbar_mode; ?> {
			background-color: <?php echo $navbar_bg; ?>;
		}

		.<?php echo $navbar_mode; ?> .navbar-text {
			color: <?php echo $navbar_color; ?>;
		}

		.<?php echo $navbar_mode; ?> .navbar-nav > li > a,
		.<?php echo $navbar_mode; ?> .navbar-link,
		.<?php echo $navbar_mode; ?> .btn-link {
			color: <?php echo $navbar_link_color; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-nav > li > a:hover,
		.<?php echo $navbar_mode; ?> .navbar-nav > li > a:focus,
		.<?php echo $navbar_mode; ?> .navbar-link:hover,
		.<?php echo $navbar_mode; ?> .navbar-link:focus,
		.<?php echo $navbar_mode; ?> .btn-link:hover,
		.<?php echo $navbar_mode; ?> .btn-link:focus {
			color: <?php echo $navbar_link_hover_color; ?>;
		}
		@media (max-width: 767px) {
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > li > a {
				color: <?php echo $navbar_link_color; ?>;
			}
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > li > a:hover,
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > li > a:hover {
				color: <?php echo $navbar_link_hover_color; ?>
			}
		}




		/* gray darker */
		.navbar-inverse { background-color: <?php echo get_theme_mod( 'gray_darker', '#222' ); ?>; }

		/* gray dark */
		body, pre, legend, .btn:hover, .btn:focus, .btn.focus, .btn-default, .btn-default:focus, .btn-default.focus, .btn-default:hover, .btn-default:active, .btn-default.active, .btn-default:active:hover, .btn-default.active:hover, .open > .dropdown-toggle.btn-default:hover, .btn-default:active:focus, .btn-default.active:focus, .open > .dropdown-toggle.btn-default:focus, .btn-default:active.focus, .btn-default.active.focus, .open > .dropdown-toggle.btn-default.focus, .dropdown-menu > li > a, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-link:hover, .navbar-default .btn-link:hover, .navbar-default .btn-link:focus, .thumbnail .caption, a.list-group-item .list-group-item-heading, button.list-group-item .list-group-item-heading, .panel-default > .panel-heading, .entry-meta a, .slick-prev:before, .slick-next:before, .slick-dots li button:before, .slick-dots li.slick-active button:before, #commentform #submit, #commentform #submit:hover { color: <?php echo get_theme_mod( 'gray_dark', '#333' ); ?>; }
		@media (max-width: 767px) {
			.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus { color: <?php echo get_theme_mod( 'gray_dark', '#333' ); ?>; }
		}

		kbd, .btn-default .badge, .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus, .panel-default > .panel-heading .badge { background-color: <?php echo get_theme_mod( 'gray_dark', '#333' ); ?>; }

		.navbar-inverse .navbar-toggle { border-color: <?php echo get_theme_mod( 'gray_dark', '#333' ); ?>; }

		/* gray */
		output, .form-control, .input-group-addon, .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, a.list-group-item, button.list-group-item, a.list-group-item:hover, button.list-group-item:hover, a.list-group-item:focus, button.list-group-item:focus { color: <?php echo get_theme_mod( 'gray', '#555' ); ?>; }

		@media (max-width: 767px) {
			.navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus { color: <?php echo get_theme_mod( 'gray', '#555' ); ?>; }
		}

		/* gray light */
		h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .h1 small, .h2 small, .h3 small, .h4 small, .h5 small, .h6 small, h1 .small, h2 .small, h3 .small, h4 .small, h5 .small, h6 .small, .h1 .small, .h2 .small, .h3 .small, .h4 .small, .h5 .small, .h6 .small, .text-muted, blockquote footer, blockquote small, blockquote .small, caption, .btn-link[disabled]:hover, fieldset[disabled] .btn-link:hover, .btn-link[disabled]:focus, fieldset[disabled] .btn-link:focus, .dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus, .dropdown-header, .nav > li.disabled > a, .nav > li.disabled > a:hover, .nav > li.disabled > a:focus, .navbar-default .navbar-brand, .navbar-default .navbar-text, .navbar-default .navbar-nav > li > a, .navbar-default .navbar-link, .navbar-default .btn-link, .breadcrumb > .active, .pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus, .pager .disabled > a, .pager .disabled > a:hover, .pager .disabled > a:focus, .pager .disabled > span, .label-default, .badge, .list-group-item.disabled, .list-group-item.disabled:hover, .list-group-item.disabled:focus, .list-group-item.disabled .list-group-item-text, .list-group-item.disabled:hover .list-group-item-text, .list-group-item.disabled:focus .list-group-item-text, .entry-meta .fa { color: <?php echo get_theme_mod( 'gray_light', '#777' ); ?>; }

		@media (max-width: 767px) {
			.navbar-default .navbar-nav .open .dropdown-menu > li > a { color: <?php echo get_theme_mod( 'gray_light', '#777' ); ?>; }
		}

		abbr[title], abbr[data-original-title] { border-color: <?php echo get_theme_mod( 'gray_light', '#777' ); ?>; }

		/* gray lighter */
		.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control, .input-group-addon, .nav > li > a:hover, .nav > li > a:focus, .nav .open > a, .nav .open > a:hover, .nav .open > a:focus, .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus, .pager li > a:hover, .pager li > a:focus, .jumbotron, .list-group-item.disabled, .list-group-item.disabled:hover, .list-group-item.disabled:focus { background-color: <?php echo get_theme_mod( 'gray_lighter', '#eee' ); ?>; }

		hr, .page-header, blockquote, .blockquote-reverse, blockquote.pull-right, { border-color: <?php echo get_theme_mod( 'gray_lighter', '#eee' ); ?>; }

		.nav-tabs > li > a:hover { border-top-color: <?php echo get_theme_mod( 'gray_lighter', '#eee' ); ?>; border-right-color: <?php echo get_theme_mod( 'gray_lighter', '#eee' ); ?>; border-left-color: <?php echo get_theme_mod( 'gray_lighter', '#eee' ); ?>; }

		/* */

		/* brand primary */
		a, .text-primary, .btn-primary .badge, .btn-link, .pagination > li > a, .pagination > li > span, .list-group-item.active > .badge, .nav-pills > .active > a > .badge, .panel-primary > .panel-heading .badge { color: <?php echo get_theme_mod( 'brand_primary', '#337ab7' ); ?>; }

		.bg-primary, .btn-primary, .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled.focus, .btn-primary[disabled].focus, fieldset[disabled] .btn-primary.focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active, .dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, .label-primary, .progress-bar, .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus, .panel-primary > .panel-heading { background-color: <?php echo get_theme_mod( 'brand_primary', '#337ab7' ); ?>; }

		.nav .open > a, .nav .open > a:hover, .nav .open > a:focus, .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, a.thumbnail:hover, a.thumbnail:focus, a.thumbnail.active, .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus, .panel-primary, .panel-primary > .panel-heading, .panel-primary > .panel-heading + .panel-collapse > .panel-body, .panel-primary > .panel-footer + .panel-collapse > .panel-body { border-color: <?php echo get_theme_mod( 'brand_primary', '#337ab7' ); ?>; }

		/* brand success */
		.btn-success .badge { color: <?php echo get_theme_mod( 'brand_success', '#5cb85c' ); ?>; }

		.btn-success, .btn-success.disabled, .btn-success[disabled], fieldset[disabled] .btn-success, .btn-success.disabled:hover, .btn-success[disabled]:hover, fieldset[disabled] .btn-success:hover, .btn-success.disabled:focus, .btn-success[disabled]:focus, fieldset[disabled] .btn-success:focus, .btn-success.disabled.focus, .btn-success[disabled].focus, fieldset[disabled] .btn-success.focus, .btn-success.disabled:active, .btn-success[disabled]:active, fieldset[disabled] .btn-success:active, .btn-success.disabled.active, .btn-success[disabled].active, fieldset[disabled] .btn-success.active, .label-success, .progress-bar-success { background-color: <?php echo get_theme_mod( 'brand_success', '#5cb85c' ); ?>; }

		/* brand info */
		.btn-info .badge { color: <?php echo get_theme_mod( 'brand_info', '#5bc0de' ); ?>; }

		.btn-info, .btn-info.disabled, .btn-info[disabled], fieldset[disabled] .btn-info, .btn-info.disabled:hover, .btn-info[disabled]:hover, fieldset[disabled] .btn-info:hover, .btn-info.disabled:focus, .btn-info[disabled]:focus, fieldset[disabled] .btn-info:focus, .btn-info.disabled.focus, .btn-info[disabled].focus, fieldset[disabled] .btn-info.focus, .btn-info.disabled:active, .btn-info[disabled]:active, fieldset[disabled] .btn-info:active, .btn-info.disabled.active, .btn-info[disabled].active, fieldset[disabled] .btn-info.active, .label-info, .progress-bar-info { background-color: <?php echo get_theme_mod( 'brand_info', '#5bc0de' ); ?>; }

		/* brand warning */
		.btn-warning .badge { color: <?php echo get_theme_mod( 'brand_warning', '#f0ad4e' ); ?>; }

		.btn-warning, .btn-warning.disabled, .btn-warning[disabled], fieldset[disabled] .btn-warning, .btn-warning.disabled:hover, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning:hover, .btn-warning.disabled:focus, .btn-warning[disabled]:focus, fieldset[disabled] .btn-warning:focus, .btn-warning.disabled.focus, .btn-warning[disabled].focus, fieldset[disabled] .btn-warning.focus, .btn-warning.disabled:active, .btn-warning[disabled]:active, fieldset[disabled] .btn-warning:active, .btn-warning.disabled.active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning.active, .label-warning, .progress-bar-warning { background-color: <?php echo get_theme_mod( 'brand_warning', '#f0ad4e' ); ?>; }

		/* brand danger */
		.btn-danger .badge { color: <?php echo get_theme_mod( 'brand_danger', '#d9534f' ); ?>; }

		.btn-danger, .btn-danger.disabled, .btn-danger[disabled], fieldset[disabled] .btn-danger, .btn-danger.disabled:hover, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger:hover, .btn-danger.disabled:focus, .btn-danger[disabled]:focus, fieldset[disabled] .btn-danger:focus, .btn-danger.disabled.focus, .btn-danger[disabled].focus, fieldset[disabled] .btn-danger.focus, .btn-danger.disabled:active, .btn-danger[disabled]:active, fieldset[disabled] .btn-danger:active, .btn-danger.disabled.active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger.active, .label-danger, .progress-bar-danger { background-color: <?php echo get_theme_mod( 'brand_danger', '#d9534f' ); ?>; }

		/* DARKEN */
		/* gray darker */
		.navbar-collapse, .navbar-form { border-color: <?php echo get_theme_mod( 'gray_darker', '#222' ); // '7%' ?>; }

		/* gray dark */

		/* gray */

		/* gray light */

		/* gray lighter */
		.jumbotron > hr { <?php echo get_theme_mod( 'gray_lighter', '#eee' ); // '10%' ?>; }
		</style>
  <?php
}
add_action( 'wp_head', 'wlru_customize_css');

function wlru_slider() {
	if ( is_front_page() ) {
		$slide_arrows				= get_theme_mod( 'slide_arrows', true ) ? 'true' : 'false';
		$slide_autoplay			= get_theme_mod( 'slide_autoplay', false ) ? 'true' : 'false';
		$slide_autoplayspeed	= get_theme_mod( 'slide_autoplayspeed', 3000 );
		$slide_dots					= get_theme_mod( 'slide_dots', false ) ? 'true' : 'false';
		$slide_fade					= get_theme_mod( 'slide_fade', false ) ? 'true' : 'false';
		$slide_speed					= get_theme_mod( 'slide_speed', 300 );
		$slide_responsive		= get_theme_mod( 'slide_responsive', '' );

		$script = join( array(
			'<script>',
				'jQuery(document).ready(function() {',
					'jQuery( \'#slider\').slick({',
						'arrows: ' . $slide_arrows . ',',
						'autoplay: ' . $slide_autoplay . ',',
						'autoplaySpeed: ' . $slide_autoplayspeed . ',',
						'dots: ' . $slide_dots . ',',
						'fade: ' . $slide_fade . ',',
						'speed: ' . $slide_speed . ',',
						'responsive: [' . $slide_responsive . ']',
					'});',
				'});',
			'</script>',
		) );

		echo $script;
	}
}
add_action( 'wp_footer', 'wlru_slider', 30 );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wlru_customize_preview_js() {
	wp_enqueue_script( 'wlru_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wlru_customize_preview_js' );
