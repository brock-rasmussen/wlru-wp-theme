<?php
/**
 * wlru Theme Navbar Customizer.
 *
 * @package wlru
 */
function wlru_navbar_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_navbar', array(
    'title'       => __( 'Navbar', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_navbar_height', array( 'default' => 50 ) );
  $wp_customize->add_control( 'wlru_navbar_height', array(
    'label'       => __( 'Navbar Height', 'wlru' ),
    'description' => __( 'In <code>px</code>.', 'wlru' ),
    'section'     => 'wlru_navbar',
    'settings'    => 'wlru_navbar_height',
    'type'        => 'number',
  ) );

  $wp_customize->add_setting( 'wlru_navbar_mode', array( 'default' => 'navbar-default' ) );
  $wp_customize->add_control( 'wlru_navbar_mode', array(
    'label'       => __( 'Navbar Mode', 'wlru' ),
    'section'     => 'wlru_navbar',
    'settings'    => 'wlru_navbar_mode',
    'type'        => 'select',
    'choices'     => array(
      'navbar-default'  => 'Default',
      'navbar-inverse'  => 'Inverse',
    ),
  ) );

  $wp_customize->add_setting( 'wlru_navbar_default_color', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_color', array(
    'label'           => __( 'Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_color', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_color', array(
    'label'           => __( 'Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_bg', array( 'default' => '#f8f8f8' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_bg', array(
    'label'           => __( 'Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_bg', array( 'default' => '#222222' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_bg', array(
    'label'           => __( 'Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_border', array( 'default' => '#e7e7e7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_border', array(
    'label'           => __( 'Border', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_border',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_border', array( 'default' => '#080808' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_border', array(
    'label'           => __( 'Border', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_border',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_color', array( 'default' => '#777777' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_color', array(
    'label'           => __( 'Link Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_link_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_color', array( 'default' => '#9e9e9e' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_color', array(
    'label'           => __( 'Link Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_link_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_hover_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_hover_color', array(
    'label'           => __( 'Link Hover Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_link_hover_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_hover_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_hover_color', array(
    'label'           => __( 'Link Hover Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_link_hover_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_active_color', array( 'default' => '#555555' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_active_color', array(
    'label'           => __( 'Link Active Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_link_active_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_active_color', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_active_color', array(
    'label'           => __( 'Link Active Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_link_active_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_link_active_bg', array( 'default' => '#e7e7e7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_link_active_bg', array(
    'label'           => __( 'Link Active Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_link_active_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_link_active_bg', array( 'default' => '#080808' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_link_active_bg', array(
    'label'           => __( 'Link Active Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_link_active_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_toggle_hover_bg', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_toggle_hover_bg', array(
    'label'           => __( 'Toggle Hover Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_toggle_hover_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_toggle_hover_bg', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_toggle_hover_bg', array(
    'label'           => __( 'Toggle Hover Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_toggle_hover_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_toggle_icon_bar_bg', array( 'default' => '#888888' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_toggle_icon_bar_bg', array(
    'label'           => __( 'Toggle Icon Bar Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_toggle_icon_bar_bg',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_toggle_icon_bar_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_toggle_icon_bar_bg', array(
    'label'           => __( 'Toggle Icon Bar Background', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_toggle_icon_bar_bg',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_default_toggle_border_color', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_default_toggle_border_color', array(
    'label'           => __( 'Toggle Border Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_default_toggle_border_color',
    'active_callback' => 'wlru_navbar_mode_default',
  ) ) );

  $wp_customize->add_setting( 'wlru_navbar_inverse_toggle_border_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_navbar_inverse_toggle_border_color', array(
    'label'           => __( 'Toggle Border Color', 'wlru' ),
    'section'         => 'wlru_navbar',
    'settings'        => 'wlru_navbar_inverse_toggle_border_color',
    'active_callback' => 'wlru_navbar_mode_inverse',
  ) ) );
}
add_action( 'customize_register', 'wlru_navbar_customize_register' );

function wlru_navbar_mode_default( $control ) {
  if ( $control->manager->get_setting( 'wlru_navbar_mode' )->value() == 'navbar-default' ) return true;
  return false;
}
function wlru_navbar_mode_inverse( $control ) {
  if ( $control->manager->get_setting( 'wlru_navbar_mode' )->value() == 'navbar-inverse' ) return true;
  return false;
}

function wlru_navbar_customize_css() { ?>
  <style type="text/css" id="wlru-navbar">
    <?php
    $line_height_computed = floor( 14 * 1.428571429 );
    $navbar_height = get_theme_mod( 'wlru_navbar_height', 50 );
    $navbar_padding_vertical = ( $navbar_height - $line_height_computed ) / 2;

    function wlru_navbar_vertical_align( $element_height, $navbar_height ) {
      echo 'margin-top: ' .  ( $navbar_height - $element_height ) / 2 . 'px;';
      echo 'margin-bottom: ' .  ( $navbar_height - $element_height ) / 2 . 'px;';
    }

    if ( $navbar_height != 50 ) :?>
    .navbar { min-height: <?php echo $navbar_height; ?>px; }
    .navbar-brand { height: <?php echo $navbar_height; ?>px; }

    .navbar-brand {
      padding-top: <?php echo $navbar_padding_vertical; ?>px;
      padding-bottom: <?php echo $navbar_padding_vertical; ?>px;
    }
    .navbar-nav {
      margin-top: <?php echo $navbar_padding_vertical / 2; ?>px;
      margin-bottom: <?php echo $navbar_padding_vertical / 2; ?>px;
    }
    @media (min-width: 768px) {
      .navbar-nav > li > a {
        padding-top: <?php echo $navbar_padding_vertical; ?>px;
        padding-bottom: <?php echo $navbar_padding_vertical; ?>px;
      }
    }

    .navbar-toggle {
      <?php wlru_navbar_vertical_align( 34, $navbar_height ); ?>
    }
    .navbar-form,
    .navbar-btn {
      <?php wlru_navbar_vertical_align( $line_height_computed + 14, $navbar_height ); ?>
    }
    .navbar-btn.btn-sm {
      <?php wlru_navbar_vertical_align( 30, $navbar_height ); ?>
    }
    .navbar-btn.btn-xs {
      <?php wlru_navbar_vertical_align( 22, $navbar_height ); ?>
    }
    .navbar-text {
      <?php wlru_navbar_vertical_align( $line_height_computed, $navbar_height ); ?>
    }
    <?php endif; ?>


    <?php
		$navbar_mode = get_theme_mod( 'wlru_navbar_mode', 'navbar-default' );
		switch( $navbar_mode ) {
			case 'navbar-inverse':
				$navbar_color = get_theme_mod( 'wlru_navbar_inverse_color', '' );
				$navbar_bg = get_theme_mod( 'wlru_navbar_inverse_bg', '#222222' );
				$navbar_border = get_theme_mod( 'wlru_navbar_inverse_border', '#080808' );
        $navbar_link_color = hex2hsl( '#777777', 15 );
        $navbar_link_hover_color = get_theme_mod( 'wlru_navbar_inverse_link_hover_color', '#ffffff' );
        $navbar_link_active_color = get_theme_mod( 'wlru_navbar_inverse_link_active_color', '#ffffff' );
        $navbar_link_active_bg = get_theme_mod( 'wlru_navbar_inverse_link_active_bg', '#080808' );
				$navbar_toggle_hover_bg = get_theme_mod( 'wlru_navbar_inverse_toggle_hover_bg', '#333333' );
				$navbar_toggle_icon_bar_bg = get_theme_mod( 'wlru_navbar_inverse_toggle_icon_bar_bg', '#ffffff' );
				$navbar_toggle_border_color = get_theme_mod( 'wlru_navbar_inverse_toggle_border_color', '#333333' );
				break;
			default:
				$navbar_color = get_theme_mod( 'wlru_navbar_default_color', '#777777' );
				$navbar_bg = get_theme_mod( 'wlru_navbar_default_bg', '#f8f8f8' );
        $navbar_border = get_theme_mod( 'wlru_navbar_default_border', '#e7e7e7' );
        $navbar_link_color = get_theme_mod( 'wlru_navbar_default_link_color', '#777777' );
        $navbar_link_hover_color = get_theme_mod( 'wlru_navbar_default_link_hover_color', '#333333' );
        $navbar_link_active_color = get_theme_mod( 'wlru_navbar_default_link_active_color', '#555555' );
        $navbar_link_active_bg = get_theme_mod( 'wlru_navbar_default_link_active_bg', '#e7e7e7' );
        $navbar_toggle_hover_bg = get_theme_mod( 'wlru_navbar_default_toggle_hover_bg', '#dddddd' );
        $navbar_toggle_icon_bar_bg = get_theme_mod( 'wlru_navbar_default_toggle_icon_bar_bg', '#888888' );
        $navbar_toggle_border_color = get_theme_mod( 'wlru_navbar_default_toggle_border_color', '#dddddd' );
				break;
		}
		?>
		.<?php echo $navbar_mode; ?> {
			background-color: <?php echo $navbar_bg; ?>;
      border-color: <?php echo $navbar_border; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-text {
			color: <?php echo $navbar_color; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-nav > li > a,
		.<?php echo $navbar_mode; ?> .navbar-link,
		.<?php echo $navbar_mode; ?> .btn-link {
			color: <?php echo $navbar_link_color; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-nav > li > a:hover,
		.<?php echo $navbar_mode; ?> .navbar-nav > li > a:focus,
		.<?php echo $navbar_mode; ?> .navbar-link:hover,
		.<?php echo $navbar_mode; ?> .navbar-link:focus,
		.<?php echo $navbar_mode; ?> .btn-link:hover,
		.<?php echo $navbar_mode; ?> .btn-link:focus {
			color: <?php echo $navbar_link_hover_color; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-nav > .active > a,
		.<?php echo $navbar_mode; ?> .navbar-nav > .active > a:hover,
		.<?php echo $navbar_mode; ?> .navbar-nav > .active > a:focus,
		.<?php echo $navbar_mode; ?> .navbar-nav > .open > a,
		.<?php echo $navbar_mode; ?> .navbar-nav > .open > a:hover,
		.<?php echo $navbar_mode; ?> .navbar-nav > .open > a:focus {
			color: <?php echo $navbar_link_active_color; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-toggle {
			border-color: <?php echo $navbar_toggle_border_color; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-toggle:hover,
		.<?php echo $navbar_mode; ?> .navbar-toggle:focus {
			background-color: <?php echo $navbar_toggle_hover_bg; ?>;
		}
		.<?php echo $navbar_mode; ?> .navbar-toggle .icon-bar {
			background-color: <?php echo $navbar_toggle_icon_bar_bg; ?>;
		}
    .<?php echo $navbar_mode; ?> .navbar-collapse,
    .<?php echo $navbar_mode; ?> .navbar-form {
      border-color: <?php echo $navbar_border; ?>;
    }
    .<?php echo $navbar_mode; ?> .navbar-nav > .active > a,
    .<?php echo $navbar_mode; ?> .navbar-nav > .active > a:hover,
    .<?php echo $navbar_mode; ?> .navbar-nav > .active > a:focus,
    .<?php echo $navbar_mode; ?> .navbar-nav > .open > a,
    .<?php echo $navbar_mode; ?> .navbar-nav > .open > a:hover,
    .<?php echo $navbar_mode; ?> .navbar-nav > .open > a:focus {
      background-color: <?php echo $navbar_link_active_bg; ?>;
    }
		@media (max-width: 767px) {
      .<?php echo $navbar_mode; ?> .open .dropdown-menu > .dropdown-header {
        border-color: <?php echo $navbar_border; ?>;
      }
      .<?php echo $navbar_mode; ?> .open .dropdown-menu .divider {
        background-color: <?php echo $navbar_border; ?>;
      }
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > li > a {
				color: <?php echo $navbar_link_color; ?>;
			}
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > li > a:hover,
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > li > a:hover {
				color: <?php echo $navbar_link_hover_color; ?>;
			}
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > a,
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > a:hover,
			.<?php echo $navbar_mode; ?> .open .dropdown-menu > a:focus {
				color: <?php echo $navbar_link_active_color; ?>;
			}
      .<?php echo $navbar_mode; ?> .open .dropdown-menu > .active > a,
      .<?php echo $navbar_mode; ?> .open .dropdown-menu > .active > a:hover,
      .<?php echo $navbar_mode; ?> .open .dropdown-menu > .active > a:focus {
        background-color: <?php echo $navbar_link_active_bg; ?>;
      }
		}
  </style>
<?php }
add_action( 'wp_head', 'wlru_navbar_customize_css' );
