<?php
add_action( 'wp_head', 'wlru_customize_bs_pagination_css' );
function wlru_customize_bs_pagination_css() { ?>
<style type="text/css" id="wlru-pagination"><?php
$pagination_color = get_theme_mod( 'wlru_pagination_color', '#337ab7' );
if ( $pagination_color !== '#337ab7' ) : ?>
.pagination > li > a,
.pagination > li > span {
  color: <?php echo $pagination_color; ?>;
}
<?php endif;


$pagination_bg = get_theme_mod( 'wlru_pagination_bg', '#ffffff' );
if ( $pagination_bg !== '#ffffff' ) : ?>
.pagination > li > a,
.pagination > li > span {
  background-color: <?php echo $pagination_bg; ?>;
}
<?php endif;


$pagination_border = get_theme_mod( 'wlru_pagination_border', '#dddddd' );
if ( $pagination_border !== '#dddddd' ) : ?>
.pagination > li > a,
.pagination > li > span {
  border: 1px solid <?php echo $pagination_border; ?>;
}
<?php endif;


$pagination_hover_color = get_theme_mod( 'wlru_pagination_hover_color', '#23527c' );
if ( $pagination_hover_color !== '#23527c' ) : ?>
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: <?php echo $pagination_hover_color; ?>;
}
<?php endif;


$pagination_hover_bg = get_theme_mod( 'wlru_pagination_hover_bg', '#eeeeee' );
if ( $pagination_hover_bg !== '#eeeeee' ) : ?>
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  background-color: <?php echo $pagination_hover_bg; ?>;
}
<?php endif;


$pagination_hover_border = get_theme_mod( 'wlru_pagination_hover_border', '#dddddd' );
if ( $pagination_hover_border !== '#dddddd' ) : ?>
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  border-color: <?php echo $pagination_hover_border; ?>;
}
<?php endif;


$pagination_active_color = get_theme_mod( 'wlru_pagination_active_color', '#ffffff' );
if ( $pagination_active_color !== '#ffffff' ) : ?>
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  color: <?php echo $pagination_active_color; ?>;
}
<?php endif;


$pagination_active_bg = get_theme_mod( 'wlru_pagination_active_bg', '#337ab7' );
if ( $pagination_active_bg !== '#337ab7' ) : ?>
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color: <?php echo $pagination_active_bg; ?>;
}
<?php endif;


$pagination_active_border = get_theme_mod( 'wlru_pagination_active_border', '#337ab7' );
if ( $pagination_active_border !== '#337ab7' ) : ?>
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  border-color: <?php echo $pagination_active_border; ?>;
}
<?php endif;


$pagination_disabled_color = get_theme_mod( 'wlru_pagination_disabled_color', '#777777' );
if ( $pagination_disabled_color !== '#777777' ) : ?>
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: <?php echo $pagination_disabled_color; ?>;
}
<?php endif;


$pagination_disabled_bg = get_theme_mod( 'wlru_pagination_disabled_bg', '#ffffff' );
if ( $pagination_disabled_bg !== '#ffffff' ) : ?>
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  background-color: <?php echo $pagination_disabled_bg; ?>;
}
<?php endif;


$pagination_disabled_border = get_theme_mod( 'wlru_pagination_disabled_border', '#dddddd' );
if ( $pagination_disabled_border !== '#dddddd' ) : ?>
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  border-color: <?php echo $pagination_disabled_border; ?>;
}
<?php endif; ?>
</style>
<?php }
