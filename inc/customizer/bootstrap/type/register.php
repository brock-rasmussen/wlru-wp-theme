<?php
add_action( 'customize_register', 'wlru_customize_bs_type_register' );
function wlru_customize_bs_type_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_type', array(
    'title'       => __( 'Type', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_text_muted', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_text_muted', array(
    'label'       => __( 'Text Muted', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_type',
    'settings'    => 'wlru_text_muted',
  ) ) );

  $wp_customize->add_setting( 'wlru_abbr_border_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_abbr_border_color', array(
    'label'       => __( 'Abbreviation Border Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_type',
    'settings'    => 'wlru_abbr_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_headings_small_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_headings_small_color', array(
    'label'       => __( 'Headings Small Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_type',
    'settings'    => 'wlru_headings_small_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_blockquote_small_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_blockquote_small_color', array(
    'label'       => __( 'Blockquote Small Color', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_type',
    'settings'    => 'wlru_blockquote_small_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_blockquote_font_size', array( 'default' => 17.5 ) );
  $wp_customize->add_control( 'wlru_blockquote_font_size', array(
    'label'       => __( 'Blockquote Font Size', 'wlru' ),
    'description' => '<code>$font-size-base * 1.25</code>',
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_type',
    'settings'    => 'wlru_blockquote_font_size',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_blockquote_border_color', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_blockquote_border_color', array(
    'label'       => __( 'Blockquote Border Color', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_type',
    'settings'    => 'wlru_blockquote_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_page_header_border_color', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_page_header_border_color', array(
    'label'       => __( 'Page Header Border Color', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_type',
    'settings'    => 'wlru_page_header_border_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_dl_horizontal_offset', array( 'default' => 180 ) );
  $wp_customize->add_control( 'wlru_dl_horizontal_offset', array(
    'label'       => __( 'Definition List Horizontal Offset', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_type',
    'settings'    => 'wlru_dl_horizontal_offset',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_hr_border', array( 'default' => '#eeeeee' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_hr_border', array(
    'label'       => __( 'Horizontal Rule Border', 'wlru' ),
    'description' => '<code>$gray-lighter</code>',
    'section'     => 'wlru_type',
    'settings'    => 'wlru_hr_border',
  ) ) );
}
