<?php
if ( ! function_exists( 'wallarooster_setup' ) ) :
function wallarooster_setup() {

  load_theme_textdomain( 'wallarooster', get_template_directory() . '/languages' );

  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
  add_theme_support( 'post-formats', array(
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'video',
    'audio',
  ) );
  add_theme_support( 'custom-background', apply_filters( 'wallarooster_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );

  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'wallarooster' ),
  ) );
}
endif;
add_action( 'after_setup_theme', 'wallarooster_setup' );


// Set the content width in pixels, based on the theme's design and stylesheet.
// Priority 0 to make it available to lower priority callbacks.
function wallarooster_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'wallarooster_content_width', 640 );
}
add_action( 'after_setup_theme', 'wallarooster_content_width', 0 );


// Register widget area.
function wallarooster_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'wallarooster' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'wallarooster' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'wallarooster_widgets_init' );


// Enqueue scripts and styles.
function wallarooster_scripts() {
  // files in header
  wp_enqueue_style( 'wallarooster-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic|Roboto+Slab' );

  wp_enqueue_script( 'wallarooster-font-awesome', 'https://use.fontawesome.com/3b95dffedb.js' );

  wp_enqueue_style( 'wallarooster-style', get_stylesheet_uri() );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // files in footer
  wp_enqueue_script( 'wallarooster-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );

  wp_enqueue_script( 'wallarooster-slick-js', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array( 'jquery' ), '1.6.0', true );

  wp_enqueue_script( 'wallarooster-script', get_template_directory_uri() . '/dist/scripts/scripts.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'wallarooster_scripts' );



require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/customizer.php';
