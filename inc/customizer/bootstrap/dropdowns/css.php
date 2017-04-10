<?php
add_action( 'wp_head', 'wlru_customize_bs_dropdowns_css' );
function wlru_customize_bs_dropdowns_css() { ?>
<style type="text/css" id="wlru-dropdowns"><?php
$dropdown_bg = get_theme_mod( 'wlru_dropdown_bg', '#ffffff' );
if ( $dropdown_bg !== '#ffffff' ) : ?>
.dropdown-menu { background-color: <?php echo $dropdown_bg; ?>; }
<?php endif;


$dropdown_fallback_border = get_theme_mod( 'wlru_dropdown_fallback_border', '#cccccc' );
if ( $dropdown_fallback_border !== '#cccccc' ) : ?>
.dropdown-menu { border: 1px solid <?php echo $dropdown_fallback_border; ?>; }
<?php endif;


$dropdown_divider_bg = get_theme_mod( 'wlru_dropdown_divider_bg', '#e5e5e5' );
if ( $dropdown_divider_bg !== '#e5e5e5' ) : ?>
.dropdown-menu .divider { background-color: <?php echo $dropdown_divider_bg; ?>; }
<?php endif;


$dropdown_link_color = get_theme_mod( 'wlru_dropdown_link_color', '#333333' );
if ( $dropdown_link_color !== '#333333' ) : ?>
.dropdown-menu > li > a { color: <?php echo $dropdown_link_color; ?>; }
<?php endif;


$dropdown_link_hover_color = get_theme_mod( 'wlru_dropdown_link_hover_color', '#262626' );
if ( $dropdown_link_hover_color !== '#262626' ) : ?>
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: <?php echo $dropdown_link_hover_color; ?>;
}
<?php endif;


$dropdown_link_hover_bg = get_theme_mod( 'wlru_dropdown_link_hover_bg', '#f5f5f5' );
if ( $dropdown_link_hover_bg !== '#f5f5f5' ) : ?>
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  background-color: <?php echo $dropdown_link_hover_bg; ?>;
}
<?php endif;

$component_active_color = get_theme_mod( 'wlru_component_active_color', '#ffffff' );

$dropdown_link_active_color = $component_active_color;
if ( $dropdown_link_active_color !== '#ffffff' ) : ?>
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: <?php echo $dropdown_link_active_color; ?>;
}
<?php endif;

$component_active_bg = get_theme_mod( 'wlru_component_active_bg', '#337ab7' );

$dropdown_link_active_bg = $component_active_bg;
if ( $dropdown_link_active_bg !== '#337ab7' ) : ?>
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  background-color: <?php echo $dropdown_link_active_bg; ?>;
}
<?php endif;


$dropdown_link_disabled_color = get_theme_mod( 'wlru_dropdown_link_disabled_color', '#777777' );
if ( $dropdown_link_disabled_color !== '#777777' ) : ?>
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: <?php echo $dropdown_link_disabled_color; ?>;
}
<?php endif;


$dropdown_header_color = get_theme_mod( 'wlru_dropdown_header_color', '#777777' );
if ( $dropdown_header_color !== '#777777' ) : ?>
.dropdown-header { color: <?php echo $dropdown_header_color; ?>; }
<?php endif; ?>
</style>
<?php }
