<?php
add_action( 'customize_register', 'wlru_customize_bs_pagination_register' );
function wlru_customize_bs_pagination_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_pagination', array(
    'title'       => __( 'Pagination', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_pagination_color', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_color', array(
    'label'       => __( 'Color', 'wlru' ),
    'description' => '<code>$link-color</code>',
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_border', array(
    'label'       => __( 'Border', 'wlru' ),
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_hover_color', array( 'default' => '#23527c' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_hover_color', array(
    'label'       => __( 'Hover Color', 'wlru' ),
    'description' => '<code>$link-hover-color</code>',
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_hover_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_hover_bg', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_hover_bg', array(
    'label'       => __( 'Hover Background', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_hover_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_hover_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_hover_border', array(
    'label'       => __( 'Hover Border', 'wlru' ),
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_hover_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_active_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_active_color', array(
    'label'       => __( 'Active Color', 'wlru' ),
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_active_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_active_bg', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_active_bg', array(
    'label'       => __( 'Active Background', 'wlru' ),
    'description' => '<code>$brand-primary</code>',
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_active_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_active_border', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_active_border', array(
    'label'       => __( 'Active Border', 'wlru' ),
    'description' => '<code>$brand-primary</code>',
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_active_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_disabled_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_disabled_color', array(
    'label'       => __( 'Disabled Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_disabled_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_disabled_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_disabled_bg', array(
    'label'       => __( 'Disabled Background', 'wlru' ),
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_disabled_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_pagination_disabled_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pagination_disabled_border', array(
    'label'       => __( 'Disabled Border', 'wlru' ),
    'section'     => 'wlru_pagination',
    'settings'    => 'wlru_pagination_disabled_border',
  ) ) );
}
