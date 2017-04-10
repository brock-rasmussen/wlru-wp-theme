<?php
// $gray_darker     = '#222222';
// $gray_dark       = '#333333';
// $gray            = '#555555';
// $gray_light      = '#777777';
// $gray_lighter    = '#eeeeee';
// $brand_primary   = get_theme_mod( 'wlru_brand_primary', '#337ab7' );
// $brand_success   = get_theme_mod( 'wlru_brand_success', '#5cb85c' );
// $brand_info      = get_theme_mod( 'wlru_brand_info', '#5bc0de' );
// $brand_warning   = get_theme_mod( 'wlru_brand_warning', '#f0ad4e' );
// $brand_danger    = get_theme_mod( 'wlru_brand_danger', '#d9534f' );

add_action( 'wp_head', 'wlru_customize_bs_colors_css' );
function wlru_customize_bs_colors_css() { ?>
<style type="text/css" id="wlru-colors"><?php
$brand_primary = get_theme_mod( 'wlru_brand_primary', '#337ab7' );
if ( $brand_primary !== '#337ab7' ) : ?>
.text-primary { color: <?php echo $brand_primary; ?>; }
a.text-primary:hover,
a.text-primary:focus {
  color: <?php echo darken( $brand_primary, 10 ); ?>;
}
.bg-primary { background-color: <?php echo $brand_primary; ?>; }
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: <?php echo darken( $brand_primary, 10 ); ?>;
}
<?php endif; ?>
</style>
<?php }
