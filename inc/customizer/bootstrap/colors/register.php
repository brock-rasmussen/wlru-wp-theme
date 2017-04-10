<?php
add_action( 'customize_register', 'wlru_customize_bs_colors_register' );
function wlru_customize_bs_colors_register( $wp_customize ) {
  $wp_customize->get_section( 'colors' )->description = '<p>' . __( 'Gray and brand colors for use across Bootstrap.', 'wlru' ) . '</p><p><code>$gray-darker</code>: #222</p><p><code>$gray-dark</code>: #333</p><p><code>$gray</code>: #555</p><p><code>$gray-light</code>: #777</p><p><code>$gray-lighter</code>: #eee</p>';
  $wp_customize->get_section( 'colors' )->priority = 130;

  $wp_customize->add_setting( 'wlru_brand_primary', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_primary', array(
    'label'       => __( 'Primary', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_primary',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_success', array( 'default' => '#5cb85c' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_success', array(
    'label'       => __( 'Success', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_success',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_info', array( 'default' => '#5bc0de' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_info', array(
    'label'       => __( 'Info', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_info',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_warning', array( 'default' => '#f0ad4e' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_warning', array(
    'label'       => __( 'Warning', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_warning',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_danger', array( 'default' => '#d9534f' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_danger', array(
    'label'       => __( 'Danger', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_danger',
  ) ) );
}
