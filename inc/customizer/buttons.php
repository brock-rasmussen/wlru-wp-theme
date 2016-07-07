<?php
/**
 * wlru Theme Buttons Customizer.
 *
 * @package wlru
 */
function wlru_buttons_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_buttons', array(
    'title'       => __( 'Buttons', 'wlru' ),
    'description' => __( 'Coloring applies to <code>.btn-default</code>. The "Colors" section controls colored buttons.', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_btn_default_color', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_default_color', array(
    'label'       => __( 'Button Default Color', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_default_color',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_default_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_default_bg', array(
    'label'       => __( 'Button Default Background', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_default_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_btn_default_border', array( 'default' => '#cccccc' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_btn_default_border', array(
    'label'       => __( 'Button Default Border', 'wlru' ),
    'section'     => 'wlru_buttons',
    'settings'    => 'wlru_btn_default_border',
  ) ) );
}
add_action( 'customize_register', 'wlru_buttons_customize_register' );

function wlru_buttons_customize_css() { ?>
  <style type="text/css" id="wlru-buttons">
    <?php $btn_default_color = get_theme_mod( 'wlru_btn_default_color', '#333333' ); ?>
    .btn-default,
    .btn-default:focus,
    .btn-default.focus,
    .btn-default:hover,
    .btn-default:active,
    .btn-default.active,
    .open > .btn-default.dropdown-toggle,
    .btn-default:active:hover,
    .btn-default.active:hover,
    .open > .btn-default.dropdown-toggle:hover,
    .btn-default:active:focus,
    .btn-default.active:focus,
    .open > .btn-default.dropdown-toggle:focus,
    .btn-default:active.focus,
    .btn-default.active.focus,
    .open > .btn-default.dropdown-toggle.focus { color: <?php echo $btn_default_color; ?>; }
    .btn-default .badge {
      background-color: <?php echo $btn_default_color; ?>;
    }

    <?php $btn_default_bg = get_theme_mod( 'wlru_btn_default_bg', '#ffffff' ); ?>
    .btn-default,
    .btn-default.disabled:hover,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default:hover,
    .btn-default.disabled:focus,
    .btn-default[disabled]:focus,
    fieldset[disabled] .btn-default:focus,
    .btn-default.disabled.focus,
    .btn-default[disabled].focus,
    fieldset[disabled] .btn-default.focus { background-color: <?php echo $btn_default_bg; ?>; }
    .btn-default .badge {
      color: <?php echo $btn_default_bg; ?>;
    }
    .btn-default:focus,
    .btn-default.focus,
    .btn-default:hover,
    .btn-default:active,
    .btn-default.active,
    .open > .btn-default.dropdown-toggle {
      background-color: <?php echo hex2hsl( $btn_default_bg, -10 ); ?>;
    }
    .btn-default:active:hover,
    .btn-default.active:hover,
    .open > .btn-default.dropdown-toggle:hover,
    .btn-default:active:focus,
    .btn-default.active:focus,
    .open > .btn-default.dropdown-toggle:focus,
    .btn-default:active.focus,
    .btn-default.active.focus,
    .open > .btn-default.dropdown-toggle.focus {
      background-color: <?php echo hex2hsl( $btn_default_bg, -17 ); ?>;
    }

    <?php $btn_default_border = get_theme_mod( 'wlru_btn_default_border', '#cccccc' ); ?>
    .btn-default,
    .btn-default.disabled:hover,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default:hover,
    .btn-default.disabled:focus,
    .btn-default[disabled]:focus,
    fieldset[disabled] .btn-default:focus,
    .btn-default.disabled.focus,
    .btn-default[disabled].focus,
    fieldset[disabled] .btn-default.focus {
      border-color: <?php echo $btn_default_border; ?>;
    }
    .btn-default:focus,
    .btn-default.focus,
    .btn-default:active,
    .btn-default.active,
    .open > .btn-default.dropdown-toggle {
      border-color: <?php echo hex2hsl( $btn_default_border, -25 ); ?>;
    }
    .btn-default:hover,
    .btn-default:active:hover,
    .btn-default.active:hover,
    .open > .btn-default.dropdown-toggle:hover,
    .btn-default:active:focus,
    .btn-default.active:focus,
    .open > .btn-default.dropdown-toggle:focus,
    .btn-default:active.focus,
    .btn-default.active.focus,
    .open > .btn-default.dropdown-toggle.focus {
      border-color: <?php echo hex2hsl( $btn_default_border, -12 ); ?>;
    }
  </style>
<?php }
add_action( 'wp_head', 'wlru_buttons_customize_css' );
