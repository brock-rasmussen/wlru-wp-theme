<?php
add_action( 'customize_register', 'wlru_customize_bs_tooltips_register' );
function wlru_customize_bs_tooltips_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_tooltips', array(
    'title'       => __( 'Tooltips', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_tooltip_max_width', array( 'default' => 200 ) );
  $wp_customize->add_control( 'wlru_tooltip_max_width', array(
    'label'       => __( 'Tooltip Max Width', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_tooltips',
    'settings'    => 'wlru_tooltip_max_width',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_tooltip_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_tooltip_color', array(
    'label'       => __( 'Tooltip Color', 'wlru' ),
    'section'     => 'wlru_tooltips',
    'settings'    => 'wlru_tooltip_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_tooltip_bg', array( 'default' => '#000000' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_tooltip_bg', array(
    'label'       => __( 'Tooltip Background', 'wlru' ),
    'section'     => 'wlru_tooltips',
    'settings'    => 'wlru_tooltip_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_tooltip_opacity', array( 'default' => 0.9 ) );
  $wp_customize->add_control( 'wlru_tooltip_opacity', array(
    'label'       => __( 'Tooltip Opacity', 'wlru' ),
    'section'     => 'wlru_tooltips',
    'settings'    => 'wlru_tooltip_opacity',
    'type'        => 'number',
    'input_attrs' => array(
      'max'       => 1,
      'min'       => 0,
      'step'      => 0.05,
    ),
  ) );

  $wp_customize->add_setting( 'wlru_tooltip_arrow_width', array( 'default' => 5 ) );
  $wp_customize->add_control( 'wlru_tooltip_arrow_width', array(
    'label'       => __( 'Tooltip Arrow Width', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_tooltips',
    'settings'    => 'wlru_tooltip_arrow_width',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_tooltip_arrow_color', array( 'default' => '#000000' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_tooltip_arrow_color', array(
    'label'       => __( 'Tooltip Arrow Color', 'wlru' ),
    'description' => '<code>$tooltip-bg</code>',
    'section'     => 'wlru_tooltips',
    'settings'    => 'wlru_tooltip_arrow_color',
  ) ) );
}
