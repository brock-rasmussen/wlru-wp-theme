<?php
add_action( 'wp_head', 'wlru_customize_bs_wells_css' );
function wlru_customize_bs_wells_css() { ?>
<style type="text/css" id="wlru-wells"><?php
$well_bg = get_theme_mod( 'wlru_well_bg', '#f5f5f5' );
if ( $well_bg !== '#f5f5f5' ) : ?>
.well { background-color: <?php echo $well_bg; ?>; }
<?php endif;


$well_border = get_theme_mod( 'wlru_well_border', '#e3e3e3' );
if ( $well_border !== '#e3e3e3' ) : ?>
.well { border: 1px solid <?php echo $well_border; ?>; }
<?php endif; ?>
</style>
<?php }
