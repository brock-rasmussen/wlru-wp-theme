<?php
add_action( 'customize_register', 'wlru_customize_bs_badges_register' );
function wlru_customize_bs_badges_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_badges', array(
    'title'       => __( 'Badges', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_badge_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_badge_color', array(
    'label'       => __( 'Color', 'wlru' ),
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_badge_link_hover_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_badge_link_hover_color', array(
    'label'       => __( 'Link Hover Color', 'wlru' ),
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_link_hover_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_badge_bg', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_badge_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_badge_active_color', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_badge_active_color', array(
    'label'       => __( 'Active Color', 'wlru' ),
    'description' => '<code>$link-color</code>',
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_active_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_badge_active_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_badge_active_bg', array(
    'label'       => __( 'Active Background', 'wlru' ),
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_active_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_badge_font_weight', array( 'default' => 'bold' ) );
  $wp_customize->add_control( 'wlru_badge_font_weight', array(
    'label'       => __( 'Font Weight', 'wlru' ),
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_badge_line_height', array( 'default' => 1 ) );
  $wp_customize->add_control( 'wlru_badge_line_height', array(
    'label'       => __( 'Line Height', 'wlru' ),
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_line_height',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_badge_border_radius', array( 'default' => 10 ) );
  $wp_customize->add_control( 'wlru_badge_border_radius', array(
    'label'       => __( 'Border Radius', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_badges',
    'settings'    => 'wlru_badge_border_radius',
    'type'        => 'number',
  ) );
}
