<?php
/**
 * WooCommerce
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 * @see  pixeep_woocommerce_header_cart()
 */
if ( function_exists( 'pixeep_woocommerce_header_cart' ) ):
	add_action( 'pixeep_navigation', 'pixeep_woocommerce_header_cart', 10 );
endif;
