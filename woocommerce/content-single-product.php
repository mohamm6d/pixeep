<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

function getFrameImage($size,$frame,$imageUrl){

	return "https://www.pixeep.com/apps/photo-generator/frame/$size/$frame/image-" . $imageUrl;

}

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
    <div class="row">
        <div class="col-md-7 h-100 col-sm-6 col-xs-12">
            <?php

            if (has_term('dynamic-content', 'product_cat') || has_term('horizontal-dynamic', 'product_cat')) {

                $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');

                $pluginImage =  str_replace("https://www.pixeep.com/wp-content/uploads/","",$image[0]);
           
		     
		   
	$sizes = array(
		1 => 1920,
		2  => 1920,
		3 => 1920,
		4 => 1920
	);
	
	$mainImageFrame = 3;
	
	if (has_term('horizontal-dynamic', 'product_cat')) {
	$sizes = array(
		5 => 1920,
		6  => 1920,
		7 => 1920,
		8 => 1920
	);
	$mainImageFrame = 5;
	
			 
			 }
	
 ?>
 <div class="images">
                    <div class="slider wpgis-slider-for">
                        <div class="zoom">
						<img width="1920" height="2560" src="<?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?>" class="attachment-full size-full wp-post-image" alt="" title="pr2" srcset="<?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 1920w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 300w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 768w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 1152w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 1536w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 301w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 800w" sizes="(max-width: 1920px) 100vw, 1920px" />

                            <img width="800" height="1067" src="<?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="pr2" srcset="<?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 800w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 300w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 768w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 1152w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 1536w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 301w, <?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?> 1920w" sizes="(max-width: 800px) 100vw, 800px" />

                            <a href="<?php echo getFrameImage(1920,$mainImageFrame, $pluginImage); ?>" class="wpgis-popup fa fa-expand" data-fancybox="product-gallery"></a>
                        </div>
                       <?php foreach ($sizes as $key=>$size): ?>
                        <div class="zoom">
                            <img src="<?php echo getFrameImage($size,$key, $pluginImage); ?>" /><img src="<?php echo getFrameImage($size,$key, $pluginImage); ?>" /><a href="<?php echo getFrameImage($size,$key, $pluginImage); ?>" class="wpgis-popup fa fa-expand" data-fancybox="product-gallery"></a>
                        </div>
						 <?php endforeach; ?>
                    </div>
                    <div id="wpgis-gallery" class="slider wpgis-slider-nav">
                       
					   <?php foreach ($sizes as $key=>$size): ?>
					   <li title=""><img width="300" height="400" src="<?php echo getFrameImage($size,$key, $pluginImage); ?>" class="attachment-thumbnail size-thumbnail" alt="" srcset="<?php echo getFrameImage($size,$key, $pluginImage); ?> 300w, <?php echo getFrameImage($size,$key, $pluginImage); ?> 768w, <?php echo getFrameImage($size,$key, $pluginImage); ?> 1152w, <?php echo getFrameImage($size,$key, $pluginImage); ?> 1536w, <?php echo getFrameImage($size,2, $pluginImage); ?> 301w, <?php echo getFrameImage($size,$key, $pluginImage); ?> 800w, <?php echo getFrameImage($size,$key, $pluginImage); ?> 1920w" sizes="(max-width: 300px) 100vw, 300px" /></li>
					   <?php endforeach; ?>
					   
                        
                    </div>
                </div>
            <?php


            } else {


                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action('woocommerce_before_single_product_summary');
            }
            ?>
        </div>
       <!--- <div class="col-md-1">

        </div>--->
        <div class="col-md-5 col-sm-6 col-xs-12 product-summary-sticky h-100">
            <div class="summary entry-summary">
                <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 25
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50

                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                do_action('woocommerce_single_product_summary');
                ?>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
            <?php
            /**
             * Hook: woocommerce_after_single_product_summary.
             *
             * @hooked woocommerce_output_product_data_tabs - 10
             * @hooked woocommerce_upsell_display - 15
             * @hooked woocommerce_output_related_products - 20
             */
            do_action('woocommerce_after_single_product_summary');
            ?>
        </div>
    </div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>