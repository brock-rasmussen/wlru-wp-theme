<?php
/**
 * Search Form Template
 */
?>

<form class="form-search" method="get" action="<?php echo home_url( '/' ); ?>" role="search">
	<div class="row">
		<div class="col-xs-12">
			<div class="input-group">
				<input class="form-control" type="text" name="s" placeholder="<?php esc_attr_e('search here &hellip;', 'wlru'); ?>" />
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'wlru'); ?>"><?php _e('Search', 'wlru'); ?></button>
				</span>
			</div>
		</div>
	</div>
</form>
