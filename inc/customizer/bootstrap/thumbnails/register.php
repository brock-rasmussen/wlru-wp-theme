<?php
add_action( 'customize_register', 'wlru_customize_bs_thumbnails_register' );
function wlru_customize_bs_thumbnails_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_thumbnails', array(
    'title'       => __( 'Thumbnails', 'wlru' ),
    'description' => __( '<code>$thumbnail-border-radius</code>: <code>$border-radius-base</code>', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_thumbnail_padding', array( 'default' => 4 ) );
  $wp_customize->add_control( 'wlru_thumbnail_padding', array(
    'label'       => __( 'Padding', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_thumbnails',
    'settings'    => 'wlru_thumbnail_padding',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_thumbnail_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_thumbnail_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'description' => '<code>$body-bg</code>',
    'section'     => 'wlru_thumbnails',
    'settings'    => 'wlru_thumbnail_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_thumbnail_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_thumbnail_border', array(
    'label'       => __( 'Border', 'wlru' ),
    'section'     => 'wlru_thumbnails',
    'settings'    => 'wlru_thumbnail_border',
  ) ) );

  $wp_customize->add_setting( 'wlru_thumbnail_caption_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_thumbnail_caption_color', array(
    'label'       => __( 'Caption Color', 'wlru' ),
    'description' => '<code>$text-color</code>',
    'section'     => 'wlru_thumbnails',
    'settings'    => 'wlru_thumbnail_caption_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_thumbnail_caption_padding', array( 'default' => 9 ) );
  $wp_customize->add_control( 'wlru_thumbnail_caption_padding', array(
    'label'       => __( 'Caption Padding', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_thumbnails',
    'settings'    => 'wlru_thumbnail_caption_padding',
    'type'        => 'number',
  ) );
}
