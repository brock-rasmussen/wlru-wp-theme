<?php
add_action( 'customize_register', 'wlru_customize_bs_scaffolding_register' );
function wlru_customize_bs_scaffolding_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_scaffolding', array(
    'title'       => __( 'Scaffolding', 'wlru' ),
    'description' => '<p>' . __( 'Settings for some of the most global styles.', 'wlru' ) . '</p>',
  ) );

  $wp_customize->add_setting( 'wlru_body_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_body_bg', array(
    'label'       => __( 'Body Background', 'wlru' ),
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_body_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_text_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_text_color', array(
    'label'       => __( 'Text Color', 'wlru' ),
    'description' => '<code>$gray-dark</code>',
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_text_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_link_color', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_link_color', array(
    'label'       => __( 'Link Color', 'wlru' ),
    'description' => '<code>$brand-primary</code>',
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_link_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_link_hover_color', array( 'default' => '#23527c' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_link_hover_color', array(
    'label'       => __( 'Link Hover Color', 'wlru' ),
    'description' => '<code>darken($brand-primary, 15%)</code>',
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_link_hover_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_link_hover_decoration', array( 'default' => 'underline' ) );
  $wp_customize->add_control( 'wlru_link_hover_decoration', array(
    'label'       => __( 'Link Hover Decoration', 'wlru' ),
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_link_hover_decoration',
    'type'        => 'select',
    'choices'     => array(
      'none'          => 'None',
      'underline'     => 'Underline',
      'overline'      => 'Overline',
      'line-through'  => 'Line Through',
    ),
  ) );
}
