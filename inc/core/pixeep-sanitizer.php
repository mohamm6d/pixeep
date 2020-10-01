<?php
/**
 * pixeep Theme Sanitizer
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */
function pixeep_sanitize_checkbox( $input ) {
  return ( ( isset( $input ) && true == $input ) ? true: false );
}

function pixeep_sanitize_radioimage( $input ) {
  $keys = array( 'left-sidebar', 'no-sidebar', 'right-sidebar' );
    if ( in_array( $input, $keys ) ) {
        return $input;
	}else {
  		return 'no-sidebar';
	}
}
