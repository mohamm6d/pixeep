<?php
/**
 *
 * Proposition section
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     Acoustics
 * @version     1.0.0
 *
 */
 $valuesCategory = get_theme_mod( 'acoustics_values_category', '0' );
?>
<div class="container store-features">
	<div class="row">
		<div class="col-md-3">
			<img src="<?=get_template_directory_uri()?>/assets/frontend/images/icons/usp-truck.png">
			<b class="d-block">Free Shipping</b>
			Free shipping for all orders over €49
		</div>
		<div class="col-md-3">
			<img src="<?=get_template_directory_uri()?>/assets/frontend/images/icons/usp-box.png">
			<b class="d-block">Delivery</b>
			Fast and reliable delivery
		</div>
		<div class="col-md-3">
			<img src="<?=get_template_directory_uri()?>/assets/frontend/images/icons/usp-secure.png">
			<b class="d-block">Payments</b>
			Safe payments and different options
		</div>
		<div class="col-md-3">
			<img src="<?=get_template_directory_uri()?>/assets/frontend/images/icons/usp-news.png">
			<b class="d-block">NEW ARRIVALS</b>
			New collections and frames every week
		</div>
		
	</div>	  
</div>


<div id="section_porposition" class="section-proposition section--porposition-imagetext" style="background: #000;">
    <div class="container">
      <div class="row">
		  	<?php
			if( $valuesCategory ):
              $value_args = array(
                'cat' => $valuesCategory,
                'posts_per_page' => 4,
                'post_status'=>'publish',
              );
              $value_query = new WP_Query( $value_args );
              if( $value_query->have_posts() ) {
                  while( $value_query->have_posts() ) {
                    $value_query->the_post();
                    $image_instance = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                    $src = $image_instance[0];
                    ?>
					<div class="col-md-3 col-sm-6 col-xs-6 proposition-block">
						<div class="proposition-item">
							<?php if( !empty( $src ) ): ?>
								<div class="proposition--item-thumb">
								  <img width="40" class="proposition--item-icon" src="<?php echo esc_url( $src ); ?>" alt="<?php echo esc_html( get_the_title() ); ?>"/>
								</div>
							<?php endif; ?>
							<div class="proposition--item-caption">
							  <h5 class="proposition--item-title"><?php echo esc_html( get_the_title() ); ?></h5>
							  <?php
							   	$acoustic_content = get_the_content();
							  	if( ! empty( $acoustic_content ) ): ?>
							  <div class="proposition--item-desc"><?php echo get_the_content(); ?></div>
							  <?php endif; ?>
							</div>
						</div>
   				    </div>
                <?php
				  }
			  }
			  wp_reset_postdata();
			endif;
		?>
	  </div>
    
	<!---
	<div class="row d-none">
<div class="col-md-6 d-none">
<h4>ELEGANT POSTERS FOR ALL ROOMS</h4>
At Deezano you can shop wall art and beautiful prints online. Our collection is filled with stunning artwork ranging from maps of Stockholm and New York to fashion posters and gorgeous photography prints. Our art prints are inspired by Scandinavian design, and fit well in many different homes and interior design styles. Choose between our fashion and kitchen posters, nature inspired wall art, modern art, photography and much more. Discover our stunning Selection posters too, by talented artists like Tove Frank, Vee Speers and Love Warriors.

 
</div>
<div class="col-md-6 d-none">
<h4>FRAME YOUR POSTERS AND CREATE CUSTOM DESIGN WALL ART</h4>
When framing posters you are able to create personalised arrangements. Find the perfect mix of frames and posters to capture the exact right feeling in your unique gallery wall. We offer both large and small frames, and posters in a diverse range of styles and designs. We have colourful and black and white posters, shiny golden, silver and copper frames as well as natural oak, walnut, white and black wooden frames. Freshen up your walls with a world map, or why not choose a beautiful photograph of a Bengal Tiger framed in a wooden frame? At Deezano you will find cheap, high quality wall art that will fulfill all your interior design wishes and transform your room into the ultimate personal sanctuary.
</div>
</div>
---->
	</div>
  </div>