<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */

get_header();
$pixeep_layout = get_theme_mod( 'pixeep_archive_layout', 'left-sidebar' );
$pixeep_class = pixeep_layout_classes( $pixeep_layout );
?>
<div class="section-default section--search-template">
	<div class="container">
		<div class="row">
			<section id="primary" class="<?php echo esc_attr( $pixeep_class ); ?> col-xs-12 content-area">
				<main id="main" class="site-main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'pixeep' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

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
