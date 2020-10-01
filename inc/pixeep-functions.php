<?php
/**
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pixeep_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pixeep_content_width', 640 );
}
add_action( 'after_setup_theme', 'pixeep_content_width', 0 );

if ( ! function_exists( 'pixeep_breadcrumb' ) ) :
    function pixeep_breadcrumb() {
        $breadcrumb_args = array(
            'container'   => 'nav',
            'show_browse' => false,
        );
        breadcrumb_trail( $breadcrumb_args );
    }
endif;

/**
*
* Excerpt Length
* @since 1.0.0
*
*/
if ( ! function_exists( 'pixeep_excerpt_length' ) ) :
	function pixeep_excerpt_length( $length ) {
	     if ( is_admin() ) {
			return $length;
		}
	    return 75;
	}
	add_filter( 'excerpt_length', 'pixeep_excerpt_length', 100 );
endif;

if ( ! function_exists( 'pixeep_excerpt_more' ) ) :
	/**
	 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a option from customizer
	 *
	 * @return string option from customizer prepended with an ellipsis.
	 */
	function pixeep_excerpt_more( $link ) {
		if ( is_admin() ) {
			return $link;
		}
	    return sprintf( '<a class="read-more more-link" href="%1$s">%2$s</a>',
	        get_permalink( get_the_ID() ),
	        __( 'Continue reading', 'pixeep' )
	    );
	}
endif;
add_filter( 'excerpt_more', 'pixeep_excerpt_more' );

if ( ! function_exists( 'pixeep_custom_excerpt_more' ) ) :
	/**
	 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a option from customizer
	 *
	 * @return string option from customizer prepended with an ellipsis.
	 */
	function pixeep_custom_excerpt_more( $excerpt ) {
		if ( has_excerpt() && ! is_attachment() ) {
		    $link = sprintf( '<a class="read-more more-link" href="%1$s">%2$s</a>',
		        get_permalink( get_the_ID() ),
		        __( 'Continue reading', 'pixeep' )
		    );
			$excerpt .= $link;
		}
		return $excerpt;
	}
endif;
add_filter( 'get_the_excerpt', 'pixeep_custom_excerpt_more' );

if( ! function_exists('pixeep_categories')):
	function pixeep_categories() {
		$category_list = array();
	    $categories = get_categories(
	            array(
	                'hide_empty' => 0,
	            )
	    );
	    $category_list[0] = esc_html__('Select Category', 'pixeep');
	    foreach ($categories as $category):
			$category_list[$category->term_id] = $category->name;
		endforeach;
	    return $category_list;
}
endif;
