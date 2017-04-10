<?php
add_action( 'wp_head', 'wlru_customize_css' );
function wlru_customize_css() { ?>
<style type="text/css" id="wlru-scaffolding"><?php
$body_bg = get_theme_mod( 'wlru_body_bg', '#ffffff' );
if ( $body_bg !== '#ffffff' ) : ?>
body,
.table .table {
  background-color: <?php echo $body_bg; ?>;
}
<?php endif;


$text_color = get_theme_mod( 'wlru_text_color', '#555555' );
if ( $text_color !== '#555555' ) : ?>
body { color: <?php echo $text_color; ?>; }
.help-block { color: <?php echo lighten( $text_color, 25 ); ?>; }
<?php endif;


$link_color = get_theme_mod( 'wlru_link_color', '#337ab7' );
if ( $link_color !== '#337ab7' ) : ?>
a,
.btn-link {
  color: <?php echo $link_color; ?>;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus,
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: <?php echo $link_color; ?>;
}
<?php endif;


$link_hover_color = get_theme_mod( 'wlru_link_hover_color', '#23527c' );
if ( $link_hover_color !== '#23527c' ) : ?>
a:hover,
a:focus,
.btn-link:hover,
.btn-link:focus {
  color: <?php echo $link_hover_color; ?>;
}
<?php endif;

$link_hover_decoration = get_theme_mod( 'wlru_link_hover_decoration', 'underline' );
if ( $link_hover_decoration !== 'underline' ) : ?>
a:hover,
a:focus,
.btn-link:hover,
.btn-link:focus {
  text-decoration: <?php echo $link_hover_decoration; ?>;
}
<?php endif; ?>
</style>
<?php }
