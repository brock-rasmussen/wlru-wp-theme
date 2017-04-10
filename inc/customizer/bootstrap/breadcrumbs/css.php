<?php
add_action( 'wp_head', 'wlru_customize_bs_breadcrumbs_css' );
function wlru_customize_bs_breadcrumbs_css() { ?>
<style type="text/css" id="wlru-breadcrumbs"><?php
$breadcrumb_padding_vertical = get_theme_mod( 'wlru_breadcrumb_padding_vertical', 8 );
$breadcrumb_padding_horizontal = get_theme_mod( 'wlru_breadcrumb_padding_horizontal', 15 );
if ( $breadcrumb_padding_vertical !== 8 || $breadcrumb_padding_horizontal !== 15 ) : ?>
.breadcrumb { padding: <?php echo $breadcrumb_padding_vertical; ?>px <?php echo $breadcrumb_padding_horizontal; ?>px; }
<?php endif;


$breadcrumb_bg = get_theme_mod( 'wlru_breadcrumb_bg', '#f5f5f5' );
if ( $breadcrumb_bg !== '#f5f5f5' ) : ?>
.breadcrumb { background-color: <?php echo $breadcrumb_bg; ?>; }
<?php endif;


$breadcrumb_color = get_theme_mod( 'wlru_breadcrumb_color', '#cccccc' );
if ( $breadcrumb_color !== '#cccccc' ) : ?>
.breadcrumb > li + li:before { color: <?php echo $breadcrumb_color; ?>; }
<?php endif;


$breadcrumb_active_color = get_theme_mod( 'wlru_breadcrumb_active_color', '#777777' );
if ( $breadcrumb_active_color !== '#777777' ) : ?>
.breadcrumb > .active { color: <?php echo $breadcrumb_active_color; ?>; }
<?php endif;


$breadcrumb_separator = get_theme_mod( 'wlru_breadcrumb_separator', '/' );
if ( $breadcrumb_separator !== '/' ) : ?>
.breadcrumb > li + li:before { content: "<?php echo $breadcrumb_separator; ?>\00a0"; }
<?php endif; ?>
</style>
<?php }
