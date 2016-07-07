<?php
/**
 * wlru Theme Slider Customizer.
 *
 * @package wlru
 */
function wlru_slider_customize_register( $wp_customize ) {
  $wlru_slider_qty = 5;

  $wp_customize->add_panel( 'wlru_slider', array(
    'title'           => __( 'Slider', 'wlru' ),
  ) );

  // Slide settings
  $wp_customize->add_section( 'wlru_slider_settings', array(
    'title'           => __( 'Slider Settings', 'wlru' ),
    'panel'           => 'wlru_slider',
  ) );

  $wp_customize->add_setting( 'wlru_slider_min_height', array( 'default' => '50vh' ) );
  $wp_customize->add_control( 'wlru_slider_min_height', array(
    'label'           => __( 'Minimum Height', 'wlru' ),
    'description'     => __( 'Specify the minimum height <a href="http://www.w3schools.com/cssref/css_units.asp">unit</a> (i.e. px, vh, em, etc.)', 'wlru' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_min_height',
    'type'            => 'text',
  ) );

  $wp_customize->add_setting( 'wlru_slider_arrows', array( 'default' => true ) );
  $wp_customize->add_control( 'wlru_slider_arrows', array(
    'label'           => __( 'Arrows', 'wlru' ),
    'description'     => __( 'Check to show arrow navigation', 'wlru' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_arrows',
    'type'            => 'checkbox',
  ) );

  $wp_customize->add_setting( 'wlru_slider_autoplay', array( 'default' => false ) );
  $wp_customize->add_control( 'wlru_slider_autoplay', array(
    'label'           => __( 'Autoplay', 'wlru' ),
    'description'     => __( 'Check to enable autoplay', 'wlru' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_autoplay',
    'type'            => 'checkbox',
  ) );

  $wp_customize->add_setting( 'wlru_slider_autoplayspeed', array( 'default' => 3000 ) );
  $wp_customize->add_control( 'wlru_slider_autoplayspeed', array(
    'label'           => __( 'Autplay Speed', 'wlru' ),
    'description'     => __( 'Autoplay speed in milliseconds', 'wlru' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_autoplayspeed',
    'type'            => 'number',
    'active_callback' => 'wlru_slider_autoplay',
  ) );

  $wp_customize->add_setting( 'wlru_slider_dots', array( 'default' => false ) );
  $wp_customize->add_control( 'wlru_slider_dots', array(
    'label'           => __( 'Dots', 'wlru' ),
    'description'     => __( 'Check to show dot navigation', 'wlru' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_dots',
    'type'            => 'checkbox',
  ) );

  $wp_customize->add_setting( 'wlru_slider_fade', array( 'default' => false ) );
  $wp_customize->add_control( 'wlru_slider_fade', array(
    'label'           => __( 'Fade', 'wlru' ),
    'description'     => __( 'Check to enable fade', 'wlru' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_fade',
    'type'            => 'checkbox',
  ) );

  $wp_customize->add_setting( 'wlru_slider_speed', array( 'default' => 300 ) );
  $wp_customize->add_control( 'wlru_slider_speed', array(
    'label'           => __( 'Speed', 'wlru' ),
    'description'     => __( 'Slide/fade animation speed in milliseconds', 'wlru' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_speed',
    'type'            => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_slider_responsive', array( 'default' => '' ) );
  $wp_customize->add_control( 'wlru_slider_responsive', array(
    'label'           => __( 'Responsive', 'wlru' ),
    'description'     => __( 'See <a href="http://kenwheeler.github.io/slick/">Slick Slider documentation</a> for examples on this setting. Do not include the containing <code>[]</code>.' ),
    'section'         => 'wlru_slider_settings',
    'settings'        => 'wlru_slider_responsive',
    'type'            => 'textarea',
  ) );

  // Make 5 slides
  for ( $i = 1; $i <= $wlru_slider_qty; $i++ ) {
    $wp_customize->add_section( 'wlru_slider_' . $i , array(
      'title'           => sprintf( __( 'Slide %d' , 'wlru' ), $i ),
      'panel'           => 'wlru_slider',
    ) );

    $wp_customize->add_setting( 'wlru_slider_' . $i . '_display', array( 'default' => false ) );
    $wp_customize->add_control( 'wlru_slider_' . $i . '_display', array(
      'label'           => __( 'Display', 'wlru' ),
      'section'         => 'wlru_slider_' . $i,
      'settings'        => 'wlru_slider_' . $i . '_display',
      'type'            => 'checkbox',
    ) );

    $wp_customize->add_setting( 'wlru_slider_' . $i . '_image', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wlru_slider_' . $i . '_image', array(
      'label'           => __( 'Image', 'wlru' ),
      'section'         => 'wlru_slider_' . $i,
      'settings'        => 'wlru_slider_'. $i . '_image',
      'active_callback' => 'wlru_slider_display',
    ) ) );

    $wp_customize->add_setting( 'wlru_slider_' . $i . '_focal_point', array( 'default' => 'center-center' ) );
    $wp_customize->add_control( 'wlru_slider_' . $i . '_focal_point', array(
      'label'           => __( 'Focal point', 'wlru' ),
      'section'         => 'wlru_slider_' . $i,
      'settings'        => 'wlru_slider_' . $i . '_focal_point',
      'type'            => 'select',
      'choices'         => array(
        'left-top'      => 'left top',
        'left-center'   => 'left center',
        'left-bottom'   => 'left bottom',
        'right-top'     => 'right top',
        'right-center'  => 'right center',
        'right-bottom'  => 'right bottom',
        'center-top'    => 'center top',
        'center-center' => 'center center',
        'center-bottom' => 'center bottom',
      ),
      'active_callback' => 'wlru_slider_display',
    ) );

    $wp_customize->add_setting( 'wlru_slider_' . $i . '_heading', array( 'default' => '' ) );
    $wp_customize->add_control( 'wlru_slider_' . $i . '_heading', array(
      'label'           => __( 'Heading', 'wlru' ),
      'section'         => 'wlru_slider_' . $i,
      'settings'        => 'wlru_slider_' . $i . '_heading',
      'active_callback' => 'wlru_slider_display',
    ) );

    $wp_customize->add_setting( 'wlru_slider_' . $i . '_text', array( 'default' => '' ) );
    $wp_customize->add_control( 'wlru_slider_' . $i . '_text', array(
      'label'           => __( 'Text', 'wlru' ),
      'section'         => 'wlru_slider_' . $i,
      'settings'        => 'wlru_slider_' . $i . '_text',
      'type'            => 'textarea',
      'active_callback' => 'wlru_slider_display',
    ) );

    $wp_customize->add_setting( 'wlru_slider_' . $i . '_button_text', array( 'default' => '' ) );
    $wp_customize->add_control( 'wlru_slider_' . $i . '_button_text', array(
      'label'           => __( 'Button Text', 'wlru' ),
      'section'         => 'wlru_slider_' . $i,
      'settings'        => 'wlru_slider_' . $i . '_button_text',
      'active_callback' => 'wlru_slider_display',
    ) );

    $wp_customize->add_setting( 'wlru_slider_' . $i . '_button_link', array( 'default' => '' ) );
    $wp_customize->add_control( 'wlru_slider_' . $i . '_button_link', array(
      'label'           => __( 'Button Link', 'wlru' ),
      'section'         => 'wlru_slider_' . $i,
      'settings'        => 'wlru_slider_' . $i . '_button_link',
      'active_callback' => 'wlru_slider_display',
    ) );
  }
}
add_action( 'customize_register', 'wlru_slider_customize_register' );

function wlru_slider_display( $control ) {
  $slide_index = preg_replace( '/[a-zA-z_]/', '', $control->id );
  switch ( $slide_index ) {
    case '1':
      return $control->manager->get_setting( 'wlru_slider_1_display' )->value();
    case '2':
      return $control->manager->get_setting( 'wlru_slider_2_display' )->value();
    case '3':
      return $control->manager->get_setting( 'wlru_slider_3_display' )->value();
    case '4':
      return $control->manager->get_setting( 'wlru_slider_4_display' )->value();
    case '5':
      return $control->manager->get_setting( 'wlru_slider_5_display' )->value();
  }
}

function wlru_slider_autoplay( $control ) {
  return $control->manager->get_setting( 'wlru_slider_autoplay' )->value();
}

function wlru_slider_customize_css() {
  ?>
		<style type="text/css" id="wlru-slider">
		  #slider .jumbotron {
        min-height: <?php echo get_theme_mod( 'wlru_slider_min_height', '50vh' ); ?>;
      }
		</style>
  <?php
}
add_action( 'wp_head', 'wlru_slider_customize_css');

function wlru_slider() {
	if ( is_front_page() ) {
		$slider_arrows				  = get_theme_mod( 'wlru_slider_arrows', true ) ? 'true' : 'false';
		$slider_autoplay			  = get_theme_mod( 'wlru_slider_autoplay', false ) ? 'true' : 'false';
		$slider_autoplayspeed	= get_theme_mod( 'wlru_slider_autoplayspeed', 3000 );
		$slider_dots					  = get_theme_mod( 'wlru_slider_dots', false ) ? 'true' : 'false';
		$slider_fade					  = get_theme_mod( 'wlru_slider_fade', false ) ? 'true' : 'false';
		$slider_speed					= get_theme_mod( 'wlru_slider_speed', 300 );
		$slider_responsive		  = get_theme_mod( 'wlru_slider_responsive', '' );

		$script = join( array(
			'<script>',
				'jQuery(document).ready(function() {',
					'jQuery( \'#slider\').slick({',
						'arrows: ' . $slider_arrows . ',',
						'autoplay: ' . $slider_autoplay . ',',
						'autoplaySpeed: ' . $slider_autoplayspeed . ',',
						'dots: ' . $slider_dots . ',',
						'fade: ' . $slider_fade . ',',
						'speed: ' . $slider_speed . ',',
						'responsive: [' . $slider_responsive . ']',
					'});',
				'});',
			'</script>',
		) );

		echo $script;
	}
}
add_action( 'wp_footer', 'wlru_slider', 30 );
