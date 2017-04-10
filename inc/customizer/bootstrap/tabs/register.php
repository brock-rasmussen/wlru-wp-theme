<?php
add_action( 'customize_register', 'wlru_customize_bs_tabs_register' );
function wlru_customize_bs_tabs_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_tabs', array(
    'title'     => __( 'Tabs', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_nav_tabs_border_color', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_tabs_border_color', array(
    'label'       => __( 'Border Color', 'wlru' ),
    'section'     => 'wlru_tabs',
    'settings'    => 'wlru_nav_tabs_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_nav_tabs_link_hover_border_color', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_tabs_link_hover_border_color', array(
    'label'       => __( 'Link Hover Border Color', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_tabs',
    'settings'    => 'wlru_nav_tabs_link_hover_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_nav_tabs_active_link_hover_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_tabs_active_link_hover_bg', array(
    'label'       => __( 'Active Link Hover Background', 'wlru' ),
    'description' => '<code>$body-bg</code>',
    'section'     => 'wlru_tabs',
    'settings'    => 'wlru_nav_tabs_active_link_hover_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_nav_tabs_active_link_hover_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_tabs_active_link_hover_color', array(
    'label'       => __( 'Active Link Hover Color', 'wlru' ),
    'description' => '<code>$gray</code>',
    'section'     => 'wlru_tabs',
    'settings'    => 'wlru_nav_tabs_active_link_hover_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_nav_tabs_active_link_hover_border_color', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_tabs_active_link_hover_border_color', array(
    'label'       => __( 'Active Link Hover Border Color', 'wlru' ),
    'section'     => 'wlru_tabs',
    'settings'    => 'wlru_nav_tabs_active_link_hover_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_nav_tabs_justified_link_border_color', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_tabs_justified_link_border_color', array(
    'label'       => __( 'Justified Link Border Color', 'wlru' ),
    'section'     => 'wlru_tabs',
    'settings'    => 'wlru_nav_tabs_justified_link_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_nav_tabs_justified_active_link_border_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_nav_tabs_justified_active_link_border_color', array(
    'label'       => __( 'Justified Active Link Border Color', 'wlru' ),
    'description' => '<code>$body-bg</code>',
    'section'     => 'wlru_tabs',
    'settings'    => 'wlru_nav_tabs_justified_active_link_border_color',
  ) ) );

}
