<?php
add_action( 'wp_head', 'wlru_customize_bs_navs_css' );
function wlru_customize_bs_navs_css() { ?>
<style type="text/css" id="wlru-navs"><?php
$nav_link_padding_vertical = get_theme_mod( 'wlru_nav_link_padding_vertical', 10 );
$nav_link_padding_horizontal = get_theme_mod( 'wlru_nav_link_padding_horizontal', 15 );
if ( $nav_link_padding_vertical !== 10 || $nav_link_padding_horizontal !== 15 ) : ?>
.nav > li > a { padding: <?php echo $nav_link_padding_vertical; ?>px <?php echo $nav_link_padding_horizontal; ?>px; }
<?php endif;


$nav_link_hover_bg = get_theme_mod( 'wlru_nav_link_hover_bg', '#eeeeee' );
if ( $nav_link_hover_bg !== '#eeeeee' ) : ?>
.nav > li > a:hover,
.nav > li > a:focus {
  background-color: <?php echo $nav_link_hover_bg; ?>;
}
<?php endif;


$nav_disabled_link_color = get_theme_mod( 'wlru_nav_disabled_link_color', '#777777' );
if ( $nav_disabled_link_color !== '#777777' ) : ?>
.nav > li.disabled > a { color: <?php echo $nav_disabled_link_color; ?>; }
<?php endif;


$nav_disabled_link_hover_color = $nav_disabled_link_color;
if ( $nav_disabled_link_hover_color !== '#777777' ) : ?>
.nav > li.disabled a:hover,
.nav > li.disabled a:focus {
  color: <?php echo $nav_disabled_link_hover_color; ?>;
}
<?php endif; ?>
</style>
<?php }
