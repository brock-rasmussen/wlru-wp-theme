<?php
add_action( 'customize_register', 'wlru_customize_bs_dropdowns_register' );
function wlru_customize_bs_dropdowns_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_dropdowns', array(
    'title'     => __( 'Dropdowns', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_dropdown_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_dropdown_fallback_border', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_fallback_border', array(
    'label'       => __( 'Border', 'wlru' ),
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_fallback_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_dropdown_divider_bg', array( 'default' => '#e5e5e5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_divider_bg', array(
    'label'       => __( 'Divider Background', 'wlru' ),
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_divider_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_dropdown_link_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_link_color', array(
    'label'       => __( 'Link Color', 'wlru' ),
    'description' => '<code>$gray-dark</code>',
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_link_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_dropdown_link_hover_color', array( 'default' => '#262626' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_link_hover_color', array(
    'label'       => __( 'Link Hover Color', 'wlru' ),
    'description' => '<code>darken($gray-lighter, 5%)</code>',
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_link_hover_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_dropdown_link_hover_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_link_hover_bg', array(
    'label'       => __( 'Link Hover Background', 'wlru' ),
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_link_hover_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_dropdown_link_disabled_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_link_disabled_color', array(
    'label'       => __( 'Link Disabled Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_link_disabled_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_dropdown_header_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_dropdown_header_color', array(
    'label'       => __( 'Header Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_dropdowns',
    'settings'    => 'wlru_dropdown_header_color',
  ) ) );
}
