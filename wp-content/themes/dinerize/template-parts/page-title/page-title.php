<?php
/**
 * Page title.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

$page_subtitle = get_post_meta( get_the_ID(), '_dinerize_page_subtitle', true );
?>

<!-- Page Title -->
<div class="page-title text-center">
	<div class="container">
		<div class="page-title__outer">
			<div class="page-title__inner">
				<div class="page-title__holder">
					<?php dinerize_page_title_before(); ?>
					<?php if ( ! is_front_page() ) : ?>
						<h1 class="page-title__title"><?php single_post_title(); ?></h1>
					<?php elseif ( is_front_page() ) : ?>
						<h1 class="page-title__title"><?php echo esc_html__( 'Home Page', 'dinerize' ); ?></h1>
					<?php else : ?>
						<h1 class="page-title__title"><?php the_title(); ?></h1>
					<?php endif; ?>
					<?php dinerize_page_title_after(); ?>

					<?php if ( $page_subtitle ) : ?>
						<!-- Subtitle -->
						<p class="page-title__subtitle"><?php echo esc_html( $page_subtitle ); ?></p>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</div> <!-- .page-title -->