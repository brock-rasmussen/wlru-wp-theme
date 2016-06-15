<?php
$wp_customize->add_section( 'wlru_typography', array(
  'title'       => __( 'Typography', 'wlru' ),
  'priority'    => 30,
) );

$wp_customize->add_setting( 'google_fonts_link', array(
  'default'     => '<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Roboto+Slab" rel="stylesheet">',
) );
$wp_customize->add_control( 'wlru_google_fonts_link', array(
  'label'       => __( 'Google Fonts Link', 'wlru' ),
  'section'     => 'wlru_typography',
  'settings'    => 'google_fonts_link',
) );

$wp_customize->add_setting( 'font_family_base', array(
  'default'     => '"Open Sans", sans-serif',
) );
$wp_customize->add_control( 'wlru_font_family_base', array(
  'label'       => __( 'Font family base', 'wlru' ),
  'section'     => 'wlru_typography',
  'settings'    => 'font_family_base',
) );

$wp_customize->add_setting( 'headings_font_family', array(
  'default'     => '"Roboto Slab", serif',
) );
$wp_customize->add_control( 'wlru_headings_font_family', array(
  'label'       => __( 'Headings font family', 'wlru' ),
  'section'     => 'wlru_typography',
  'settings'    => 'headings_font_family',
) );

$wp_customize->add_setting( 'headings_font_weight', array(
  'default'     => '400',
) );
$wp_customize->add_control( 'wlru_headings_font_weight', array(
  'label'       => __( 'Headings font weight', 'wlru' ),
  'section'     => 'wlru_typography',
  'settings'    => 'headings_font_weight',
) );
