<?php
add_action( 'wp_head', 'wlru_customize_bs_badges_css' );
function wlru_customize_bs_badges_css() { ?>
<style type="text/css" id="wlru-badges"><?php
$badge_color = get_theme_mod( 'wlru_badge_color', '#ffffff' );
if ( $badge_color !== '#ffffff' ) : ?>
.badge { color: <?php echo $badge_color; ?>; }
<?php endif;


$badge_link_hover_color = get_theme_mod( 'wlru_badge_link_hover_color', '#ffffff' );
if ( $badge_link_hover_color !== '#ffffff' ) : ?>
a.badge:hover,
a.badge:focus {
  color: <?php echo $badge_link_hover_color; ?>;
}
<?php endif;


$badge_bg = get_theme_mod( 'wlru_badge_bg', '#777777' );
if ( $badge_bg !== '#777777' ) : ?>
.badge { background-color: <?php echo $badge_bg; ?>; }
<?php endif;


$badge_active_color = get_theme_mod( 'wlru_badge_active_color', '#337ab7' );
if ( $badge_active_color !== '#337ab7' ) : ?>
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: <?php echo $badge_active_color; ?>;
}
<?php endif;


$badge_active_bg = get_theme_mod( 'wlru_badge_active_bg', '#ffffff' );
if ( $badge_active_bg !== '#ffffff' ) : ?>
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  background-color: <?php echo $badge_active_bg; ?>;
}
<?php endif;


$badge_font_weight = get_theme_mod( 'wlru_badge_font_weight', 'bold' );
if ( $badge_font_weight !== 'bold' ) : ?>
.badge { font-weight: <?php echo $badge_font_weight; ?>; }
<?php endif;


$badge_line_height = get_theme_mod( 'wlru_badge_line_height', 1 );
if ( $badge_line_height !== 1 ) : ?>
.badge { line-height: <?php echo $badge_line_height; ?>; }
<?php endif;


$badge_border_radius = get_theme_mod( 'wlru_badge_border_radius', 10 );
if ( $badge_border_radius !== 10 ) : ?>
.badge { border-radius: <?php echo $badge_border_radius; ?>px; }
<?php endif;


?>
</style>
<?php }
