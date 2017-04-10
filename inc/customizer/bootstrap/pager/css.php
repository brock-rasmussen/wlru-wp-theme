<?php
add_action( 'wp_head', 'wlru_customize_bs_pager_css' );
function wlru_customize_bs_pager_css() { ?>
<style type="text/css" id="wlru-pager"><?php
$pagination_bg = get_theme_mod( 'wlru_pagination_bg', '#ffffff' );
$pager_bg = $pagination_bg;
if ( $pager_bg !== '#ffffff' ) : ?>
.pager li > a,
.pager li > span,
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  background-color: <?php echo $pager_bg; ?>;
}
<?php endif;


$pagination_border = get_theme_mod( 'wlru_pagination_border', '#dddddd' );
$pager_border = $pagination_border;
if ( $pager_border !== '#dddddd' ) : ?>
.pager li > a,
.pager li > span {
  border: 1px solid <?php echo $pager_border; ?>;
}
<?php endif;


$pager_border_radius = get_theme_mod( 'wlru_pager_border_radius', 15 );
if ( $pager_border_radius !== 15 ) : ?>
.pager li > a,
.pager li > span {
  border-radius: <?php echo $pager_border_radius; ?>px;
}
<?php endif;


$pagination_hover_bg = get_theme_mod( 'wlru_pagination_hover_bg', '#eeeeee' );
$pager_hover_bg = $pagination_hover_bg;
if ( $pager_hover_bg !== '#eeeeee' ) : ?>
.pager li > a:hover,
.pager li > a:focus {
  background-color: <?php echo $pager_hover_bg; ?>;
}
<?php endif;


// $pagination_active_bg = get_theme_mod( 'wlru_pagination_active_bg', '#337ab7' );
// $pager_active_bg = $pagination_active_bg;
// if ( $pager_active_bg !== '#337ab7' ) :
?>
<?php
// endif;


// $pagination_active_color = get_theme_mod( 'wlru_pagination_active_color', '#ffffff' );
// $pager_active_color = $pagination_active_color;
// if ( $pager_active_color !== '#ffffff' ) :
?>
<?php
// endif;


$pagination_disabled_color = get_theme_mod( 'wlru_pagination_disabled_color', '#777777' );
$pager_disabled_color = $pagination_disabled_color;
if ( $pager_disabled_color !== '#777777' ) : ?>
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: <?php echo $pager_disabled_color; ?>;
}
<?php endif; ?>
</style>
<?php }
