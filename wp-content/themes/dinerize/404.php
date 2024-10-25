<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Dinerize
 */

get_header();

$image = get_theme_mod( 'dinerize_settings_page_404_image' );
$title = get_theme_mod( 'dinerize_settings_page_404_title', __( 'Page Not Found', 'dinerize' ) );
$description = get_theme_mod( 'dinerize_settings_page_404_description', __( 'Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'dinerize' ) );
$button_text = get_theme_mod( 'dinerize_settings_page_404_button_text', __( 'Back to Home', 'dinerize' ) );

?>

<div class="page-404-section bg-dark bg-overlay" <?php if ( $image ) : ?>style="background-image: url( <?php echo esc_url( $image ); ?> );"<?php endif; ?>>

	<div class="container text-center">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<main class="site-main">

					<!-- Page Title -->
					<h6 class="page-404__number"><?php echo esc_html__( '404', 'dinerize' ); ?></h6>
					<h1 class="page-404__title"><?php echo esc_html( $title ); ?></h1>
					<p class="page-404__text mb-32"><?php echo esc_html( $description ); ?></p>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--lg btn--color btn--icon">
						<span><?php echo esc_html( $button_text ); ?></span>
					</a>

				</main>
			</div>
		</div>				
	</div>

</div>
<?php get_footer(); ?>