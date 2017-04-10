<?php
add_action( 'wp_head', 'wlru_customize_bs_form_states_and_alerts_css' );
function wlru_customize_bs_form_states_and_alerts_css() { ?>
<style type="text/css" id="wlru-form-states-and-alerts"><?php
$state_success_text = get_theme_mod( 'wlru_state_success_text', '#3c763d');
if ( $state_success_text !== '#3c763d' ) : ?>
.text-success,
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label,
.has-success .input-group-addon,
.has-success .form-control-feedback,
.list-group-item-success,
a.list-group-item-success,
button.list-group-item-success,
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: <?php echo $state_success_text; ?>;
}
.text-success:hover,
.text-success:focus {
  color: <?php echo darken( $state_success_text, 10 ); ?>;
}
.has-success .form-control,
.has-success .input-group-addon,
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  border-color: <?php echo $state_success_text; ?>;
}
.has-success .form-control:focus {
  border-color: <?php echo darken( $state_success_text, 10 ); ?>;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px <?php echo lighten( $state_success_text, 20 ); ?>;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px <?php echo lighten( $state_success_text, 20 ); ?>;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  background-color: <?php echo $state_success_text; ?>;
}
<?php endif;


$state_success_bg = get_theme_mod( 'wlru_state_success_bg', '#dff0d8' );
if ( $state_success_bg !== '#dff0d8' ) : ?>
.bg-success,
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th,
.has-success .input-group-addon,
.list-group-item-success,
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  background-color: <?php echo $state_success_bg; ?>;
}
a.bg-success:hover,
a.bg-success:focus,
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: <?php echo darken( $state_success_bg, 10 ); ?>;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  background-color: <?php echo darken( $state_success_bg, 5 ); ?>;
}
<?php endif;


// $state_success_border = get_theme_mod( 'wlru_state_success_border', '#d6e9c6' );
// if ( $state_success_border !== '#d6e9c6' ) :
?>
<?php
// endif;


$state_info_text = get_theme_mod( 'wlru_state_info_text', '#31708f' );
if ( $state_info_text !== '#31708f' ) : ?>
.text-info,
.list-group-item-info,
a.list-group-item-info,
button.list-group-item-info,
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: <?php echo $state_info_text; ?>;
}
.text-info:hover,
.text-info:focus {
  color: <?php echo darken( $state_info_text, 10 ); ?>;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  border-color: <?php echo $state_info_text; ?>;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  background-color: <?php echo $state_info_text; ?>;
}
<?php endif;


$state_info_bg = get_theme_mod( 'wlru_state_info_bg', '#d9edf7' );
if ( $state_info_bg !== '#d9edf7' ) : ?>
.bg-info,
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th,
.list-group-item-info,
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  background-color: <?php echo $state_info_bg; ?>;
}
a.bg-info:hover,
a.bg-info:focus,
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: <?php echo darken( $state_info_bg, 10 ); ?>;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  background-color: <?php echo darken( $state_info_bg, 5 ); ?>;
}
<?php endif;


// $state_info_border = get_theme_mod( 'wlru_state_info_border', '#bce8f1' );
// if ( $state_info_border !== '#bce8f1' ) :
?>
<?php
// endif;


$state_warning_text = get_theme_mod( 'wlru_state_warning_text', '#8a6d3b' );
if ( $state_warning_text !== '#8a6d3b' ) : ?>
.text-warning,
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label,
.has-warning .input-group-addon,
.has-warning .form-control-feedback,
.list-group-item-warning,
a.list-group-item-warning,
button.list-group-item-warning,
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: <?php echo $state_warning_text; ?>;
}
.text-warning:hover,
.text-warning:focus {
  color: <?php echo darken( $state_warning_text, 10 ); ?>;
}
.has-warning .form-control,
.has-warning .input-group-addon,
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  border-color: <?php echo $state_warning_text; ?>;
}
.has-warning .form-control:focus {
  border-color: <?php echo darken( $state_warning_text, 10 ); ?>;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px <?php echo lighten( $state_warning_text, 20 ); ?>;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px <?php echo lighten( $state_warning_text, 20 ); ?>;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  background-color: <?php echo $state_warning_text; ?>;
}
<?php endif;


$state_warning_bg = get_theme_mod( 'wlru_state_warning_bg', '#fcf8e3');
if ( $state_warning_bg !== '#fcf8e3' ) : ?>
.bg-warning,
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th,
.has-warning .input-group-addon,
.list-group-item-warning,
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  background-color: <?php echo $state_warning_bg; ?>;
}
a.bg-warning:hover,
a.bg-warning:focus,
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: <?php echo darken( $state_warning_bg, 10 ); ?>;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  background-color: <?php echo darken( $state_warning_bg, 5 ); ?>;
}
<?php endif;


// $state_warning_border = get_theme_mod( 'wlru_state_warning_border', '#faebcc' );
// if ( $state_warning_border !== '#faebcc' ) :
?>
<?php
// endif;


$state_danger_text = get_theme_mod( 'wlru_state_danger_text', '#a94442' );
if ( $state_danger_text !== '#a94442' ) : ?>
.text-danger,
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label,
.has-error .input-group-addon,
.has-error .form-control-feedback,
.list-group-item-danger,
a.list-group-item-danger,
button.list-group-item-danger,
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: <?php echo $state_danger_text; ?>;
}
.text-danger:hover,
.text-danger:focus {
  color: <?php echo darken( $state_danger_text, 10 ); ?>;
}
.has-error .form-control,
.has-error .input-group-addon,
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  border-color: <?php echo $state_danger_text; ?>;
}
.has-error .form-control:focus {
  border-color: <?php echo darken( $state_danger_text, 10 ); ?>;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px <?php echo lighten( $state_danger_text, 20 ); ?>;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px <?php echo lighten( $state_danger_text, 20 ); ?>;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  background-color: <?php echo $state_danger_text; ?>;
}
<?php endif;


$state_danger_bg = get_theme_mod( 'wlru_state_danger_bg', '#f2dede' );
if ( $state_danger_bg !== '#f2dede' ) : ?>
.bg-danger,
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th,
.has-error .input-group-addon,
.list-group-item-danger,
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  background-color: <?php echo $state_danger_bg; ?>;
}
a.bg-danger:hover,
a.bg-danger:focus,
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: <?php echo darken( $state_danger_bg, 10 ); ?>;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  background-color: <?php echo darken( $state_danger_bg, 5 ); ?>;
}
<?php endif;


// $state_danger_border = get_theme_mod( 'wlru_state_danger_border', '#ebccd1' );
// if ( $state_danger_border !== '#ebccd1' ) :
?>
<?php
// endif;
?>
</style>
<?php }
