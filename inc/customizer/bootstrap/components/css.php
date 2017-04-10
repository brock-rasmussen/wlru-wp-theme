<?php
add_action( 'wp_head', 'wlru_customize_bs_components_css' );
function wlru_customize_bs_components_css() { ?>
<style type="text/css" id="wlru-components"><?php
$padding_base_vertical = get_theme_mod( 'wlru_padding_base_vertical', 6 );
if ( $padding_base_vertical !== 6 ) : ?>
output,
.form-control-static,
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: <?php echo $padding_base_vertical + 1; ?>px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: <?php echo $padding_base_vertical + 1; ?>px;
  }
}
.form-control-static {
  padding-bottom: <?php echo $padding_base_vertical + 1; ?>px;
}
<?php endif;


$font_size_base = get_theme_mod( 'wlru_font_size_base', 14 );
$line_height_base = get_theme_mod( 'wlru_line_height_base', 1.428571429 );
$line_height_computed = floor( $font_size_base * $line_height_base );
if ( $font_size_base !== 14 || $line_height_base !== 1.428571429 || $padding_base_vertical !== 6 ) : ?>
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: <?php echo $line_height_computed + ( $padding_base_vertical + 1 ); ?>px;
}
<?php endif;


$padding_base_horizontal = get_theme_mod( 'wlru_padding_base_horizontal', 12 );

if ( $padding_base_vertical !== 6 || $padding_base_horizontal !== 12 ) : ?>
.form-control,
.btn:not(.btn-xs):not(.btn-sm):not(.btn-lg),
.input-group-addon,
.pagination > li > a,
.pagination > li > span {
  padding: <?php echo $padding_base_vertical; ?>px <?php echo $padding_base_horizontal; ?>px;
}
<?php endif;


$padding_large_vertical = get_theme_mod( 'wlru_padding_large_vertical', 10 );
if ( $padding_large_vertical !== 10 ) : ?>
@media (min-width: 768px) {
  .form-group-lg .control-label {
    padding-top: <?php echo $padding_large_vertical + 1; ?>px;
  }
}
<?php endif;


$padding_large_horizontal = get_theme_mod( 'wlru_padding_large_horizontal', 16 );

if ( $padding_large_vertical !== 10 || $padding_large_horizontal !== 16 ) : ?>
.input-lg,
.form-group-lg .form-control,
.btn-lg,
.input-group-addon.input-lg,
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: <?php echo $padding_large_vertical; ?>px <?php echo $padding_large_horizontal; ?>px;
}
.form-group-lg .form-control-static {
  padding: <?php echo $padding_large_vertical + 1; ?>px <?php echo $padding_large_horizontal; ?>px;
}
<?php endif;


$padding_small_vertical = get_theme_mod( 'wlru_padding_small_vertical', 5 );
if ( $padding_small_vertical !== 5 ) : ?>
@media (min-width: 768px) {
  .form-group-sm .control-label {
    padding-top: <?php echo $padding_small_vertical + 1; ?>px;
  }
}
<?php endif;


$padding_small_horizontal = get_theme_mod( 'wlru_padding_small_horizontal', 10 );

if ( $padding_small_vertical !== 5 || $padding_small_horizontal !== 10 ) : ?>
.input-sm,
.form-group-sm .form-control,
.btn-sm,
.input-group-addon.input-sm,
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: <?php echo $padding_small_vertical; ?>px <?php echo $padding_small_horizontal; ?>px;
}
.form-group-sm .form-control-static {
  padding: <?php echo $padding_small_vertical + 1; ?>px <?php echo $padding_small_horizontal; ?>px;
}
<?php endif;


$padding_xs_vertical = get_theme_mod( 'wlru_padding_xs_vertical', 1 );
$padding_xs_horizontal = get_theme_mod( 'wlru_padding_xs_horizontal', 5 );

if ( $padding_xs_vertical !== 1 || $padding_xs_horizontal !== 5 ) : ?>
.btn-xs {
  padding: <?php echo $padding_xs_vertical; ?>px <?php echo $padding_xs_horizontal; ?>px;
}
<?php endif;


