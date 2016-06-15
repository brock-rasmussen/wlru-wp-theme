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

		/* typography */
		body { font-family: <?php echo get_theme_mod( 'font_family_base', '"Open Sans", sans-serif' ); ?>; }

		h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 { font-family: <?php echo get_theme_mod( 'headings_font_family', '"Roboto Slab", serif' ); ?>; font-weight: <?php echo get_theme_mod( 'headings_font_weight', '400' ); ?>; }
		</style>
  <?php
}
add_action( 'wp_head', 'wlru_customize_css');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wlru_customize_preview_js() {
	wp_enqueue_script( 'wlru_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wlru_customize_preview_js' );
