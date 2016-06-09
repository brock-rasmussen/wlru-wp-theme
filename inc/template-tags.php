<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package wlru
 */
if ( ! function_exists( 'wlru_posts_navigation' ) ) :
function wlru_posts_navigation() {
	if ( $GLOBALS[ 'wp_query' ]->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="sr-only"><?php _e( 'Posts navigation', 'wlru' ); ?></h2>
		<ul class="pager">

		<?php if ( get_previous_posts_link() ) : ?>
			<li class="previous"><?php previous_posts_link( __( '<span aria-hidden="true">&larr;</span> Older', 'wlru' ) ); ?></li>
		<?php endif;

		if ( get_next_posts_link() ) : ?>
			<li class="next"><?php next_posts_link( __( 'Newer <span aria-hidden="true">&rarr;</span>', 'wlru' ) ); ?></li>
		<?php endif; ?>

	</ul><!-- .pager -->
</nav><!-- .navigation -->
<?php
}
endif;

if ( ! function_exists( 'wlru_post_navigation' ) ) :
function wlru_post_navigation() {
	$previous = is_attachment() ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h2 class="sr-only"><?php _e( 'Post navigation', 'wlru' ); ?></h2>
		<ul class="pager">
			<?php
				previous_post_link( '<li class="previous">%link</li>', _x( '<span aria-hidden="true">&larr;</span>&nbsp;%title', 'Previous post link', 'wlru' ) );
				next_post_link( '<li class="next">%link</li>', _x( '%title&nbsp;<span aria-hidden="true">&rarr;</span>', 'Next post link', 'wlru' ) );
			?>
		</ul><!-- .pager -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'wlru_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function wlru_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'wlru' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( '%s', 'post author', 'wlru' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on"><i class="fa fa-clock-o" aria-hidden="true"></i> ' . $posted_on . '</span><span class="byline"><i class="fa fa-user" aria-hidden="true"></i> ' . $byline . '</span>'; // WPCS: XSS OK.

	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'wlru' ) );
		if ( $categories_list && wlru_categorized_blog() ) {
			echo '<span class="cat-links"><i class="fa fa-folder" aria-hidden="true"></i> ' . $categories_list . '</span>'; // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) && get_comments_number() != 0 ) {
		echo '<span class="comments-link"><i class="fa fa-comment" aria-hidden="true"></i> ';
		/* translators: %s: post title */
		comments_popup_link();
		echo '</span>';
	}
}
endif;

if ( ! function_exists( 'wlru_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function wlru_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'wlru' ) );
		if ( $tags_list ) {
			echo '<span class="tags-links">' . $tags_list . '</span>'; // WPCS: XSS OK.
		}
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'wlru' ),
			the_title( '<span class="sr-only">"', '"</span>', false )
		),
		'<div class="edit-link">',
		'</div>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function wlru_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'wlru_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'wlru_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so wlru_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so wlru_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in wlru_categorized_blog.
 */
function wlru_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'wlru_categories' );
}
add_action( 'edit_category', 'wlru_category_transient_flusher' );
add_action( 'save_post',     'wlru_category_transient_flusher' );
