<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     Acoustics
 * @version     1.0.0
 *
 */
?>
	</div><!-- #content -->

<div class="container">

	<div class="row store-main-description">
<div class="col-md-6">
<h4>ELEGANT POSTERS FOR ALL ROOMS</h4>
At Deezano you can shop wall art and beautiful prints online. Our collection is filled with stunning artwork ranging from maps of Stockholm and New York to fashion posters and gorgeous photography prints. Our art prints are inspired by Scandinavian design, and fit well in many different homes and interior design styles. Choose between our fashion and kitchen posters, nature inspired wall art, modern art, photography and much more. Discover our stunning Selection posters too, by talented artists like Tove Frank, Vee Speers and Love Warriors.

 
</div>
<div class="col-md-6">
<h4>FRAME YOUR POSTERS AND CREATE CUSTOM DESIGN WALL ART</h4>
When framing posters you are able to create personalised arrangements. Find the perfect mix of frames and posters to capture the exact right feeling in your unique gallery wall. We offer both large and small frames, and posters in a diverse range of styles and designs. We have colourful and black and white posters, shiny golden, silver and copper frames as well as natural oak, walnut, white and black wooden frames. Freshen up your walls with a world map, or why not choose a beautiful photograph of a Bengal Tiger framed in a wooden frame? At Deezano you will find cheap, high quality wall art that will fulfill all your interior design wishes and transform your room into the ultimate personal sanctuary.
</div>
</div>
	</div>
  </div>
  
  
  <div class="instagram_feed_container">
  <h4 class="mt-4 text-center">Follow us on Instagram</h4>
  <div class="container"><div class="instagram_feed"></div>
  </div>
</div></div>


	<footer id="colophon" class="site-footer">
		<?php
			get_template_part( 'template-parts/footer/footer', 'section' );
			get_template_part( 'template-parts/footer/footer', 'copyright' );
		?>
	 </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://www.pixeep.com/wp-content/themes/acoustics/assets/frontend/js/instafeed.js?ver=1.0.0"></script>
<script>
//Instagram Feed
	if(jQuery('body').find('.instagram_feed').length > 0 ){
	
				jQuery.instagramFeed({
					'username': 'pixeep',
					'container': ".instagram_feed",
					'display_profile': false,
					'display_biography': false,
					'display_gallery': true,
					'callback': null,
					'styling': false,
					'items': 5,
					'items_per_row': 5,
					'margin': 0  
			});
		
	}
</script>


<!-- Hotjar Tracking Code for https://www.pixeep.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1003123,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	
	jQuery('#site-header-cart').click(function(){
	jQuery('body').find('.site-header-cart').toggleClass('focus');
});
	
	
</script>

<section class="cookie-bar">
  			<p>Pixeep uses cookies and similar techniques to provide you with personalized content, relevant offers and an improved user experience of our website. By clicking on "I understand!", you confirm that you have read our cookie policy and that you comply with our use of cookies.
        <a href="#" id="cookie-understand">I understand!</a>
  </p>
	</section>
<div class="add_to_cart_ajax"><div class="loader-2 center"><span></span></div>
</div>


</body>
</html>