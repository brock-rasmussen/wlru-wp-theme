<?php
function wallarooster_custom_header_setup() {
  add_theme_support( 'custom-header', apply_filters( 'wallarooster_custom_header_args', array(
    'deafult-image'       => '',
    'default-text-color'  => '000000',
    'width'               => 1000,
    'height'              => 250,
    'flex-height'         => true,
    'wp-head-callback'    => 'wallarooster_header_style',
  ) ) );
}
add_action( 'after_setup_theme', 'wallarooster_custom_header_setup' );

if ( ! function_exists( 'wallarooster_header_style' ) ) :
function wallarooster_header_style() {
  $header_text_color = get_header_textcolor();

  if ( HEADER_TEXTCOLOR === $header_text_color ) {
    return;
  }
  ?>
  <style type="text/css">
  <?php
    if ( ! display_header_text() ) :
  ?>
    .navbar-brand {
      padding: 0;
    }
    .site-title,
    .site-description {
      position: absolute;
      clip: rect(1px, 1px, 1px, 1px);
    }
  <?php
    else :
  ?>
    .site-title a,
    .site-description {
      color: #<?php echo esc_attr( $header_text_color ); ?>;
    }
  <?php endif; ?>
  </style>
  <?php
}
endif;
