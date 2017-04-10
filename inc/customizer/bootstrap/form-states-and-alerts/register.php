<?php
add_action( 'customize_register', 'wlru_customize_bs_form_states_and_alerts_register' );
function wlru_customize_bs_form_states_and_alerts_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_form_states_and_alerts', array(
    'title'       => __( 'Form States and Alerts', 'wlru' ),
    'description' => __( 'Define colors for form feedback states and alerts.', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_state_success_text', array( 'default' => '#3c763d' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_success_text', array(
    'label'       => __( 'Success Text', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_success_text',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_success_bg', array( 'default' => '#dff0d8' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_success_bg', array(
    'label'       => __( 'Success Background', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_success_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_success_border', array( 'default' => '#d6e9c6' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_success_border', array(
    'label'       => __( 'Success Border', 'wlru' ),
    'description' => '<code>darken(spin($state-success-bg, -10), 5%)</code>',
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_success_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_info_text', array( 'default' => '#31708f' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_info_text', array(
    'label'       => __( 'Info Text', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_info_text',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_info_bg', array( 'default' => '#d9edf7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_info_bg', array(
    'label'       => __( 'Info Background', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_info_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_info_border', array( 'default' => '#bce8f1' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_info_border', array(
    'label'       => __( 'Info Border', 'wlru' ),
    'description' => '<code>darken(spin($state-info-bg, -10), 7%)</code>',
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_info_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_warning_text', array( 'default' => '#8a6d3b' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_warning_text', array(
    'label'       => __( 'Warning Text', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_warning_text',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_warning_bg', array( 'default' => '#fcf8e3' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_warning_bg', array(
    'label'       => __( 'Warning Background', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_warning_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_warning_border', array( 'default' => '#faebcc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_warning_border', array(
    'label'       => __( 'Warning Border', 'wlru' ),
    'description' => '<code>darken(spin($state-warning-bg, -10), 5%)</code>',
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_warning_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_danger_text', array( 'default' => '#a94442' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_danger_text', array(
    'label'       => __( 'Danger Text', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_danger_text',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_danger_bg', array( 'default' => '#f2dede' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_danger_bg', array(
    'label'       => __( 'Danger Background', 'wlru' ),
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_danger_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_state_danger_border', array( 'default' => '#ebccd1' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_state_danger_border', array(
    'label'       => __( 'Danger Border', 'wlru' ),
    'description' => '<code>darken(spin($state-danger-bg, -10), 5%)</code>',
    'section'     => 'wlru_form_states_and_alerts',
    'settings'    => 'wlru_state_danger_border',
  ) ) );
}
