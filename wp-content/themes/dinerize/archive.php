<?php
/**
 * The template for displaying archive pages.
 *
 * @package Dinerize
 */

get_header();
?>

<?php
	// Page Title
	get_template_part( 'template-parts/page-title/page-title-archive' );
?>

<div class="archive-section pb-56">
	<div class="container">
		<div class="row">

			<?php dinerize_primary_content_top(); ?>

			<div id="primary" class="content blog__content mb-32 col-lg">
				<main class="site-main">

					<?php dinerize_primary_content_before(); ?>

					<?php dinerize_primary_content_query(); ?>

					<?php dinerize_post_pagination(); ?>

					<?php dinerize_primary_content_after(); ?>

				</main>
			</div> <!-- #primary -->

			<?php
				// Sidebar
				if ( 'fullwidth' !== dinerize_layout_type( 'archive', 'fullwidth' ) && is_active_sidebar( 'dinerize-blog-sidebar' ) ) {
					dinerize_sidebar();
				}
			?>	

		</div> <!-- .row -->
	</div> <!-- .container -->
</div>

<?php if ( is_active_sidebar( 'dinerize-footer-instagram' ) ) : ?>
	<?php dynamic_sidebar( 'dinerize-footer-instagram' ); ?>
<?php endif; ?>

<?php get_footer();  ?>