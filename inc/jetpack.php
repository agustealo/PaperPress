<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package paper
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function httpagustealo_github_iopaper_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'httpagustealo_github_iopaper_jetpack_setup' );
