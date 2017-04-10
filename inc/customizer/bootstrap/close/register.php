<?php
add_action( 'customize_register', 'wlru_customize_bs_close_register' );
function wlru_customize_bs_close_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_close', array(
    'title'       => __( 'Close', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_close_font_weight', array( 'default' => 'bold' ) );
  $wp_customize->add_control( 'wlru_close_font_weight', array(
    'label'       => __( 'Font Weight', 'wlru' ),
    'section'     => 'wlru_close',
    'settings'    => 'wlru_close_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );

  $wp_customize->add_setting( 'wlru_close_color', array( 'default' => '#000000' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_close_color', array(
    'label'       => __( 'Color', 'wlru' ),
    'section'     => 'wlru_close',
    'settings'    => 'wlru_close_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_close_text_shadow', array( 'default' => '0 1px 0 #fff' ) );
  $wp_customize->add_control( 'wlru_close_text_shadow', array(
    'label'       => __( 'Text Shadow', 'wlru' ),
    'description' => '<code>horizontal-shadow vertical-shadow blur-radius color</code>',
    'section'     => 'wlru_close',
    'settings'    => 'wlru_close_text_shadow',
  ) );
}
