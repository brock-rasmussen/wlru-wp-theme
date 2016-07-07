<?php
/**
 * wlru Theme Scaffolding Customizer.
 *
 * @package wlru
 */
function wlru_scaffolding_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_scaffolding', array(
    'title'           => __( 'Scaffolding', 'wlru' ),
  ) );

  $body_bg_control = $wp_customize->get_control( 'background_color' );
  $body_bg_control->section = 'wlru_scaffolding';
  $body_bg_control->label   = 'Body Background';

  $wp_customize->add_setting( 'wlru_text_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_text_color', array(
    'label'       => __( 'Text Color', 'wlru' ),
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_text_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_link_color', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_link_color', array(
    'label'       => __( 'Link Color', 'wlru' ),
    'section'     => 'wlru_scaffolding',
    'settings'    => 'wlru_link_color',
  ) ) );
}
add_action( 'customize_register', 'wlru_scaffolding_customize_register' );

function wlru_scaffolding_customize_css() { ?>
  <style type="text/css" id="wlru-scaffolding">
    <?php $body_bg = get_background_color(); ?>
    .table .table { background-color: <?php echo $body_bg; ?>; }

		<?php $text_color = get_theme_mod( 'wlru_text_color', '#555555' ); ?>
		body,
		.thumbnail .caption {
      color: <?php echo $text_color; ?>;
    }
		.help-block { color: <?php echo hex2hsl( $text_color, 25 ); ?>; }

		<?php $link_color = get_theme_mod( 'wlru_link_color', '#337ab7' ); ?>
		a,
    .btn-link,
		.pagination > li > a,
		.pagination > li > span,
		.list-group-item.active > .badge,
		.nav-pills > .active > a > .badge {
      color: <?php echo $link_color; ?>;
    }
		.open > a,
		.open > a:hover,
		.open > a:focus,
		a.thumbnail:hover,
		a.thumbnail:focus,
		a.thumbnail.active {
      border-color: <?php echo $link_color; ?>;
    }
		a:hover,
		a:focus,
		.btn-link:hover,
		.btn-link:focus,
		.pagination > li > a:hover,
		.pagination > li > a:focus,
		.pagination > li > span:hover,
		.pagination > li > span:focus {
      color: <?php echo hex2hsl( $link_color, -15 ); ?>;
    }
  </style>
<?php }
add_action( 'wp_head', 'wlru_scaffolding_customize_css' );