$line_height_large = get_theme_mod( 'wlru_line_height_large', 1.3333333 );
if ( $line_height_large !== 1.3333333 ) : ?>
.input-lg,
.form-group-lg .form-control,
.form-group-lg .form-control-static,
.btn-lg,
.pagination-lg > li > a,
.pagination-lg > li > span {
  line-height: <?php echo $line_height_large; ?>;
}
<?php endif;


$line_height_small = get_theme_mod( 'wlru_line_height_small', 1.5 );
if ( $line_height_small !== 1.5 ) : ?>
.input-sm,
.form-group-sm .form-control,
.form-group-sm .form-control-static,
.btn-sm,
.btn-xs,
.pagination-sm > li > a,
.pagination-sm > li > span {
  line-height: <?php echo $line_height_small; ?>;
}
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
if ( $border_radius_base !== 4 ) : ?>
code,
pre,
.dropdown-menu,
.nav-tabs-justified > li > a,
.navbar-toggle,
.breadcrumb,
.pagination,
.well,
.tooltip-inner {
  border-radius: <?php echo $border_radius_base; ?>px;
}
.nav-tabs > li > a {
  border-radius: <?php echo $border_radius_base; ?>px <?php echo $border_radius_base; ?>px 0 0;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-radius: <?php echo $border_radius_base; ?>px <?php echo $border_radius_base; ?>px 0 0;
  }
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  border-top-left-radius: <?php echo $border_radius_base; ?>px;
  border-bottom-left-radius: <?php echo $border_radius_base; ?>px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: <?php echo $border_radius_base; ?>px;
  border-bottom-right-radius: <?php echo $border_radius_base; ?>px;
}
<?php endif;


$border_radius_large = get_theme_mod( 'wlru_border_radius_large', 6 );
if ( $border_radius_large !== 6 ) : ?>
.img-rounded,
.container .jumbotron,
.container-fluid .jumbotron,
.well-lg,
.modal-content,
.popover {
  border-radius: <?php echo $border_radius_large; ?>px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: <?php echo $border_radius_large; ?>px;
  border-bottom-left-radius: <?php echo $border_radius_large; ?>px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: <?php echo $border_radius_large; ?>px;
  border-bottom-right-radius: <?php echo $border_radius_large; ?>px;
}
.popover-title {
  border-radius: <?php echo $border_radius_large - 1; ?>px <?php echo $border_radius_large - 1; ?>px 0 0;
}
<?php endif;


$border_radius_small = get_theme_mod( 'wlru_border_radius_small', 3 );
if ( $border_radius_small !== 3 ) : ?>
kbd,
.well-sm {
  border-radius: <?php echo $border_radius_small; ?>px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: <?php echo $border_radius_small; ?>px;
  border-bottom-left-radius: <?php echo $border_radius_small; ?>px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: <?php echo $border_radius_small; ?>px;
  border-bottom-right-radius: <?php echo $border_radius_small; ?>px;
}
<?php endif;


// $component_active_color = get_theme_mod( 'wlru_component_active_color', '#ffffff' );
// $component_active_bg = get_theme_mod( 'wlru_component_active_bg' );

$caret_width_base = get_theme_mod( 'wlru_caret_width_base', 4 );
if ( $caret_width_base !== 4 ) : ?>
.caret {
  border-top-width: <?php echo $caret_width_base; ?>px;
  border-right-width: <?php echo $caret_width_base; ?>px;
  border-left-width: <?php echo $caret_width_base; ?>px;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-bottom-width: <?php echo $caret_width_base; ?>px;
}
<?php endif;


$caret_width_large = get_theme_mod( 'wlru_caret_width_large', 5 );
if ( $caret_width_large !== 5 ) : ?>
.btn-lg .caret {
  border-width: <?php echo $caret_width_large; ?>px <?php echo $caret_width_large; ?>px 0;
}
.dropup .btn-lg .caret {
  border-width: 0 <?php echo $caret_width_large; ?>px <?php echo $caret_width_large; ?>px;
}
<?php endif; ?>
</style>
<?php }
