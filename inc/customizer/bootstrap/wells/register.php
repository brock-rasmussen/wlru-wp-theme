<?php
add_action( 'customize_register', 'wlru_customize_bs_wells_register' );
function wlru_customize_bs_wells_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_wells', array(
    'title'       => __( 'Wells', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_well_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_well_bg', array(
    'label'       => __( 'Well Background', 'wlru' ),
    'section'     => 'wlru_wells',
    'settings'    => 'wlru_well_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_well_border', array( 'default' => '#e3e3e3' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_well_border', array(
    'label'       => __( 'Well Border', 'wlru' ),
    'description' => '<code>darken($well-bg, 7%)</code>',
    'section'     => 'wlru_wells',
    'settings'    => 'wlru_well_border',
  ) ) );

}
