<?php
add_action( 'wp_head', 'wlru_customize_bs_alerts_css' );
function wlru_customize_bs_alerts_css() { ?>
<style type="text/css" id="wlru-alerts"><?php
$alert_padding = get_theme_mod( 'wlru_alert_padding', 15 );
if ( $alert_padding !== 15 ) : ?>
.alert { padding: <?php echo $alert_padding; ?>px; }
.alert-dismissable { padding-right: <?php echo $alert_padding + 20; ?>px; }
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$alert_border_radius = $border_radius_base;
if ( $alert_border_radius !== 4 ) : ?>
.alert { border-radius: <?php echo $alert_border_radius; ?>px; }
<?php endif;


$alert_link_font_weight = get_theme_mod( 'wlru_alert_link_font_weight', 'bold' );
if ( $alert_link_font_weight !== 'bold' ) : ?>
.alert .alert-link {
  font-weight: <?php echo $alert_link_font_weight; ?>;
}
<?php endif;


$state_success_bg = get_theme_mod( 'wlru_state_success_bg', '#dff0d8' );
$alert_success_bg = $state_success_bg;
if ( $alert_success_bg !== '#dff0d8' ) : ?>
.alert-success { background-color: <?php echo $alert_success_bg; ?>; }
<?php endif;


$state_success_text = get_theme_mod( 'wlru_state_success_text', '#3c763d' );
$alert_success_text = $state_success_text;
if ( $alert_success_text !== '#3c763d' ) : ?>
.alert-success { color: <?php echo $alert_success_text; ?>; }
.alert-success .alert-link { color: <?php echo darken( $alert_success_text, 10 ); ?>; }
<?php endif;


$state_success_border = get_theme_mod( 'wlru_state_success_border', '#d6e9c6' );
$alert_success_border = $state_success_border;
if ( $alert_success_border !== '#d6e9c6' ) : ?>
.alert-success { border-color: <?php echo $alert_success_border; ?>; }
.alert-success hr { border-top-color: <?php echo darken( $alert_success_border, 5 ); ?>; }
<?php endif;


$state_info_bg = get_theme_mod( 'wlru_state_info_bg', '#d9edf7' );
$alert_info_bg = $state_info_bg;
if ( $alert_info_bg !== '#d9edf7' ) : ?>
.alert-info { background-color: <?php echo $alert_info_bg; ?>; }
<?php endif;


$state_info_text = get_theme_mod( 'wlru_state_info_text', '#31708f' );
$alert_info_text = $state_info_text;
if ( $alert_info_text !== '#31708f' ) : ?>
.alert-info { color: <?php echo $alert_info_text; ?>; }
.alert-info .alert-link { color: <?php echo darken( $alert_info_text, 10 ); ?>; }
<?php endif;


$state_info_border = get_theme_mod( 'wlru_state_info_border', '#bce8f1' );
$alert_info_border = $state_info_border;
if ( $alert_info_border !== '#bce8f1' ) : ?>
.alert-info { border-color: <?php echo $alert_info_border; ?>; }
.alert-info hr { border-top-color: <?php echo darken( $alert_info_border, 5 ); ?>; }
<?php endif;


$state_warning_bg = get_theme_mod( 'wlru_state_warning_bg', '#fcf8e3' );
$alert_warning_bg = $state_warning_bg;
if ( $alert_warning_bg !== '#fcf8e3' ) : ?>
.alert-warning { background-color: <?php echo $alert_warning_bg; ?>; }
<?php endif;


$state_warning_text = get_theme_mod( 'wlru_state_warning_text', '#8a6d3b' );
$alert_warning_text = $state_warning_text;
if ( $alert_warning_text !== '#8a6d3b' ) : ?>
.alert-warning { color: <?php echo $alert_warning_text; ?>; }
.alert-warning .alert-link { color: <?php echo darken( $alert_warning_text, 10 ); ?>; }
<?php endif;


$state_warning_border = get_theme_mod( 'wlru_state_warning_border', '#faebcc' );
$alert_warning_border = $state_warning_border;
if ( $alert_warning_border !== '#faebcc' ) : ?>
.alert-warning { border-color: <?php echo $alert_warning_border; ?>; }
.alert-warning hr { border-top-color: <?php echo darken( $alert_warning_border, 5 ); ?>; }
<?php endif;


$state_danger_bg = get_theme_mod( 'wlru_state_danger_bg', '#f2dede' );
$alert_danger_bg = $state_danger_bg;
if ( $alert_danger_bg !== '#f2dede' ) : ?>
.alert-danger { background-color: <?php echo $alert_danger_bg; ?>; }
<?php endif;


$state_danger_text = get_theme_mod( 'wlru_state_danger_text', '#a94442' );
$alert_danger_text = $state_danger_text;
if ( $alert_danger_text !== '#a94442' ) : ?>
.alert-danger { color: <?php echo $alert_danger_text; ?>; }
.alert-danger .alert-link { color: <?php echo darken( $alert_danger_text, 10 ); ?>; }
<?php endif;


$state_danger_border = get_theme_mod( 'wlru_state_danger_border', '#ebccd1' );
$alert_danger_border = $state_danger_border;
if ( $alert_danger_border !== '#ebccd1' ) : ?>
.alert-danger { border-color: <?php echo $alert_danger_border; ?>; }
.alert-danger hr { border-top-color: <?php echo darken( $alert_danger_border, 5 ); ?>; }
<?php endif; ?>
</style>
<?php }
