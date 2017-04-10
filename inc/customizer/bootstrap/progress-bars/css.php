<?php
add_action( 'wp_head', 'wlru_customize_bs_progress_bars_css' );
function wlru_customize_bs_progress_bars_css() { ?>
<style type="text/css" id="wlru-progress-bars"><?php
$progress_bg = get_theme_mod( 'wlru_progress_bg', '#f5f5f5' );
if ( $progress_bg !== '#f5f5f5' ) : ?>
.progress { background-color: <?php echo $progress_bg; ?>; }
<?php endif;


$progress_bar_color = get_theme_mod( 'wlru_progress_bar_color', '#ffffff' );
if ( $progress_bar_color !== '#ffffff' ) : ?>
.progress-bar { color: <?php echo $progress_bar_color; ?>; }
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$progress_border_radius = $border_radius_base;
if ( $progress_border_radius !== 4 ) : ?>
.progress { border-radius: <?php echo $progress_border_radius; ?>px; }
<?php endif;


$brand_primary = get_theme_mod( 'wlru_brand_primary', '#337ab7' );
$progress_bar_bg = $brand_primary;
if ( $progress_bar_bg !== '#337ab7' ) : ?>
.progress-bar { background-color: <?php echo $progress_bar_bg; ?>; }
<?php endif;


$brand_success = get_theme_mod( 'wlru_brand_success', '#5cb85c' );
$progress_bar_success = $brand_success;
if ( $progress_bar_success !== '#5cb85c' ) : ?>
.progress-bar-success { background-color: <?php echo $progress_bar_success; ?>; }
<?php endif;


$brand_info = get_theme_mod( 'wlru_brand_info', '#5bc0de' );
$progress_bar_info = $brand_info;
if ( $progress_bar_info !== '#5bc0de' ) : ?>
.progress-bar-info { background-color: <?php echo $progress_bar_info; ?>; }
<?php endif;


$brand_warning = get_theme_mod( 'wlru_brand_warning', '#f0ad4e' );
$progress_bar_warning = $brand_warning;
if ( $progress_bar_warning !== '#f0ad4e' ) : ?>
.progress-bar-warning { background-color: <?php echo $progress_bar_warning; ?>; }
<?php endif;


$brand_danger = get_theme_mod( 'wlru_brand_danger', '#d9534f' );
$progress_bar_danger = $brand_danger;
if ( $progress_bar_danger !== '#d9534f' ) : ?>
.progress-bar-danger { background-color: <?php echo $progress_bar_danger; ?>; }
<?php endif; ?>
</style>
<?php }
