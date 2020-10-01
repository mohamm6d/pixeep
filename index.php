<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
<div class="section-default section--default-template">
	<div class="container">
		<div class="row">
			<section id="primary" class="section-primary <?php echo esc_attr( $pixeep_class ); ?>  col-xs-12 content-area">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header class="entry-header">
							<div class="container">
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</div>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

				</main><!-- #main -->
			</section><!-- #primary -->
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
