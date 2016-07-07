<?php
/**
 * wlru Theme Colors Customizer.
 *
 * @package wlru
 */
function wlru_colors_customize_register( $wp_customize ) {
  $wp_customize->get_section( 'colors' )->description = __( 'These colors control colored components such as <code>.btn-primary</code> or <code>.label-danger</code>.', 'wlru' );

  $wp_customize->add_setting( 'wlru_brand_primary', array( 'default' => '#337ab7' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_primary', array(
    'label'       => __( 'Brand Primary', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_primary',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_success', array( 'default' => '#5cb85c' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_success', array(
    'label'       => __( 'Brand Success', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_success',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_info', array( 'default' => '#5bc0de' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_info', array(
    'label'       => __( 'Brand Info', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_info',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_warning', array( 'default' => '#f0ad4e' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_warning', array(
    'label'       => __( 'Brand Warning', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_warning',
  ) ) );

  $wp_customize->add_setting( 'wlru_brand_danger', array( 'default' => '#d9534f' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wlru_brand_danger', array(
    'label'       => __( 'Brand Danger', 'wlru' ),
    'section'     => 'colors',
    'settings'    => 'wlru_brand_danger',
  ) ) );
}
add_action( 'customize_register', 'wlru_colors_customize_register' );

function wlru_colors_customize_css() { ?>
  <style type="text/css" id="wlru-colors">
    /* brand primary */
    <?php $brand_primary = get_theme_mod( 'wlru_brand_primary', '#337ab7' ); ?>
    .text-primary,
    .btn-primary .badge {
      color: <?php echo $brand_primary; ?>;
    }
    a.text-primary:hover,
    a.text-primary:focus {
      color: <?php echo hex2hsl( $brand_primary, -10 ); ?>;
    }
    .dropdown-menu > .active > a,
    .dropdown-menu > .active > a:hover,
    .dropdown-menu > .active > a:focus,
    .nav-pills > li.active > a,
    .nav-pills > li.active > a:hover,
    .nav-pills > li.active > a:focus,
    .list-group-item.active,
    .list-group-item.active:hover,
    .list-group-item.active:focus,
    .pagination > .active > a,
    .pagination > .active > a:hover,
    .pagination > .active > a:focus,
    .pagination > .active > span,
    .pagination > .active > span:hover,
    .pagination > .active > span:focus,
    .bg-primary,
    .label-primary,
    .progress-bar,
    .btn-primary {
      background-color: <?php echo $brand_primary; ?>;
    }
    a.bg-primary:hover,
    a.bg-primary:focus,
    .label-primary[href]:hover,
    .label-primary[href]:focus,
    .btn-primary:focus,
    .btn-primary.focus,
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary.active,
    .open > .btn-primary.dropdown-toggle {
      background-color: <?php echo hex2hsl( $brand_primary, -10 ); ?>;
    }
    .btn-primary {
      border-color: <?php echo hex2hsl( $brand_primary, -5 ); ?>;
    }
    .btn-primary:focus,
    .btn-primary.focus {
      border-color: <?php echo hex2hsl( $brand_primary, -30 ); ?>
    }
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary.active,
    .open > .btn-primary.dropdown-toggle {
      border-color: <?php echo hex2hsl( $brand_primary, -17 ); ?>;
    }
    .btn-primary:active:hover,
    .btn-primary:active:focus,
    .btn-primary:active.focus,
    .btn-primary.active:hover,
    .btn-primary.active:focus,
    .btn-primary.active.focus,
    .open > .btn-primary.dropdown-toggle:hover,
    .open > .btn-primary.dropdown-toggle:focus,
    .open > .btn-primary.dropdown-toggle.focus {
      background-color: <?php echo hex2hsl( $brand_primary, -17 ); ?>;
      border-color: <?php echo hex2hsl( $brand_primary, -30 ); ?>;
    }
    .btn-primary.disabled:hover,
    .btn-primary.disabled:focus,
    .btn-primary.disabled.focus,
    .btn-primary[disabled]:hover,
    .btn-primary[disabled]:focus,
    .btn-primary[disabled].focus,
    fieldset[disabled] .btn-primary:hover,
    fieldset[disabled] .btn-primary:focus,
    fieldset[disabled] .btn-primary.focus {
      background-color: <?php echo $brand_primary; ?>;
      border-color: <?php echo hex2hsl( $brand_primary, -5 ); ?>;
    }
    .panel-primary,
    .panel-primary > .panel-heading,
    .pagination > .active > a,
    .pagination > .active > a:hover,
    .pagination > .active > a:focus,
    .pagination > .active > span,
    .pagination > .active > span:hover,
    .pagination > .active > span:focus {
      border-color: <?php echo $brand_primary; ?>;
    }
    .panel-primary > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: <?php echo $brand_primary; ?>;
    }
    .panel-primary > .panel-footer + .panel-collapse > .panel-body {
      border-bottom-color: <?php echo $brand_primary; ?>;
    }

    /* brand success */
    <?php $brand_success = get_theme_mod( 'wlru_brand_success', '#5cb85c' ); ?>
    .text-success,
    .btn-success .badge {
      color: <?php echo $brand_success; ?>;
    }
    a.text-success:hover,
    a.text-success:focus {
      color: <?php echo hex2hsl( $brand_success, -10 ); ?>;
    }
    .bg-success,
    .label-success,
    .progress-bar-success,
    .btn-success {
      background-color: <?php echo $brand_success; ?>;
    }
    a.bg-success:hover,
    a.bg-success:focus,
    .label-success[href]:hover,
    .label-success[href]:focus,
    .btn-success:focus,
    .btn-success.focus,
    .btn-success:hover,
    .btn-success:active,
    .btn-success.active,
    .open > .btn-success.dropdown-toggle {
      background-color: <?php echo hex2hsl( $brand_success, -10 ); ?>;
    }
    .btn-success {
      border-color: <?php echo hex2hsl( $brand_success, -5 ); ?>;
    }
    .btn-success:focus,
    .btn-success.focus {
      border-color: <?php echo hex2hsl( $brand_success, -30 ); ?>
    }
    .btn-success:hover,
    .btn-success:active,
    .btn-success.active,
    .open > .btn-success.dropdown-toggle {
      border-color: <?php echo hex2hsl( $brand_success, -17 ); ?>;
    }
    .btn-success:active:hover,
    .btn-success:active:focus,
    .btn-success:active.focus,
    .btn-success.active:hover,
    .btn-success.active:focus,
    .btn-success.active.focus,
    .open > .btn-success.dropdown-toggle:hover,
    .open > .btn-success.dropdown-toggle:focus,
    .open > .btn-success.dropdown-toggle.focus {
      background-color: <?php echo hex2hsl( $brand_success, -17 ); ?>;
      border-color: <?php echo hex2hsl( $brand_success, -30 ); ?>;
    }
    .btn-success.disabled:hover,
    .btn-success.disabled:focus,
    .btn-success.disabled.focus,
    .btn-success[disabled]:hover,
    .btn-success[disabled]:focus,
    .btn-success[disabled].focus,
    fieldset[disabled] .btn-success:hover,
    fieldset[disabled] .btn-success:focus,
    fieldset[disabled] .btn-success.focus {
      background-color: <?php echo $brand_success; ?>;
      border-color: <?php echo hex2hsl( $brand_success, -5 ); ?>;
    }
    .panel-success,
    .panel-success > .panel-heading {
      border-color: <?php echo $brand_success; ?>;
    }
    .panel-success > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: <?php echo $brand_success; ?>;
    }
    .panel-success > .panel-footer + .panel-collapse > .panel-body {
      border-bottom-color: <?php echo $brand_success; ?>;
    }

    /* brand info */
    <?php $brand_info = get_theme_mod( 'wlru_brand_info', '#5bc0de' ); ?>
    .text-info,
    .btn-info .badge {
      color: <?php echo $brand_info; ?>;
    }
    a.text-info:hover,
    a.text-info:focus {
      color: <?php echo hex2hsl( $brand_info, -10 ); ?>;
    }
    .bg-info,
    .label-info,
    .progress-bar-info,
    .btn-info {
      background-color: <?php echo $brand_info; ?>;
    }
    a.bg-info:hover,
    a.bg-info:focus,
    .label-info[href]:hover,
    .label-info[href]:focus,
    .btn-info:focus,
    .btn-info.focus,
    .btn-info:hover,
    .btn-info:active,
    .btn-info.active,
    .open > .btn-info.dropdown-toggle {
      background-color: <?php echo hex2hsl( $brand_info, -10 ); ?>;
    }
    .btn-info {
      border-color: <?php echo hex2hsl( $brand_info, -5 ); ?>;
    }
    .btn-info:focus,
    .btn-info.focus {
      border-color: <?php echo hex2hsl( $brand_info, -30 ); ?>
    }
    .btn-info:hover,
    .btn-info:active,
    .btn-info.active,
    .open > .btn-info.dropdown-toggle {
      border-color: <?php echo hex2hsl( $brand_info, -17 ); ?>;
    }
    .btn-info:active:hover,
    .btn-info:active:focus,
    .btn-info:active.focus,
    .btn-info.active:hover,
    .btn-info.active:focus,
    .btn-info.active.focus,
    .open > .btn-info.dropdown-toggle:hover,
    .open > .btn-info.dropdown-toggle:focus,
    .open > .btn-info.dropdown-toggle.focus {
      background-color: <?php echo hex2hsl( $brand_info, -17 ); ?>;
      border-color: <?php echo hex2hsl( $brand_info, -30 ); ?>;
    }
    .btn-info.disabled:hover,
    .btn-info.disabled:focus,
    .btn-info.disabled.focus,
    .btn-info[disabled]:hover,
    .btn-info[disabled]:focus,
    .btn-info[disabled].focus,
    fieldset[disabled] .btn-info:hover,
    fieldset[disabled] .btn-info:focus,
    fieldset[disabled] .btn-info.focus {
      background-color: <?php echo $brand_info; ?>;
      border-color: <?php echo hex2hsl( $brand_info, -5 ); ?>;
    }
    .panel-info,
    .panel-info > .panel-heading {
      border-color: <?php echo $brand_info; ?>;
    }
    .panel-info > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: <?php echo $brand_info; ?>;
    }
    .panel-info > .panel-footer + .panel-collapse > .panel-body {
      border-bottom-color: <?php echo $brand_info; ?>;
    }

    /* brand warning */
    <?php $brand_warning = get_theme_mod( 'wlru_brand_warning', '#f0ad4e' ); ?>
    .text-warning,
    .btn-warning .badge {
      color: <?php echo $brand_warning; ?>;
    }
    a.text-warning:hover,
    a.text-warning:focus {
      color: <?php echo hex2hsl( $brand_warning, -10 ); ?>;
    }
    .bg-warning,
    .label-warning,
    .progress-bar-warning,
    .btn-warning {
      background-color: <?php echo $brand_warning; ?>;
    }
    a.bg-warning:hover,
    a.bg-warning:focus,
    .label-warning[href]:hover,
    .label-warning[href]:focus,
    .btn-warning:focus,
    .btn-warning.focus,
    .btn-warning:hover,
    .btn-warning:active,
    .btn-warning.active,
    .open > .btn-warning.dropdown-toggle {
      background-color: <?php echo hex2hsl( $brand_warning, -10 ); ?>;
    }
    .btn-warning {
      border-color: <?php echo hex2hsl( $brand_warning, -5 ); ?>;
    }
    .btn-warning:focus,
    .btn-warning.focus {
      border-color: <?php echo hex2hsl( $brand_warning, -30 ); ?>
    }
    .btn-warning:hover,
    .btn-warning:active,
    .btn-warning.active,
    .open > .btn-warning.dropdown-toggle {
      border-color: <?php echo hex2hsl( $brand_warning, -17 ); ?>;
    }
    .btn-warning:active:hover,
    .btn-warning:active:focus,
    .btn-warning:active.focus,
    .btn-warning.active:hover,
    .btn-warning.active:focus,
    .btn-warning.active.focus,
    .open > .btn-warning.dropdown-toggle:hover,
    .open > .btn-warning.dropdown-toggle:focus,
    .open > .btn-warning.dropdown-toggle.focus {
      background-color: <?php echo hex2hsl( $brand_warning, -17 ); ?>;
      border-color: <?php echo hex2hsl( $brand_warning, -30 ); ?>;
    }
    .btn-warning.disabled:hover,
    .btn-warning.disabled:focus,
    .btn-warning.disabled.focus,
    .btn-warning[disabled]:hover,
    .btn-warning[disabled]:focus,
    .btn-warning[disabled].focus,
    fieldset[disabled] .btn-warning:hover,
    fieldset[disabled] .btn-warning:focus,
    fieldset[disabled] .btn-warning.focus {
      background-color: <?php echo $brand_warning; ?>;
      border-color: <?php echo hex2hsl( $brand_warning, -5 ); ?>;
    }
    .panel-warning,
    .panel-warning > .panel-heading {
      border-color: <?php echo $brand_warning; ?>;
    }
    .panel-warning > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: <?php echo $brand_warning; ?>;
    }
    .panel-warning > .panel-footer + .panel-collapse > .panel-body {
      border-bottom-color: <?php echo $brand_warning; ?>;
    }

    /* brand danger */
    <?php $brand_danger = get_theme_mod( 'wlru_brand_danger', '#d9534f' ); ?>
    .text-danger,
    .btn-danger .badge {
      color: <?php echo $brand_danger; ?>;
    }
    a.text-danger:hover,
    a.text-danger:focus {
      color: <?php echo hex2hsl( $brand_danger, -10 ); ?>;
    }
    .bg-danger,
    .label-danger,
    .progress-bar-danger,
    .btn-danger {
      background-color: <?php echo $brand_danger; ?>;
    }
    a.bg-danger:hover,
    a.bg-danger:focus,
    .label-danger[href]:hover,
    .label-danger[href]:focus,
    .btn-danger:focus,
    .btn-danger.focus,
    .btn-danger:hover,
    .btn-danger:active,
    .btn-danger.active,
    .open > .btn-danger.dropdown-toggle {
      background-color: <?php echo hex2hsl( $brand_danger, -10 ); ?>;
    }
    .btn-danger {
      border-color: <?php echo hex2hsl( $brand_danger, -5 ); ?>;
    }
    .btn-danger:focus,
    .btn-danger.focus {
      border-color: <?php echo hex2hsl( $brand_danger, -30 ); ?>
    }
    .btn-danger:hover,
    .btn-danger:active,
    .btn-danger.active,
    .open > .btn-danger.dropdown-toggle {
      border-color: <?php echo hex2hsl( $brand_danger, -17 ); ?>;
    }
    .btn-danger:active:hover,
    .btn-danger:active:focus,
    .btn-danger:active.focus,
    .btn-danger.active:hover,
    .btn-danger.active:focus,
    .btn-danger.active.focus,
    .open > .btn-danger.dropdown-toggle:hover,
    .open > .btn-danger.dropdown-toggle:focus,
    .open > .btn-danger.dropdown-toggle.focus {
      background-color: <?php echo hex2hsl( $brand_danger, -17 ); ?>;
      border-color: <?php echo hex2hsl( $brand_danger, -30 ); ?>;
    }
    .btn-danger.disabled:hover,
    .btn-danger.disabled:focus,
    .btn-danger.disabled.focus,
    .btn-danger[disabled]:hover,
    .btn-danger[disabled]:focus,
    .btn-danger[disabled].focus,
    fieldset[disabled] .btn-danger:hover,
    fieldset[disabled] .btn-danger:focus,
    fieldset[disabled] .btn-danger.focus {
      background-color: <?php echo $brand_danger; ?>;
      border-color: <?php echo hex2hsl( $brand_danger, -5 ); ?>;
    }
    .panel-danger,
    .panel-danger > .panel-heading {
      border-color: <?php echo $brand_danger; ?>;
    }
    .panel-danger > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: <?php echo $brand_danger; ?>;
    }
    .panel-danger > .panel-footer + .panel-collapse > .panel-body {
      border-bottom-color: <?php echo $brand_danger; ?>;
    }
  </style>
<?php }
add_action( 'wp_head', 'wlru_colors_customize_css');
