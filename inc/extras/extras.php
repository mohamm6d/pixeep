<?php
/**
 * Enqueue admin scripts and styles.
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */
function pixeep_load_admin_scripts() {
  wp_register_style( 'pixeep-admin-style', get_template_directory_uri() . '/assets/admin/css/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'pixeep-admin-style' );
}

add_action( 'admin_enqueue_scripts', 'pixeep_load_admin_scripts' );
/**
 * Enqueue scripts and styles.
 */
function pixeep_scripts() {
  $pixeep_font = 'family=Rubik:300,400,500,700|Material+Icons';
    wp_enqueue_style( 'pixeep-google-fonts', '//fonts.googleapis.com/css?'.$pixeep_font, false );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.css', array(), '3.4.1' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/lib/fontawesome/css/font-awesome.css',  array(), '4.7.0' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/lib/owlslider/css/owl.carousel.css' , array(), '2.3.4' );
	wp_enqueue_style( 'pixeep-style', get_stylesheet_uri() );
	wp_enqueue_style( 'pixeep-theme-style', get_template_directory_uri() . '/assets/frontend/css/style.css', array(), '1.0.0' );

	wp_enqueue_script( 'pixeep-navigation', get_template_directory_uri() . '/assets/lib/navigation/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'pixeep-skip-link-focus-fix', get_template_directory_uri() . '/assets/lib/automattic/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.js', array('jquery'), '3.4.1', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/lib/owlslider/js/owl.carousel.js', array('jquery'), '2.3.4', true );
	wp_enqueue_script( 'pixeep-theme-scripts', get_template_directory_uri() . '/assets/frontend/js/theme.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
}
}

add_action( 'wp_enqueue_scripts', 'pixeep_scripts' );
