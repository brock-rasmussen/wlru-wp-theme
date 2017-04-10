<?php
add_action( 'wp_head', 'wlru_customize_bs_buttons_css' );
function wlru_customize_bs_buttons_css() { ?>
<style type="text/css" id="wlru-buttons"><?php
$btn_font_weight = get_theme_mod( 'wlru_btn_font_weight', 'normal' );
if ( $btn_font_weight !== 'normal' ) : ?>
.btn { font-weight: <?php echo $btn_font_weight; ?>; }
<?php endif;


$btn_default_color = get_theme_mod( 'wlru_btn_default_color', '#333333' );
if ( $btn_default_color !== '#333333' ) : ?>
.btn:hover,
.btn:focus,
.btn.focus,
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
.open > .btn-default.dropdown-toggle.focus {
  color: <?php echo $btn_default_color; ?>;
}
.btn-default .badge {
  background-color: <?php echo $btn_default_color; ?>;
}
<?php endif;


$btn_default_bg = get_theme_mod( 'wlru_btn_default_bg', '#ffffff' );
if ( $btn_default_bg !== '#ffffff' ) : ?>
.btn-default {
  background-color: <?php echo $btn_default_bg; ?>;
}
.btn-default:focus,
.btn-default.focus,
.btn-default:hover,
.btn-default:active,
.btn-default.active,
.open > .btn-default.dropdown-toggle {
  background-color: <?php echo darken( $btn_default_bg, 10 ); ?>;
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
  background-color: <?php echo darken( $btn_default_bg, 17 ); ?>;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: <?php echo $btn_default_bg; ?>;
}
.btn-default .badge {
  color: <?php echo $btn_default_bg; ?>;
}
<?php endif;


$btn_default_border = get_theme_mod( 'wlru_btn_default_border', '#cccccc' );
if ( $btn_default_border !== '#cccccc' ) : ?>
.btn-default {
  border-color: <?php echo $btn_default_border; ?>;
}
.btn-default:focus,
.btn-default.focus {
  border-color: <?php echo darken( $btn_default_border, 25 ); ?>;
}
.btn-default:hover,
.btn-default:active,
.btn-default.active,
.open > .btn-default.dropdown-toggle {
  border-color: <?php echo darken( $btn_default_border, 12 ); ?>;
}
.btn-default.:active:hover,
.btn-default.active:hover,
.open > .btn-default.dropdown-toggle:hover,
.btn-default.:active:focus,
.btn-default.active:focus,
.open > .btn-default.dropdown-toggle:focus,
.btn-default.:active.focus,
.btn-default.active.focus,
.open > .btn-default.dropdown-toggle.focus {
  border-color: <?php echo darken( $btn_default_border, 25 ); ?>;
}
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
<?php endif;


$btn_primary_color = get_theme_mod( 'wlru_btn_primary_color', '#ffffff' );
if ( $btn_primary_color !== '#ffffff' ) : ?>
.btn-primary,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.open > .btn-primary.dropdown-toggle,
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .btn-primary.dropdown-toggle:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .btn-primary.dropdown-toggle:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .btn-primary.dropdown-toggle.focus {
  color: <?php echo $btn_primary_color; ?>;
}
.btn-primary .badge {
  background-color: <?php echo $btn_primary_color; ?>;
}
<?php endif;


$brand_primary = get_theme_mod( 'wlru_brand_primary', '#337ab7' );
$btn_primary_bg = $brand_primary;
if ( $btn_primary_bg !== '#337ab7' ) : ?>
.btn-primary {
  background-color: <?php echo $btn_primary_bg; ?>;
}
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.open > .btn-primary.dropdown-toggle {
  background-color: <?php echo darken( $btn_primary_bg, 10 ); ?>;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .btn-primary.dropdown-toggle:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .btn-primary.dropdown-toggle:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .btn-primary.dropdown-toggle.focus {
  background-color: <?php echo darken( $btn_primary_bg, 17 ); ?>;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: <?php echo $btn_primary_bg; ?>;
}
.btn-primary .badge {
  color: <?php echo $btn_primary_bg; ?>;
}
<?php endif;


$btn_primary_border = get_theme_mod( 'wlru_btn_primary_border', '#2e6da4' );
if ( $btn_primary_border !== '#2e6da4' ) : ?>
.btn-primary {
  border-color: <?php echo $btn_primary_border; ?>;
}
.btn-primary:focus,
.btn-primary.focus {
  border-color: <?php echo darken( $btn_primary_border, 25 ); ?>;
}
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.open > .btn-primary.dropdown-toggle {
  border-color: <?php echo darken( $btn_primary_border, 12 ); ?>;
}
.btn-primary.:active:hover,
.btn-primary.active:hover,
.open > .btn-primary.dropdown-toggle:hover,
.btn-primary.:active:focus,
.btn-primary.active:focus,
.open > .btn-primary.dropdown-toggle:focus,
.btn-primary.:active.focus,
.btn-primary.active.focus,
.open > .btn-primary.dropdown-toggle.focus {
  border-color: <?php echo darken( $btn_primary_border, 25 ); ?>;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  border-color: <?php echo $btn_primary_border; ?>;
}
<?php endif;


$btn_success_color = get_theme_mod( 'wlru_btn_success_color', '#ffffff' );
if ( $btn_success_color !== '#ffffff' ) : ?>
.btn-success,
.btn-success:focus,
.btn-success.focus,
.btn-success:hover,
.btn-success:active,
.btn-success.active,
.open > .btn-success.dropdown-toggle,
.btn-success:active:hover,
.btn-success.active:hover,
.open > .btn-success.dropdown-toggle:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .btn-success.dropdown-toggle:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .btn-success.dropdown-toggle.focus {
  color: <?php echo $btn_success_color; ?>;
}
.btn-success .badge {
  background-color: <?php echo $btn_success_color; ?>;
}
<?php endif;


$brand_success = get_theme_mod( 'wlru_brand_success', '#5cb85c' );
$btn_success_bg = $brand_success;
if ( $btn_success_bg !== '#5cb85c' ) : ?>
.btn-success {
  background-color: <?php echo $btn_success_bg; ?>;
}
.btn-success:focus,
.btn-success.focus,
.btn-success:hover,
.btn-success:active,
.btn-success.active,
.open > .btn-success.dropdown-toggle {
  background-color: <?php echo darken( $btn_success_bg, 10 ); ?>;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .btn-success.dropdown-toggle:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .btn-success.dropdown-toggle:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .btn-success.dropdown-toggle.focus {
  background-color: <?php echo darken( $btn_success_bg, 17 ); ?>;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: <?php echo $btn_success_bg; ?>;
}
.btn-success .badge {
  color: <?php echo $btn_success_bg; ?>;
}
<?php endif;


$btn_success_border = get_theme_mod( 'wlru_btn_success_border', '#4cae4c' );
if ( $btn_success_border !== '#4cae4c' ) : ?>
.btn-success {
  border-color: <?php echo $btn_success_border; ?>;
}
.btn-success:focus,
.btn-success.focus {
  border-color: <?php echo darken( $btn_success_border, 25 ); ?>;
}
.btn-success:hover,
.btn-success:active,
.btn-success.active,
.open > .btn-success.dropdown-toggle {
  border-color: <?php echo darken( $btn_success_border, 12 ); ?>;
}
.btn-success.:active:hover,
.btn-success.active:hover,
.open > .btn-success.dropdown-toggle:hover,
.btn-success.:active:focus,
.btn-success.active:focus,
.open > .btn-success.dropdown-toggle:focus,
.btn-success.:active.focus,
.btn-success.active.focus,
.open > .btn-success.dropdown-toggle.focus {
  border-color: <?php echo darken( $btn_success_border, 25 ); ?>;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  border-color: <?php echo $btn_success_border; ?>;
}
<?php endif;


$btn_info_color = get_theme_mod( 'wlru_btn_info_color', '#ffffff' );
if ( $btn_info_color !== '#ffffff' ) : ?>
.btn-info,
.btn-info:focus,
.btn-info.focus,
.btn-info:hover,
.btn-info:active,
.btn-info.active,
.open > .btn-info.dropdown-toggle,
.btn-info:active:hover,
.btn-info.active:hover,
.open > .btn-info.dropdown-toggle:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .btn-info.dropdown-toggle:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .btn-info.dropdown-toggle.focus {
  color: <?php echo $btn_info_color; ?>;
}
.btn-info .badge {
  background-color: <?php echo $btn_info_color; ?>;
}
<?php endif;


$brand_info = get_theme_mod( 'wlru_brand_info', '#5bc0de' );
$btn_info_bg = $brand_info;
if ( $btn_info_bg !== '#5bc0de' ) : ?>
.btn-info {
  background-color: <?php echo $btn_info_bg; ?>;
}
.btn-info:focus,
.btn-info.focus,
.btn-info:hover,
.btn-info:active,
.btn-info.active,
.open > .btn-info.dropdown-toggle {
  background-color: <?php echo darken( $btn_info_bg, 10 ); ?>;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .btn-info.dropdown-toggle:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .btn-info.dropdown-toggle:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .btn-info.dropdown-toggle.focus {
  background-color: <?php echo darken( $btn_info_bg, 17 ); ?>;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: <?php echo $btn_info_bg; ?>;
}
.btn-info .badge {
  color: <?php echo $btn_info_bg; ?>;
}
<?php endif;


$btn_info_border = get_theme_mod( 'wlru_btn_info_border', '#46b8da' );
if ( $btn_info_border !== '#46b8da' ) : ?>
.btn-info {
  border-color: <?php echo $btn_info_border; ?>;
}
.btn-info:focus,
.btn-info.focus {
  border-color: <?php echo darken( $btn_info_border, 25 ); ?>;
}
.btn-info:hover,
.btn-info:active,
.btn-info.active,
.open > .btn-info.dropdown-toggle {
  border-color: <?php echo darken( $btn_info_border, 12 ); ?>;
}
.btn-info.:active:hover,
.btn-info.active:hover,
.open > .btn-info.dropdown-toggle:hover,
.btn-info.:active:focus,
.btn-info.active:focus,
.open > .btn-info.dropdown-toggle:focus,
.btn-info.:active.focus,
.btn-info.active.focus,
.open > .btn-info.dropdown-toggle.focus {
  border-color: <?php echo darken( $btn_info_border, 25 ); ?>;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  border-color: <?php echo $btn_info_border; ?>;
}
<?php endif;


$btn_warning_color = get_theme_mod( 'wlru_btn_warning_color', '#ffffff' );
if ( $btn_warning_color !== '#ffffff' ) : ?>
.btn-warning,
.btn-warning:focus,
.btn-warning.focus,
.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.open > .btn-warning.dropdown-toggle,
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .btn-warning.dropdown-toggle:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .btn-warning.dropdown-toggle:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .btn-warning.dropdown-toggle.focus {
  color: <?php echo $btn_warning_color; ?>;
}
.btn-warning .badge {
  background-color: <?php echo $btn_warning_color; ?>;
}
<?php endif;


$brand_warning = get_theme_mod( 'wlru_brand_warning', '#f0ad4e' );
$btn_warning_bg = $brand_warning;
if ( $btn_warning_bg !== '#f0ad4e' ) : ?>
.btn-warning {
  background-color: <?php echo $btn_warning_bg; ?>;
}
.btn-warning:focus,
.btn-warning.focus,
.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.open > .btn-warning.dropdown-toggle {
  background-color: <?php echo darken( $btn_warning_bg, 10 ); ?>;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .btn-warning.dropdown-toggle:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .btn-warning.dropdown-toggle:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .btn-warning.dropdown-toggle.focus {
  background-color: <?php echo darken( $btn_warning_bg, 17 ); ?>;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: <?php echo $btn_warning_bg; ?>;
}
.btn-warning .badge {
  color: <?php echo $btn_warning_bg; ?>;
}
<?php endif;


$btn_warning_border = get_theme_mod( 'wlru_btn_warning_border', '#eea236' );
if ( $btn_warning_border !== '#eea236' ) : ?>
.btn-warning {
  border-color: <?php echo $btn_warning_border; ?>;
}
.btn-warning:focus,
.btn-warning.focus {
  border-color: <?php echo darken( $btn_warning_border, 25 ); ?>;
}
.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.open > .btn-warning.dropdown-toggle {
  border-color: <?php echo darken( $btn_warning_border, 12 ); ?>;
}
.btn-warning.:active:hover,
.btn-warning.active:hover,
.open > .btn-warning.dropdown-toggle:hover,
.btn-warning.:active:focus,
.btn-warning.active:focus,
.open > .btn-warning.dropdown-toggle:focus,
.btn-warning.:active.focus,
.btn-warning.active.focus,
.open > .btn-warning.dropdown-toggle.focus {
  border-color: <?php echo darken( $btn_warning_border, 25 ); ?>;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  border-color: <?php echo $btn_warning_border; ?>;
}
<?php endif;


$btn_danger_color = get_theme_mod( 'wlru_btn_danger_color', '#ffffff' );
if ( $btn_danger_color !== '#ffffff' ) : ?>
.btn-danger,
.btn-danger:focus,
.btn-danger.focus,
.btn-danger:hover,
.btn-danger:active,
.btn-danger.active,
.open > .btn-danger.dropdown-toggle,
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .btn-danger.dropdown-toggle:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .btn-danger.dropdown-toggle:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .btn-danger.dropdown-toggle.focus {
  color: <?php echo $btn_danger_color; ?>;
}
.btn-danger .badge {
  background-color: <?php echo $btn_danger_color; ?>;
}
<?php endif;


$brand_danger = get_theme_mod( 'wlru_brand_danger', '#d9534f' );
$btn_danger_bg = $brand_danger;
if ( $btn_danger_bg !== '#d9534f' ) : ?>
.btn-danger {
  background-color: <?php echo $btn_danger_bg; ?>;
}
.btn-danger:focus,
.btn-danger.focus,
.btn-danger:hover,
.btn-danger:active,
.btn-danger.active,
.open > .btn-danger.dropdown-toggle {
  background-color: <?php echo darken( $btn_danger_bg, 10 ); ?>;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .btn-danger.dropdown-toggle:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .btn-danger.dropdown-toggle:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .btn-danger.dropdown-toggle.focus {
  background-color: <?php echo darken( $btn_danger_bg, 17 ); ?>;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: <?php echo $btn_danger_bg; ?>;
}
.btn-danger .badge {
  color: <?php echo $btn_danger_bg; ?>;
}
<?php endif;


$btn_danger_border = get_theme_mod( 'wlru_btn_danger_border', '#d43f3a' );
if ( $btn_danger_border !== '#d43f3a' ) : ?>
.btn-danger {
  border-color: <?php echo $btn_danger_border; ?>;
}
.btn-danger:focus,
.btn-danger.focus {
  border-color: <?php echo darken( $btn_danger_border, 25 ); ?>;
}
.btn-danger:hover,
.btn-danger:active,
.btn-danger.active,
.open > .btn-danger.dropdown-toggle {
  border-color: <?php echo darken( $btn_danger_border, 12 ); ?>;
}
.btn-danger.:active:hover,
.btn-danger.active:hover,
.open > .btn-danger.dropdown-toggle:hover,
.btn-danger.:active:focus,
.btn-danger.active:focus,
.open > .btn-danger.dropdown-toggle:focus,
.btn-danger.:active.focus,
.btn-danger.active.focus,
.open > .btn-danger.dropdown-toggle.focus {
  border-color: <?php echo darken( $btn_danger_border, 25 ); ?>;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  border-color: <?php echo $btn_danger_border; ?>;
}
<?php endif;


$btn_link_disabled_color = get_theme_mod( 'wlru_btn_link_disabled_color', '#777777' );
if ( $btn_link_disabled_color !== '#777777' ) : ?>
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: <?php echo $btn_link_disabled_color; ?>;
}
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$btn_border_radius_base = $border_radius_base;
if ( $btn_border_radius_base !== 4 ) : ?>
.btn:not(.btn-xs):not(.btn-sm):not(.btn-lg) { border-radius: <?php echo $btn_border_radius_base; ?>px; }
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-left-radius: <?php echo $btn_border_radius_base; ?>px;
  border-top-right-radius: <?php echo $btn_border_radius_base; ?>px;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: <?php echo $btn_border_radius_base; ?>px;
  border-bottom-right-radius: <?php echo $btn_border_radius_base; ?>px;
}
<?php endif;


$border_radius_large = get_theme_mod( 'wlru_border_radius_large', 6 );
$btn_border_radius_large = $border_radius_large;
if ( $btn_border_radius_large !== 6 ) : ?>
.btn-lg { border-radius: <?php echo $btn_border_radius_large; ?>px; }
<?php endif;


$border_radius_small = get_theme_mod( 'wlru_border_radius_small', 3 );
$btn_border_radius_small = $border_radius_small;
if ( $btn_border_radius_small !== 3 ) : ?>
.btn-sm,
.btn-xs {
  border-radius: <?php echo $btn_border_radius_small; ?>px;
}
<?php endif; ?>
</style>
<?php }
