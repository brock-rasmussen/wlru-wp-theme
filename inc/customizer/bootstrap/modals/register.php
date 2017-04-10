<?php
add_action( 'customize_register', 'wlru_customize_bs_modals_register' );
function wlru_customize_bs_modals_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_modals', array(
    'title'       => __( 'Modals', 'wlru' ),
    'description' => '<code>$modal-footer-border-color</code>: <code>$modal-header-border-color</code>',
  ) );

  $wp_customize->add_setting( 'wlru_modal_inner_padding', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_modal_inner_padding', array(
    'label'       => __( 'Inner Padding', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_modals',
    'settings'    => 'wlru_modal_inner_padding',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_modal_title_padding', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_modal_title_padding', array(
    'label'       => __( 'Title Padding', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_modals',
    'settings'    => 'wlru_modal_title_padding',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_modal_title_line_height', array( 'default' => 1.428571429 ) );
  $wp_customize->add_control( 'wlru_modal_title_line_height', array(
    'label'       => __( 'Title Line Height', 'wlru' ),
    'description' => '<code>$line-height-base</code>',
    'section'     => 'wlru_modals',
    'settings'    => 'wlru_modal_title_line_height',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_modal_content_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_modal_content_bg', array(
    'label'           => __( 'Content Background', 'wlru' ),
    'section'         => 'wlru_modals',
    'settings'        => 'wlru_modal_content_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_modal_content_fallback_border_color', array( 'default' => '#999999' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_modal_content_fallback_border_color', array(
    'label'           => __( 'Content Fallback Border Color', 'wlru' ),
    'section'         => 'wlru_modals',
    'settings'        => 'wlru_modal_content_fallback_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_modal_backdrop_bg', array( 'default' => '#000000' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_modal_backdrop_bg', array(
    'label'           => __( 'Backdrop Background', 'wlru' ),
    'section'         => 'wlru_modals',
    'settings'        => 'wlru_modal_backdrop_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_modal_backdrop_opacity', array( 'default' => 0.5 ) );
  $wp_customize->add_control( 'wlru_modal_backdrop_opacity', array(
    'label'       => __( 'Backdrop Opacity', 'wlru' ),
    'section'     => 'wlru_modals',
    'settings'    => 'wlru_modal_backdrop_opacity',
    'type'        => 'number',
    'input_attrs' => array(
      'max'       => 1,
      'min'       => 0,
      'step'      => 0.05,
    ),
  ) );

  $wp_customize->add_setting( 'wlru_modal_header_border_color', array( 'default' => '#e5e5e5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_modal_header_border_color', array(
    'label'           => __( 'Header Border Color', 'wlru' ),
    'section'         => 'wlru_modals',
    'settings'        => 'wlru_modal_header_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_modal_lg', array( 'default' => 900 ) );
  $wp_customize->add_control( 'wlru_modal_lg', array(
    'label'       => __( 'Large', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_modals',
    'settings'    => 'wlru_modal_lg',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_modal_md', array( 'default' => 600 ) );
  $wp_customize->add_control( 'wlru_modal_md', array(
    'label'       => __( 'Medium', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_modals',
    'settings'    => 'wlru_modal_md',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_modal_sm', array( 'default' => 300 ) );
  $wp_customize->add_control( 'wlru_modal_sm', array(
    'label'       => __( 'Small', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_modals',
    'settings'    => 'wlru_modal_sm',
    'type'        => 'number',
  ) );
}
