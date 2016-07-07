<?php
/**
 * wlru Theme Typography Customizer.
 *
 * @package wlru
 */
function wlru_typography_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_typography', array(
    'title'       => __( 'Typography', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_font_family_base', array( 'default' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ) );
  $wp_customize->add_control( 'wlru_font_family_base', array(
    'label'       => __( 'Font Family Base', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_font_family_base',
  ) );

  $wp_customize->add_setting( 'wlru_headings_font_family', array( 'default' => 'inherit' ) );
  $wp_customize->add_control( 'wlru_headings_font_family', array(
    'label'       => __( 'Headings Font Family', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_font_family',
  ) );

  $wp_customize->add_setting( 'wlru_headings_font_weight', array( 'default' => 500 ) );
  $wp_customize->add_control( 'wlru_headings_font_weight', array(
    'label'       => __( 'Headings Font Weight', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_font_weight',
    'type'        => 'select',
    'choices'     => array(
      100         => 100,
      200         => 200,
      300         => 300,
      400         => 400,
      500         => 500,
      600         => 600,
      700         => 700,
      800         => 800,
      900         => 900
    )
  ) );

  $wp_customize->add_setting( 'wlru_headings_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_headings_color', array(
    'label'       => __( 'Headings Color', 'wlru' ),
    'description' => __( 'Headings inside a link will use the Link Color defined in the "Scaffolding" section.', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_headings_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_google_fonts_link', array( 'default' => '' ) );
  $wp_customize->add_control( 'wlru_google_fonts_link', array(
    'label'       => __( 'Google Fonts Link', 'wlru' ),
    'description' => __( 'Paste the entire link code provided by Google Fonts.'),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_google_fonts_link',
    'type'        => 'textarea',
  ) );
}
add_action( 'customize_register', 'wlru_typography_customize_register' );

function wlru_typography_customize_css() { ?>
  <style type="text/css" id="wlru-typography">
    <?php $font_family_base = get_theme_mod( 'wlru_font_family_base', '"Helvetica Neue", Helvetica, Arial, sans-serif' ); ?>
    body,
    .tooltip,
    .popover { font-family: <?php echo $font_family_base; ?>; }

    <?php
    $headings_color = get_theme_mod( 'wlru_headings_color', '#555555' );
    $headings_font_family = get_theme_mod( 'wlru_headings_font_family', 'inherit' );
    $headings_font_weight = get_theme_mod( 'wlru_headings_font_weight', 500 );
    ?>
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
      color: <?php echo $headings_color; ?>;
      font-family: <?php echo $headings_font_family; ?>;
      font-weight: <?php echo $headings_font_weight; ?>;
    }
  </style>
<?php }
add_action( 'wp_head', 'wlru_typography_customize_css' );
