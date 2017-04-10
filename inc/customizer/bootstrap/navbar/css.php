<?php
add_action( 'wp_head', 'wlru_customize_bs_navbar_css' );
function wlru_customize_bs_navbar_css() { ?>
<style type="text/css" id="wlru-navbar"><?php
// NAVBAR SETTINGS
$navbar_position = get_theme_mod( 'wlru_navbar_position', 'navbar-static-top' );

$navbar_height = get_theme_mod( 'wlru_navbar_height', 50);
if ( $navbar_height !== 50 ) : ?>
.navbar { min-height: <?php echo $navbar_height; ?>px; }
.navbar-brand { height: <?php echo $navbar_height; ?>px; }
<?php endif;


$navbar_margin_bottom = get_theme_mod( 'wlru_navbar_margin_bottom', 20 );
if ( $navbar_margin_bottom !== 20 ) : ?>
.navbar { margin-bottom: <?php echo $navbar_margin_bottom; ?>px; }
<?php endif;


if ( $navbar_position === 'navbar-fixed-top' ) : ?>
body { padding-top: <?php echo $navbar_height + $navbar_margin_bottom; ?>px; }
<?php elseif ( $navbar_position === 'navbar-fixed-bottom' ) : ?>
body { padding-bottom: <?php echo $navbar_height + $navbar_margin_bottom; ?>px; }
<?php endif;


$navbar_padding_horizontal = get_theme_mod( 'wlru_navbar_padding_horizontal', 15 );
if ( $navbar_padding_horizontal !== 15 ) : ?>
.navbar-collapse {
  padding-left: <?php echo $navbar_padding_horizontal; ?>px;
  padding-right: <?php echo $navbar_padding_horizontal; ?>px;
}
.container > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-header,
.container-fluid > .navbar-collapse {
  margin-left: <?php echo $navbar_padding_horizontal; ?>px;
}
.container > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-header,
.container-fluid > .navbar-collapse,
.navbar-toggle {
  margin-right: <?php echo $navbar_padding_horizontal; ?>px;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -<?php echo $navbar_padding_horizontal; ?>px;
  }
  .navbar-text {
    margin-left: <?php echo $navbar_padding_horizontal; ?>px;
    margin-right: <?php echo $navbar_padding_horizontal; ?>px;
  }
  .navbar-right {
    margin-right: -<?php echo $navbar_padding_horizontal; ?>px;
  }
}
.navbar-form {
  margin-left: -<?php echo $navbar_padding_horizontal; ?>px;
  margin-right: -<?php echo $navbar_padding_horizontal; ?>px;
  padding: 10px <?php echo $navbar_padding_horizontal; ?>px;
}
<?php endif;


$navbar_padding_vertical = get_theme_mod( 'wlru_navbar_padding_vertical', 15 );
if ( $navbar_padding_vertical !== 15 ) : ?>
@media (min-width: 768px) {
  .navbar-nav > li > a {
    padding-top: <?php echo $navbar_padding_vertical; ?>px;
    padding-bottom: <?php echo $navbar_padding_vertical; ?>px;
  }
}
<?php endif;


if ( $navbar_padding_horizontal !== 15 || $navbar_padding_vertical !== 15 ) : ?>
.navbar-brand { padding: <?php echo $navbar_padding_vertical; ?>px <?php echo $navbar_padding_horizontal; ?>px; }
.navbar-nav { margin: <?php echo $navbar_padding_vertical / 2; ?>px -<?php echo $navbar_padding_horizontal; ?>px; }
<?php endif;


