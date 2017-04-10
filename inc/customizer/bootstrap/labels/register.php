<?php
add_action( 'customize_register', 'wlru_customize_bs_labels_register' );
function wlru_customize_bs_labels_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_labels', array(
    'title'       => __( 'Labels', 'wlru' ),
    'description' => '<p><code>$label-primary-bg</code>: <code>$brand-primary</code></p><p><code>$label-success-bg</code>: <code>$brand-success</code></p><p><code>$label-info-bg</code>: <code>$brand-info</code></p><p><code>$label-warning-bg</code>: <code>$brand-warning</code></p><p><code>$label-danger-bg</code>: <code>$brand-danger</code></p>',
  ) );

  $wp_customize->add_setting( 'wlru_label_default_bg', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_label_default_bg', array(
    'label'       => __( 'Default Background', 'wlru' ),
    'description' => '<code>$gray-light</code>',
    'section'     => 'wlru_labels',
    'settings'    => 'wlru_label_default_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_label_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_label_color', array(
    'label'       => __( 'Color', 'wlru' ),
    'section'     => 'wlru_labels',
    'settings'    => 'wlru_label_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_label_link_hover_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_label_link_hover_color', array(
    'label'       => __( 'Link Hover Color', 'wlru' ),
    'section'     => 'wlru_labels',
    'settings'    => 'wlru_label_link_hover_color',
  ) ) );

}
