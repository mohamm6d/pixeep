<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */

get_header();
$pixeep_layout = get_theme_mod( 'pixeep_post_layout', 'right-sidebar' );
$pixeep_class = pixeep_layout_classes( $pixeep_layout );
?>
<div class="section-default section--single-template">
	<div class="container">
		<div class="row">
			<section id="primary" class="section-primary <?php echo esc_attr( $pixeep_class ); ?>  col-xs-12 content-area">
				<main id="main" class="site-main">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single' );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>
				</main>
			</section>

			<?php
				if( $pixeep_layout != 'no-sidebar' ):
					get_sidebar();
				endif;
			?>
		</div>
	</div>
</div>
<?php
get_footer();
