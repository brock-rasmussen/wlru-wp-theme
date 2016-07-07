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
function hex2hsl( $hex, $lightness = 0 ) {
	$hex = str_split( str_replace( '#', '', $hex ), 2 );

	$r = hexdec( $hex[0] ) / 255;
	$g = hexdec( $hex[1] ) / 255;
	$b = hexdec( $hex[2] ) / 255;

	$max = max( $r, $g, $b );
	$min = min( $r, $g, $b );
	$chroma = $max - $min;

	$l = ( $max + $min ) / 2;

	if ( $chroma == 0 ) {
		$h = 0;
		$s = 0;
	} else {
		$s = $chroma / ( 1 - abs( 2 * $l - 1 ) );

		switch ( $max ) {
			case $r:
				$h = 60 * fmod( ( ( $g - $b ) / $chroma ), 6 );
				if ( $b > $g ) $h += 360;
				break;
			case $g:
				$h = 60 * ( ( $b - $r ) / $chroma + 2 );
				break;
			case $b:
				$h = 60 * ( ( $r - $g ) / $chroma + 4 );
				break;
		}
	}
	return 'hsl(' . round( $h, 2 ) . ', ' . ( round( $s, 2 ) * 100 ) . '%, ' . ( ( round( $l, 2 ) * 100 ) + $lightness ) . '%)';
}

function wlru_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->remove_control( 'header_textcolor' );
}
add_action( 'customize_register', 'wlru_customize_register' );

require get_template_directory() . '/inc/customizer/colors.php';
require get_template_directory() . '/inc/customizer/scaffolding.php';
require get_template_directory() . '/inc/customizer/typography.php';
require get_template_directory() . '/inc/customizer/buttons.php';
require get_template_directory() . '/inc/customizer/navbar.php';
require get_template_directory() . '/inc/customizer/panels.php';
require get_template_directory() . '/inc/customizer/slider.php';

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wlru_customize_preview_js() {
	wp_enqueue_script( 'wlru_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wlru_customize_preview_js' );
