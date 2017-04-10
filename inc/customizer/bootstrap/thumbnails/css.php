<?php
add_action( 'wp_head', 'wlru_customize_bs_thumbnails_css' );
function wlru_customize_bs_thumbnails_css() { ?>
<style type="text/css" id="wlru-thumbnails"><?php
$thumbnail_padding = get_theme_mod( 'wlru_thumbnail_padding', 4 );
if ( $thumbnail_padding !== 4 ) : ?>
.img-thumbnail,
.thumbnail {
  padding: <?php echo $thumbnail_padding; ?>px;
}
<?php endif;


$thumbnail_bg = get_theme_mod( 'wlru_thumbnail_bg', '#ffffff' );
if ( $thumbnail_bg !== '#ffffff' ) : ?>
.img-thumbnail,
.thumbnail {
  background-color: <?php echo $thumbnail_bg; ?>;
}
<?php endif;


$thumbnail_border = get_theme_mod( 'wlru_thumbnail_border', '#dddddd' );
if ( $thumbnail_border !== '#dddddd' ) : ?>
.img-thumbnail,
.thumbnail {
  border: 1px solid <?php echo $thumbnail_border; ?>;
}
<?php endif;


$border_radius_base = get_theme_mod( 'wlru_border_radius_base', 4 );
$thumbnail_border_radius = $border_radius_base;
if ( $thumbnail_border_radius !== 4 ) : ?>
.img-thumbnail,
.thumbnail {
  border-radius: <?php echo $thumbnail_border_radius; ?>;
}
<?php endif;


$thumbnail_caption_color = get_theme_mod( 'wlru_thumbnail_caption_color', '#333333' );
if ( $thumbnail_caption_color !== '#333333' ) : ?>
.thumbnail .caption { color: <?php echo $thumbnail_caption_color; ?>; }
<?php endif;


$thumbnail_caption_padding = get_theme_mod( 'wlru_thumbnail_caption_padding', 9 );
if ( $thumbnail_caption_padding !== 9 ) : ?>
.thumbnail .caption { padding: <?php echo $thumbnail_caption_padding; ?>; }
<?php endif; ?>
</style>
<?php }
