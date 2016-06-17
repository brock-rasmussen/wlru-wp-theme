<?php
$wlru_slide_qty = 5;

$wp_customize->add_panel( 'slide', array(
  'title'           => __( 'Slider', 'wlru' ),
) );

// Slide settings
$wp_customize->add_section( 'slide_settings', array(
  'title'           => __( 'Slider Settings', 'wlru' ),
  'panel'           => 'slide',
) );

$wp_customize->add_setting( 'slide_min_height', array( 'default' => '50vh' ) );
$wp_customize->add_control( 'slide_min_height', array(
  'label'           => __( 'Minimum Height', 'wlru' ),
  'description'     => __( 'Specify the minimum height <a href="http://www.w3schools.com/cssref/css_units.asp">unit</a> (i.e. px, vh, em, etc.)', 'wlru' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_min_height',
  'type'            => 'text',
) );

$wp_customize->add_setting( 'slide_arrows', array( 'default' => true ) );
$wp_customize->add_control( 'slide_arrows', array(
  'label'           => __( 'Arrows', 'wlru' ),
  'description'     => __( 'Check to show arrow navigation', 'wlru' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_arrows',
  'type'            => 'checkbox',
) );

$wp_customize->add_setting( 'slide_autoplay', array( 'default' => false ) );
$wp_customize->add_control( 'slide_autoplay', array(
  'label'           => __( 'Autoplay', 'wlru' ),
  'description'     => __( 'Check to enable autoplay', 'wlru' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_autoplay',
  'type'            => 'checkbox',
) );

$wp_customize->add_setting( 'slide_dots', array( 'default' => false ) );
$wp_customize->add_control( 'slide_dots', array(
  'label'           => __( 'Dots', 'wlru' ),
  'description'     => __( 'Check to show dot navigation', 'wlru' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_dots',
  'type'            => 'checkbox',
) );

$wp_customize->add_setting( 'slide_fade', array( 'default' => false ) );
$wp_customize->add_control( 'slide_fade', array(
  'label'           => __( 'Fade', 'wlru' ),
  'description'     => __( 'Check to enable fade', 'wlru' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_fade',
  'type'            => 'checkbox',
) );

$wp_customize->add_setting( 'slide_autoplayspeed', array( 'default' => 3000 ) );
$wp_customize->add_control( 'slide_autoplayspeed', array(
  'label'           => __( 'Autplay Speed', 'wlru' ),
  'description'     => __( 'Autoplay speed in milliseconds', 'wlru' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_autoplayspeed',
  'type'            => 'number',
  // TODO: Research active_callback
  // 'active_callback' => '',
) );

$wp_customize->add_setting( 'slide_speed', array( 'default' => 300 ) );
$wp_customize->add_control( 'slide_speed', array(
  'label'           => __( 'Speed', 'wlru' ),
  'description'     => __( 'Slide/fade animation speed in milliseconds', 'wlru' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_speed',
  'type'            => 'number',
) );

$wp_customize->add_setting( 'slide_responsive', array( 'default' => '' ) );
$wp_customize->add_control( 'slide_responsive', array(
  'label'           => __( 'Responsive', 'wlru' ),
  'description'     => __( 'See <a href="http://kenwheeler.github.io/slick/">Slick Slider documentation</a> for examples on this setting. Do not include the containing <code>[]</code>.' ),
  'section'         => 'slide_settings',
  'settings'        => 'slide_responsive',
  'type'            => 'textarea',
) );

// Make 5 slides
for ( $i = 1; $i <= $wlru_slide_qty; $i++ ) {
  $wp_customize->add_section( 'slide_' . $i , array(
    'title'           => sprintf( __( 'Slide %d' , 'wlru' ), $i ),
    'panel'           => 'slide',
  ) );

  $wp_customize->add_setting( 'slide_' . $i . '_display', array( 'default' => false ) );
  $wp_customize->add_control( 'slide_' . $i . '_display', array(
    'label'           => __( 'Display', 'wlru' ),
    'section'         => 'slide_' . $i,
    'settings'        => 'slide_' . $i . '_display',
    'type'            => 'checkbox',
  ) );

  $wp_customize->add_setting( 'slide_' . $i . '_image', array( 'default' => '' ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_' . $i . '_image', array(
    'label'           => __( 'Image', 'wlru' ),
    'section'         => 'slide_' . $i,
    'settings'        => 'slide_'. $i . '_image',
  ) ) );

  $wp_customize->add_setting( 'slide_' . $i . '_focal_point', array( 'default' => 'center-center' ) );
  $wp_customize->add_control( 'slide_' . $i . '_focal_point', array(
    'label'           => __( 'Focal point', 'wlru' ),
    'section'         => 'slide_' . $i,
    'settings'        => 'slide_' . $i . '_focal_point',
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
    )
  ) );

  $wp_customize->add_setting( 'slide_' . $i . '_heading', array( 'default' => '' ) );
  $wp_customize->add_control( 'slide_' . $i . '_heading', array(
    'label'           => __( 'Heading', 'wlru' ),
    'section'         => 'slide_' . $i,
    'settings'        => 'slide_' . $i . '_heading',
  ) );

  $wp_customize->add_setting( 'slide_' . $i . '_text', array( 'default' => '' ) );
  $wp_customize->add_control( 'slide_' . $i . '_text', array(
    'label'           => __( 'Text', 'wlru' ),
    'section'         => 'slide_' . $i,
    'settings'        => 'slide_' . $i . '_text',
    'type'            => 'textarea',
  ) );

  $wp_customize->add_setting( 'slide_' . $i . '_button_text', array( 'default' => '' ) );
  $wp_customize->add_control( 'slide_' . $i . '_button_text', array(
    'label'           => __( 'Button Text', 'wlru' ),
    'section'         => 'slide_' . $i,
    'settings'        => 'slide_' . $i . '_button_text',
  ) );

  $wp_customize->add_setting( 'slide_' . $i . '_button_link', array( 'default' => '' ) );
  $wp_customize->add_control( 'slide_' . $i . '_button_link', array(
    'label'           => __( 'Button Link', 'wlru' ),
    'section'         => 'slide_' . $i,
    'settings'        => 'slide_' . $i . '_button_link',
  ) );
}
