<?php
if ( ! function_exists( 'wlru_setup' ) ) :
function wlru_setup() {
  load_theme_textdomain( 'wlru' , get_template_directory() . '/languages' );

  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'woocommerce' );
  add_theme_support( 'custom-header', apply_filters( 'wlru_custom_header_args', array(
    'default-image'       => '',
    'width'               => 1000,
    'height'              => 250,
    'flex-height'         => true,
  ) ) );
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'wlru' ),
  ) );
}
endif;
add_action( 'after_setup_theme', 'wlru_setup' );

add_action( 'widgets_init', 'wlru_widgets_init' );
function wlru_widgets_init() {
  register_sidebars( 4, array(
    'name'          => esc_html__( 'Footer %d', 'wlru' ),
    'id'            => 'footer-area',
    'description'   => esc_html__( 'Add widgets here', 'wlru' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( '404 Error Page', 'wlru' ),
    'id'            => 'widget-area-404',
    'description'   => esc_html__( 'Add widgets here', 'wlru' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}

add_action( 'wp_enqueue_scripts', 'wlru_scripts' );
function wlru_scripts() {
  wp_enqueue_script( 'wlru-font-awesome', 'https://use.fontawesome.com/3b95dffedb.js' );

  wp_enqueue_style( 'wlru-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
  wp_enqueue_script( 'wlru-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), null, true );

  wp_enqueue_script( 'wlru-bootstrap-dropdown-hover', get_template_directory_uri() . '/js/plugins/jquery.bootstrap-dropdown-hover.min.js', array( 'jquery', 'wlru-bootstrap' ), null, true );

  wp_enqueue_style( 'wlru', get_stylesheet_uri() );
  wp_enqueue_script( 'wlru', get_template_directory_uri() . '/js/scripts.js', array( 'jquery', 'wlru-bootstrap', 'wlru-bootstrap-dropdown-hover' ), null, true );

  $google_fonts_link = get_theme_mod( 'wlru_google_fonts_link', '' );
  if ( $google_fonts_link !== '' ) {
    wp_enqueue_style( 'wlru-google-fonts', $google_fonts_link );
  }

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/bootstrap-test-page.php';

require get_template_directory() . '/inc/bootstrap-navbar-walker.php';
require get_template_directory() . '/inc/bootstrap-tags.php';
require get_template_directory() . '/inc/bootstrap-comment-walker.php';
