<?php
add_action( 'wp_head', 'wlru_customize_bs_code_css' );
function wlru_customize_bs_code_css() { ?>
<style type="text/css" id="wlru-code"><?php
$code_color = get_theme_mod( 'wlru_code_color', '#c7254e' );
if ( $code_color !== '#c7254e' ) : ?>
code { color: <?php echo $code_color; ?>; }
<?php endif;


$code_bg = get_theme_mod( 'wlru_code_bg', '#f9f2f4' );
if ( $code_bg !== '#f9f2f4' ) : ?>
code { background-color: <?php echo $code_bg; ?>; }
<?php endif;


$kbd_color = get_theme_mod( 'wlru_kbd_color', '#ffffff' );
if ( $kbd_color !== '#ffffff' ) : ?>
kbd { color: <?php echo $kbd_color; ?>; }
<?php endif;


$kbd_bg = get_theme_mod( 'wlru_kbd_bg', '#333333' );
if ( $kbd_bg !== '#333333' ) : ?>
kbd { background-color: <?php echo $kbd_bg; ?>; }
<?php endif;


$pre_color = get_theme_mod( 'wlru_pre_color', '#333333' );
if ( $pre_color !== '#333333' ) : ?>
pre { color: <?php echo $pre_color; ?>; }
<?php endif;


$pre_bg = get_theme_mod( 'wlru_pre_bg', '#f5f5f5' );
if ( $pre_bg !== '#f5f5f5' ) : ?>
pre { background-color: <?php echo $pre_bg; ?>; }
<?php endif;


$pre_border_color = get_theme_mod( 'wlru_pre_border_color', '#cccccc' );
if ( $pre_border_color !== '#cccccc' ) : ?>
pre { border: 1px solid <?php echo $pre_border_color; ?>; }
<?php endif;


$pre_scrollable_max_height = get_theme_mod( 'wlru_pre_scrollable_max_height', 340 );
if ( $pre_scrollable_max_height !== 340 ) : ?>
.pre-scrollable { max-height: <?php echo $pre_scrollable_max_height; ?>px; }
<?php endif; ?>
</style>
<?php }
