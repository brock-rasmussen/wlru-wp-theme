<?php
add_action( 'wp_head', 'wlru_customize_bs_type_css' );
function wlru_customize_bs_type_css() { ?>
<style type="text/css" id="wlru-type"><?php
$text_muted = get_theme_mod( 'wlru_text_muted', '#777777' );
if ( $text_muted !== '#777777' ) : ?>
.text-muted,
caption {
  color: <?php echo $text_muted; ?>;
}
<?php endif;


$abbr_border_color = get_theme_mod( 'wlru_abbr_border_color', '#777777' );
if ( $abbr_border_color !== '#777777' ) : ?>
abbr[title],
abbr[data-original-title] {
  border-bottom: 1px dotted <?php echo $abbr_border_color; ?>;
}
<?php endif;


$headings_small_color = get_theme_mod( 'wlru_headings_small_color', '#777777' );
if ( $headings_small_color !== '#777777' ) : ?>
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  color: <?php echo $headings_small_color; ?>;
}
<?php endif;


$blockquote_small_color = get_theme_mod( 'wlru_blockquote_small_color', '#777777' );
if ( $blockquote_small_color !== '#777777' ) : ?>
blockquote footer,
blockquote small,
blockquote .small {
  color: <?php echo $blockquote_small_color; ?>;
}
<?php endif;


$blockquote_font_size = get_theme_mod( 'wlru_blockquote_font_size', 17.5 );
if ( $blockquote_font_size !== 17.5 ) : ?>
blockquote { font-size: <?php echo $blockquote_font_size; ?>; }
<?php endif;


$blockquote_border_color = get_theme_mod( 'wlru_blockquote_border_color', '#eeeeee' );
if ( $blockquote_border_color !== '#eeeeee' ) : ?>
blockquote { border-left: 5px solid <?php echo $blockquote_border_color; ?>; }
.blockquote-reverse,
blockquote.pull-right {
  border-right: 5px solid <?php echo $blockquote_border_color; ?>;
  border-left: 0;
}
<?php endif;


$page_header_border_color = get_theme_mod( 'wlru_page_header_border_color', '#eeeeee' );
if ( $page_header_border_color !== '#eeeeee' ) : ?>
.page-header {
  border-bottom: 1px solid <?php echo $page_header_border_color; ?>;
}
<?php endif;


$dl_horizontal_offset = get_theme_mod( 'wlru_dl_horizontal_offset', 180 );
if ( $dl_horizontal_offset !== 180 ) : ?>
@media (min-width: 768px) {
  .dl-horizontal dt { width: <?php echo $dl_horizontal_offset - 20; ?>px; }
  .dl-horizontal dd { margin-left: <?php echo $dl_horizontal_offset; ?>px; }
}
<?php endif;


$hr_border = get_theme_mod( 'wlru_hr_border', '#eeeeee' );
if ( $hr_border !== '#eeeeee' ) : ?>
hr { border-top: 1px solid <?php echo $hr_border; ?>; }
<?php endif; ?>
</style>
<?php }
