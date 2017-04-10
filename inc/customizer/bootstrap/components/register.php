<?php
add_action( 'customize_register', 'wlru_customize_bs_components_register' );
function wlru_customize_bs_components_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_components', array(
    'title'       => __( 'Components', 'wlru' ),
    'description' => __( 'Define common padding and border radius sizes and more. Values based on 14px text and 1.428 line-height (~20px to start).', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_padding_base_vertical', array( 'default' => 6 ) );
  $wp_customize->add_control( 'wlru_padding_base_vertical', array(
    'label'       => __( 'Padding Base Vertical', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_base_vertical',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_padding_base_horizontal', array( 'default' => 12 ) );
  $wp_customize->add_control( 'wlru_padding_base_horizontal', array(
    'label'       => __( 'Padding Base Horizontal', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_base_horizontal',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_padding_large_vertical', array( 'default' => 10 ) );
  $wp_customize->add_control( 'wlru_padding_large_vertical', array(
    'label'       => __( 'Padding Large Vertical', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_large_vertical',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_padding_large_horizontal', array( 'default' => 16 ) );
  $wp_customize->add_control( 'wlru_padding_large_horizontal', array(
    'label'       => __( 'Padding Large Horizontal', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_large_horizontal',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_padding_small_vertical', array( 'default' => 5 ) );
  $wp_customize->add_control( 'wlru_padding_small_vertical', array(
    'label'       => __( 'Padding Small Vertical', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_small_vertical',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_padding_small_horizontal', array( 'default' => 10 ) );
  $wp_customize->add_control( 'wlru_padding_small_horizontal', array(
    'label'       => __( 'Padding Small Horizontal', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_small_horizontal',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_padding_xs_vertical', array( 'default' => 1 ) );
  $wp_customize->add_control( 'wlru_padding_xs_vertical', array(
    'label'       => __( 'Padding XS Vertical', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_xs_vertical',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_padding_xs_horizontal', array( 'default' => 5 ) );
  $wp_customize->add_control( 'wlru_padding_xs_horizontal', array(
    'label'       => __( 'Padding XS Horizontal', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_padding_xs_horizontal',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_line_height_large', array( 'default' => 1.3333333 ) );
  $wp_customize->add_control( 'wlru_line_height_large', array(
    'label'       => __( 'Line Height Large', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_line_height_large',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_line_height_small', array( 'default' => 1.5 ) );
  $wp_customize->add_control( 'wlru_line_height_small', array(
    'label'       => __( 'Line Height Small', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_line_height_small',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_border_radius_base', array( 'default' => 4 ) );
  $wp_customize->add_control( 'wlru_border_radius_base', array(
    'label'       => __( 'Border Radius Base', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_border_radius_base',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_border_radius_large', array( 'default' => 6 ) );
  $wp_customize->add_control( 'wlru_border_radius_large', array(
    'label'       => __( 'Border Radius Large', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_border_radius_large',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_border_radius_small', array( 'default' => 3 ) );
  $wp_customize->add_control( 'wlru_border_radius_small', array(
    'label'       => __( 'Border Radius Small', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_border_radius_small',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_component_active_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_component_active_color', array(
    'label'       => __( 'Component Active Color', 'wlru' ),
    'description' => __( 'Global color for active items (e.g., navs or dropdowns).', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_component_active_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_component_active_bg', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_component_active_bg', array(
    'label'       => __( 'Component Active Background', 'wlru' ),
    'description' => '<code>$brand-primary</code> ' . __( 'Global background color for active items (e.g., navs or dropdowns).', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_component_active_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_caret_width_base', array( 'default' => 4 ) );
  $wp_customize->add_control( 'wlru_caret_width_base', array(
    'label'       => __( 'Caret Width Base', 'wlru' ),
    'description' => __( 'Width of the border for generating carets that indicate dropdowns. In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_caret_width_base',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_caret_width_large', array( 'default' => 5 ) );
  $wp_customize->add_control( 'wlru_caret_width_large', array(
    'label'       => __( 'Caret Width Large', 'wlru' ),
    'description' => __( 'Carets increase slightly in size for larger components. In pixels.', 'wlru' ),
    'section'     => 'wlru_components',
    'settings'    => 'wlru_caret_width_large',
    'type'        => 'number',
  ) );
}
