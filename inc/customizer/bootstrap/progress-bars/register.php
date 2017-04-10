<?php
add_action( 'customize_register', 'wlru_customize_bs_progress_bars_register' );
function wlru_customize_bs_progress_bars_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_progress_bars', array(
    'title'       => __( 'Progress Bars', 'wlru' ),
    'description' => '<p><code>$progress-border-radius</code>: <code>$border-radius-base</code></p><p><code>$progress-bar-bg</code>: <code>$brand-primary</code></p><p><code>$progress-bar-success-bg</code>: <code>$brand-success</code></p><p><code>$progress-bar-info-bg</code>: <code>$brand-info</code></p><p><code>$progress-bar-warning-bg</code>: <code>$brand-warning</code></p><p><code>$progress-bar-danger-bg</code>: <code>$brand-danger</code></p>',
  ) );

  $wp_customize->add_setting( 'wlru_progress_bg', array( 'default' => '#f5f5f5' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_progress_bg', array(
    'label'           => __( 'Progress Background', 'wlru' ),
    'section'         => 'wlru_progress_bars',
    'settings'        => 'wlru_progress_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_progress_bar_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_progress_bar_color', array(
    'label'           => __( 'Progress Bar Color', 'wlru' ),
    'section'         => 'wlru_progress_bars',
    'settings'        => 'wlru_progress_bar_color',
  ) ) );
}
