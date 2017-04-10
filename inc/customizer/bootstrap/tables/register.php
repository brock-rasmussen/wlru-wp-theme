<?php
add_action( 'customize_register', 'wlru_customize_bs_tables_register' );
function wlru_customize_bs_tables_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_tables', array(
    'title'       => __( 'Tables', 'wlru' ),
    'description' => '<p><code>$table-bg</code>: transparent</p><p><code>$table-active-bg</code>: <code>$table-hover-bg</code>',
  ) );

  $wp_customize->add_setting( 'wlru_table_cell_padding', array( 'default' => 8 ) );
  $wp_customize->add_control( 'wlru_table_cell_padding', array(
    'label'       => __( 'Cell Padding', 'wlru' ),
    'description' => __( 'Padding for <code>&lt;th&gt;</code> and <code>&lt;td&gt;</code>s. In pixels.', 'wlru' ),
    'section'     => 'wlru_tables',
    'settings'    => 'wlru_table_cell_padding',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_table_condensed_cell_padding', array( 'default' => 5 ) );
  $wp_customize->add_control( 'wlru_table_condensed_cell_padding', array(
    'label'       => __( 'Condensed Cell Padding', 'wlru' ),
    'description' => __( 'Padding for cells in <code>.table-condensed</code>. In pixels.', 'wlru' ),
    'section'     => 'wlru_tables',
    'settings'    => 'wlru_table_condensed_cell_padding',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_table_bg_accent', array( 'default' => '#f9f9f9' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_table_bg_accent', array(
    'label'       => __( 'Background Accent', 'wlru' ),
    'description' => __( 'Background color used for <code>.table-striped</code>.', 'wlru' ),
    'section'     => 'wlru_tables',
    'settings'    => 'wlru_table_bg_accent',
  ) ) );

  $wp_customize->add_setting( 'wlru_table_bg_hover', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_table_bg_hover', array(
    'label'       => __( 'Background Hover', 'wlru' ),
    'description' => __( 'Background color used for <code>.table-hover</code>.', 'wlru' ),
    'section'     => 'wlru_tables',
    'settings'    => 'wlru_table_bg_hover',
  ) ) );

  $wp_customize->add_setting( 'wlru_table_border_color', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_table_border_color', array(
    'label'       => __( 'Border Color', 'wlru' ),
    'description' => __( 'Border color for table and cell borders.', 'wlru' ),
    'section'     => 'wlru_tables',
    'settings'    => 'wlru_table_border_color',
  ) ) );
}
