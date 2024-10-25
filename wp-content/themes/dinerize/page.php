<?php
/**
 * The template for displaying all pages.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<?php
		// Check if the page built with Elementor
		if ( dinerize_is_elementor_page() ) : ?>

			<?php dinerize_primary_content_top(); ?>

			<main class="elementor-main-content site-main">

				<?php dinerize_primary_content_before(); ?>

				<?php the_content(); ?>

				<?php dinerize_primary_content_after(); ?>

			</main>

			<?php dinerize_comments(); ?>

			<?php dinerize_primary_content_bottom(); ?>

		<?php else : ?>			

			<?php
				// Page Title
				get_template_part( 'template-parts/page-title/page-title' );
			?>

			<div class="page-section pb-56">
				<div class="container">
					<div class="row">

						<?php dinerize_primary_content_top(); ?>

						<div id="primary" class="content page-content col-lg mb-32">
							<main class="site-main">

								<?php dinerize_primary_content_before(); ?>

								<div class="entry__article clearfix">
									<?php the_content(); ?>
								</div>

								<?php dinerize_multi_page_pagination(); ?>
								
								<?php dinerize_comments(); ?>

								<?php dinerize_primary_content_after(); ?>

							</main>
						</div> <!-- .page-content -->

						<?php dinerize_primary_content_bottom(); ?>

						<?php
							// Sidebar
							if ( dinerize_is_active_sidebar( 'page' ) ) {
								dinerize_sidebar();
							}
						?>						

					</div> <!-- .row -->
				</div> <!-- .container -->			
			</div> <!-- .page-section -->

	<?php endif; ?> <!-- elementor check -->	
<?php endwhile; endif; ?>

<?php get_footer(); ?>