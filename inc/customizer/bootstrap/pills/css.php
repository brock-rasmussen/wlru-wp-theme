<?php
add_action( 'wp_head', 'wlru_customize_bs_pills_css' );
function wlru_customize_bs_pills_css() { ?>
<style type="text/css" id="wlru-pills">
<?php
$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$nav_pills_border_radius = $border_radius_base;
if ( $nav_pills_border_radius !== 4 ) :?>
.nav-pills > li > a { border-radius: <?php echo $nav_pills_border_radius; ?>px; }
<?php endif;


$component_active_bg = get_theme_mod( 'wlru_component_active_bg', '#337ab7' );
$nav_pills_active_link_hover_bg = $component_active_bg;
if ( $nav_pills_active_link_hover_bg !== '#337ab7' ) :?>
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  background-color: <?php echo $nav_pills_active_link_hover_bg; ?>;
}
<?php endif;


$component_active_color = get_theme_mod( 'wlru_component_active_color', '#ffffff' );
$nav_pills_active_link_hover_color = $component_active_color;
if ( $nav_pills_active_link_hover_color !== '#ffffff' ) :?>
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: <?php echo $nav_pills_active_link_hover_color; ?>;
}
<?php endif; ?>
</style>
<?php }
