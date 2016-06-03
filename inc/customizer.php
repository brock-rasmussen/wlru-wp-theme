<?php
function wallarooster_customize_register( $wp_customize ) {
  // colors
  require get_template_directory() . '/inc/customizer-inc/colors.php';
  require get_template_directory() . '/inc/customizer-inc/typography.php';
}
add_action( 'customize_register', 'wallarooster_customize_register' );
