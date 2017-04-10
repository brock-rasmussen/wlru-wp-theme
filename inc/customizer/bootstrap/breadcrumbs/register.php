<?php
add_action( 'customize_register', 'wlru_customize_bs_breadcrumbs_register' );
function wlru_customize_bs_breadcrumbs_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_breadcrumbs', array(
    'title'       => __( 'Breadcrumbs', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_breadcrumb_padding_vertical', array( 'default' => 8 ) );
  $wp_customize->add_control( 'wlru_breadcrumb_padding_vertical', array(
    'label'       => __( 'Padding Vertical', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_breadcrumbs',
    'settings'    => 'wlru_breadcrumb_padding_vertical',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_breadcrumb_padding_horizontal', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_breadcrumb_padding_horizontal', array(
    'label'       => __( 'Padding Horizontal', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_breadcrumbs',
    'settings'    => 'wlru_breadcrumb_padding_horizontal',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_breadcrumb_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_breadcrumb_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'section'     => 'wlru_breadcrumbs',
    'settings'    => 'wlru_breadcrumb_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_breadcrumb_color', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_breadcrumb_color', array(
    'label'       => __( 'Color', 'wlru' ),
    'section'     => 'wlru_breadcrumbs',
    'settings'    => 'wlru_breadcrumb_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_breadcrumb_active_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_breadcrumb_active_color', array(
    'label'       => __( 'Active Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_breadcrumbs',
    'settings'    => 'wlru_breadcrumb_active_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_breadcrumb_separator', array( 'default' => '/' ) );
  $wp_customize->add_control( 'wlru_breadcrumb_separator', array(
    'label'       => __( 'Separator', 'wlru' ),
    'section'     => 'wlru_breadcrumbs',
    'settings'    => 'wlru_breadcrumb_separator',
  ) );
}
