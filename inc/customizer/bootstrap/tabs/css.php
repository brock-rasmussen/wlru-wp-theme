<?php
add_action( 'wp_head', 'wlru_customize_bs_tabs_css' );
function wlru_customize_bs_tabs_css() { ?>
<style type="text/css" id="wlru-tabs"><?php
$nav_tabs_border_color = get_theme_mod( 'wlru_nav_tabs_border_color', '#dddddd' );
if ( $nav_tabs_border_color !== '#dddddd' ) : ?>
.nav-tabs { border-bottom: 1px solid <?php echo $nav_tabs_border_color; ?>; }
<?php endif;


$nav_tabs_link_hover_border_color = get_theme_mod( 'wlru_nav_tabs_link_hover_border_color', '#eeeeee' );

if ( $nav_tabs_border_color !== '#dddddd' || $nav_tabs_link_hover_border_color !== '#eeeeee' ) : ?>
.nav-tabs > li > a:hover { border-color: <?php echo $nav_tabs_link_hover_border_color; ?> <?php echo $nav_tabs_link_hover_border_color; ?> <?php echo $nav_tabs_border_color; ?>; }
<?php endif;


$nav_tabs_active_link_hover_bg = get_theme_mod( 'wlru_nav_tabs_active_link_hover_bg', '#ffffff' );
if ( $nav_tabs_active_link_hover_bg !== '#ffffff' ) : ?>
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  background-color: <?php echo $nav_tabs_active_link_hover_bg; ?>;
}
<?php endif;


$nav_tabs_active_link_hover_color = get_theme_mod( 'wlru_nav_tabs_active_link_hover_color', '#555555' );
if ( $nav_tabs_active_link_hover_color !== '#555555' ) : ?>
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: <?php echo $nav_tabs_active_link_hover_color; ?>;
}
<?php endif;


$nav_tabs_active_link_hover_border_color = get_theme_mod( 'wlru_nav_tabs_active_link_hover_border_color', '#dddddd' );
if ( $nav_tabs_active_link_hover_border_color !== '#dddddd' ) : ?>
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  border: 1px solid <?php echo $nav_tabs_active_link_hover_border_color; ?>;
}
<?php endif;


$nav_tabs_justified_link_border_color = get_theme_mod( 'wlru_nav_tabs_justified_link_border_color', '#dddddd' );
if ( $nav_tabs_justified_link_border_color !== '#dddddd' ) : ?>
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid <?php echo $nav_tabs_justified_link_border_color; ?>;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid <?php echo $nav_tabs_justified_link_border_color; ?>;
  }
}
<?php endif;


$nav_tabs_justified_active_link_border_color = get_theme_mod( 'wlru_nav_tabs_justified_active_link_border_color', '#ffffff' );
if ( $nav_tabs_justified_active_link_border_color !== '#ffffff' ) : ?>
@media (min-width: 768px) {
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: <?php echo $nav_tabs_justified_active_link_border_color; ?>;
  }
}
<?php endif; ?>
</style>
<?php }
