<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package LDP
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ldp_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'ldp_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ldp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'ldp_pingback_header' );

/**Return the base path of the theme
 */
function ldp_get_theme_base_path() {
	echo 'http://www.legalitaduepuntozero.com/nuovo/wp-content/themes/ldp/theme-files/';
}

/**Return the root path of the web site
 */
function ldp_get_base_path() {
	echo 'http://www.legalitaduepuntozero.com/nuovo/';
}


// Add the filter to manage the p tags
add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $content )
{
	global $post;

	// Check for single page and image post type and remove
	// if ( is_single() && $post->post_type == 'image' )
	remove_filter('the_content', 'wpautop');

	return $content;
}