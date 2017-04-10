<?php
add_action( 'customize_register', 'wlru_customize_bs_jumbotron_register' );
function wlru_customize_bs_jumbotron_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_jumbotron', array(
    'title'       => __( 'Jumbotron', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_jumbotron_padding', array( 'default' => 30 ) );
  $wp_customize->add_control( 'wlru_jumbotron_padding', array(
    'label'       => __( 'Padding', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_jumbotron',
    'settings'    => 'wlru_jumbotron_padding',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_jumbotron_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_jumbotron_color', array(
    'label'       => __( 'Color', 'wlru' ),
    'description' => '<code>$text-color</code>',
    'section'     => 'wlru_jumbotron',
    'settings'    => 'wlru_jumbotron_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_jumbotron_bg', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_jumbotron_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_jumbotron',
    'settings'    => 'wlru_jumbotron_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_jumbotron_heading_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_jumbotron_heading_color', array(
    'label'       => __( 'Heading Color', 'wlru' ),
    'description' => '<code>inherit</code>',
    'section'     => 'wlru_jumbotron',
    'settings'    => 'wlru_jumbotron_heading_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_jumbotron_font_size', array( 'default' => 21 ) );
  $wp_customize->add_control( 'wlru_jumbotron_font_size', array(
    'label'       => __( 'Font Size', 'wlru' ),
    'description' => '<code>ceil($font-size-base * 1.5)</code>',
    'section'     => 'wlru_jumbotron',
    'settings'    => 'wlru_jumbotron_font_size',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_jumbotron_heading_font_size', array( 'default' => 63 ) );
  $wp_customize->add_control( 'wlru_jumbotron_heading_font_size', array(
    'label'       => __( 'Heading Font Size', 'wlru' ),
    'description' => '<code>ceil($font-size-base * 4.5)</code>',
    'section'     => 'wlru_jumbotron',
    'settings'    => 'wlru_jumbotron_heading_font_size',
    'type'        => 'number',
  ) );
}