// DESKTOP NAVBAR
$navbar_mode = get_theme_mod( 'wlru_navbar_mode', 'navbar-default' );
if ( $navbar_mode === 'navbar-default' ) {
  $navbar_color = get_theme_mod( 'wlru_navbar_default_color', '#777777' );
  $navbar_bg = get_theme_mod( 'wlru_navbar_default_bg', '#f8f8f8' );
  $navbar_border = get_theme_mod( 'wlru_navbar_default_border', '#e7e7e7');
  $navbar_link_color = get_theme_mod( 'wlru_navbar_default_link_color', '#777777' );
  $navbar_link_hover_color = get_theme_mod( 'wlru_navbar_default_link_hover_color', '#333333' );
  $navbar_link_active_color = get_theme_mod( 'wlru_navbar_default_link_active_color', '#555555' );
  $navbar_link_active_bg = get_theme_mod( 'wlru_navbar_default_link_active_bg', '#e7e7e7' );
  $navbar_link_disabled_color = get_theme_mod( 'wlru_navbar_default_link_disabled_color', '#cccccc' );
  $navbar_toggle_hover_bg = get_theme_mod( 'wlru_navbar_default_toggle_hover_bg', '#dddddd' );
  $navbar_toggle_icon_bar_bg = get_theme_mod( 'wlru_navbar_default_toggle_icon_bar_bg', '#888888' );
  $navbar_toggle_border_color = get_theme_mod( 'wlru_navbar_default_toggle_border_color', '#dddddd' );
} else {
  $navbar_color = get_theme_mod( 'wlru_navbar_inverse_color', '#9d9d9d' );
  $navbar_bg = get_theme_mod( 'wlru_navbar_inverse_bg', '#222222' );
  $navbar_border = get_theme_mod( 'wlru_navbar_inverse_border', '#080808' );
  $navbar_link_color = get_theme_mod( 'wlru_navbar_inverse_link_color', '#9e9e9e' );
  $navbar_link_hover_color = get_theme_mod( 'wlru_navbar_inverse_link_hover_color', '#ffffff' );
  $navbar_link_active_color = get_theme_mod( 'wlru_navbar_inverse_link_active_color', '#ffffff' );
  $navbar_link_active_bg = get_theme_mod( 'wlru_navbar_inverse_link_active_bg', '#080808' );
  $navbar_link_disabled_color = get_theme_mod( 'wlru_navbar_inverse_link_disabled_color', '#444444' );
  $navbar_toggle_hover_bg = get_theme_mod( 'wlru_navbar_inverse_toggle_hover_bg', '#333333' );
  $navbar_toggle_icon_bar_bg = get_theme_mod( 'wlru_navbar_inverse_toggle_icon_bar_bg', '#ffffff' );
  $navbar_toggle_border_color = get_theme_mod( 'wlru_navbar_inverse_toggle_border_color', '#333333' );
}
$navbar_brand_color = $navbar_link_color;
$navbar_brand_hover_color = $navbar_link_hover_color;


if ( ( $navbar_mode === 'navbar-default' && $navbar_color !== '#777777' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_color !== '#9d9d9d' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-text { color: <?php echo $navbar_color; ?>; }
<?php endif;


$navbar_opacity = get_theme_mod( 'wlru_navbar_opacity', 1 );

if ( ( $navbar_mode === 'navbar-default' && $navbar_bg !== '#f8f8f8' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_bg !== '#222222' ) ) : ?>
.<?php echo $navbar_mode; ?> { background-color: <?php echo hsla( $navbar_bg, $navbar_opacity ); ?>; }
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_border !== '#e7e7e7' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_border !== '#080808' ) ) : ?>
.<?php echo $navbar_mode; ?>,
.<?php echo $navbar_mode; ?> .navbar-collapse,
.<?php echo $navbar_mode; ?> .navbar-form {
  border-color: <?php echo $navbar_border; ?>;
}
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_link_color !== '#777777' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_link_color !== '#9e9e9e' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-nav > li > a,
.<?php echo $navbar_mode; ?> .navbar-link,
.<?php echo $navbar_mode; ?> .btn-link {
  color: <?php echo $navbar_link_color; ?>;
}
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_link_hover_color !== '#333333' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_link_hover_color !== '#ffffff' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-nav > li > a:hover,
.<?php echo $navbar_mode; ?> .navbar-nav > li > a:focus,
.<?php echo $navbar_mode; ?> .navbar-link:hover,
.<?php echo $navbar_mode; ?> .btn-link:hover,
.<?php echo $navbar_mode; ?> .btn-link:focus {
  color: <?php echo $navbar_link_hover_color; ?>;
}
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_link_active_color !== '#555555' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_link_active_color !== '#ffffff' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-nav > .active > a,
.<?php echo $navbar_mode; ?> .navbar-nav > .active > a:hover,
.<?php echo $navbar_mode; ?> .navbar-nav > .active > a:focus,
.<?php echo $navbar_mode; ?> .navbar-nav > .open > a,
.<?php echo $navbar_mode; ?> .navbar-nav > .open > a:hover,
.<?php echo $navbar_mode; ?> .navbar-nav > .open > a:focus {
  color: <?php echo $navbar_link_active_color; ?>;
}
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_link_active_bg !== '#e7e7e7' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_link_active_bg !== '#080808' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-nav > .active > a,
.<?php echo $navbar_mode; ?> .navbar-nav > .active > a:hover,
.<?php echo $navbar_mode; ?> .navbar-nav > .active > a:focus,
.<?php echo $navbar_mode; ?> .navbar-nav > .open > a,
.<?php echo $navbar_mode; ?> .navbar-nav > .open > a:hover,
.<?php echo $navbar_mode; ?> .navbar-nav > .open > a:focus {
  background-color: <?php echo $navbar_link_active_bg; ?>;
}
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_link_disabled_color !== '#cccccc' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_link_disabled_color !== '#444444' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-nav > .disabled > a,
.<?php echo $navbar_mode; ?> .navbar-nav > .disabled > a:hover,
.<?php echo $navbar_mode; ?> .navbar-nav > .disabled > a:focus,
.<?php echo $navbar_mode; ?> .btn-link[disabled]:hover,
.<?php echo $navbar_mode; ?> .btn-link[disabled]:focus,
fieldset[disabled] .<?php echo $navbar_mode; ?> .btn-link:hover,
fieldset[disabled] .<?php echo $navbar_mode; ?> .btn-link:focus {
  color: <?php echo $navbar_link_disabled_color; ?>;
}
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_brand_color !== '#777777' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_brand_color !== '#9e9e9e' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-brand { color: <?php echo $navbar_brand_color; ?>; }
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_brand_hover_color !== '#333333' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_brand_hover_color !== '#ffffff' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-brand:hover,
.<?php echo $navbar_mode; ?> .navbar-brand:focus {
  color: <?php echo $navbar_brand_hover_color; ?>;
}
<?php endif;


