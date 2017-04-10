<?php
add_action( 'customize_register', 'wlru_customize_bs_typography_register' );
function wlru_customize_bs_typography_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_typography', array(
    'title'       => __( 'Typography', 'wlru' ),
    'description' => '<p>' . __( 'Font, line-height, and color for body text, headings, and more.', 'wlru' ) . '</p><p><code>$headings-font-weight</code> ' . __( 'replaced with individual settings for h1-6', 'wlru' ) . '</p>',
  ) );

  $wp_customize->add_setting( 'wlru_font_family_base', array( 'default' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ) );
  $wp_customize->add_control( 'wlru_font_family_base', array(
    'label'       => __( 'Font Family Base', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_family_base',
  ) );

  $wp_customize->add_setting( 'wlru_font_size_base', array( 'default' => 14 ) );
  $wp_customize->add_control( 'wlru_font_size_base', array(
    'label'       => __( 'Font Size Base', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_base',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_font_size_large', array( 'default' => 18 ) );
  $wp_customize->add_control( 'wlru_font_size_large', array(
    'label'       => __( 'Font Size Large', 'wlru' ),
    'description' => '<code>ceil($font-size-base * 1.25)</code><br>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_large',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_font_size_small', array( 'default' => 12 ) );
  $wp_customize->add_control( 'wlru_font_size_small', array(
    'label'       => __( 'Font Size Small', 'wlru' ),
    'description' => '<code>ceil($font-size-base * 0.85)</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_small',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_font_size_h1', array( 'default' => 36 ) );
  $wp_customize->add_control( 'wlru_font_size_h1', array(
    'label'       => __( 'Font Size H1', 'wlru' ),
    'description' => '<code>floor($font-size-base * 2.6)</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_h1',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_headings_h1_font_weight', array( 'default' => 'normal' ) );
  $wp_customize->add_control( 'wlru_headings_h1_font_weight', array(
    'label'       => __( 'Font Weight H1', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_h1_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_font_size_h2', array( 'default' => 30 ) );
  $wp_customize->add_control( 'wlru_font_size_h2', array(
    'label'       => __( 'Font Size H2', 'wlru' ),
    'description' => '<code>floor($font-size-base * 2.15)</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_h2',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_headings_h2_font_weight', array( 'default' => 'normal' ) );
  $wp_customize->add_control( 'wlru_headings_h2_font_weight', array(
    'label'       => __( 'Font Weight H2', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_h2_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_font_size_h3', array( 'default' => 24 ) );
  $wp_customize->add_control( 'wlru_font_size_h3', array(
    'label'       => __( 'Font Size H3', 'wlru' ),
    'description' => '<code>ceil($font-size-base * 1.7)</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_h3',
    'type'        => 'number',
  ) );


  $wp_customize->add_setting( 'wlru_headings_h3_font_weight', array( 'default' => 'normal' ) );
  $wp_customize->add_control( 'wlru_headings_h3_font_weight', array(
    'label'       => __( 'Font Weight H3', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_h3_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_font_size_h4', array( 'default' => 18 ) );
  $wp_customize->add_control( 'wlru_font_size_h4', array(
    'label'       => __( 'Font Size H4', 'wlru' ),
    'description' => '<code>ceil($font-size-base * 1.25)</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_h4',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_headings_h4_font_weight', array( 'default' => 'normal' ) );
  $wp_customize->add_control( 'wlru_headings_h4_font_weight', array(
    'label'       => __( 'Font Weight H4', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_h4_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_font_size_h5', array( 'default' => 14 ) );
  $wp_customize->add_control( 'wlru_font_size_h5', array(
    'label'       => __( 'Font Size H5', 'wlru' ),
    'description' => '<code>$font-size-base</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_h5',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_headings_h5_font_weight', array( 'default' => 'normal' ) );
  $wp_customize->add_control( 'wlru_headings_h5_font_weight', array(
    'label'       => __( 'Font Weight H5', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_h5_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_font_size_h6', array( 'default' => 12 ) );
  $wp_customize->add_control( 'wlru_font_size_h6', array(
    'label'       => __( 'Font Size H6', 'wlru' ),
    'description' => '<code>ceil($font-size-base * 0.85)</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_size_h6',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_headings_h6_font_weight', array( 'default' => 'normal' ) );
  $wp_customize->add_control( 'wlru_headings_h6_font_weight', array(
    'label'       => __( 'Font Weight H6', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_h6_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_line_height_base', array( 'default' => 1.428571429 ) );
  $wp_customize->add_control( 'wlru_line_height_base', array(
    'label'       => __( 'Line Height Base', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_line_height_base',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_headings_font_family', array( 'default' => 'inherit' ) );
  $wp_customize->add_control( 'wlru_headings_font_family', array(
    'label'       => __( 'Headings Font Family', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_font_family',
  ) );

  $wp_customize->add_setting( 'wlru_headings_line_height', array( 'default' => 1.1 ) );
  $wp_customize->add_control( 'wlru_headings_line_height', array(
    'label'       => __( 'Headings Line Height', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_line_height',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_headings_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_headings_color', array(
    'label'       => __( 'Headings Color', 'wlru' ),
    'description' => '<code>$text-color</code>',
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_color',
  ) ) );
}
