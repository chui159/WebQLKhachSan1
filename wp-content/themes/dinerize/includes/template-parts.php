<?php
/**
 * Template parts.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */


add_action( 'dinerize_header', 'dinerize_header_markup' );
add_action( 'dinerize_masthead', 'dinerize_masthead_template' );
add_action( 'dinerize_footer', 'dinerize_footer_template' );
add_action( 'dinerize_comments', 'dinerize_comments_template' );
add_action( 'dinerize_page_title_after', 'dinerize_breadcrumbs' );
add_action( 'dinerize_entry_section_before', 'dinerize_breadcrumbs' );
add_action( 'dinerize_entry_header', 'dinerize_entry_header_markup' );
add_action( 'dinerize_entry_featured_image', 'dinerize_featured_image_markup' );


/**
 * Get site Header
 */
if ( ! function_exists( 'dinerize_header_markup' ) ) {
	function dinerize_header_markup() {
		if ( ! get_theme_mod( 'dinerize_settings_header_show', true ) ) {
			return;
		}

		$header_classes = [	'nav__holder'	];
		if ( get_theme_mod( 'dinerize_settings_sticky_header_show', true ) ) {
			$header_classes[] = 'nav--sticky';
		}

		$header_type = dinerize_header_type();
		?>	

		<header class="deo-header nav <?php echo esc_attr( $header_type ); ?>" itemtype="https://schema.org/WPHeader" itemscope="itemscope">
			<div class="<?php echo esc_attr( implode( ' ', $header_classes ) ); ?>">
				<div class="nav__container container">
					<div class="nav__flex-parent flex-parent">

						<?php dinerize_masthead(); ?>

					</div> <!-- .flex-parent -->
				</div> <!-- .nav__container -->
			</div> <!-- .nav__holder -->
		</header> <!-- .deo-header -->		
		
		<?php
	}
}


/**
 * Header main template
 */
if ( ! function_exists( 'dinerize_masthead_template' ) ) {
	function dinerize_masthead_template() {
		get_template_part( 'template-parts/header/header-main-template' );
	}
}


/**
 * Footer main template
 */
if ( ! function_exists( 'dinerize_footer_template' ) ) {
	function dinerize_footer_template() {
		get_template_part( 'template-parts/footer/footer-main-template' );
	}
}


/**
 * Comments template
 */
if ( ! function_exists( 'dinerize_comments_template' ) ) {
	function dinerize_comments_template() {
	
		if ( comments_open() || get_comments_number() ) : ?>
			<!-- Comments -->
			<?php if ( dinerize_is_elementor_page() ) : ?>
				<div class="container">
			<?php else: ?>
				<div class="comments-wrap">
			<?php endif; ?>
				<?php comments_template(); ?>
			</div>
		<?php endif;
	}
}


/**
 * Preloader
 */
if ( ! function_exists( 'dinerize_preloader' ) ) {
	function dinerize_preloader() {
		if ( get_theme_mod( 'dinerize_settings_preloader_show', false ) ) : ?>
			<div class="loader-mask">
				<div class="loader">
					<div></div>
				</div>
			</div>
		<?php endif;
	}
}

/**
 * Back to top
 */
if ( ! function_exists( 'dinerize_back_to_top' ) ) {
	function dinerize_back_to_top() {
		if ( get_theme_mod( 'dinerize_settings_back_to_top_show', true ) ) : ?>
			<!-- Back to top -->
			<div id="back-to-top">
				<a href="#top"><i class="dinerize-chevron-up"></i></a>
			</div>
		<?php endif; 
	}
}

/**
 * Content markup top
 */
if ( ! function_exists( 'dinerize_primary_content_markup_top' ) ) {
	function dinerize_primary_content_markup_top() {
		?>
			<div class="container">
				<div class="row">
		<?php
	}
}


/**
 * Content markup bottom
 */
if ( ! function_exists( 'dinerize_primary_content_markup_bottom' ) ) {
	function dinerize_primary_content_markup_bottom() {
		?>
				</div>
			</div>
		<?php
	}
}


/**
 * Breadcrumbs
 */
if ( ! function_exists( 'dinerize_breadcrumbs' ) ) {
	function dinerize_breadcrumbs() {
		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			return;
		}

		if ( is_search() || is_single() ) {
			return;
		}

		if ( get_theme_mod( 'dinerize_settings_breadcrumbs_show', true ) ) { ?>
			<div class="breadcrumbs-wrap">
				<div class="container">
					<?php breadcrumb_trail( array(
						'show_browse' => false,
						'show_on_front' => false,
					) ); ?>
				</div>
			</div>
			<?php
		}	
	}
}


if ( ! function_exists( 'dinerize_entry_header_markup' ) ) {
	/**
	* Single Entry Header
	*
	* @since 1.0.0
	*/
	function dinerize_entry_header_markup() {
		?>			

			<header class="single-post__entry-header">
				<?php if ( get_theme_mod( 'dinerize_settings_single_category_show', true ) ) : ?>
					<?php dinerize_meta_category(); ?>
				<?php endif; ?>
				<h1 class="single-post__entry-title"><?php the_title(); ?></h1>
				
				<?php if ( get_theme_mod( 'dinerize_settings_single_author_show', true ) || get_theme_mod( 'dinerize_settings_single_date_show', true ) ) : ?>
					<div class="single-post__entry-author">
						<a class="single-post__entry-author-url" rel="author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 48, null, null, array( 'class' => array( 'single-post__entry-author-img' ) ) ); ?>
						</a>
						<div class="single-post__entry-author-content">
							<?php if ( get_theme_mod( 'dinerize_settings_single_author_show', true ) ) : ?>
								<?php dinerize_meta_author(); ?>
							<?php endif; ?>

							<?php if ( get_theme_mod( 'dinerize_settings_single_date_show', true ) ) : ?>
								<?php dinerize_meta_date(); ?>
							<?php endif; ?>
						</div>

					</div>
				<?php endif; ?>
			</header>

		<?php
	}
}


if ( ! function_exists( 'dinerize_featured_image_markup' ) ) {
	/**
	* Single Entry Featured Image
	*
	* @since 1.0.0
	*/
	function dinerize_featured_image_markup() {
		if ( has_post_thumbnail() && get_theme_mod( 'dinerize_settings_single_featured_image_show', true ) ) : ?>

			<!-- Featured Image -->
			<div class="single-post__featured-img">
				<figure class="single-post__featured-img-container">
					<?php the_post_thumbnail( 'dinerize_blog_featured_large', array( 'class' => 'single-post__featured-img-image' )); ?>
				</figure>
			</div>

		<?php endif;
	}
}