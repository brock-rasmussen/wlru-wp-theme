<?php
add_action( 'wp_head', 'wlru_customize_bs_modals_css' );
function wlru_customize_bs_modals_css() { ?>
<style type="text/css" id="wlru-modals"><?php
$modal_inner_padding = get_theme_mod( 'wlru_modal_inner_padding', 15 );
if ( $modal_inner_padding !== 15 ) : ?>
.modal-body,
.modal-footer {
  padding: <?php echo $modal_inner_padding; ?>px;
}
<?php endif;


$modal_title_padding = get_theme_mod( 'wlru_modal_title_padding', 15 );
if ( $modal_title_padding !== 15 ) : ?>
.modal-header { padding: <?php echo $modal_title_padding; ?>px; }
<?php endif;


$modal_title_line_height = get_theme_mod( 'wlru_modal_title_line_height', 1.428571429 );
if ( $modal_title_line_height !== 1.428571429 ) : ?>
.modal-title { line-height: <?php echo $modal_title_line_height; ?>; }
<?php endif;


$modal_content_bg = get_theme_mod( 'wlru_modal_content_bg', '#ffffff' );
if ( $modal_content_bg !== '#ffffff' ) : ?>
.modal-content { background-color: <?php echo $modal_content_bg; ?>; }
<?php endif;


// modal_content_fallback_border_color used instead of modal_content_border_color
$modal_content_fallback_border_color = get_theme_mod( 'wlru_modal_content_fallback_border_color', '#999999' );
if ( $modal_content_fallback_border_color !== '#999999' ) : ?>
.modal-content { border: 1px solid <?php echo $modal_content_fallback_border_color; ?>; }
<?php endif;


$modal_backdrop_bg = get_theme_mod( 'wlru_modal_backdrop_bg', '#000000' );
if ( $modal_backdrop_bg !== '#000000' ) : ?>
.modal-backdrop { background-color: <?php echo $modal_backdrop_bg; ?>; }
<?php endif;


$modal_backdrop_opacity = get_theme_mod( 'wlru_modal_backdrop_opacity', 0.5 );
if ( $modal_backdrop_opacity !== 0.5 ) : ?>
.modal-backdrop.in {
  opacity: <?php echo $modal_backdrop_opacity; ?>;
  filter: alpha(opacity=<?php echo $modal_backdrop_opacity * 100; ?>);
}
<?php endif;


$modal_header_border_color = get_theme_mod( 'wlru_modal_header_border_color', '#e5e5e5' );
if ( $modal_header_border_color !== '#e5e5e5' ) : ?>
.modal-header { border-bottom: 1px solid <?php echo $modal_header_border_color; ?>; }
<?php endif;


$modal_footer_border_color = $modal_header_border_color;
if ( $modal_footer_border_color !== '#e5e5e5' ) : ?>
.modal-footer { border-top: 1px solid <?php echo $modal_footer_border_color; ?>; }
<?php endif;


$modal_lg = get_theme_mod( 'wlru_modal_lg', 900 );
if ( $modal_lg !== 900 ) : ?>
@media (min-width: 992px) {
  .modal-lg { width: <?php echo $modal_lg; ?>px; }
}
<?php endif;


$modal_md = get_theme_mod( 'wlru_modal_md', 600 );
if ( $modal_md !== 600 ) : ?>
@media (min-width: 768px) {
  .modal-dialog { width: <?php echo $modal_md; ?>px; }
}
<?php endif;


$modal_sm = get_theme_mod( 'wlru_modal_sm', 300 );
if ( $modal_sm !== 300 ) : ?>
@media (min-width: 768px) {
  .modal-sm { width: <?php echo $modal_sm; ?>px; }
}
<?php endif; ?>
</style>
<?php }
