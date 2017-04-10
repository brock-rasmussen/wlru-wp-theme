<?php
add_action( 'customize_register', 'wlru_customize_bs_popovers_register' );
function wlru_customize_bs_popovers_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_popovers', array(
    'title'       => __( 'Popovers', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_popover_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_popover_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_popover_max_width', array( 'default' => 276 ) );
  $wp_customize->add_control( 'wlru_popover_max_width', array(
    'label'       => __( 'Max Width', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_max_width',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_popover_fallback_border_color', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_popover_fallback_border_color', array(
    'label'       => __( 'Border Color', 'wlru' ),
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_fallback_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_popover_title_bg', array( 'default' => '#f7f7f7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_popover_title_bg', array(
    'label'       => __( 'Title Background', 'wlru' ),
    'description' => '<code>darken($popover-bg, 3%)</code>',
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_title_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_popover_arrow_width', array( 'default' => 10 ) );
  $wp_customize->add_control( 'wlru_popover_arrow_width', array(
    'label'       => __( 'Arrow Width', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_arrow_width',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_popover_arrow_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_popover_arrow_color', array(
    'label'       => __( 'Arrow Color', 'wlru' ),
    'description' => '<code>$popover-bg</code>',
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_arrow_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_popover_arrow_outer_width', array( 'default' => 11 ) );
  $wp_customize->add_control( 'wlru_popover_arrow_outer_width', array(
    'label'       => __( 'Arrow Outer Width', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'description' => '<code>$popover-arrow-width + 1</code>',
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_arrow_outer_width',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_popover_arrow_outer_fallback_color', array( 'default' => '#999999' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_popover_arrow_outer_fallback_color', array(
    'label'       => __( 'Arrow Outer Fallback Color', 'wlru' ),
    'description' => '<code>darken($popover-border-color, 20%)</code>',
    'section'     => 'wlru_popovers',
    'settings'    => 'wlru_popover_arrow_outer_fallback_color',
  ) ) );
}
