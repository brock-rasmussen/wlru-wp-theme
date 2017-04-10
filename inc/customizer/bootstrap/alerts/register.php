<?php
add_action( 'customize_register', 'wlru_customize_bs_alerts_register' );
function wlru_customize_bs_alerts_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_alerts', array(
    'title'       => __( 'Alerts', 'wlru' ),
    'description' => '<p><code>$alert-border-radius</code>: <code>$border-radius-base</code></p><p><code>$alert-success-bg</code>: <code>$state-success-bg</code></p><p><code>$alert-success-text</code>: <code>$state-success-text</code></p><p><code>$alert-success-border</code>: <code>$state-success-border</code></p><p><code>$alert-info-bg</code>: <code>$state-info-bg</code></p><p><code>$alert-info-text</code>: <code>$state-info-text</code></p><p><code>$alert-info-border</code>: <code>$state-info-border</code></p><p><code>$alert-warning-bg</code>: <code>$state-warning-bg</code></p><p><code>$alert-warning-text</code>: <code>$state-warning-text</code></p><p><code>$alert-warning-border</code>: <code>$state-warning-border</code></p><p><code>$alert-danger-bg</code>: <code>$state-danger-bg</code></p><p><code>$alert-danger-text</code>: <code>$state-danger-text</code></p><p><code>$alert-danger-border</code>: <code>$state-danger-border</code></p>',
  ) );

  $wp_customize->add_setting( 'wlru_alert_padding', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_alert_padding', array(
    'label'       => __( 'Alert Padding', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_alerts',
    'settings'    => 'wlru_alert_padding',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_alert_link_font_weight', array( 'default' => 'bold' ) );
  $wp_customize->add_control( 'wlru_alert_link_font_weight', array(
    'label'       => __( 'Alert Link Font Weight', 'wlru' ),
    'section'     => 'wlru_alerts',
    'settings'    => 'wlru_alert_link_font_weight',
    'type'        => 'select',
    'choices'     => array(
      'lighter'   => 'Lighter',
      'normal'    => 'Normal',
      'bold'      => 'Bold',
    )
  ) );
}
