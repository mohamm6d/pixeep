<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function pixeep_body_classes( $classes ) {
  // Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
}

	//Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar' ) ) {
  $classes[] = 'no-sidebar';
}

return $classes;
}

add_filter( 'body_class', 'pixeep_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function pixeep_pingback_header() {
if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}

add_action( 'wp_head', 'pixeep_pingback_header' );

if ( ! function_exists( 'pixeep_layout_classes' ) ) :

	function pixeep_layout_classes( $layout ) {
switch ( $layout ) {
			case 'left-sidebar': $pixeep_class = "col-md-9 col-sm-12 pull-right";
break;
			case 'no-sidebar': $pixeep_class = "col-md-12";
break;
			case 'right-sidebar': $pixeep_class = "col-md-9 col-sm-12 pull-left";
break;
			default: $pixeep_class = "col-md-12";
break;
}

return $pixeep_class;
}




endif;
