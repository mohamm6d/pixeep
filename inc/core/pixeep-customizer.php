<?php
/**
 * pixeep Theme Customizer
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */

/*-------------------------------------
 #Social
---------------------------------------*/
$wp_customize->add_panel( 'pixeep_social_panel', array(
	   'title' => esc_html__( 'Social Profiles', 'pixeep' ),
	   'description' => esc_html__( 'Social settings', 'pixeep' ),
	   'priority' => 15,
	)
);

$wp_customize->add_section( 'pixeep_social_section', array(
	'title'          => esc_html__( 'Social Links', 'pixeep' ),
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'panel'			 => 'pixeep_social_panel',
	'priority'       => 10,
));

$social_icons = array( 'twitter', 'facebook', 'linkedin', 'instagram','pinterest', 'youtube' );
foreach( $social_icons as $icon) {
  $label = ucfirst($icon);
  $wp_customize->add_setting( 'pixeep_'.$icon.'_url', array(
	'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control( 'pixeep_'.$icon.'_url', array(
	'label'         => esc_html( $label ),
	'type'          => 'url',
	'section'       => 'pixeep_social_section',
  ));
}

/*-------------------------------------
  #Landing Page
---------------------------------------*/
$wp_customize->add_panel( 'pixeep_landing_panel', array(
	   'title' => esc_html__( 'Home Sections', 'pixeep' ),
	   'description' => esc_html__( 'Home / Landing page settings', 'pixeep' ),
	   'priority' => 25,
	)
);

$wp_customize->get_section('header_image')->panel = 'pixeep_landing_panel';
$wp_customize->get_section('header_image')->title = esc_html__( 'Hero Section', 'pixeep');
$wp_customize->get_section('header_image')->priority = 5;

