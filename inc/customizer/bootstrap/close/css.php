<?php
add_action( 'wp_head', 'wlru_customize_bs_close_css' );
function wlru_customize_bs_close_css() { ?>
<style type="text/css" id="wlru-close"><?php
$close_font_weight = get_theme_mod( 'wlru_close_font_weight', 'bold' );
if ( $close_font_weight !== 'bold' ) : ?>
.close { font-weight: <?php echo $close_font_weight; ?>; }
<?php endif;


$close_color = get_theme_mod( 'wlru_close_color', '#000000' );
if ( $close_color !== '#000000' ) : ?>
.close,
.close:hover,
.close:focus {
  color: <?php echo $close_color; ?>;
}
<?php endif;


$close_text_shadow = get_theme_mod( 'wlru_close_text_shadow', '0 1px 0 #fff' );
if ( $close_text_shadow !== '0 1px 0 #fff' ) : ?>
.close { text-shadow: <?php echo $close_text_shadow; ?>; }
<?php endif; ?>
</style>
<?php }