// MOBILE NAVBAR
if ( $navbar_mode === 'navbar-default' ) {
  $mobile_navbar_color = get_theme_mod( 'wlru_mobile_navbar_default_color', '#777777' );
  $mobile_navbar_bg = get_theme_mod( 'wlru_mobile_navbar_default_bg', '#f8f8f8' );
  $mobile_navbar_border = get_theme_mod( 'wlru_mobile_navbar_default_border', '#e7e7e7');
  $mobile_navbar_link_color = get_theme_mod( 'wlru_mobile_navbar_default_link_color', '#777777' );
  $mobile_navbar_link_hover_color = get_theme_mod( 'wlru_mobile_navbar_default_link_hover_color', '#333333' );
  $mobile_navbar_link_active_color = get_theme_mod( 'wlru_mobile_navbar_default_link_active_color', '#555555' );
  $mobile_navbar_link_active_bg = get_theme_mod( 'wlru_mobile_navbar_default_link_active_bg', '#e7e7e7' );
  $mobile_navbar_link_disabled_color = get_theme_mod( 'wlru_mobile_navbar_default_link_disabled_color', '#cccccc' );
  $mobile_navbar_toggle_hover_bg = get_theme_mod( 'wlru_mobile_navbar_default_toggle_hover_bg', '#dddddd' );
  $mobile_navbar_toggle_icon_bar_bg = get_theme_mod( 'wlru_mobile_navbar_default_toggle_icon_bar_bg', '#888888' );
  $mobile_navbar_toggle_border_color = get_theme_mod( 'wlru_mobile_navbar_default_toggle_border_color', '#dddddd' );
} else {
  $mobile_navbar_color = get_theme_mod( 'wlru_mobile_navbar_inverse_color', '#9d9d9d' );
  $mobile_navbar_bg = get_theme_mod( 'wlru_mobile_navbar_inverse_bg', '#222222' );
  $mobile_navbar_border = get_theme_mod( 'wlru_mobile_navbar_inverse_border', '#080808' );
  $mobile_navbar_link_color = get_theme_mod( 'wlru_mobile_navbar_inverse_link_color', '#9e9e9e' );
  $mobile_navbar_link_hover_color = get_theme_mod( 'wlru_mobile_navbar_inverse_link_hover_color', '#ffffff' );
  $mobile_navbar_link_active_color = get_theme_mod( 'wlru_mobile_navbar_inverse_link_active_color', '#ffffff' );
  $mobile_navbar_link_active_bg = get_theme_mod( 'wlru_mobile_navbar_inverse_link_active_bg', '#080808' );
  $mobile_navbar_link_disabled_color = get_theme_mod( 'wlru_mobile_navbar_inverse_link_disabled_color', '#444444' );
  $mobile_navbar_toggle_hover_bg = get_theme_mod( 'wlru_mobile_navbar_inverse_toggle_hover_bg', '#333333' );
  $mobile_navbar_toggle_icon_bar_bg = get_theme_mod( 'wlru_mobile_navbar_inverse_toggle_icon_bar_bg', '#ffffff' );
  $mobile_navbar_toggle_border_color = get_theme_mod( 'wlru_mobile_navbar_inverse_toggle_border_color', '#333333' );
}


