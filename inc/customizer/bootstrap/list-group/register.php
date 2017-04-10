<?php
add_action( 'customize_register', 'wlru_customize_bs_list_group_register' );
function wlru_customize_bs_list_group_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_list_group', array(
    'title'       => __( 'List Group', 'wlru' ),
    'description' => '<p><code>$list-group-border-radius</code>: <code>$border-radius-base</code></p>
    <p><code>$list-group-active-color</code>: <code>$component-active-color</code></p>
    <p><code>$list-group-active-bg</code>: <code>$component-active-bg</code></p>
    <p><code>$list-group-active-border</code>: <code>$list-group-active-bg</code></p>
    <p><code>$list-group-active-text-color</code>: <code>lighten($list-group-active-bg, 40%)</code></p>
    <p><code>$list-group-disabled-text-color</code>: <code>$list-group-disabled-color</code></p>',
  ) );

  $wp_customize->add_setting( 'wlru_list_group_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_list_group_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_border', array(
    'label'       => __( 'Border', 'wlru' ),
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_list_group_hover_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_hover_bg', array(
    'label'       => __( 'Hover Background', 'wlru' ),
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_hover_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_list_group_disabled_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_disabled_color', array(
    'label'       => __( 'Disabled Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_disabled_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_list_group_disabled_bg', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_disabled_bg', array(
    'label'       => __( 'Disabled Background', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_disabled_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_list_group_link_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_link_color', array(
    'label'       => __( 'Link Color', 'wlru' ),
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_link_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_list_group_link_hover_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_link_hover_color', array(
    'label'       => __( 'Link Hover Color', 'wlru' ),
    'description' => '<code>$list-group-link-color</code>',
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_link_hover_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_list_group_link_heading_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_list_group_link_heading_color', array(
    'label'       => __( 'Link Heading Color', 'wlru' ),
    'section'     => 'wlru_list_group',
    'settings'    => 'wlru_list_group_link_heading_color',
  ) ) );
}
