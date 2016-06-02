</main>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
  <div class="nav-container">
    <div class="list-group visible-xs">
      <?php
      $sidebar_links = strip_tags( wp_nav_menu( array(
        'theme_location'  => 'primary',
        'container'       => false,
        'echo'            => false,
        'menu_class'      => 'nav navbar-nav navbar-right hidden-xs',
        'items_wrap'      => '%3$s',
      ) ), '<a>' );
      echo str_replace( '<a href="', '<a class="list-group-item" href="', $sidebar_links );
      ?>
    </div>
    <div class="offcanvas-backdrop" data-toggle="offcanvas"></div>
  </div>
</div>
</div>
</div><!-- /.container-fluid -->

<?php wp_footer(); ?>
<script>
  jQuery(document).ready(function() {
    jQuery('#jumbotron-carousel').slick({
      dots: true
    });
  });
</script>
