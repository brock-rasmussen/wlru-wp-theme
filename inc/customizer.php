<?php
/**
 * wlru Theme Customizer.
 *
 * @package wlru
 */

// Customizer Settings
add_action( 'customize_register', 'wlru_customize_settings_register' );
function wlru_customize_settings_register( $wp_customize ) {
  $wp_customize->remove_control( 'header_textcolor' );

  $wp_customize->add_setting( 'wlru_theme_color', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_theme_color', array(
    'label'       => __( 'Theme Color', 'wlru' ),
    'description' => __( 'Color suggested to browsers and OSes for use if they customize the display of individual pages in their UIs with varying colors.', 'wlru' ),
    'section'     => 'title_tagline',
    'settings'    => 'wlru_theme_color',
    'priority'    => 9,
  ) ) );

  /* SCAFFOLDING */
  $wp_customize->add_setting( 'wlru_text_section_max_width', array( 'default' => '70ch' ) );
  $wp_customize->add_control( 'wlru_text_section_max_width', array(
    'label'       => __( 'Text Section Max Width', 'wlru' ),
    'description' => '<code>.text-section</code>',
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_text_section_max_width',
    'priority'    => 9,
  ) );

  $wp_customize->add_setting( 'wlru_pagination', array( 'default' => 'pager' ) );
  $wp_customize->add_control( 'wlru_pagination', array(
    'label'       => __( 'Pagination', 'wlru' ),
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_pagination',
    'type'        => 'select',
    'choices'     => array(
      'pager'       => 'Pager',
      'pagination'  => 'Pagination'
    ),
    'priority'    => 9,
  ) );

  /* TYPOGRAPHY */
  $wp_customize->add_setting( 'wlru_google_fonts_link', array( 'default' => '' ) );
  $wp_customize->add_control( 'wlru_google_fonts_link', array(
    'label'       => __( 'Google Fonts Link', 'wlru' ),
    'section'     => 'wlru_typography',
    'settings'    => 'wlru_google_fonts_link',
    'type'        => 'textarea',
  ) );

  /* BUTTONS */
  $wp_customize->add_setting( 'wlru_btn_font_family', array( 'default' => 'inherit' ) );
  $wp_customize->add_control( 'wlru_btn_font_family', array(
    'label'       => __( 'Font Family', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_font_family',
    'priority'    => 9,
  ) );
}

// Customizer CSS
require get_template_directory() . '/inc/customizer/sass/color-functions.php';
require get_template_directory() . '/inc/customizer/bootstrap/bootstrap.php';

add_action( 'wp_head', 'wlru_customize_settings_css' );
function wlru_customize_settings_css() { ?>
<style type="text/css" id="wlru-settings">
<?php // SCAFFOLDING ?>
.text-section { max-width: <?php echo get_theme_mod( 'wlru_text_section_max_width', '70ch' ); ?>; }<?php


// BUTTONS
$btn_font_family = get_theme_mod( 'wlru_btn_font_family', 'inherit' );
if ( $btn_font_family !== 'inherit' ) : ?>
.btn { font-family: <?php echo $btn_font_family; ?>; }
<?php endif; ?>
</style>
<?php }
