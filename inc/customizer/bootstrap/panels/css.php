<?php
add_action( 'wp_head', 'wlru_customize_bs_panels_css' );
function wlru_customize_bs_panels_css() { ?>
<style type="text/css" id="wlru-panels"><?php
$panel_bg = get_theme_mod( 'wlru_panel_bg', '#ffffff' );
if ( $panel_bg !== '#ffffff' ) : ?>
.panel { background-color: <?php echo $panel_bg; ?>; }
<?php endif;


$panel_body_padding = get_theme_mod( 'wlru_panel_body_padding', 15 );
if ( $panel_body_padding !== 15 ) : ?>
.panel-body { padding: <?php echo $panel_body_padding; ?>px; }
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
   padding-right: <?php echo $panel_body_padding; ?>px;
   padding-left: <?php echo $panel_body_padding; ?>px;
}
<?php endif;


$panel_heading_padding_vertical = get_theme_mod( 'wlru_panel_heading_padding_vertical', 10 );
$panel_heading_padding_horizontal = get_theme_mod( 'wlru_panel_heading_padding_horizontal', 15 );
if ( $panel_heading_padding_vertical !== 10 || $panel_heading_padding_horizontal !== 15 ) : ?>
.panel-heading { padding: <?php echo $panel_heading_padding_vertical; ?>px <?php echo $panel_heading_padding_horizontal; ?>px; }
<?php endif;


$panel_footer_padding_vertical = get_theme_mod( 'wlru_panel_footer_padding_vertical', 10 );
$panel_footer_padding_horizontal = get_theme_mod( 'wlru_panel_footer_padding_horizontal', 15 );
if ( $panel_footer_padding_vertical !== 10 || $panel_footer_padding_horizontal !== 15 ) : ?>
.panel-footer { padding: <?php echo $panel_footer_padding_vertical; ?>px <?php echo $panel_footer_padding_horizontal; ?>px; }
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$panel_border_radius = $border_radius_base;
if ( $panel_border_radius !== 4 ) : ?>
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
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child,
.panel > .table:last-child > thead:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > thead:last-child > tr:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child {
  border-bottom-left-radius: <?php echo $panel_border_radius - 1; ?>px;
  border-bottom-right-radius: <?php echo $panel_border_radius - 1; ?>px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: <?php echo $panel_border_radius - 1; ?>px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: <?php echo $panel_border_radius - 1; ?>px;
}
.panel > .table:last-child > thead:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > thead:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > thead:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > thead:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: <?php echo $panel_border_radius - 1; ?>px;
}
.panel > .table:last-child > thead:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > thead:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > thead:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > thead:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: <?php echo $panel_border_radius - 1; ?>px;
}
<?php endif;


$panel_inner_border = get_theme_mod( 'wlru_panel_inner_border', '#dddddd' );
if ( $panel_inner_border !== '#dddddd' ) : ?>
.panel-footer,
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid <?php echo $panel_inner_border; ?>;
}
.panel-group .panel-footer + .panel-collapse .panel-body { border-bottom: 1px solid <?php echo $panel_inner_border; ?>;}
<?php endif;


$panel_footer_bg = get_theme_mod( 'wlru_panel_footer_bg', '#f5f5f5' );
if ( $panel_footer_bg !== '#f5f5f5' ) : ?>
.panel-footer { background-color: <?php echo $panel_footer_bg; ?>; }
<?php endif;


$panel_default_text = get_theme_mod( 'wlru_panel_default_text', '#333333' );
if ( $panel_default_text !== '#333333' ) : ?>
.panel-default > .panel-heading { color: <?php echo $panel_default_text; ?>; }
.panel-default > .panel-heading .badge { background-color: <?php echo $panel_default_text; ?>; }
<?php endif;


$panel_default_border = get_theme_mod( 'wlru_panel_default_border', '#dddddd' );
if ( $panel_default_border !== '#dddddd' ) : ?>
.panel-default,
.panel-default > .panel-heading {
  border-color: <?php echo $panel_default_border; ?>;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body { border-top-color: <?php echo $panel_default_border; ?>; }
.panel-default > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: <?php echo $panel_default_border; ?>; }
<?php endif;


$panel_default_heading_bg = get_theme_mod( 'wlru_panel_default_heading_bg', '#f5f5f5' );
if ( $panel_default_heading_bg !== '#f5f5f5' ) : ?>
.panel-default > .panel-heading { background-color: <?php echo $panel_default_heading_bg; ?>; }
.panel-default > .panel-heading .badge { color: <?php echo $panel_default_heading_bg; ?>; }
<?php endif;


$panel_primary_text = get_theme_mod( 'wlru_panel_primary_text', '#ffffff' );
if ( $panel_primary_text !== '#ffffff' ) : ?>
.panel-primary > .panel-heading { color: <?php echo $panel_primary_text; ?>; }
.panel-primary > .panel-heading .badge { background-color: <?php echo $panel_primary_text; ?>; }
<?php endif;

$brand_primary   = get_theme_mod( 'wlru_brand_primary', '#337ab7' );
$panel_primary_border = $brand_primary;
if ( $panel_primary_border !== '#337ab7' ) : ?>
.panel-primary,
.panel-primary > .panel-heading {
  border-color: <?php echo $panel_primary_border; ?>;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body { border-top-color: <?php echo $panel_primary_border; ?>; }
.panel-primary > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: <?php echo $panel_primary_border; ?>; }
<?php endif;

