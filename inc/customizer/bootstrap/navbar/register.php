<?php
add_action( 'customize_register', 'wlru_customize_bs_navbar_register' );
function wlru_customize_bs_navbar_register( $wp_customize ) {
  $wp_customize->add_panel( 'wlru_navbar', array(
    'title'       => __( 'Navbar', 'wlru' ),
  ) );

  // SETTINGS
  $wp_customize->add_section( 'wlru_navbar_settings', array(
    'title'       => __( 'Settings', 'wlru' ),
    'panel'       => 'wlru_navbar',
  ) );

  $wp_customize->add_setting( 'wlru_navbar_mode', array( 'default' => 'navbar-default' ) );
  $wp_customize->add_control( 'wlru_navbar_mode', array(
    'label'       => __( 'Mode', 'wlru' ),
    'section'     => 'wlru_navbar_settings',
    'settings'    => 'wlru_navbar_mode',
    'type'        => 'select',
    'choices'     => array(
      'navbar-default'  => 'Default',
      'navbar-inverse'  => 'Inverse',
    ),
  ) );

  $wp_customize->add_setting( 'wlru_navbar_position', array( 'default' => 'navbar-static-top' ) );
  $wp_customize->add_control( 'wlru_navbar_position', array(
    'label'       => __( 'Position', 'wlru' ),
    'section'     => 'wlru_navbar_settings',
    'settings'    => 'wlru_navbar_position',
    'type'        => 'select',
    'choices'     => array(
      'navbar-static-top'   => 'Static Top',
      'navbar-fixed-top'    => 'Fixed to Top',
      'navbar-fixed-bottom' => 'Fixed to Bottom',
    ),
  ) );

  $wp_customize->add_setting( 'wlru_navbar_height', array( 'default' => 50 ) );
  $wp_customize->add_control( 'wlru_navbar_height', array(
    'label'       => __( 'Height', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_navbar_settings',
    'settings'    => 'wlru_navbar_height',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_navbar_margin_bottom', array( 'default' => 20 ) );
  $wp_customize->add_control( 'wlru_navbar_margin_bottom', array(
    'label'       => __( 'Margin Bottom', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_navbar_settings',
    'settings'    => 'wlru_navbar_margin_bottom',
    'type'        => 'number',
  ) );

  // NAVBAR
  $wp_customize->add_section( 'wlru_navbar_navbar', array(
    'title'       => __( 'Desktop Navbar', 'wlru' ),
    'panel'       => 'wlru_navbar',
  ) );

  $wp_customize->add_setting( 'wlru_navbar_default_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_color', array(
    'label'           => __( 'Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_default_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_color', array( 'default' => '#9d9d9d' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_color', array(
    'label'           => __( 'Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_inverse_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_bg', array( 'default' => '#f8f8f8' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_bg', array(
    'label'           => __( 'Background', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_default_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_bg', array( 'default' => '#222222' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_bg', array(
    'label'           => __( 'Background', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_inverse_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_opacity', array( 'default' => 1 ) );
  $wp_customize->add_control( 'wlru_navbar_opacity', array(
    'label'       => __( 'Background Opacity', 'wlru' ),
    'section'     => 'wlru_navbar_navbar',
    'settings'    => 'wlru_navbar_opacity',
    'type'        => 'number',
    'input_attrs' => array(
      'max'       => 1,
      'min'       => 0,
      'step'      => 0.05,
    ),
  ) );

  $wp_customize->add_setting( 'wlru_navbar_default_border', array( 'default' => '#e7e7e7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_border', array(
    'label'           => __( 'Border', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_default_border',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_border', array( 'default' => '#080808' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_border', array(
    'label'           => __( 'Border', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_inverse_border',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_color', array(
    'label'           => __( 'Link Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_default_link_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_color', array( 'default' => '#9e9e9e' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_color', array(
    'label'           => __( 'Link Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_inverse_link_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_hover_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_hover_color', array(
    'label'           => __( 'Link Hover Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_default_link_hover_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_hover_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_hover_color', array(
    'label'           => __( 'Link Hover Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_inverse_link_hover_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_active_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_active_color', array(
    'label'           => __( 'Link Active Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_default_link_active_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_active_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_active_color', array(
    'label'           => __( 'Link Active Color', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_inverse_link_active_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_active_bg', array( 'default' => '#e7e7e7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_active_bg', array(
    'label'           => __( 'Link Active Background', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_default_link_active_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_active_bg', array( 'default' => '#080808' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_active_bg', array(
    'label'           => __( 'Link Active Background', 'wlru' ),
    'section'         => 'wlru_navbar_navbar',
    'settings'        => 'wlru_navbar_inverse_link_active_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  // MOBILE DROPDOWN
  $wp_customize->add_section( 'wlru_mobile_navbar', array(
    'title'       => __( 'Mobile Navbar', 'wlru' ),
    'panel'       => 'wlru_navbar',
  ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_default_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_default_color', array(
    'label'           => __( 'Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_default_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_inverse_color', array( 'default' => '#9d9d9d' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_inverse_color', array(
    'label'           => __( 'Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_inverse_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_default_bg', array( 'default' => '#f8f8f8' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_default_bg', array(
    'label'           => __( 'Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_default_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_inverse_bg', array( 'default' => '#222222' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_inverse_bg', array(
    'label'           => __( 'Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_inverse_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_default_border', array( 'default' => '#e7e7e7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_default_border', array(
    'label'           => __( 'Border', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_default_border',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_inverse_border', array( 'default' => '#080808' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_inverse_border', array(
    'label'           => __( 'Border', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_inverse_border',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_default_link_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_default_link_color', array(
    'label'           => __( 'Link Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_default_link_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_inverse_link_color', array( 'default' => '#9e9e9e' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_inverse_link_color', array(
    'label'           => __( 'Link Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_inverse_link_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_default_link_hover_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_default_link_hover_color', array(
    'label'           => __( 'Link Hover Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_default_link_hover_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_inverse_link_hover_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_inverse_link_hover_color', array(
    'label'           => __( 'Link Hover Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_inverse_link_hover_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_default_link_active_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_default_link_active_color', array(
    'label'           => __( 'Link Active Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_default_link_active_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_inverse_link_active_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_inverse_link_active_color', array(
    'label'           => __( 'Link Active Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_inverse_link_active_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_default_link_active_bg', array( 'default' => '#e7e7e7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_default_link_active_bg', array(
    'label'           => __( 'Link Active Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_default_link_active_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_mobile_navbar_inverse_link_active_bg', array( 'default' => '#080808' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_mobile_navbar_inverse_link_active_bg', array(
    'label'           => __( 'Link Active Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_mobile_navbar_inverse_link_active_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_toggle_hover_bg', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_toggle_hover_bg', array(
    'label'           => __( 'Toggle Hover Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_navbar_default_toggle_hover_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_toggle_hover_bg', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_toggle_hover_bg', array(
    'label'           => __( 'Toggle Hover Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_navbar_inverse_toggle_hover_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_toggle_icon_bar_bg', array( 'default' => '#888888' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_toggle_icon_bar_bg', array(
    'label'           => __( 'Toggle Icon Bar Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_navbar_default_toggle_icon_bar_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_toggle_icon_bar_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_toggle_icon_bar_bg', array(
    'label'           => __( 'Toggle Icon Bar Background', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_navbar_inverse_toggle_icon_bar_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_toggle_border_color', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_toggle_border_color', array(
    'label'           => __( 'Toggle Border Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_navbar_default_toggle_border_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_toggle_border_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_toggle_border_color', array(
    'label'           => __( 'Toggle Border Color', 'wlru' ),
    'section'         => 'wlru_mobile_navbar',
    'settings'        => 'wlru_navbar_inverse_toggle_border_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );
}

function wlru_navbar_mode_default( $control ) {
  if ( $control->manager->get_setting( 'wlru_navbar_mode' )->value() == 'navbar-default' ) return true;
  return false;
}
function wlru_navbar_mode_inverse( $control ) {
  if ( $control->manager->get_setting( 'wlru_navbar_mode' )->value() == 'navbar-inverse' ) return true;
  return false;
}
