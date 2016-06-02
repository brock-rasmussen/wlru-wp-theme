<form role="search" method="get" id="searchform" class="navbar-form navbar-right" action="<?php echo home_url( '/' ); ?>">
  <input class="form-control" placeholder="Search..." type="text" name="s" id="search" value="<?php the_search_query(); ?>">
</form>
