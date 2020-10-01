<?php
/**
 *
 * Product collection grid section
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */
if(! class_exists('Woocommerce')) {
	return;
}?>

<div id="section_collection" class="section-collection section--product-collection">
	<div class = "container">
		<div class="row">
		<?php
			$count = 0;
			$width = 295;
			for(  $i = 0; $i < 4; $i++ ){
				$pixeep_collection = get_theme_mod( 'pixeep_product_categories_'.$i, 0 );
				if( $pixeep_collection > 0 ){
					$count++;
				}
			}

			switch ($count) {
				case 2:
				   $classes = 'col-md-6 col-sm-6 col-xs-6';
				   $width = 555;
				   break;
			    case 3:
				   $classes = 'col-md-4 col-sm-4 col-xs-12';
				   $width = 360;
				   break;
			    case 4:
				   $classes = 'col-md-3 col-sm-6 col-xs-6';
				   $width = 265;
				   break;
				default:
					$classes = 'col-md-4 col-sm-4 col-xs-12';
				    $width = 360;
				    break;
			}

			for( $i = 0; $i < $count; $i++){

		     	$pixeep_product_category = get_theme_mod( 'pixeep_product_categories_'.$i, '0' );

	     		$pixeep_term = get_term_by( 'id', $pixeep_product_category, 'product_cat' );
				$pixeep_thumbnail_id = get_term_meta( $pixeep_product_category, 'thumbnail_id', true );
				$pixeep_image = wp_get_attachment_url( $pixeep_thumbnail_id );
				$pixeep_link = get_category_link( $pixeep_product_category );

				if( $pixeep_product_category > 0 ){
					if( $pixeep_term && ! empty( $pixeep_image ) ){
					?>
						<div class="<?php echo esc_attr( $classes ); ?> text-center">
							<figure class="collection-image">
								<a href="<?php echo esc_url( $pixeep_link ); ?>">
									<?php if( ! empty( $pixeep_image ) ): ?>
			                        	<img class="collection-src" width="<?php echo esc_attr( $width ); ?>" src="<?php echo esc_url( $pixeep_image ); ?>" title="<?php echo esc_html( $pixeep_term->name ); ?>" alt="<?php echo esc_html( $pixeep_term->name ); ?>" />
									<?php endif; ?>
									<figcaption class="caption">
										<h2 class="h4 title btn"><?php echo esc_html( $pixeep_term->name ); ?></h2>
									</figcaption>
								 </a>
							</figure>
						</div>
					<?php
					}
				}

		    }
		?>
		</div>
	</div>
</div>
