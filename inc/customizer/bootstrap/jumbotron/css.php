<?php
add_action( 'wp_head', 'wlru_customize_bs_jumbotron_css' );
function wlru_customize_bs_jumbotron_css() { ?>
<style type="text/css" id="wlru-jumbotron"><?php
$jumbotron_padding = get_theme_mod( 'wlru_jumbotron_padding', 30 );
if ( $jumbotron_padding !== 30 ) : ?>
.jumbotron {
  padding-top: <?php echo $jumbotron_padding; ?>px;
  padding-bottom: <?php echo $jumbotron_padding; ?>px;
  margin-bottom: <?php echo $jumbotron_padding; ?>px;
}
.jumbotron p {
  margin-bottom: <?php echo $jumbotron_padding / 2; ?>px;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: <?php echo $jumbotron_padding * 1.6; ?>px;
    padding-bottom: <?php echo $jumbotron_padding * 1.6; ?>px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: <?php echo $jumbotron_padding * 2; ?>px;
    padding-right: <?php echo $jumbotron_padding * 2; ?>px;
  }
}
<?php endif;


$jumbotron_color = get_theme_mod( 'wlru_jumbotron_color', '#555555' );
if ( $jumbotron_color !== '#555555' ) : ?>
.jumbotron { color: <?php echo $jumbotron_color; ?>; }
<?php endif;


$jumbotron_bg = get_theme_mod( 'wlru_jumbotron_bg', '#eeeeee' );
if ( $jumbotron_bg !== '#eeeeee' ) : ?>
.jumbotron { background-color: <?php echo $jumbotron_bg; ?>; }
.jumbotron > hr { border-top-color: <?php echo darken( $jumbotron_bg, 10 ); ?>; }
<?php endif;


$jumbotron_heading_color = get_theme_mod( 'wlru_jumbotron_heading_color', '#555555' );
if ( $jumbotron_heading_color !== '#555555' ) : ?>
.jumbotron h1,
.jumbotron .h1 {
  color: <?php echo $jumbotron_heading_color; ?>;
}
<?php endif;


$jumbotron_font_size = get_theme_mod( 'wlru_jumbotron_font_size', 21 );
if ( $jumbotron_font_size !== 21 ) : ?>
.jumbotron p { font-size: <?php echo $jumbotron_font_size; ?>px; }
<?php endif;


$jumbotron_heading_font_size = get_theme_mod( 'wlru_jumbotron_heading_font_size', 63 );
if ( $jumbotron_heading_font_size !== 63 ) : ?>
@media screen and (min-width: 768px) {
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: <?php echo $jumbotron_heading_font_size; ?>px;
  }
}
<?php endif; ?>
</style>
<?php }
