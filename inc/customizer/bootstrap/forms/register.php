<?php
add_action( 'customize_register', 'wlru_customize_bs_forms_register' );
function wlru_customize_bs_forms_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_forms', array(
    'title'       => __( 'Forms', 'wlru' ),
    'description' => '<p><code>$input-border-radius</code>: <code>$border-radius-base</code></p><p><code>$input-border-radius-large</code>: <code>$border-radius-large</code></p><p><code>$input-border-radius-small</code>: <code>$border-radius-small</code></p>',
  ) );

  $wp_customize->add_setting( 'wlru_input_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_bg', array(
    'label'       => __( 'Input Background', 'wlru' ),
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_input_bg_disabled', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_bg_disabled', array(
    'label'       => __( 'Input Background Disabled', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_bg_disabled',
  ) ) );

  $wp_customize->add_setting( 'wlru_input_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_color', array(
    'label'       => __( 'Input Color', 'wlru' ),
    'description' => '<code>$gray</code>',
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_input_border', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_border', array(
    'label'       => __( 'Input Border', 'wlru' ),
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_input_border_focus', array( 'default' => '#66afe9' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_border_focus', array(
    'label'       => __( 'Input Border Focus', 'wlru' ),
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_border_focus',
  ) ) );

  $wp_customize->add_setting( 'wlru_input_color_placeholder', array( 'default' => '#999999' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_color_placeholder', array(
    'label'       => __( 'Input Color Placeholder', 'wlru' ),
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_color_placeholder',
  ) ) );

  $wp_customize->add_setting( 'wlru_form_group_margin_bottom', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_form_group_margin_bottom', array(
    'label'       => __( 'Form Group Margin Bottom', 'wlru' ),
    'description' => __( '<code>.form-group</code> margin.<br>In pixels.', 'wlru' ),
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_form_group_margin_bottom',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_legend_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_legend_color', array(
    'label'       => __( 'Legend Color', 'wlru' ),
    'description' => '<code>$gray-dark</code>',
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_legend_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_legend_border_color', array( 'default' => '#e5e5e5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_legend_border_color', array(
    'label'       => __( 'Legend Border Color', 'wlru' ),
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_legend_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_input_group_addon_bg', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_group_addon_bg', array(
    'label'       => __( 'Input Group Addon Background', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_group_addon_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_input_group_addon_border_color', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_input_group_addon_border_color', array(
    'label'       => __( 'Input Group Addon Border Color', 'wlru' ),
    'description' => '<code>$input-border</code>',
    'section'     => 'wlru_forms',
    'settings'    => 'wlru_input_group_addon_border_color',
  ) ) );
}
