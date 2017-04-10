<?php
add_filter( 'the_content_more_link', 'wlru_the_content_more_link' );
function wlru_the_content_more_link( $tag ) {
  return str_replace( 'more-link', 'more-link btn btn-default', $tag );
}

add_filter( 'edit_post_link', 'wlru_edit_post_link' );
function wlru_edit_post_link( $tag ) {
  return str_replace( 'post-edit-link', 'post-edit-link btn btn-xs btn-danger', $tag );
}

function wlru_the_post_navigation() {
  $subject = get_the_post_navigation( array(
    'prev_text'   => '<span aria-hidden="true">&larr; </span>%title',
    'next_text'   => '%title<span aria-hidden="true"> &rarr;</span>',
  ) );
  $search = array( 'screen-reader-text', '<div class="nav-links">', '<div class="nav-previous">', '<div class="nav-next">', '</div>' );
  $replace = array( 'screen-reader-text sr-only', '<div class="nav-links"><ul class="pager">', '<li class="nav-previous previous">', '<li class="nav-next next">', '</li>' );
  echo str_replace( $search, $replace, $subject );
}

function wlru_the_posts_navigation() {
  $subject = get_the_posts_navigation( array(
    'prev_text'   => '<span aria-hidden="true">&larr; </span>' . __( 'Older posts', 'wlru' ),
    'next_text'   => __( 'Newer posts', 'wlru' ) . '<span aria-hidden="true"> &rarr;</span>',
  ));
  $search = array( 'screen-reader-text', '<div class="nav-links">', '<div class="nav-previous">', '<div class="nav-next">', '</div>' );
  $replace = array( 'screen-reader-text sr-only', '<div class="nav-links"><ul class="pager">', '<li class="nav-previous previous">', '<li class="nav-next next">', '</li>' );
  echo str_replace( $search, $replace, $subject );
}

function wlru_the_posts_pagination() {
  $subject = get_the_posts_pagination();
  $search = array( 'screen-reader-text', '<div class="nav-links">', '<a', '<span class=\'page-numbers current\'>' );
  $replace = array( 'screen-reader-text sr-only', '<div class="nav-links"><ul class="pagination">', '<li><a', '<li class="active"><span class="page-numbers current">' );
  echo str_replace( $search, $replace, $subject );
}

// if ( class_exists( 'woocommerce' ) ) :
// endif;
