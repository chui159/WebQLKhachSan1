<?php
/**
 * Page title for archive pages.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

$archive_title    	 = get_the_archive_title();
$archive_description = get_the_archive_description();
$projects_title			 = get_theme_mod( 'dinerize_settings_project_archives_title', esc_html__( 'Projects', 'dinerize' ) );
?>

<?php if ( $archive_title || $archive_description ) : ?>

	<!-- Page Title -->
	<div class="page-title text-center">
		<div class="container">
			<div class="page-title__outer">
				<div class="page-title__inner">
					<div class="page-title__holder">
						<?php dinerize_page_title_before(); ?>

							<?php if ( $archive_title ) : ?>
								
								<h1 class="page-title__title">
									<?php
										if ( is_post_type_archive( 'projects' ) ) :
											echo wp_kses_post( $projects_title );

										elseif ( is_tax( 'projects_categories' ) || is_tax( 'services_categories' ) || is_category() || is_tag() ) :
											single_cat_title();

										else :
											echo wp_kses_post( $archive_title );

										endif;
									?>
								</h1>

							<?php endif; ?>

							<?php
								if ( is_post_type_archive( 'projects' ) ) {
									printf( '<p class="page-title__subtitle">%s</p>', get_theme_mod( 'dinerize_settings_project_archives_subtitle', esc_html__( 'Here are the best features that makes dinerize the most powerful, fast and user-friendly platform.', 'dinerize' ) ));
								} elseif ( $archive_description ) {
									?>
									<div class="page-title__description"><?php echo wp_kses_post( wpautop( $archive_description ) ); ?></div>
									<?php
								}
							?>
					
						<?php dinerize_page_title_after(); ?>

					</div>
				</div>
			</div>
		</div>
	</div> <!-- .page-title -->

<?php endif; ?>