$panel_primary_heading_bg = $brand_primary;
if ( $panel_primary_heading_bg !== '#337ab7' ) : ?>
.panel-primary > .panel-heading { background-color: <?php echo $panel_primary_heading_bg; ?>; }
.panel-primary > .panel-heading .badge { color: <?php echo $panel_primary_heading_bg; ?>; }
<?php endif;


$state_success_text = get_theme_mod( 'wlru_state_success_text', '#3c763d');
$panel_success_text = $state_success_text;
if ( $panel_success_text !== '#3c763d' ) : ?>
.panel-success > .panel-heading { color: <?php echo $panel_success_text; ?>; }
.panel-success > .panel-heading .badge { background-color: <?php echo $panel_success_text; ?>; }
<?php endif;


$state_success_border = get_theme_mod( 'wlru_state_success_border', '#d6e9c6' );
$panel_success_border = $state_success_border;
if ( $panel_success_border !== '#d6e9c6' ) : ?>
.panel-success,
.panel-success > .panel-heading {
  border-color: <?php echo $panel_success_border; ?>;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body { border-top-color: <?php echo $panel_success_border; ?>; }
.panel-success > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: <?php echo $panel_success_border; ?>; }
<?php endif;


$state_success_bg = get_theme_mod( 'wlru_state_success_bg', '#dff0d8' );
$panel_success_heading_bg = $state_success_bg;
if ( $panel_success_heading_bg !== '#dff0d8' ) : ?>
.panel-success > .panel-heading { background-color: <?php echo $panel_success_heading_bg; ?>; }
.panel-success > .panel-heading .badge { color: <?php echo $panel_success_heading_bg; ?>; }
<?php endif;


$state_info_text = get_theme_mod( 'wlru_state_info_text', '#31708f' );
$panel_info_text = $state_info_text;
if ( $panel_info_text !== '#31708f' ) : ?>
.panel-info > .panel-heading { color: <?php echo $panel_info_text; ?>; }
.panel-info > .panel-heading .badge { background-color: <?php echo $panel_info_text; ?>; }
<?php endif;


$state_info_border = get_theme_mod( 'wlru_state_info_border', '#bce8f1' );
$panel_info_border = $state_info_border;
if ( $panel_info_border !== '#bce8f1' ) : ?>
.panel-info,
.panel-info > .panel-heading {
  border-color: <?php echo $panel_info_border; ?>;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body { border-top-color: <?php echo $panel_info_border; ?>; }
.panel-info > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: <?php echo $panel_info_border; ?>; }
<?php endif;


$state_info_bg = get_theme_mod( 'wlru_state_info_bg', '#d9edf7' );
$panel_info_heading_bg = $state_info_bg;
if ( $panel_info_heading_bg !== '#d9edf7' ) : ?>
.panel-info > .panel-heading { background-color: <?php echo $panel_info_heading_bg; ?>; }
.panel-info > .panel-heading .badge { color: <?php echo $panel_info_heading_bg; ?>; }
<?php endif;


$state_warning_text = get_theme_mod( 'wlru_state_warning_text', '#8a6d3b' );
$panel_warning_text = $state_warning_text;
if ( $panel_warning_text !== '#8a6d3b' ) : ?>
.panel-warning > .panel-heading { color: <?php echo $panel_warning_text; ?>; }
.panel-warning > .panel-heading .badge { background-color: <?php echo $panel_warning_text; ?>; }
<?php endif;


$state_warning_border = get_theme_mod( 'wlru_state_warning_border', '#faebcc' );
$panel_warning_border = $state_warning_border;
if ( $panel_warning_border !== '#faebcc' ) : ?>
.panel-warning,
.panel-warning > .panel-heading {
  border-color: <?php echo $panel_warning_border; ?>;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body { border-top-color: <?php echo $panel_warning_border; ?>; }
.panel-warning > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: <?php echo $panel_warning_border; ?>; }
<?php endif;


$state_warning_bg = get_theme_mod( 'wlru_state_warning_bg', '#fcf8e3');
$panel_warning_heading_bg = $state_warning_bg;
if ( $panel_warning_heading_bg !== '#fcf8e3' ) : ?>
.panel-warning > .panel-heading { background-color: <?php echo $panel_warning_heading_bg; ?>; }
.panel-warning > .panel-heading .badge { color: <?php echo $panel_warning_heading_bg; ?>; }
<?php endif;


$state_danger_text = get_theme_mod( 'wlru_state_danger_text', '#a94442' );
$panel_danger_text = $state_danger_text;
if ( $panel_danger_text !== '#a94442' ) : ?>
.panel-danger > .panel-heading { color: <?php echo $panel_danger_text; ?>; }
.panel-danger > .panel-heading .badge { background-color: <?php echo $panel_danger_text; ?>; }
<?php endif;


$state_danger_border = get_theme_mod( 'wlru_state_danger_border', '#ebccd1' );
$panel_danger_border = $state_danger_border;
if ( $panel_danger_border !== '#ebccd1' ) : ?>
.panel-danger,
.panel-danger > .panel-heading {
  border-color: <?php echo $panel_danger_border; ?>;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body { border-top-color: <?php echo $panel_danger_border; ?>; }
.panel-danger > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: <?php echo $panel_danger_border; ?>; }
<?php endif;


$state_danger_bg = get_theme_mod( 'wlru_state_danger_bg', '#f2dede' );
$panel_danger_heading_bg = $state_danger_bg;
if ( $panel_danger_heading_bg !== '#f2dede' ) : ?>
.panel-danger > .panel-heading { background-color: <?php echo $panel_danger_heading_bg; ?>; }
.panel-danger > .panel-heading .badge { color: <?php echo $panel_danger_heading_bg; ?>; }
<?php endif; ?>
</style>
<?php }
