<?php
add_action( 'customize_register', 'wlru_customize_bs_buttons_register' );
function wlru_customize_bs_buttons_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_buttons', array(
    'title'       => __( 'Buttons', 'wlru' ),
    'description' => '<p><code>$btn-primary-bg</code>: <code>$brand-primary</code></p><p><code>$btn-success-bg</code>: <code>$brand-success</code></p><p><code>$btn-info-bg</code>: <code>$brand-info</code></p>
    <p><code>$btn-warning-bg</code>: <code>$brand-warning</code></p><p><code>$btn-danger-bg</code>: <code>$brand-danger</code></p><p><code>$btn-border-radius-base</code>: <code>$border-radius-base</code></p><p><code>$btn-border-radius-large</code>: <code>$border-radius-large</code></p><p><code>$btn-border-radius-small</code>: <code>$border-radius-small</code></p>',
  ) );

  $wp_customize->add_setting( 'wlru_btn_font_weight', array( 'default' => 'normal' ) );
  $wp_customize->add_control( 'wlru_btn_font_weight', array(
    'label'       => __( 'Font Weight', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    ),
  ) );

  $wp_customize->add_setting( 'wlru_btn_default_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_default_color', array(
    'label'       => __( 'Default Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_default_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_default_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_default_bg', array(
    'label'       => __( 'Default Background', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_default_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_default_border', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_default_border', array(
    'label'       => __( 'Default Border', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_default_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_primary_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_primary_color', array(
    'label'       => __( 'Primary Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_primary_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_primary_border', array( 'default' => '#2e6da4' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_primary_border', array(
    'label'       => __( 'Primary Border', 'wlru' ),
    'description' => '<code>darken($btn-primary-bg, 5%)</code>',
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_primary_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_success_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_success_color', array(
    'label'       => __( 'Success Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_success_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_success_border', array( 'default' => '#4cae4c' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_success_border', array(
    'label'       => __( 'Success Border', 'wlru' ),
    'description' => '<code>darken($btn-success-bg, 5%)</code>',
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_success_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_info_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_info_color', array(
    'label'       => __( 'Info Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_info_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_info_border', array( 'default' => '#46b8da' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_info_border', array(
    'label'       => __( 'Info Border', 'wlru' ),
    'description' => '<code>darken($btn-info-bg, 5%)</code>',
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_info_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_warning_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_warning_color', array(
    'label'       => __( 'Warning Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_warning_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_warning_border', array( 'default' => '#eea236' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_warning_border', array(
    'label'       => __( 'Warning Border', 'wlru' ),
    'description' => '<code>darken($btn-warning-bg, 5%)</code>',
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_warning_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_danger_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_danger_color', array(
    'label'       => __( 'Danger Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_danger_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_danger_border', array( 'default' => '#d43f3a' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_danger_border', array(
    'label'       => __( 'Danger Border', 'wlru' ),
    'description' => '<code>darken($btn-danger-bg, 5%)</code>',
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_danger_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_link_disabled_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_link_disabled_color', array(
    'label'       => __( 'Link Disabled Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_link_disabled_color',
  ) ) );
}
