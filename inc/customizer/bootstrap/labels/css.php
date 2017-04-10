<?php
add_action( 'wp_head', 'wlru_customize_bs_labels_css' );
function wlru_customize_bs_labels_css() { ?>
<style type="text/css" id="wlru-labels"><?php
$label_default_bg = get_theme_mod( 'wlru_label_default_bg', '#777777' );
if ( $label_default_bg !== '#777777' ) : ?>
.label-default { background-color: <?php echo $label_default_bg; ?>; }
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: <?php echo darken( $label_default_bg, 10 ); ?>;
}
<?php endif;


$brand_primary = get_theme_mod( 'wlru_brand_primary', '#337ab7' );
$label_primary_bg = $brand_primary;
if ( $label_primary_bg !== '#337ab7' ) : ?>
.label-primary { background-color: <?php echo $label_primary_bg; ?>; }
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: <?php echo darken( $label_primary_bg, 10 ); ?>;
}
<?php endif;


$brand_success = get_theme_mod( 'wlru_brand_success', '#5cb85c' );
$label_success_bg = $brand_success;
if ( $label_success_bg !== '#5cb85c' ) : ?>
.label-success { background-color: <?php echo $label_success_bg; ?>; }
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: <?php echo darken( $label_success_bg, 10 ); ?>;
}
<?php endif;


$brand_info = get_theme_mod( 'wlru_brand_info', '#5bc0de' );
$label_info_bg = $brand_info;
if ( $label_info_bg !== '#5bc0de' ) : ?>
.label-info { background-color: <?php echo $label_info_bg; ?>; }
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: <?php echo darken( $label_info_bg, 10 ); ?>;
}
<?php endif;


$brand_warning = get_theme_mod( 'wlru_brand_warning', '#f0ad4e' );
$label_warning_bg = $brand_warning;
if ( $label_warning_bg !== '#f0ad4e' ) : ?>
.label-warning { background-color: <?php echo $label_warning_bg; ?>; }
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: <?php echo darken( $label_warning_bg, 10 ); ?>;
}
<?php endif;


$brand_danger = get_theme_mod( 'wlru_brand_danger', '#d9534f' );
$label_danger_bg = $brand_danger;
if ( $label_danger_bg !== '#d9534f' ) : ?>
.label-danger { background-color: <?php echo $label_danger_bg; ?>; }
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: <?php echo darken( $label_danger_bg, 10 ); ?>;
}
<?php endif;


$label_color = get_theme_mod( 'wlru_label_color', '#ffffff' );
if ( $label_color !== '#ffffff' ) : ?>
.label { color: <?php echo $label_color; ?>; }
<?php endif;


$label_link_hover_color = get_theme_mod( 'wlru_label_link_hover_color', '#ffffff' );
if ( $label_link_hover_color !== '#ffffff' ) : ?>
.label:hover,
.label:focus {
  color: <?php echo $label_link_hover_color; ?>;
}
<?php endif; ?>
</style>
<?php }
