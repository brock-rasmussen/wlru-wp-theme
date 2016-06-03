<?php
// Main color variables
$wp_customize->add_setting( 'gray-darker', array(
  'default'     => '#222',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_gray_darker', array(
  'label'       => __( 'Gray Darker', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'gray-darker',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray-dark', array(
  'default'      => '#333',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_gray_dark', array(
  'label'       => __( 'Gray Dark', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'gray-dark',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray', array(
  'default'      => '#555',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gray', array(
  'label'       => __( 'Gray', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'gray',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray-light', array(
  'default'      => '#777',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_gray_light', array(
  'label'       => __( 'Gray Light', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'gray-light',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray-lighter', array(
  'default'      => '#eee',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_gray_lighter', array(
  'label'       => __( 'Gray Lighter', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'gray-lighter',
  'priority'    => 9,
) ) );


$wp_customize->add_setting( 'brand-primary', array(
  'default'      => '#337ab7',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_brand_primary', array(
  'label'       => __( 'Brand Primary', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'brand-primary',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand-success', array(
  'default'      => '#5cb85c',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_brand_success', array(
  'label'       => __( 'Brand Success', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'brand-success',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand-info', array(
  'default'      => '#5bc0de',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_brand_info', array(
  'label'       => __( 'Brand Info', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'brand-info',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand-warning', array(
  'default'      => '#f0ad4e',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_brand_warning', array(
  'label'       => __( 'Brand Warning', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'brand-warning',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand-danger', array(
  'default'      => '#d9534f',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_brand_danger', array(
  'label'       => __( 'Brand Danger', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'brand-danger',
  'priority'    => 9,
) ) );


// Component color variables
// $wp_customize->add_setting( 'brand-danger', array(
//   'default'      => '#d9534f',
// ) );
// $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wallarooster_brand_danger', array(
//   'label'       => __( 'Brand Danger', 'wallarooster' ),
//   'section'     => 'colors',
//   'settings'    => 'brand-danger',
//   'priority'    => 9,
// ) ) );
