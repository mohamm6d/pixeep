<?php
/**
 * Register widget area.
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */
function pixeep_widgets_init() {
  register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pixeep' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'pixeep' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Shop Sidebar', 'pixeep' ),
			'id'            => 'sidebar-shop',
			'description'   => esc_html__( 'Add widgets here to display content in Shop page.', 'pixeep' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>',
		) );
}

register_sidebar(array(
		'name' => esc_html__('Footer Column I ', 'pixeep'),
		'id' => 'footer-column-1',
		'description' => esc_html__('Add widgets here to display to displays content on the top of the footer section.', 'pixeep'),
		'before_widget' => '<div id="%1$s" class="widget widget_recent_entries %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title"><span>',
		'after_title' => '</span></h3>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer Column II ', 'pixeep'),
		'id' => 'footer-column-2',
		'description' => esc_html__('Add widgets here to display to displays content on the top of the footer section.', 'pixeep'),
		'before_widget' => '<div id="%1$s" class="widget widget_recent_entries %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title"><span>',
		'after_title' => '</span></h3>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer Column III', 'pixeep'),
		'id' => 'footer-column-3',
		'description' => esc_html__('Add widgets here to display to displays content on the top of the footer section.', 'pixeep'),
		'before_widget' => '<div id="%1$s" class="widget widget_recent_entries %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title"><span>',
		'after_title' => '</span></h3>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer Column IV', 'pixeep'),
		'id' => 'footer-column-4',
		'description' => esc_html__('Add widgets here to display to displays content on the top of the footer section.', 'pixeep'),
		'before_widget' => '<div id="%1$s" class="widget widget_recent_entries %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title"><span>',
		'after_title' => '</span></h3>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer Column V', 'pixeep'),
		'id' => 'footer-column-5',
		'description' => esc_html__('Add widgets here to display to displays content on the top of the footer section.', 'pixeep'),
		'before_widget' => '<div id="%1$s" class="widget widget_recent_entries %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title"><span>',
		'after_title' => '</span></h3>',
	));
}

add_action( 'widgets_init', 'pixeep_widgets_init' );
