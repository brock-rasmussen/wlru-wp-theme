<?php
add_action( 'customize_register', 'wlru_customize_bs_panels_register' );
function wlru_customize_bs_panels_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_panels', array(
    'title'       => __( 'Panels', 'wlru' ),
    'description' => '<p><code>$panel-border-radius</code>: <code>$border-radius-base</code></p><p><code>$panel-primary-border</code>: <code>$brand-primary</code></p><p><code>$panel-primary-bg</code>: <code>$brand-primary</code></p><p><code>$panel-success-text</code>: <code>$state-success-text</code></p><p><code>$panel-success-border</code>: <code>$state-success-border</code></p><p><code>$panel-success-heading-bg</code>: <code>$state-success-bg</code></p><p><code>$panel-info-text</code>: <code>$state-info-text</code></p><p><code>$panel-info-border</code>: <code>$state-info-border</code></p><p><code>$panel-info-heading-bg</code>: <code>$state-info-bg</code></p><p><code>$panel-warning-text</code>: <code>$state-warning-text</code></p><p><code>$panel-warning-border</code>: <code>$state-warning-border</code></p><p><code>$panel-warning-heading-bg</code>: <code>$state-warning-bg</code></p><p><code>$panel-danger-text</code>: <code>$state-danger-text</code></p><p><code>$panel-danger-border</code>: <code>$state-danger-border</code></p><p><code>$panel-danger-heading-bg</code>: <code>$state-danger-bg</code></p>
    ',
  ) );

  $wp_customize->add_setting( 'wlru_panel_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_body_padding', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_panel_body_padding', array(
    'label'       => __( 'Body Padding', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_body_padding',
    'type'        => 'number'
  ) );

  $wp_customize->add_setting( 'wlru_panel_heading_padding_vertical', array( 'default' => 10 ) );
  $wp_customize->add_control( 'wlru_panel_heading_padding_vertical', array(
    'label'       => __( 'Heading Padding Vertical', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_heading_padding_vertical',
    'type'        => 'number'
  ) );

  $wp_customize->add_setting( 'wlru_panel_heading_padding_horizontal', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_panel_heading_padding_horizontal', array(
    'label'       => __( 'Heading Padding Horizontal', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_heading_padding_horizontal',
    'type'        => 'number'
  ) );

  $wp_customize->add_setting( 'wlru_panel_footer_padding_vertical', array( 'default' => 10 ) );
  $wp_customize->add_control( 'wlru_panel_footer_padding_vertical', array(
    'label'       => __( 'Footer Padding Vertical', 'wlru' ),
    'description' => '<code>$panel-footer-padding-vertical</code>',
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_footer_padding_vertical',
    'type'        => 'number'
  ) );

  $wp_customize->add_setting( 'wlru_panel_footer_padding_horizontal', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_panel_footer_padding_horizontal', array(
    'label'       => __( 'Footer Padding Horizontal', 'wlru' ),
    'description' => '<code>$panel-footer-padding-horizontal</code>',
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_footer_padding_horizontal',
    'type'        => 'number'
  ) );

  $wp_customize->add_setting( 'wlru_panel_inner_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_inner_border', array(
    'label'       => __( 'Inner Border', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_inner_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_footer_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_footer_bg', array(
    'label'       => __( 'Footer Background', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_footer_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_default_text', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_default_text', array(
    'label'       => __( 'Default Color', 'wlru' ),
    'description' => '<code>$gray-dark</code>',
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_default_text',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_default_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_default_border', array(
    'label'       => __( 'Default Border', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_default_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_default_heading_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_default_heading_bg', array(
    'label'       => __( 'Default Heading Background', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_default_heading_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_primary_text', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_primary_text', array(
    'label'       => __( 'Primary Heading Color', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_primary_text',
  ) ) );
}
