<?php
/**
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */
if ( ! function_exists( 'pixeep_home_sections' ) ) {
  function pixeep_home_sections(){
		$pixeep_sections = array(
			'hero' => 'hero',
			'featured' => 'featured-images',
			'newarrival' => 'newarrival',
			'product_category' => 'collection',
			'bestseller' => 'bestseller',
			'product_category_grid' => 'collection-grid',
			'values' => 'proposition',
		);
		$enabled_section = array();
		foreach ( $pixeep_sections as $section => $block ):
			if( get_theme_mod( 'pixeep_'.$section.'_section_enable' , false ) ){
				$enabled_section[] = array(
				    'section' => $section,
					'parts'   => $block
				);
			}
		endforeach;
		return $enabled_section;
	}
}

if( ! function_exists( 'pixeep_footer_social' ) ):
	function pixeep_footer_social() {
		$pixeep_twitter_link = get_theme_mod( 'pixeep_twitter_url', '' );
	    $pixeep_facebook_link = get_theme_mod( 'pixeep_facebook_url', '' );
	    $pixeep_linkedin_link = get_theme_mod( 'pixeep_linkedin_url', '' );
	    $pixeep_instagram_link = get_theme_mod( 'pixeep_instagram_url', '' );
	    $pixeep_pinterest_link = get_theme_mod( 'pixeep_pinterest_url', '' );
	    $pixeep_youtube_link = get_theme_mod( 'pixeep_youtube_url', '' );
	    $classes = 'round-icon';
		?>
	   <ul class="social-icons clearfix <?php echo esc_attr( $classes ); ?>">
		   <?php
		    if( ! empty( $pixeep_twitter_link ) ): ?>
		        <li class="text-center"><a href="<?php echo esc_url( $pixeep_twitter_link ); ?>" target="_blank"> <span class="fa fa-twitter"></span></a></li>
				<?php
		    endif;
			if( ! empty( $pixeep_facebook_link ) ): ?>
		        <li class="text-center"><a href="<?php echo esc_url( $pixeep_facebook_link ); ?>" target="_blank"> <span class="fa fa-facebook"></span></a></li>
				<?php
		    endif;
			if( ! empty( $pixeep_linkedin_link ) ): ?>
		        <li class="text-center"><a href="<?php echo esc_url( $pixeep_linkedin_link ); ?>" target="_blank"> <span class="fa fa-linkedin"></span></a></li>
				<?php
		    endif;
			if( ! empty( $pixeep_instagram_link ) ): ?>
		        <li class="text-center"><a href="<?php echo esc_url( $pixeep_instagram_link ); ?>" target="_blank"> <span class="fa fa-instagram"></span></a></li>
				<?php
		    endif;
			if( ! empty( $pixeep_pinterest_link ) ): ?>
		       <li class="text-center"><a href="<?php echo esc_url( $pixeep_pinterest_link ); ?>" target="_blank"> <span class="fa fa-pinterest"></span></a></li>
			   <?php
		    endif;
			if( ! empty( $pixeep_youtube_link ) ): ?>
		        <li class="text-center"><a href="<?php echo esc_url( $pixeep_youtube_link ); ?>" target="_blank"> <span class="fa fa-youtube"></span></a></li>
				<?php
		    endif;
			?>
		<ul>
	<?php
}

endif;
