<?php get_header(); ?>

<div id="jumbotron-carousel">
  <div class="jumbotron">
    <div class="container">
      <div>
        <h1>Example headline.</h1>
        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
      </div>
    </div>
  </div>
  <div class="jumbotron">
    <div class="container">
      <div>
        <h1>Another example headline.</h1>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="jumbotron">
    <div class="container">
      <div>
        <h1>One more for good measure.</h1>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
      </div>
    </div>
  </div>
</div><!-- /.carousel -->

<div class="row">
  <div class="col-xs-12">
    <?php
    if( have_posts() ) {
      while( have_posts() ) {
        the_post();
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry=header">
              Hello world
            </header>
          </article>
        <?php
      }
    }
    ?>
  </div>
</div>
<?php get_footer(); ?>