$wp_customize->add_setting( 'pixeep_hero_section_enable', array(
		'default'             => false,
		'transport' 		  => 'refresh',
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_hero_section_enable' , array(
		'label'         => esc_html__( 'Enable Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'header_image',
		'priority'      => 1,
	)
);

$wp_customize->add_setting( 'pixeep_hero_section_title', array(
	 'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control( 'pixeep_hero_section_title',
    array(
        'label'    => esc_html__( 'Caption Title', 'pixeep' ),
        'section'  => 'header_image',
        'settings' => 'pixeep_hero_section_title',
        'type'     => 'text',
		'priority'      => 15,
    )
);

$wp_customize->add_setting( 'pixeep_hero_section_details', array(
	 'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control( 'pixeep_hero_section_details', array(
        'label'    => esc_html__( 'Caption Details', 'pixeep' ),
        'section'  => 'header_image',
        'settings' => 'pixeep_hero_section_details',
        'type'     => 'text',
		'priority'      => 20,
    )
);

$wp_customize->add_setting( 'pixeep_hero_section_link', array(
	 'sanitize_callback' => 'esc_url_raw'
	)
);

$wp_customize->add_control( 'pixeep_hero_section_link',
    array(
        'label'    => esc_html__( 'Button Link', 'pixeep' ),
        'section'  => 'header_image',
        'settings' => 'pixeep_hero_section_link',
        'type'     => 'url',
		'priority'      => 25,
    )
);













$wp_customize->add_section( 'pixeep_featured_section', array(
		'title'      =>  esc_html__('Featured Section', 'pixeep'),
		'priority'   =>  5,
		'panel' 	 => 'pixeep_landing_panel'
	)
);

$wp_customize->add_setting( 'pixeep_featured_section_enable', array(
		'default'             => false,
		'transport' 		  => 'refresh',
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_featured_section_enable' , array(
		'label'         => esc_html__( 'Enable Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'pixeep_featured_section',
		'priority'      => 5,
	)
);

$pixeep_woocommerce = false;
if( class_exists( 'WooCommerce' ) ):
	$pixeep_woocommerce = true;
	$pixeep_product_collections = pixeep_product_categories();
endif;

if( $pixeep_woocommerce ):
	for( $i = 0; $i < 4; $i++) {

		$wp_customize->add_setting( 'pixeep_featured_categories_'.$i , array(
				'default'     		=> 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control( 'pixeep_featured_categories_'.$i , array(
				'label'       => esc_html__('Category', 'pixeep'),
				'description' => esc_html__('Display product category with link.', 'pixeep'),
				'section'     => 'pixeep_featured_section',
				'type'        => 'select',
				'choices'     => $pixeep_product_collections,
			)
		);

	}
else:

  $wp_customize->add_setting( 'pixeep_featured_info', array(
	    'sanitize_callback'    => 'sanitize_text_field'
	  )
  );

  $wp_customize->add_control( new pixeep_Customize_Control_Information( $wp_customize,'pixeep_featured_info', array(
	    'label'           => esc_html__('Information','pixeep'),
	    'description'     => esc_html__('Install WooCommerce Plugin to list more options.','pixeep'),
		'section'         => 'pixeep_featured_section',
	  )
	)
  );

endif;

$wp_customize->add_section( 'pixeep_newarrival_section', array(
		'title'      =>  esc_html__('New Arrivals', 'pixeep'),
		'priority'   =>  10,
		'panel' 	 => 'pixeep_landing_panel'
	)
);

$wp_customize->add_setting( 'pixeep_newarrival_section_enable', array(
		'default'             => false,
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_newarrival_section_enable' , array(
		'label'         => esc_html__( 'Enable Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'pixeep_newarrival_section',
		'priority'      => 5,
	)
);

if( $pixeep_woocommerce ):
	$wp_customize->add_setting( 'pixeep_newarrival_collection' , array(
			'default'     => 0,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control( 'pixeep_newarrival_collection' , array(
			'label'       => esc_html__('Select Category', 'pixeep'),
			'description' => esc_html__('Display product from the selected product category as new arrival.', 'pixeep'),
			'section'     => 'pixeep_newarrival_section',
			'type'        => 'select',
			'choices'     => $pixeep_product_collections,
		)
	);
else:

	$wp_customize->add_setting( 'pixeep_newarrival_info', array(
   	   'sanitize_callback'    => 'sanitize_text_field'
   	 )
    );

    $wp_customize->add_control( new pixeep_Customize_Control_Information( $wp_customize,'pixeep_newarrival_info', array(
   	   'label'           => esc_html__('Information','pixeep'),
   	   'description'     => esc_html__('Install WooCommerce Plugin to list more options.','pixeep'),
   	   'section'         => 'pixeep_newarrival_section',
   	 )
      )
    );

endif;

$wp_customize->add_section( 'pixeep_product_category_section', array(
		'title'      =>  esc_html__('Featured Category', 'pixeep'),
		'priority'   =>  15,
		'panel' 	 => 'pixeep_landing_panel'
	)
);

$wp_customize->add_setting( 'pixeep_product_category_section_enable', array(
		'default'             => false,
		'transport' 		  => 'refresh',
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_product_category_section_enable' , array(
		'label'         => esc_html__( 'Enable Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'pixeep_product_category_section',
		'priority'      => 5,
	)
);

if( $pixeep_woocommerce ):
	for( $i = 0; $i < 4; $i++) {
  		$wp_customize->add_setting( 'pixeep_product_categories_'.$i , array(
				'default'     		=> 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control( 'pixeep_product_categories_'.$i , array(
				'label'       => esc_html__('Category', 'pixeep'),
				'description' => esc_html__('Display product category.', 'pixeep'),
				'section'     => 'pixeep_product_category_section',
				'type'        => 'select',
				'choices'     => $pixeep_product_collections,
			)
		);
	}
else:

	$wp_customize->add_setting( 'pixeep_product_categories_info', array(
   	   'sanitize_callback'    => 'sanitize_text_field'
   	 )
    );

    $wp_customize->add_control( new pixeep_Customize_Control_Information( $wp_customize,'pixeep_product_categories_info', array(
   	   'label'           => esc_html__('Information','pixeep'),
   	   'description'     => esc_html__('Install WooCommerce Plugin to list more options.','pixeep'),
   	   'section'         => 'pixeep_product_category_section',
   	 )
      )
    );

endif;

$wp_customize->add_section( 'pixeep_bestseller_section', array(
		'title'      =>  esc_html__('Best Sellers', 'pixeep'),
		'priority'   =>  20,
		'panel' 	 => 'pixeep_landing_panel'
	)
);

$wp_customize->add_setting( 'pixeep_bestseller_section_enable', array(
		'default'             => false,
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_bestseller_section_enable' , array(
		'label'         => esc_html__( 'Enable Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'pixeep_bestseller_section',
		'priority'      => 5,
	)
);

if( $pixeep_woocommerce ):
	$wp_customize->add_setting( 'pixeep_bestseller_collection' , array(
			'default'     => 0,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control( 'pixeep_bestseller_collection' , array(
			'label'       => esc_html__('Select Category', 'pixeep'),
			'description' => esc_html__('Display product from the selected product category as new arrival.', 'pixeep'),
			'section'     => 'pixeep_bestseller_section',
			'type'        => 'select',
			'choices'     => $pixeep_product_collections,
		)
	);
else:
	$wp_customize->add_setting( 'pixeep_bestseller_info', array(
  	 'sanitize_callback'    => 'sanitize_text_field'
     )
    );

    $wp_customize->add_control( new pixeep_Customize_Control_Information( $wp_customize,'pixeep_bestseller_info', array(
	  	 'label'           => esc_html__('Information','pixeep'),
	  	 'description'     => esc_html__('Install WooCommerce Plugin to list more options.','pixeep'),
	  	 'section'         => 'pixeep_bestseller_section',
	    )
	  )
    );
endif;

$wp_customize->add_section( 'pixeep_product_category_grid_section', array(
		'title'      =>  esc_html__('Category Grid', 'pixeep'),
		'priority'   =>  20,
		'panel' 	 => 'pixeep_landing_panel'
	)
);

$wp_customize->add_setting( 'pixeep_product_category_grid_section_enable', array(
		'default'             => false,
		'transport' 		  => 'refresh',
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_product_category_grid_section_enable' , array(
		'label'         => esc_html__( 'Enable Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'pixeep_product_category_grid_section',
		'priority'      => 5,
	)
);

if( $pixeep_woocommerce ):
  $collection = 6;
  for( $i = 0; $i < $collection; $i++) {
       $wp_customize->add_setting( 'pixeep_product_categories_grid_'.$i , array(
				'default'     		=> 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control( 'pixeep_product_categories_grid_'.$i , array(
				'label'       => esc_html__('Category', 'pixeep'),
				'description' => esc_html__('Display product category.', 'pixeep'),
				'section'     => 'pixeep_product_category_grid_section',
				'type'        => 'select',
				'choices'     => $pixeep_product_collections,
			)
		);
	}
else:
	$wp_customize->add_setting( 'pixeep_category_grid_info', array(
  	 'sanitize_callback'    => 'sanitize_text_field'
     )
    );

    $wp_customize->add_control( new pixeep_Customize_Control_Information( $wp_customize,'pixeep_category_grid_info', array(
	  	 'label'           => esc_html__('Information','pixeep'),
	  	 'description'     => esc_html__('Install WooCommerce Plugin to list more options.','pixeep'),
	  	 'section'         => 'pixeep_product_category_grid_section',
	    )
	  )
    );
endif;


$wp_customize->add_section( 'pixeep_values_section', array(
		'title'      =>  esc_html__('Proposition', 'pixeep'),
		'priority'   =>  25,
		'panel' 	 => 'pixeep_landing_panel'
	)
);

$wp_customize->add_setting( 'pixeep_values_section_enable', array(
		'default'             => false,
		'transport' 		  => 'refresh',
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_values_section_enable' , array(
		'label'         => esc_html__( 'Enable Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'pixeep_values_section',
		'priority'      => 5,
	)
);

$pixeep_collections = pixeep_categories();
$wp_customize->add_setting( 'pixeep_values_category' , array(
		'default'     		=> 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control( 'pixeep_values_category', array(
		'label'       => esc_html__('Select Category', 'pixeep'),
		'description' => esc_html__('Selected cateogry post will be shown as value section content & image.', 'pixeep'),
		'section'     => 'pixeep_values_section',
		'type'        => 'select',
		'choices'     => $pixeep_collections,
	)
);



/**
 * Final image before footer
 * 
 */
if(!empty($wp_customize->get_section('bfooter_image'))){

	$wp_customize->get_section('bfooter_image')->panel = 'pixeep_landing_panel';
	$wp_customize->get_section('bfooter_image')->title = esc_html__( 'Last Section', 'pixeep');
	$wp_customize->get_section('bfooter_image')->priority = 35;
}

$wp_customize->add_setting( 'pixeep_bfooter_section_enable', array(
		'default'             => false,
		'transport' 		  => 'refresh',
		'sanitize_callback'   => 'pixeep_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'pixeep_bfooter_section_enable' , array(
		'label'         => esc_html__( 'Enable Last Section', 'pixeep' ),
		'type'			=> 'checkbox',
		'section'       => 'bfooter_image',
		'priority'      => 1,
	)
);

$wp_customize->add_setting( 'pixeep_bfooter_section_title', array(
	 'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control( 'pixeep_bfooter_section_title',
    array(
        'label'    => esc_html__( 'Last Section Caption Title', 'pixeep' ),
        'section'  => 'bfooter_image',
        'settings' => 'pixeep_bfooter_section_title',
        'type'     => 'text',
		'priority'      => 5,
    )
);

$wp_customize->add_setting( 'pixeep_bfooter_section_details', array(
	 'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control( 'pixeep_bfooter_section_details', array(
        'label'    => esc_html__( 'Last Section Caption Details', 'pixeep' ),
        'section'  => 'bfooter_image',
        'settings' => 'pixeep_bfooter_section_details',
        'type'     => 'text',
		'priority'      => 10,
    )
);

$wp_customize->add_setting( 'pixeep_bfooter_section_link', array(
	 'sanitize_callback' => 'esc_url_raw'
	)
);

$wp_customize->add_control( 'pixeep_bfooter_section_link',
    array(
        'label'    => esc_html__( 'Last Section Button Link', 'pixeep' ),
        'section'  => 'bfooter_image',
        'settings' => 'pixeep_bfooter_section_link',
        'type'     => 'url',
		'priority'      => 15,
    )
);







/*-------------------------------------
  #Footer
---------------------------------------*/
$wp_customize->add_panel( 'pixeep_footer_panel', array(
   'title' => esc_html__( 'Footer Settings', 'pixeep' ),
   'description' => esc_html__( 'Footer section & settings', 'pixeep' ),
   'priority' => 30,
	)
);

$wp_customize->add_section( 'pixeep_footer_section', array(
	'title'          => esc_html__( 'Copyright Setting', 'pixeep' ),
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'panel'			 => 'pixeep_footer_panel',
	'priority'       => 5,
));

$wp_customize->add_setting( 'pixeep_footer_copyright', array(
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( 'pixeep_footer_copyright', array(
  'label'     => esc_html__( 'Copyright Text', 'pixeep' ),
  'type'      => 'text',
  'section'   => 'pixeep_footer_section'
));

/*-------------------------------------
  #Layout
---------------------------------------*/
$wp_customize->add_panel( 'pixeep_layout_panel', array(
   'title' => esc_html__( 'Layout Settings', 'pixeep' ),
   'description' => esc_html__( 'Archive, post & page layout settings', 'pixeep' ),
   'priority' => 35,
	)
);





$wp_customize->add_section( 'pixeep_archive_section', array(
	'title'          => esc_html__( 'Archive Sidebar', 'pixeep' ),
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'panel'			 => 'pixeep_layout_panel',
	'priority'       => 5,
	)
);

$wp_customize->add_setting('pixeep_archive_layout', array(
  'default'  =>      'left-sidebar',
  'sanitize_callback' => 'pixeep_sanitize_radioimage'
  )
);

$wp_customize->add_control( new pixeep_Customize_Control_Radio_Image( $wp_customize,'pixeep_archive_layout', array(
  'section'       =>      'pixeep_archive_section',
  'label'         =>      esc_html__('Archive Sidebar', 'pixeep'),
  'type'          =>      'radio-image',
  'choices'       =>      array(
	    'left-sidebar'  => '%s/assets/src/layout/left-sidebar.png',
		'no-sidebar'    => '%s/assets/src/layout/no-sidebar.png',
	    'right-sidebar' => '%s/assets/src/layout/right-sidebar.png',
	  )
  ))
);

$wp_customize->add_section( 'pixeep_page_section', array(
	'title'          => esc_html__( 'Page Sidebar', 'pixeep' ),
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'panel'			 => 'pixeep_layout_panel',
	'priority'       => 10,
	)
);

$wp_customize->add_setting('pixeep_page_layout', array(
  'default'  =>      'no-sidebar',
  'sanitize_callback' => 'pixeep_sanitize_radioimage'
  )
);

$wp_customize->add_control( new pixeep_Customize_Control_Radio_Image( $wp_customize,'pixeep_page_layout', array(
  'section'       =>      'pixeep_page_section',
  'label'         =>      esc_html__('Page Sidebar', 'pixeep'),
  'type'          =>      'radio-image',
  'choices'       =>      array(
	    'left-sidebar'  => '%s/assets/src/layout/left-sidebar.png',
		'no-sidebar'    => '%s/assets/src/layout/no-sidebar.png',
	    'right-sidebar' => '%s/assets/src/layout/right-sidebar.png',
	  )
  ))
);

$wp_customize->add_section( 'pixeep_post_section', array(
	'title'          => esc_html__( 'Post Sidebar', 'pixeep' ),
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'panel'			 => 'pixeep_layout_panel',
	'priority'       => 15,
	)
);

$wp_customize->add_setting('pixeep_post_layout', array(
  'default'  =>      'right-sidebar',
  'sanitize_callback' => 'pixeep_sanitize_radioimage'
  )
);

$wp_customize->add_control( new pixeep_Customize_Control_Radio_Image( $wp_customize,'pixeep_post_layout', array(
  'section'       =>      'pixeep_post_section',
  'label'         =>      esc_html__('Post Sidebar', 'pixeep'),
  'type'          =>      'radio-image',
  'choices'       =>      array(
	    'left-sidebar'  => '%s/assets/src/layout/left-sidebar.png',
		'no-sidebar'    => '%s/assets/src/layout/no-sidebar.png',
	    'right-sidebar' => '%s/assets/src/layout/right-sidebar.png',
	  )
  ))
);
