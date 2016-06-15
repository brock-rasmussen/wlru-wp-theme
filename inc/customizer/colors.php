<?php
// Main color variables
$wp_customize->add_setting( 'gray_darker', array(
  'default'     => '#222',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_gray_darker', array(
  'label'       => __( 'Gray Darker', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'gray_darker',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray_dark', array(
  'default'      => '#333',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_gray_dark', array(
  'label'       => __( 'Gray Dark', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'gray_dark',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray', array(
  'default'      => '#555',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gray', array(
  'label'       => __( 'Gray', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'gray',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray_light', array(
  'default'      => '#777',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_gray_light', array(
  'label'       => __( 'Gray Light', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'gray_light',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'gray_lighter', array(
  'default'      => '#eee',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_gray_lighter', array(
  'label'       => __( 'Gray Lighter', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'gray_lighter',
  'priority'    => 9,
) ) );


$wp_customize->add_setting( 'brand_primary', array(
  'default'      => '#337ab7',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_primary', array(
  'label'       => __( 'Brand Primary', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'brand_primary',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand_success', array(
  'default'      => '#5cb85c',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_success', array(
  'label'       => __( 'Brand Success', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'brand_success',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand_info', array(
  'default'      => '#5bc0de',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_info', array(
  'label'       => __( 'Brand Info', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'brand_info',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand_warning', array(
  'default'      => '#f0ad4e',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_warning', array(
  'label'       => __( 'Brand Warning', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'brand_warning',
  'priority'    => 9,
) ) );

$wp_customize->add_setting( 'brand_danger', array(
  'default'      => '#d9534f',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_danger', array(
  'label'       => __( 'Brand Danger', 'wlru' ),
  'section'     => 'colors',
  'settings'    => 'brand_danger',
  'priority'    => 9,
) ) );
