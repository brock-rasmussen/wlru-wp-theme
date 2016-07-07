<?php
/**
 * wlru Theme Panels Customizer.
 *
 * @package wlru
 */
function wlru_panels_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'wlru_panels', array(
    'title'       => __( 'Panels', 'wlru' ),
  ) );

  $wp_customize->add_setting( 'wlru_panel_bg', array( 'default' => '#ffffff' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_bg', array(
    'label'       => __( 'Background', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_bg',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_border_radius', array( 'default' => 4 ) );
  $wp_customize->add_control( 'wlru_panel_border_radius', array(
    'label'       => __( 'Border Radius', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_border_radius',
    'type'        => 'number'
  ) );

  $wp_customize->add_setting( 'wlru_panel_default_text', array( 'default' => '#333333' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_default_text', array(
    'label'       => __( 'Default Heading Color', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_default_text',
  ) ) );

  $wp_customize->add_setting( 'wlru_panel_default_border', array( 'default' => '#dddddd' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_panel_default_border', array(
    'label'       => __( 'Default Border', 'wlru' ),
    'section'     => 'wlru_panels',
    'settings'    => 'wlru_panel_default_border',
  ) ) );
}
add_action( 'customize_register', 'wlru_panels_customize_register' );

function wlru_panels_customize_css() { ?>
  <style type="text/css" id="wlru-panels">
    <?php $panel_bg = get_theme_mod( 'wlru_panel_bg', '#ffffff' ); ?>
    .panel {
      background-color: <?php echo $panel_bg; ?>;
    }

    <?php $panel_border_radius = get_theme_mod( 'wlru_panel_border_radius', 4 ); ?>
    .panel,
    .panel-group .panel {
      border-radius: <?php echo $panel_border_radius; ?>px;
    }
    .panel-heading,
    .panel > .list-group:first-child .list-group-item:first-child,
    .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child,
    .panel > .table:first-child,
    .panel > .table-responsive:first-child > .table:first-child,
    .panel > .table:first-child > thead:first-child > tr:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
      border-top-left-radius: <?php echo $panel_border_radius - 1; ?>px;
      border-top-right-radius: <?php echo $panel_border_radius - 1; ?>px;
    }
    .panel-footer,
    .panel > .list-group:last-child .list-group-item:last-child,
    .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child ,
    .panel > .table:last-child,
    .panel > .table-responsive:last-child > .table:last-child,
    .panel > .table:last-child > thead:last-child > tr:last-child,
    .panel > .table-responsive:last-child > .table:last-child > thead:last-child > tr:last-child,
    .panel > .table:last-child > tbody:last-child > tr:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child {
      border-bottom-left-radius: <?php echo $panel_border_radius - 1; ?>px;
      border-bottom-right-radius: <?php echo $panel_border_radius - 1; ?>px;
    }
    .panel > .table:first-child > thead:first-child > td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > td:first-child,
    .panel > .table:first-child > tbody:first-child > td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > td:first-child,
    .panel > .table:first-child > thead:first-child > th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > th:first-child,
    .panel > .table:first-child > tbody:first-child > th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > th:first-child {
      border-top-left-radius: <?php echo $panel_border_radius - 1; ?>px;
    }
    .panel > .table:first-child > thead:first-child > td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > td:last-child,
    .panel > .table:first-child > tbody:first-child > td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > td:last-child,
    .panel > .table:first-child > thead:first-child > th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > th:last-child,
    .panel > .table:first-child > tbody:first-child > th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > th:last-child {
      border-top-right-radius: <?php echo $panel_border_radius - 1; ?>px;
    }
    .panel > .table:last-child > thead:last-child > td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > thead:last-child > td:first-child,
    .panel > .table:last-child > tbody:last-child > td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > td:first-child,
    .panel > .table:last-child > thead:last-child > th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > thead:last-child > th:first-child,
    .panel > .table:last-child > tbody:last-child > th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > th:first-child {
      border-bottom-left-radius: <?php echo $panel_border_radius - 1; ?>px;
    }
    .panel > .table:last-child > thead:last-child > td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > thead:last-child > td:last-child,
    .panel > .table:last-child > tbody:last-child > td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > td:last-child,
    .panel > .table:last-child > thead:last-child > th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > thead:last-child > th:last-child,
    .panel > .table:last-child > tbody:last-child > th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > th:last-child {
      border-bottom-right-radius: <?php echo $panel_border_radius - 1; ?>px;
    }

    <?php $panel_default_text = get_theme_mod( 'wlru_panel_default_text', '#333333' ); ?>
    .panel > .panel-heading {
      color: <?php echo $panel_default_text; ?>;
    }
    .panel > .panel-heading .badge {
      background-color: <?php echo $panel_default_text; ?>;
    }

    <?php $panel_default_border = get_theme_mod( 'wlru_panel_default_border', '#dddddd' ); ?>
    .panel-default {
      border-color: <?php echo $panel_default_border; ?>;
    }
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: <?php echo $panel_default_border; ?>;
    }
    .panel-default > .panel-footer + .panel-collapse > .panel-body {
      border-bottom-color: <?php echo $panel_default_border; ?>;
    }
  </style>
<?php }
add_action( 'wp_head', 'wlru_panels_customize_css' );
