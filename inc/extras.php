<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package wlru
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wlru_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'wlru_body_classes' );

/**
 * Custom read more link
 */
function wlru_read_more_link( $input ) {
	return str_replace( 'class="more-link"', 'class="more-link btn btn-default"', $input );
}
add_filter( 'the_content_more_link', 'wlru_read_more_link' );

/**
 * Custom edit link
 */
function wlru_edit_link( $input ) {
	return str_replace( 'class="post-edit-link"', 'class="post-edit-link btn btn-xs btn-danger"', $input );
}
add_filter( 'edit_post_link', 'wlru_edit_link' );

/**
 * Custom comments link
 */
function wlru_comments_popup_link( $input ) {
	return str_replace( 'class="screen-reader-text"', 'class="sr-only"', $input );
}
add_filter( 'comments_popup_link_attributes', 'wlru_comments_popup_link' );
