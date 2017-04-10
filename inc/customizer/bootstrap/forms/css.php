<?php
add_action( 'wp_head', 'wlru_customize_bs_forms_css' );
function wlru_customize_bs_forms_css() { ?>
<style type="text/css" id="wlru-forms"><?php
$input_bg = get_theme_mod( 'wlru_input_bg', '#ffffff' );
if ( $input_bg !== '#ffffff' ) : ?>
.form-control { background-color: <?php echo $input_bg; ?>; }
<?php endif;


$input_bg_disabled = get_theme_mod( 'wlru_input_bg_disabled', '#eeeeee' );
if ( $input_bg_disabled !== '#eeeeee' ) : ?>
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: <?php echo $input_bg_disabled; ?>;
}
<?php endif;


$input_color = get_theme_mod( 'wlru_input_color', '#555555' );
if ( $input_color !== '#555555' ) : ?>
output,
.form-control,
.input-group-addon {
  color: <?php echo $input_color; ?>;
}
<?php endif;


$input_border = get_theme_mod( 'wlru_input_border', '#cccccc' );
if ( $input_border !== '#cccccc' ) : ?>
.form-control { border: 1px solid <?php echo $input_border; ?>; }
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$input_border_radius = $border_radius_base;
if ( $input_border_radius !== 4 ) : ?>
.form-control,
.input-group-addon {
  border-radius: <?php echo $input_border_radius; ?>;
}
<?php endif;


$border_radius_large = get_theme_mod( 'wlru_border_radius_large', 6 );
$input_border_radius_large = $border_radius_large;
if ( $input_border_radius_large !== 6 ) : ?>
.input-lg,
.form-group-lg .form-control,
.input-group-addon.input-lg {
  border-radius: <?php echo $input_border_radius_large; ?>;
}
<?php endif;


$border_radius_small = get_theme_mod( 'wlru_border_radius_small', 3 );
$input_border_radius_small = $border_radius_small;
if ( $input_border_radius_small !== 3 ) : ?>
.input-sm,
.form-group-sm .form-control,
.input-group-addon.input-sm {
  border-radius: <?php echo $input_border_radius_small; ?>;
}
<?php endif;


$input_border_focus = get_theme_mod( 'wlru_input_border_focus', '#66afe9' );
if ( $input_border_focus !== '#66afe9' ) : ?>
.form-control:focus {
  border-color: <?php echo $input_border_focus; ?>;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.75), 0 0 8px <?php echo hsla( $input_border_focus, 0.6 ); ?>;
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.75), 0 0 8px <?php echo hsla( $input_border_focus, 0.6 ); ?>;
}
<?php endif;


$input_color_placeholder = get_theme_mod( 'wlru_input_color_placeholder', '#999999' );
if ( $input_color_placeholder !== '#999999' ) : ?>
.form-control::-moz-placeholder { color: <?php echo $input_color_placeholder; ?>; }
.form-control:-ms-input-placeholder { color: <?php echo $input_color_placeholder; ?>; }
.form-control::-webkit-input-placeholder { color: <?php echo $input_color_placeholder; ?>; }
<?php endif;

$font_size_base = get_theme_mod( 'wlru_font_size_base', 14 );
$line_height_base = get_theme_mod( 'wlru_line_height_base', 1.428571429 );
$line_height_computed = floor( $font_size_base * $line_height_base );

$padding_base_vertical = get_theme_mod( 'wlru_padding_base_vertical', 6 );

$input_height_base = $line_height_computed + ( $padding_base_vertical * 2 ) + 2;
if ( $font_size_base !== 14 || $line_height_base !== 1.428571429 || $padding_base_vertical !== 6 ) : ?>
.form-control {
  height: <?php echo $input_height_base; ?>px;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: <?php echo $input_height_base; ?>px;
  }
}
.has-feedback .form-control {
  padding-right: <?php echo $input_height_base * 1.25; ?>px;
}
.form-control-feedback {
  width: <?php echo $input_height_base; ?>px;
  height: <?php echo $input_height_base; ?>px;
  line-height: <?php echo $input_height_base; ?>px;
}
<?php endif;

$font_size_large = get_theme_mod( 'wlru_font_size_large', 18 );
$line_height_large = get_theme_mod( 'wlru_line_height_large', 1.3333333 );

$padding_large_vertical = get_theme_mod( 'wlru_padding_large_vertical', 10 );

$input_height_large = ceil( $font_size_large * $line_height_large ) + ( $padding_large_vertical * 2 ) + 2;
if ( $font_size_large !== 18 || $line_height_large !== 1.3333333 || $padding_large_vertical !== 10 ) : ?>
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: <?php echo $input_height_large; ?>px;
  }
}
.input-lg,
select.input-lg,
.form-group-lg .form-control,
.form-group-lg select.form-control,
.form-group-lg .form-control-static,
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  height: <?php echo $input_height_large; ?>px;
}
select.input-lg,
.form-group-lg select.form-control,
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  line-height: <?php echo $input_height_large; ?>px;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: <?php echo $input_height_large; ?>px;
}
<?php endif;


$font_size_small = get_theme_mod( 'wlru_font_size_small', 12 );
$line_height_small = get_theme_mod( 'wlru_line_height_small', 1.5 );

$padding_small_vertical = get_theme_mod( 'wlru_padding_small_vertical', 5 );

$input_height_small = floor( $font_size_small * $line_height_small ) + ( $padding_small_vertical * 2 ) + 2;
if ( $font_size_small !== 12 || $line_height_small !== 1.5 || $padding_small_vertical !== 5 ) : ?>
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: <?php echo $input_height_small; ?>px;
  }
}
.input-sm,
select.input-sm,
.form-group-sm .form-control,
.form-group-sm select.form-control,
.form-group-sm .form-control-static,
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  height: <?php echo $input_height_small; ?>px;
}
select.input-sm,
.form-group-sm select.form-control,
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  line-height: <?php echo $input_height_small; ?>px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: <?php echo $input_height_small; ?>px;
}
<?php endif;


$form_group_margin_bottom = get_theme_mod( 'wlru_form_group_margin_bottom', 15 );
if ( $form_group_margin_bottom !== 15 ) : ?>
.form-group { margin-bottom: <?php echo $form_group_margin_bottom; ?>px; }
<?php endif;


$legend_color = get_theme_mod( 'wlru_legend_color', '#333333' );
if ( $legend_color !== '#333333' ) : ?>
legend { color: <?php echo $legend_color; ?>; }
<?php endif;


$legend_border_color = get_theme_mod( 'wlru_legend_border_color', '#e5e5e5' );
if ( $legend_border_color !== '#e5e5e5' ) : ?>
legend { border-bottom: 1px solid <?php echo $legend_border_color; ?>; }
<?php endif;


$input_group_addon_bg = get_theme_mod( 'wlru_input_group_addon_bg', '#eeeeee');
if ( $input_group_addon_bg !== '#eeeeee' ) : ?>
.input-group-addon { background-color: <?php echo $input_group_addon_bg; ?>; }
<?php endif;


$input_group_addon_border_color = get_theme_mod( 'wlru_input_group_addon_border_color', '#cccccc' );
if ( $input_group_addon_border_color !== '#cccccc' ) : ?>
.input-group-addon { border: 1px solid <?php echo $input_group_addon_border_color; ?>; }
<?php endif; ?>
</style>
<?php }
