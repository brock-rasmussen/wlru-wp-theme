<?php
add_action( 'customize_register', 'wlru_customize_bs_navs_register' );
function wlru_customize_bs_navs_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_navs', array(
    'title'       => __( 'Navs', 'wlru' ),
    'description' => __( '<p>Shared nav styles.</p>', 'wlru' ) . '<p><code>$nav-disabled-link-hover-color</code>: <code>$nav-disabled-link-color</code><p>',
  ) );

  $wp_customize->add_setting( 'wlru_nav_link_padding_vertical', array( 'default' => 10 ) );
  $wp_customize->add_control( 'wlru_nav_link_padding_vertical', array(
    'label'       => __( 'Link Padding Vertical', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_navs',
    'settings'    => 'wlru_nav_link_padding_vertical',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_nav_link_padding_horizontal', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_nav_link_padding_horizontal', array(
    'label'       => __( 'Link Padding Horizontal', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_navs',
    'settings'    => 'wlru_nav_link_padding_horizontal',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_nav_link_hover_bg', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_link_hover_bg', array(
    'label'       => __( 'Link Hover Background', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_navs',
    'settings'    => 'wlru_nav_link_hover_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_nav_disabled_link_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_disabled_link_color', array(
    'label'       => __( 'Disabled Link Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_navs',
    'settings'    => 'wlru_nav_disabled_link_color',
  ) ) );
}
