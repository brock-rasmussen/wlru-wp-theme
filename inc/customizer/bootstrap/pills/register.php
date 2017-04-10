<?php
add_action( 'customize_register', 'wlru_customize_bs_pills_register' );
function wlru_customize_bs_pills_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_pills', array(
    'title'       => __( 'Pills', 'wlru' ),
    'description' => '<p><code>$nav-pills-border-radius</code>: <code>$border-radius-base</code><p><p><code>$nav-pills-active-link-hover-bg</code>: <code>$component-active-bg</code><p><p><code>$nav-pills-active-link-hover-color</code>: <code>$component-active-color</code><p>',
  ) );
}
