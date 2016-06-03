<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-static-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas" data-target="#sidebar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle Search</span>
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
          <?php if ( get_header_image() ) : ?>
            <a class="navbar-brand-img" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?> alt="">
            </a>
          <?php endif; ?>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <span class="site-title"><?php bloginfo( 'name' ); ?></span>
            <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
            ?>
            <small class="site-description"><?php echo $description; ?></small>
            <?php
            endif; ?>
          </a><!-- .navbar-brand -->
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <?php
          get_search_form();
          ?>
          <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'container'       => false,
            'menu_class'      => 'nav navbar-nav navbar-right hidden-xs',
          ) );
          ?>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        <main class="site-main col-xs-12" id="main" role="main">
