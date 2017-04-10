<?php
add_action( 'wp_head', 'wlru_customize_bs_popovers_css' );
function wlru_customize_bs_popovers_css() { ?>
<style type="text/css" id="wlru-popovers"><?php
$popover_bg = get_theme_mod( 'wlru_popover_bg', '#ffffff' );
if ( $popover_bg !== '#ffffff' ) : ?>
.popover { background-color: <?php echo $popover_bg; ?>; }
<?php endif;


$popover_max_width = get_theme_mod( 'wlru_popover_max_width', 276 );
if ( $popover_max_width !== 276 ) : ?>
.popover { max-width: <?php echo $popover_max_width; ?>px; }
<?php endif;


// popover_fallback_border_color used instead of popover_border_color
$popover_fallback_border_color = get_theme_mod( 'wlru_popover_fallback_border_color', '#cccccc' );
if ( $popover_fallback_border_color !== '#cccccc' ) : ?>
.popover { border: 1px solid <?php echo $popover_fallback_border_color; ?>; }
<?php endif;


$popover_title_bg = get_theme_mod( 'wlru_popover_title_bg', '#f7f7f7' );
if ( $popover_title_bg !== '#f7f7f7' ) : ?>
.popover-title {
  background-color: <?php echo $popover_title_bg; ?>;
  border-bottom: 1px solid <?php echo darken( $popover_title_bg, 5 ); ?>;
}
<?php endif;


$popover_arrow_width = get_theme_mod( 'wlru_popover_arrow_width', 10 );
if ( $popover_arrow_width !== 10 ) : ?>
.popover.top { margin-top: -<?php echo $popover_arrow_width; ?>px; }
.popover.right { margin-left: <?php echo $popover_arrow_width; ?>px; }
.popover.bottom { margin-top: <?php echo $popover_arrow_width; ?>px; }
.popover.left { margin-left: -<?php echo $popover_arrow_width; ?>px; }
.popover > .arrow:after { border-width: <?php echo $popover_arrow_width; ?>px; }
.popover.top > .arrow:after,
.popover.bottom > .arrow:after {
  margin-left: -<?php echo $popover_arrow_width; ?>px;
}
.popover.right > .arrow:after,
.popover.left > .arrow:after {
  bottom: -<?php echo $popover_arrow_width; ?>px;
}
<?php endif;


$popover_arrow_color = get_theme_mod( 'wlru_popover_arrow_color', '#ffffff' );
if ( $popover_arrow_color !== '#ffffff' ) : ?>
.popover.top > .arrow:after { border-top-color: <?php echo $popover_arrow_color; ?>; }
.popover.right > .arrow:after { border-right-color: <?php echo $popover_arrow_color; ?>; }
.popover.bottom > .arrow:after { border-bottom-color: <?php echo $popover_arrow_color; ?>; }
.popover.left > .arrow:after { border-left-color: <?php echo $popover_arrow_color; ?>; }
<?php endif;


$popover_arrow_outer_width = get_theme_mod( 'wlru_popover_arrow_outer_width', 11 );
if ( $popover_arrow_outer_width !== 11 ) : ?>
.popover > .arrow {
  border-width: <?php echo $popover_arrow_outer_width; ?>px;
}
.popover.top > .arrow,
.popover.bottom > .arrow {
  margin-left: -<?php echo $popover_arrow_outer_width; ?>px;
}
.popover.top > .arrow {
  bottom: -<?php echo $popover_arrow_outer_width; ?>px;
}
.popover.right > .arrow {
  left: -<?php echo $popover_arrow_outer_width; ?>px;
  margin-top: -<?php echo $popover_arrow_outer_width; ?>px;
}
.popover.bottom > .arrow {
  top: -<?php echo $popover_arrow_outer_width; ?>px;
}
.popover.left > .arrow {
  right: -<?php echo $popover_arrow_outer_width; ?>px;
  margin-top: -<?php echo $popover_arrow_outer_width; ?>px;
}
<?php endif;


// popover_arrow_outer_fallback_color used instead of popover_arrow_outer_color
$popover_arrow_outer_fallback_color = get_theme_mod( 'wlru_popover_arrow_outer_fallback_color', '#999999' );
if ( $popover_arrow_outer_fallback_color !== '#999999' ) : ?>
.popover.top > .arrow { border-top-color: <?php echo $popover_arrow_outer_fallback_color; ?>; }
.popover.right > .arrow { border-right-color: <?php echo $popover_arrow_outer_fallback_color; ?>; }
.popover.bottom > .arrow { border-bottom-color: <?php echo $popover_arrow_outer_fallback_color; ?>; }
.popover.left > .arrow { border-left-color: <?php echo $popover_arrow_outer_fallback_color; ?>; }
<?php endif; ?>
</style>
<?php }
