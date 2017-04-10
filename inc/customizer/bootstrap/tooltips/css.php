<?php
add_action( 'wp_head', 'wlru_customize_bs_tooltips_css' );
function wlru_customize_bs_tooltips_css() { ?>
<style type="text/css" id="wlru-tooltips"><?php
$tooltip_max_width = get_theme_mod( 'wlru_tooltip_max_width', 200 );
if ( $tooltip_max_width !== 200 ) :?>
.tooltip-inner { max-width: <?php echo $tooltip_max_width; ?>px; }
<?php endif;


$tooltip_color = get_theme_mod( 'wlru_tooltip_color', '#ffffff' );
if ( $tooltip_color !== '#ffffff' ) :?>
.tooltip-inner { color: <?php echo $tooltip_color; ?>; }
<?php endif;


$tooltip_bg = get_theme_mod( 'wlru_tooltip_bg', '#000000' );
if ( $tooltip_bg !== '#000000' ) :?>
.tooltip-inner {background-color: <?php echo $tooltip_bg; ?>; }
<?php endif;


$tooltip_opacity = get_theme_mod( 'wlru_tooltip_opacity', 0.9 );
if ( $tooltip_opacity !== 0.9 ) :?>
.tooltip.in {
  opacity: <?php echo $tooltip_opacity; ?>;
  filter: alpha(opacity=<?php echo $tooltip_opacity * 100; ?>);
}
<?php endif;


$tooltip_arrow_width = get_theme_mod( 'wlru_tooltip_arrow_width', 5 );
if ( $tooltip_arrow_width !== 5 ) :?>
.tooltip.top,
.tooltip.bottom {
  padding: <?php echo $tooltip_arrow_width; ?>px 0;
}
.tooltip.right,
.tooltip.left {
  padding: 0 <?php echo $tooltip_arrow_width; ?>px;
}
.tooltip.top .tooltip-arrow,
.tooltip.bottom .tooltip-arrow {
  margin-left: -<?php echo $tooltip_arrow_width; ?>px;
}
.tooltip.top-left .tooltip-arrow,
.tooltip.top-right .tooltip-arrow {
  margin-bottom: -<?php echo $tooltip_arrow_width; ?>px;
}
.tooltip.right .tooltip-arrow,
.tooltip.left .tooltip-arrow,
.tooltip.bottom-left .tooltip-arrow,
.tooltip.bottom-right .tooltip-arrow {
  margin-top: -<?php echo $tooltip_arrow_width; ?>px;
}
.tooltip.top .tooltip-arrow,
.tooltip.top-left .tooltip-arrow,
.tooltip.top-right .tooltip-arrow {
  border-width: <?php echo $tooltip_arrow_width; ?>px <?php echo $tooltip_arrow_width; ?>px 0;
}
.tooltip.right .tooltip-arrow {
  border-width: <?php echo $tooltip_arrow_width; ?>px <?php echo $tooltip_arrow_width; ?>px <?php echo $tooltip_arrow_width; ?>px 0;
}
.tooltip.left .tooltip-arrow {
  border-width: <?php echo $tooltip_arrow_width; ?>px 0 <?php echo $tooltip_arrow_width; ?>px <?php echo $tooltip_arrow_width; ?>px;
}
.tooltip.bottom .tooltip-arrow,
.tooltip.bottom-left .tooltip-arrow,
.tooltip.bottom-right .tooltip-arrow {
  border-width: 0 <?php echo $tooltip_arrow_width; ?>px <?php echo $tooltip_arrow_width; ?>px;
}
.tooltip.top-left .tooltip-arrow,
.tooltip.bottom-left .tooltip-arrow {
  right: <?php echo $tooltip_arrow_width; ?>px;
}
.tooltip.top-right .tooltip-arrow
.tooltip.bottom-right .tooltip-arrow {
  left: <?php echo $tooltip_arrow_width; ?>px;
}
<?php endif;


$tooltip_arrow_color = get_theme_mod( 'wlru_tooltip_arrow_color', '#000000' );
if ( $tooltip_arrow_color !== '#000000' ) :?>
.tooltip.top .tooltip-arrow,
.tooltip.top-left .tooltip-arrow,
.tooltip.top-right .tooltip-arrow {
  border-top-color: <?php echo $tooltip_arrow_color; ?>;
}
.tooltip.right .tooltip-arrow {
  border-right-color: <?php echo $tooltip_arrow_color; ?>;
}
.tooltip.left .tooltip-arrow {
  border-left-color: <?php echo $tooltip_arrow_color; ?>;
}
.tooltip.bottom .tooltip-arrow,
.tooltip.bottom-left .tooltip-arrow,
.tooltip.bottom-right .tooltip-arrow {
  border-bottom-color: <?php echo $tooltip_arrow_color; ?>;
}
<?php endif; ?>
</style>
<?php }
