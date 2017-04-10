<?php
add_action( 'wp_head', 'wlru_customize_bs_typography_css' );
function wlru_customize_bs_typography_css() { ?>
<style type="text/css" id="wlru-typography"><?php
$font_family_base = get_theme_mod( 'wlru_font_family_base', '"Helvetica Neue", Helvetica, Arial, sans-serif' );
if ( $font_family_base !== '"Helvetica Neue", Helvetica, Arial, sans-serif' ) : ?>
body,
.popover,
.tooltip {
  font-family: <?php echo $font_family_base; ?>
}
<?php endif;


$font_size_base = get_theme_mod( 'wlru_font_size_base', 14 );
if ( $font_size_base !== 14 ) : ?>
body,
output,
.form-control,
.btn,
.input-group-addon,
.dropdown-menu,
.popover,
.popover-title {
  font-size: <?php echo $font_size_base; ?>px;
}
.lead { font-size: <?php echo floor( $font_size_base * 1.15 ); ?>px; }
@media (min-width: 768px) {
  .lead { font-size: <?php echo $font_size_base * 1.5; ?>px; }
}
pre { font-size: <?php echo $font_size_base - 1; ?>px; }
legend,
.close {
  font-size: <?php echo $font_size_base * 1.5; ?>px;
}
.panel-title { font-size: <?php echo ceil( $font_size_base * 1.125 ); ?>px; }
<?php endif;


$font_size_large = get_theme_mod( 'wlru_font_size_large', 18 );
if ( $font_size_large !== 18 ) : ?>
.input-lg,
.form-group-lg .form-control,
.form-group-lg .form-control-static,
.btn-lg,
.input-group-addon.input-lg,
.navbar-brand,
.pagination-lg > li > a,
.pagination-lg > li > span {
  font-size: <?php echo $font_size_large; ?>px;
}
@media (min-width: 768px) {
  .form-group-lg .control-label {
    font-size: <?php echo $font_size_large; ?>px;
  }
}
<?php endif;


$font_size_small = get_theme_mod( 'wlru_font_size_small', 12 );
if ( $font_size_small !== 12 ) : ?>
.input-sm,
.form-group-sm .form-control,
.form-group-sm .form-control-static,
.btn-sm,
.btn-xs,
.input-group-addon.input-sm,
.pagination-sm > li > a,
.pagination-sm > li > span,
.dropdown-header,
.badge,
.progress-bar,
.tooltip {
  font-size: <?php echo $font_size_small; ?>px;
}
@media (min-width: 768px) {
  .form-group-sm .control-label {
    font-size: <?php echo $font_size_small; ?>px;
  }
}
<?php endif;


if ( $font_size_small !== 12 || $font_size_base !== 14 ) : ?>
small,
.small {
  font-size: <?php echo floor( 100 * $font_size_small / $font_size_base ); ?>%;
}
<?php endif;


$font_size_h1 = get_theme_mod( 'wlru_font_size_h1', 36 );
if ( $font_size_h1 !== 36 ) : ?>
h1, .h1 {
  font-size: <?php echo $font_size_h1; ?>px;
}
<?php endif;


$font_size_h2 = get_theme_mod( 'wlru_font_size_h2', 30 );
if ( $font_size_h2 !== 30 ) : ?>
h2, .h2 {
  font-size: <?php echo $font_size_h2; ?>px;
}
<?php endif;


$font_size_h3 = get_theme_mod( 'wlru_font_size_h3', 24 );
if ( $font_size_h3 !== 24 ) : ?>
h3, .h3 {
  font-size: <?php echo $font_size_h3; ?>px;
}
<?php endif;


$font_size_h4 = get_theme_mod( 'wlru_font_size_h4', 18 );
if ( $font_size_h4 !== 18 ) : ?>
h4, .h4 {
  font-size: <?php echo $font_size_h4; ?>px;
}
<?php endif;


$font_size_h5 = get_theme_mod( 'wlru_font_size_h5', 14 );
if ( $font_size_h5 !== 14 ) : ?>
h5, .h5 {
  font-size: <?php echo $font_size_h5; ?>px;
}
<?php endif;


$font_size_h6 = get_theme_mod( 'wlru_font_size_h6', 12 );
  if ( $font_size_h6 !== 12 ) : ?>
h6, .h6 {
  font-size: <?php echo $font_size_h6; ?>px;
}
<?php endif;


$line_height_base = get_theme_mod( 'wlru_line_height_base', 1.428571429 );
if ( $line_height_base !== 1.428571429 ) : ?>
body,
.img-thumbnail,
dt,
dd,
blockquote footer,
blockquote small,
blockquote .small,
address,
pre,
.table > thead > tr > th,
.table > thead > tr > td,
.table > tbody > tr > th,
.table > tbody > tr > td,
.table > tfoot > tr > th,
.table > tfoot > tr > td,
output,
.form-control,
.btn,
.dropdown-menu > li > a,
.dropdown-header,
.nav-tabs > li > a,
.pagination > li > a,
.pagination > li > span,
.thumbnail {
  line-height: <?php echo $line_height_base; ?>;
}
<?php endif;


$line_height_computed = floor( $font_size_base * $line_height_base );
if ( $font_size_base !== 14 || $line_height_base !== 1.428571429 ) : ?>
hr,
.lead,
dl,
address,
.table,
legend,
.breadcrumb,
.thumbnail,
.alert,
.progress,
.panel,
.panel-group {
  margin-bottom: <?php echo $line_height_computed; ?>px;
}
hr,
h1, .h1,
h2, .h2,
h3, .h3 {
  margin-top: <?php echo $line_height_computed; ?>px;
}
h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6,
ul,
ol {
  margin-bottom: <?php echo $line_height_computed / 2; ?>px;
}
h4, .h4,
h5, .h5,
h6, .h6 {
  margin-top: <?php echo $line_height_computed / 2; ?>px;
}
p,
pre {
  margin: 0 0 <?php echo $line_height_computed / 2; ?>px;
}
.page-header {
  padding-bottom: <?php echo ( $line_height_computed / 2 ) - 1; ?>px;
  margin: <?php echo $line_height_computed * 2; ?>px 0 <?php echo $line_height_computed; ?>px;
}
blockquote {
  padding: <?php echo $line_height_computed / 2; ?>px <?php echo $line_height_computed; ?>px;
  margin: 0 0 <?php echo $line_height_computed; ?>px;
}
pre { padding: <?php echo ( $line_height_computed - 1 ) / 2; ?>px; }
@media screen and (max-width: 767px) {
  .table-responsive {
    margin-bottom: <?php echo $line_height_computed * 0.75; ?>;
  }
}
.radio label,
.checkbox label {
  min-height: <?php echo $line_height_computed; ?>px;
}
.has-feedback label ~ .form-control-feedback { top: <?php echo $line_height_computed + 5; ?>px; }
.dropdown-menu .divider,
.nav .nav-divider {
  margin: <?php echo ( $line_height_computed / 2 ) -1; ?>px 0;
}
.navbar-brand,
.navbar-nav > li > a,
.progress-bar {
  line-height: <?php echo $line_height_computed; ?>px;
}
@media (max-width: 767px) {
  .open .dropdown-menu > li > a {
    line-height: <?php echo $line_height_computed; ?>px;
  }
}
.pagination,
.pager {
  margin: <?php echo $line_height_computed; ?>px 0;
}
.progress { height: <?php echo $line_height_computed; ?>px; }
<?php endif;


if ( $font_size_base !== 14 || $line_height_base !== 1.428571429 ) : ?>
.form-control-static { min-height: <?php echo $line_height_computed + $font_size_base; ?>; }
<?php endif;


  if ( $font_size_large !== 18 || $line_height_base !== 1.428571429 ) : ?>
.form-group-lg .form-control-static {
  min-height: <?php echo $line_height_computed + $font_size_large; ?>px;
}
<?php endif;


if ( $font_size_small !== 12 || $line_height_base !== 1.428571429 ) : ?>
.form-group-sm .form-control-static {
  min-height: <?php echo $line_height_computed + $font_size_small; ?>px;
}
<?php endif;


$headings_font_family = get_theme_mod( 'wlru_headings_font_family', 'inherit' );
if ( $headings_font_family !== 'inherit' ) : ?>
h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: <?php echo $headings_font_family; ?>;
}
<?php endif;