?>@media (max-width: 767px) {<?php
  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_color !== '#777777' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_color !== '#9d9d9d' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-text { color: <?php echo $mobile_navbar_color; ?>; }
  <?php endif;


  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_bg !== '#f8f8f8' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_bg !== '#222222' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse { background-color: <?php echo $mobile_navbar_bg; ?>; }
  <?php endif;


  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_border !== '#e7e7e7' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_border !== '#080808' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-collapse,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-form {
    border-color: <?php echo $mobile_navbar_border; ?>;
  }
  <?php endif;


  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_link_color !== '#777777' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_link_color !== '#9e9e9e' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > li > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-link,
  .<?php echo $navbar_mode; ?> .navbar-collapse .btn-link,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > li > a {
    color: <?php echo $mobile_navbar_link_color; ?>;
  }
  <?php endif;


  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_link_hover_color !== '#333333' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_link_hover_color !== '#ffffff' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > li > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > li > a:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-link:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .btn-link:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .btn-link:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > li > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: <?php echo $mobile_navbar_link_hover_color; ?>;
  }
  <?php endif;


  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_link_active_color !== '#555555' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_link_active_color !== '#ffffff' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .active > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .active > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .active > a:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .open > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .open > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .open > a:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .active > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: <?php echo $mobile_navbar_link_active_color; ?>;
  }
  <?php endif;


  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_link_active_bg !== '#e7e7e7' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_link_active_bg !== '#080808' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .active > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .active > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .active > a:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .open > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .open > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .open > a:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .active > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .active > a:focus {
    background-color: <?php echo $mobile_navbar_link_active_bg; ?>;
  }
  <?php endif;


  if ( ( $navbar_mode === 'navbar-default' && $mobile_navbar_link_disabled_color !== '#cccccc' ) || ( $navbar_mode !== 'navbar-inverse' && $mobile_navbar_link_disabled_color !== '#444444' ) ) : ?>
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .disabled > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .disabled > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav > .disabled > a:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .btn-link[disabled]:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .btn-link[disabled]:focus,
  fieldset[disabled] .<?php echo $navbar_mode; ?> .navbar-collapse .btn-link:hover,
  fieldset[disabled] .<?php echo $navbar_mode; ?> .navbar-collapse .btn-link:focus,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .disabled > a,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .<?php echo $navbar_mode; ?> .navbar-collapse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: <?php echo $mobile_navbar_link_disabled_color; ?>;
  }
  <?php endif; ?>
}
<?php


if ( ( $navbar_mode === 'navbar-default' && $navbar_toggle_hover_bg !== '#dddddd' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_toggle_hover_bg !== '#333333' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-toggle:hover,
.<?php echo $navbar_mode; ?> .navbar-toggle:focus {
  background-color: <?php echo $navbar_toggle_hover_bg; ?>;
}
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_toggle_icon_bar_bg !== '#888888' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_toggle_icon_bar_bg !== '#ffffff' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-toggle .icon-bar { background-color: <?php echo $navbar_toggle_icon_bar_bg; ?>; }
<?php endif;


if ( ( $navbar_mode === 'navbar-default' && $navbar_toggle_border_color !== '#dddddd' ) || ( $navbar_mode !== 'navbar-inverse' && $navbar_toggle_border_color !== '#333333' ) ) : ?>
.<?php echo $navbar_mode; ?> .navbar-toggle { border-color: <?php echo $navbar_toggle_border_color; ?>; }
<?php endif; ?>
</style>
<?php }
