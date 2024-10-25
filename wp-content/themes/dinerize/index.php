<?php
/**
 * The main template file.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

get_header();
?>

<?php if ( ! is_front_page() ) : ?>
	<?php get_template_part( 'template-parts/page-title/page-title' ); ?>
<?php endif; ?>

<div class="blog-section pb-56">	

	<?php dinerize_primary_content_markup_top(); ?>

		<?php dinerize_primary_content_top(); ?>

		<!-- blog content -->
		<div id="primary" class="content blog__content col-lg mb-32">
			<main class="site-main">

				<?php dinerize_primary_content_before(); ?>

				<?php dinerize_primary_content_query(); ?>

				<?php dinerize_post_pagination(); ?>

				<?php dinerize_primary_content_after(); ?>

			</main>
		</div> <!-- .blog__content -->

		<?php
			// Sidebar
			if ( dinerize_is_active_sidebar( 'blog' ) ) {
				dinerize_sidebar();
			}
		?>

		<?php dinerize_primary_content_bottom(); ?>

	<?php dinerize_primary_content_markup_bottom(); ?>

</div> <!-- .blog-section -->

<?php if ( is_active_sidebar( 'dinerize-footer-instagram' ) ) : ?>
	<?php dynamic_sidebar( 'dinerize-footer-instagram' ); ?>
<?php endif; ?>

<?php get_footer(); ?>