<?php
add_action( 'customize_register', 'wlru_customize_bs_pager_register' );
function wlru_customize_bs_pager_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_pager', array(
    'title'       => __( 'Pager', 'wlru' ),
    'description' => '<p><code>$pager-bg</code>: <code>$pagination-bg</code></p><p><code>$pager-border</code>: <code>$pagination-border</code></p><p><code>$pager-hover-bg</code>: <code>$pagination-hover-bg</code></p><p><code>$pager-active-bg</code>: <code>$pagination-active-bg</code></p><p><code>$pager-active-color</code>: <code>$pagination-active-color</code></p><p><code>$pager-disabled-color</code>: <code>$pagination-disabled-color</code></p>',
  ) );

  $wp_customize->add_setting( 'wlru_pager_border_radius', array( 'default' => 15 ) );
  $wp_customize->add_control( 'wlru_pager_border_radius', array(
    'label'       => __( 'Border Radius', 'wlru' ),
    'description' => __( 'In pixels.', 'wlru' ),
    'section'     => 'wlru_pager',
    'settings'    => 'wlru_pager_border_radius',
    'type'        => 'number',
  ) );
}
