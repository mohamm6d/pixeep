<?php
/**
 *
 * Featured section
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */
 ?>
 <div id="section_featured" class="section-featured section--featured-image">
	 <div class="container">
		 <div class="row">
			 <?php
			 $pixeep_featured_category = get_theme_mod( 'pixeep_featured_categories_0', '0' );

			 $pixeep_term = get_term_by( 'id', $pixeep_featured_category, 'product_cat' );
			 $pixeep_thumbnail_id = get_term_meta( $pixeep_featured_category, 'thumbnail_id', true );
			 $pixeep_image = wp_get_attachment_url( $pixeep_thumbnail_id );
			 $pixeep_link = get_category_link( $pixeep_featured_category );

			 if( $pixeep_featured_category ): ?>
				 	<div class="col-md-4">
				   	    <figure class="block-featured-main">
							<?php if( !empty( $pixeep_image ) ): ?>
							<img width="660"
								src="<?php echo esc_url( $pixeep_image ); ?>"
								alt="<?php echo esc_html( $pixeep_term->name ); ?>"
								title="<?php echo esc_html( $pixeep_term->name ); ?>"
								alt="<?php echo esc_html( $pixeep_term->name ); ?>">
							<?php endif; ?>
							<figcaption>
								<h2 class="h1 title"><?php echo esc_html( $pixeep_term->name ); ?></h2>
								<?php if( !empty( $pixeep_term->description ) ): ?>
									<div class="rte rte-settings">
										<?php echo esc_html( $pixeep_term->description ); ?>
									</div>
								<?php endif; ?>
								<a href="<?php esc_url( $pixeep_link ); ?>" class="btn btn-primary"><?php esc_html_e( 'Shop Now', 'pixeep' ); ?></a>
							</figcaption>
						 </figure>
					 </div>
			 <?php endif; ?>


			<div class="col-md-4">
				<?php
					for( $i=1; $i<3; $i++){
						$pixeep_featured_category = get_theme_mod( 'pixeep_featured_categories_'.$i, '0' );

			   			 $pixeep_term = get_term_by( 'id', $pixeep_featured_category, 'product_cat' );
			   			 $pixeep_thumbnail_id = get_term_meta( $pixeep_featured_category, 'thumbnail_id', true );
			   			 $pixeep_image = wp_get_attachment_url( $pixeep_thumbnail_id );
			   			 $pixeep_link = get_category_link( $pixeep_featured_category );

						if( $pixeep_featured_category ): ?>
								<figure class="block-featured-item">
									<a href="<?php echo esc_url( $pixeep_link ); ?>" class="block--featured-item-link">
										<?php if( !empty( $pixeep_image ) ): ?>
										<img width="660"
											src="<?php echo esc_url( $pixeep_image ); ?>"
											alt="<?php echo esc_html( $pixeep_term->name ); ?>"
											title="<?php echo esc_html( $pixeep_term->name ); ?>"
											alt="<?php echo esc_html( $pixeep_term->name ); ?>">
										<?php endif; ?>
										<figcaption>
											<h3 class="h3 title"><?php echo esc_html( $pixeep_term->name ); ?></h3>
											<?php if( !empty( $pixeep_term->description ) ): ?>
												<div class="rte rte-settings">
													<?php echo esc_html( $pixeep_term->description ); ?>
												</div>
											<?php endif; ?>
										</figcaption>
									</a>
								</figure>
							<?php
						endif;
					}
				?>
			</div>
			<?php

$pixeep_featured_category = get_theme_mod( 'pixeep_featured_categories_3', '0' );

			 $pixeep_term = get_term_by( 'id', $pixeep_featured_category, 'product_cat' );
			 $pixeep_thumbnail_id = get_term_meta( $pixeep_featured_category, 'thumbnail_id', true );
			 $pixeep_image = wp_get_attachment_url( $pixeep_thumbnail_id );
			 $pixeep_link = get_category_link( $pixeep_featured_category );
?>
			<div class="col-md-4">
				   	    <figure class="block-featured-main">
							<?php if( !empty( $pixeep_image ) ): ?>
							<img width="660"
								src="<?php echo esc_url( $pixeep_image ); ?>"
								alt="<?php echo esc_html( $pixeep_term->name ); ?>"
								title="<?php echo esc_html( $pixeep_term->name ); ?>"
								alt="<?php echo esc_html( $pixeep_term->name ); ?>">
							<?php endif; ?>
							<figcaption>
								<h2 class="h1 title"><?php echo esc_html( $pixeep_term->name ); ?></h2>
								<?php if( !empty( $pixeep_term->description ) ): ?>
									<div class="rte rte-settings">
										<?php echo esc_html( $pixeep_term->description ); ?>
									</div>
								<?php endif; ?>
								<a href="<?php esc_url( $pixeep_link ); ?>" class="btn btn-primary"><?php esc_html_e( 'Shop Now', 'pixeep' ); ?></a>
							</figcaption>
						 </figure>
					 </div>
		</div>
	</div>
 </div>
