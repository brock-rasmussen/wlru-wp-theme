<?php
add_action( 'wp_head', 'wlru_customize_bs_list_group_css' );
function wlru_customize_bs_list_group_css() { ?>
<style type="text/css" id="wlru-list-group"><?php
$list_group_bg = get_theme_mod( 'wlru_list_group_bg', '#ffffff' );
if ( $list_group_bg !== '#ffffff' ) : ?>
.list-group-item { background-color: <?php echo $list_group_bg; ?>; }
<?php endif;


$list_group_border = get_theme_mod( 'wlru_list_group_border', '#dddddd' );
if ( $list_group_border !== '#dddddd' ) : ?>
.list-group-item { border: 1px solid <?php echo $list_group_border; ?>; }
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$list_group_border_radius = $border_radius_base;
if ( $list_group_border_radius !== 4 ) : ?>
.list-group-item:first-child {
  border-top-left-radius: <?php echo $list_group_border_radius; ?>px;
  border-top-right-radius: <?php echo $list_group_border_radius; ?>px;
}
.list-group-item:last-child {
  border-bottom-left-radius: <?php echo $list_group_border_radius; ?>px;
  border-bottom-right-radius: <?php echo $list_group_border_radius; ?>px;
}
<?php endif;


$list_group_hover_bg = get_theme_mod( 'wlru_list_group_hover_bg', '#f5f5f5' );
if ( $list_group_hover_bg !== '#f5f5f5' ) : ?>
a.list-group-item:hover,
a.list-group-item:focus {
  background-color: <?php echo $list_group_hover_bg; ?>;
}
<?php endif;


$component_active_color = get_theme_mod( 'wlru_component_active_color', '#ffffff' );
$list_group_active_color = $component_active_color;
if ( $list_group_active_color !== '#ffffff' ) : ?>
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  color: <?php echo $list_group_active_color; ?>;
}
<?php endif;


$component_active_bg = get_theme_mod( 'wlru_component_active_bg', '#337ab7' );
$list_group_active_bg = $component_active_bg;
if ( $list_group_active_bg !== '#337ab7' ) : ?>
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  background-color: <?php echo $list_group_active_bg; ?>;
}
<?php endif;


$list_group_active_border = $list_group_active_bg;
if ( $list_group_active_border !== '#337ab7' ) : ?>
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  border-color: <?php echo $list_group_active_border; ?>;
}
<?php endif;


$list_group_active_text_color = lighten( $list_group_active_bg, 40 );
if ( $list_group_active_text_color !== 'hsl(207.73, 56.41%, 85.88%)' ) : ?>
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: <?php echo $list_group_active_text_color; ?>;
}
<?php endif;


$list_group_disabled_color = get_theme_mod( 'wlru_list_group_disabled_color', '#777777' );
if ( $list_group_disabled_color !== '#777777' ) : ?>
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  color: <?php echo $list_group_disabled_color; ?>;
}
<?php endif;


$list_group_disabled_bg = get_theme_mod( 'wlru_list_group_disabled_bg', '#eeeeee' );
if ( $list_group_disabled_bg !== '#eeeeee' ) : ?>
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: <?php echo $list_group_disabled_bg; ?>;
}
<?php endif;


$list_group_disabled_text_color = $list_group_disabled_color;
if ( $list_group_disabled_text_color !== '#777777' ) : ?>
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: <?php echo $list_group_disabled_text_color; ?>;
}
<?php endif;


$list_group_link_color = get_theme_mod( 'wlru_list_group_link_color', '#555555' );
if ( $list_group_link_color !== '#555555' ) : ?>
a.list-group-item,
button.list-group-item {
  color: <?php echo $list_group_link_color; ?>;
}
<?php endif;


$list_group_link_hover_color = get_theme_mod( 'wlru_list_group_link_hover_color', '#555555' );
if ( $list_group_link_hover_color !== '#555555' ) : ?>
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  color: <?php echo $list_group_link_color; ?>;
}
<?php endif;


$list_group_link_heading_color = get_theme_mod( 'wlru_list_group_link_heading_color', '#333333' );
if ( $list_group_link_heading_color !== '#333333' ) : ?>
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: <?php echo $list_group_link_heading_color; ?>;
}
<?php endif; ?>
</style>
<?php }
