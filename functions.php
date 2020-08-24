<?php
/**
 * Acoustics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     Acoustics
 * @version     1.0.0
 *
 */
if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
if ( ! class_exists( 'acousticsThemeSetup' ) ) {
  class acousticsThemeSetup {

        private static $instance = null;

		private function __construct() {
            remove_theme_support( 'wc-product-gallery-slider' ); 
			
			
			
			add_action( 'after_setup_theme' , array( $this , 'acoustics_constants' ) , 0 );
             add_action( 'after_setup_theme', array( $this, 'acoustics_l10n' ), 10 );
			 add_action( 'after_setup_theme', array( $this, 'acoustics_theme_support' ), 20 );
             add_action( 'after_setup_theme', array( $this, 'acoustics_includes' ) , 30 );
			 $this->init();
		 }

		public function acoustics_constants() {
		  	$acoustics_template  = get_template();
         	$acoustics_instance = wp_get_theme( $acoustics_template );

             define( 'ACOUSTICS_THEME_VERSION', $acoustics_instance->get( 'Version' ) );
             define( 'ACOUSTICS_THEME_DIR', get_template_directory() );
             define( 'ACOUSTICS_THEME_URI', get_template_directory_uri() );
             define( 'AUTHOR', $acoustics_instance->get( 'Author' ) );
			 define( 'THEMEURL', $acoustics_instance->get( 'ThemeURI' ) );
             define( 'AUTHOR_URI', $acoustics_instance->get( 'AuthorURI' ) );
             define( 'PREFIX', 'acoustics' );
		 }

		 public function acoustics_l10n() {
			 /*
				* Make theme available for translation.
				* Translations can be filed in the /languages/ directory.
				* If you're building a theme based on Acoustics, use a find and replace
				* to change 'acoustics' to the name of your theme in all the template files.
				*/
			 load_theme_textdomain( 'acoustics', get_template_directory() . '/languages' );
         }

		 public function acoustics_theme_support(){

			 // Add default posts and comments RSS feed links to head.
			 add_theme_support( 'automatic-feed-links' );

			 /*
				* Let WordPress manage the document title.
				* By adding theme support, we declare that this theme does not use a
				* hard-coded <title> tag in the document head, and expect WordPress to
				* provide it for us.
				*/
			 add_theme_support( 'title-tag' );

			 /*
				* Enable support for Post Thumbnails on posts and pages.
				*
				* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
				*/
			 add_theme_support( 'post-thumbnails' );

			 // This theme uses wp_nav_menu() in one location.
			 register_nav_menus( array(
				 'main-menu' => esc_html__( 'Primary Menu', 'acoustics' ),
			 ) );

			 /*
				* Switch default core markup for search form, comment form, and comments
				* to output valid HTML5.
				*/
			 add_theme_support( 'html5', array(
				 'search-form',
				 'comment-form',
				 'comment-list',
				 'gallery',
				 'caption',
			 ) );

			 // Set up the WordPress core custom background feature.
			 add_theme_support( 'custom-background', apply_filters( 'acoustics_custom_background_args', array(
				 'default-color' => 'ffffff',
				 'default-image' => '',
			 ) ) );

			 // Add theme support for selective refresh for widgets.
			 add_theme_support( 'customize-selective-refresh-widgets' );

		   /**
			* Add support for core custom logo.
			*
			* @link https://codex.wordpress.org/Theme_Logo
			*/
			 add_theme_support( 'custom-logo', array(
				 'height'      => 250,
				 'width'       => 250,
				 'flex-width'  => true,
				 'flex-height' => true,
				 'header-text' => array( 'site-title', 'site-description' ),
			 ) );

			/*
			 * Styles the visual editor to resemble the theme style
			 *
			 */
			 add_editor_style( 'assets/admin/css/editor-style.css' );
		 }

		 public function acoustics_includes(){

			/**
			* Custom template tags for this theme.
			*/
			require get_template_directory() . '/inc/template-tags.php';

			/**
			* Functions which enhance the theme by hooking into WordPress.
			*/
			require get_template_directory() . '/inc/template-functions.php';

			/**
			* Customizer additions.
			*/
			require get_template_directory() . '/inc/core/controls/acoustics-premium-control.php';
			require get_template_directory() . '/inc/core/customizer.php';
			require get_template_directory() . '/inc/core/controls/acoustics-radio-image-control.php';
			require get_template_directory() . '/inc/core/controls/acoustics-information-control.php';

			require get_template_directory() . '/inc/core/acoustics-sanitizer.php';
			require get_template_directory() . '/inc/extras/extras.php';
			require get_template_directory() . '/inc/widgets/acoustics-widgets.php';
			require get_template_directory() . '/inc/acoustics-functions.php';
			require get_template_directory() . '/inc/extras/helper.php';
			require get_template_directory() . '/inc/hooks/acoustics-template-hooks.php';

			/**
			* Plugin
			*/
			require get_template_directory() . '/app/class-tgm-plugin-activation.php';
			require get_template_directory() . '/app/acoustics-plugin.php';

		}

		public function init(){
			/**
			* Implement the Custom Header feature.
			*/
			require get_template_directory() . '/inc/custom-header.php';
			/**
			* Load Jetpack compatibility file.
			*/
			if ( !defined( 'JETPACK__VERSION' ) ) {
				require get_template_directory() . '/inc/jetpack.php';
			}

			/**
			* Load WooCommerce compatibility file.
			*/
			if ( class_exists( 'WooCommerce' ) ) {
				require get_template_directory() . '/inc/woocommerce.php';
				require get_template_directory() . '/inc/hooks/acoustics-woocommerce.php';
			}

			require get_template_directory() . '/inc/breadcrumb.php';
		}

		/**
		* Returns the instance.
		*
		* @since  1.0.0
		* @return object
		*/
		public static function get_instance() {

			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
			    self::$instance = new self;
			}

			return self::$instance;
		}
	}
}

