<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dinerize
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php dinerize_entry_section_before(); ?>

	<div class="section-wrap pt-72 pt-md-40 pb-40">
		<div class="container">
			<div class="row <?php if ( 'fullwidth' == dinerize_layout_type( 'blog', 'fullwidth' ) || ! is_active_sidebar( 'dinerize-blog-sidebar' ) ) { echo esc_attr( 'justify-content-center' ); } ?>">

				<!-- blog content -->
				<div class="content blog__content col-lg mb-40">
					<main class="site-main">
				
						<?php
							if ( function_exists( 'dinerize_save_post_views' ) ) {
								dinerize_save_post_views( get_the_ID() );
							}
							
							dinerize_entry_header_before();

							dinerize_entry_header();

							dinerize_entry_header_after();

							dinerize_entry_featured_image();

							get_template_part( 'template-parts/content-single', get_post_format() );
						?>
						
					</main>
				</div> <!-- .blog__content -->

				<?php
					// Sidebar
					if ( dinerize_is_active_sidebar( 'blog' ) ) {
						dinerize_sidebar();
					}
				?>

			</div>
		</div>
	</div> <!-- .main-content -->

<?php endwhile; ?>

<?php if ( is_active_sidebar( 'dinerize-footer-instagram' ) ) : ?>
	<?php dynamic_sidebar( 'dinerize-footer-instagram' ); ?>
<?php endif; ?>

<?php get_footer(); ?>