$headings_h1_font_weight = get_theme_mod( 'wlru_headings_h1_font_weight', 'normal' );
if ( $headings_h1_font_weight !== 'normal' ) : ?>
h1, .h1 { font-weight: <?php echo $headings_h1_font_weight; ?>; }
<?php endif;


$headings_h2_font_weight = get_theme_mod( 'wlru_headings_h2_font_weight', 'normal' );
if ( $headings_h2_font_weight !== 'normal' ) : ?>
h2, .h2 { font-weight: <?php echo $headings_h2_font_weight; ?>; }
<?php endif;


$headings_h3_font_weight = get_theme_mod( 'wlru_headings_h3_font_weight', 'normal' );
if ( $headings_h3_font_weight !== 'normal' ) : ?>
h3, .h3 { font-weight: <?php echo $headings_h3_font_weight; ?>; }
<?php endif;


$headings_h4_font_weight = get_theme_mod( 'wlru_headings_h4_font_weight', 'normal' );
if ( $headings_h4_font_weight !== 'normal' ) : ?>
h4, .h4 { font-weight: <?php echo $headings_h4_font_weight; ?>; }
<?php endif;


$headings_h5_font_weight = get_theme_mod( 'wlru_headings_h5_font_weight', 'normal' );
if ( $headings_h5_font_weight !== 'normal' ) : ?>
h5, .h5 { font-weight: <?php echo $headings_h5_font_weight; ?>; }
<?php endif;


$headings_h6_font_weight = get_theme_mod( 'wlru_headings_h6_font_weight', 'normal' );
if ( $headings_h6_font_weight !== 'normal' ) : ?>
h6, .h6 { font-weight: <?php echo $headings_h6_font_weight; ?>; }
<?php endif;


$headings_line_height = get_theme_mod( 'wlru_headings_line_height', 1.1 );
if ( $headings_line_height !== 1.1 ) : ?>
h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  line-height: <?php echo $headings_line_height; ?>;
}
<?php endif;


$headings_color = get_theme_mod( 'wlru_headings_color', '#555555' );
if ( $headings_color !== '#555555' ) : ?>
h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  color: <?php echo $headings_color; ?>;
}
<?php endif; ?>
</style>
<?php }