function woocommerce_template_product_description() {
	echo '<div class="product-description"><div class="more-details">
    <span>IN STOCK </span>| <span>4-9 BUSINESS DAYS</span><br>
	<ul><li><i class="mr-2 fa fa-check text-success"></i>
 MATTE PREMIUM PAPER</li>
    <li><i class="mr-2 fa fa-check text-success"></i>FREE SHIPPING OVER 49€</li>
    <li><i class="mr-2 fa fa-check text-success"></i>RETURN POLICY 365 DAYS</li>
</ul><br>';
wc_get_template( 'single-product/tabs/description.php' );
	echo '</div>
	<br><br>
</div>
	';
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 15 );

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

  unset( $tabs['description'] );        // Remove the description tab
  //unset( $tabs['reviews'] );            // Remove the reviews tab
  //unset( $tabs['additional_information'] );      // Remove the additional information tab

  return $tabs;

}

//wp_register_script('jquery', 'https://code.jquery.com/jquery-1.11.0.min.js', NULL, '1.11.0', false);

add_action( 'after_setup_theme', 'remove_hemen_theme_support', 100 );
function remove_hemen_theme_support() { 
    remove_theme_support( 'wc-product-gallery-zoom' );
    remove_theme_support( 'wc-product-gallery-lightbox' );
    remove_theme_support( 'wc-product-gallery-slider' );
}

/**
 * Cosine Setup Instance
 * @since  1.0.0
 */
  acousticsThemeSetup::get_instance();


function wc_add_classes_img () {
    if ( is_shop() ) {
        ?>
            <div class="product-custom-loop">
        <?php
    }
}
add_action( 'woocommerce_before_shop_loop_item', 'wc_add_classes_img');

function wc_close_div_after_img () {
    if ( is_shop() ) {
        ?>
            </div>
        <?php
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'wc_close_div_after_img' );



