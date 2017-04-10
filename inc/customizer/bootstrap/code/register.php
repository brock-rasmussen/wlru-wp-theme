<?php
add_action( 'customize_register', 'wlru_customize_bs_code_register' );
function wlru_customize_bs_code_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_code', array(
    'title'       => __( 'Code', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_code_color', array( 'default' => '#c7254e' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_code_color', array(
    'label'       => __( 'Code Color', 'wlru' ),
    'section'     => 'wlru_code',
    'settings'    => 'wlru_code_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_code_bg', array( 'default' => '#f9f2f4' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_code_bg', array(
    'label'       => __( 'Code Background', 'wlru' ),
    'section'     => 'wlru_code',
    'settings'    => 'wlru_code_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_kbd_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_kbd_color', array(
    'label'       => __( 'Keyboard Color ', 'wlru' ),
    'section'     => 'wlru_code',
    'settings'    => 'wlru_kbd_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_kbd_bg', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_kbd_bg', array(
    'label'       => __( 'Keyboard Background ', 'wlru' ),
    'section'     => 'wlru_code',
    'settings'    => 'wlru_kbd_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_pre_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pre_color', array(
    'label'       => __( 'Pre Color ', 'wlru' ),
    'description' => '<code>$gray-dark</code>',
    'section'     => 'wlru_code',
    'settings'    => 'wlru_pre_color',
    ) ) );

  $wp_customize->add_setting( 'wlru_pre_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pre_bg', array(
    'label'       => __( 'Pre Background ', 'wlru' ),
    'section'     => 'wlru_code',
    'settings'    => 'wlru_pre_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_pre_border_color', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_pre_border_color', array(
    'label'       => __( 'Pre Border Color ', 'wlru' ),
    'section'     => 'wlru_code',
    'settings'    => 'wlru_pre_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_pre_scrollable_max_height', array( 'default' => 340 ) );
  $wp_customize->add_control( 'wlru_pre_scrollable_max_height', array(
    'label'       => __( 'Pre Scrollable Max Height', 'wlru' ),
    'section'     => 'wlru_code',
    'settings'    => 'wlru_pre_scrollable_max_height',
    'type'        => 'number',
  ) );
}
