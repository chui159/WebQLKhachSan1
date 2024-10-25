<?php
/**
 * Core Theme Functions.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
  * Shim for wp_body_open
  *
  * @since  1.0.0
  */
if ( ! function_exists( 'wp_body_open' ) ) {
  function wp_body_open() {
    do_action( 'wp_body_open' );
  }
}


/**
 * Get page ID by title
 */
function dinerize_get_page_by_title( $page_title, $post_type = 'page' ) {
	$posts = get_posts(
		array(
			'post_type'              => $post_type,
			'title'                  => $page_title,
			'post_status'            => 'all',
			'numberposts'            => 1,
			'update_post_term_cache' => false,
			'update_post_meta_cache' => false,           
			'orderby'                => 'post_date ID',
			'order'                  => 'ASC',
		)
	);

	if ( ! empty( $posts ) ) {
		$post = $posts[0];
	} else {
		$post = null;
	}

	return $post;
}


/**
	* Check if page built with Elementor
	*
	* @since  1.0.0
	*/
function dinerize_is_elementor_page() {
	$elementor_page = get_post_meta( get_the_ID(), '_elementor_edit_mode', true );

	if ( is_search() || is_archive() ) {
		return false;
	}

	if ( (bool)$elementor_page ) {
		return true;
	} else {
		return false;
	}	
}

/**
* Gutenberg Check
*
* @since 1.0.0
*/
function dinerize_is_gutenberg() {
	return function_exists( 'register_block_type' ); 
}


/**
 * Allow shorcodes in text widgets
 */
add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'widget_text', 'shortcode_unautop' );

/**
 * Custom excerpt length
 */
function dinerize_custom_excerpt_length( $length ) {
	if ( is_admin() ) {
		return;
	}

	$excerpt_length = get_theme_mod( 'dinerize_settings_posts_excerpt_settings', 30 );
	return $excerpt_length;
}
add_filter( 'excerpt_length', 'dinerize_custom_excerpt_length' );


/**
 * Replace excerpt dots
 */
function dinerize_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'dinerize_excerpt_more', 21 );



if ( ! function_exists( 'dinerize_sidebar' ) ) {
	/**
	* Get sidebar
	*
	* @since 1.0.0
	*/
	function dinerize_sidebar( $sidebar = '' ) {
		?>
			<aside class="sidebar col-lg">
				<?php get_sidebar( $sidebar ); ?>
			</aside>
		<?php
	}
}


if ( ! function_exists( 'dinerize_is_active_sidebar' ) ) {
	/**
	* Check if sidebar is active
	*
	* @since 1.0.0
	*/
	function dinerize_is_active_sidebar( $sidebar = '' ) {
		if ( 'fullwidth' !== dinerize_layout_type( $sidebar ) && is_active_sidebar( 'dinerize-' . $sidebar . '-sidebar' ) ) {
			return true;
		}
	}
}


if ( ! function_exists( 'dinerize_layout_type' ) ) {
	/**
	 * Check layout type based on customizer and meta settings
	 * @return string $type Layout type
	 */
	function dinerize_layout_type( $type, $default = 'right-sidebar' ) {
		$layout = '';
		$meta = get_post_meta( get_the_ID(), '_dinerize_page_layout', true );
		$page_for_posts = get_option( 'page_for_posts' );

		if ( is_home() && $page_for_posts ) {
			$meta = get_post_meta( $page_for_posts, '_dinerize_page_layout', true );
		}

		if ( is_archive() || is_404() || is_search() || is_home() ) {
			$meta = '';
		}

		if ( 'left-sidebar' == get_theme_mod( 'dinerize_settings_' . $type .  '_layout_type', $default ) ) {
			$layout = ( $meta ) ? $meta : 'left-sidebar';		
		}

		if ( 'right-sidebar' == get_theme_mod( 'dinerize_settings_' . $type .  '_layout_type', $default ) ) {
			$layout = ( $meta ) ? $meta : 'right-sidebar';
		}

		if ( 'fullwidth' == get_theme_mod( 'dinerize_settings_' . $type .  '_layout_type', $default ) ) {			
			$layout = ( $meta ) ? $meta : 'fullwidth';
		}	

		return $layout;
	}
}


if ( ! function_exists( 'dinerize_header_type' ) ) {
	/**
	 * Check layout type based on customizer and meta settings
	 * @return string $type Layout type
	 */
	function dinerize_header_type() {
		$layout = 'nav--default';
		$meta = get_post_meta( get_the_ID(), '_dinerize_header_type', true );
		$page_for_posts = get_option( 'page_for_posts' );

		if ( is_home() && $page_for_posts ) {
			$meta = get_post_meta( $page_for_posts, '_dinerize_header_type', true );
		}

		if ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() && 'post' == get_post_type() ) {
			$meta = '';
		}

		if ( $meta === 'nav--default' ) {
			$layout = 'nav--default';
		} else if ( $meta === 'nav--transparent' ) {
			$layout = 'nav--transparent';
		}

		return $layout;
	}
}


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dinerize_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Page Layout Class
	if ( is_page() ) {
		$classes[] = dinerize_layout_type( 'page' );
	}

	// Blog Layout Class
	if ( is_single() || is_home() ) {
		$classes[] = dinerize_layout_type( 'blog' );	
	}
    
	// Archives Layout Class
	if ( is_archive() ) {
		$classes[] = dinerize_layout_type( 'archive', 'fullwidth' );	
	}

	// Search Layout Class
	if ( is_search() ) {
		$classes[] = dinerize_layout_type( 'search_results' );	
	}

	$classes[] = '';

	return $classes;
}
add_filter( 'body_class', 'dinerize_body_classes' );


/**
 * Adds custom admin classes.
 *
 * @param string $classes Classes for the body element.
 * @return string
 */
function dinerize_admin_body_classes( $classes ) {

	$screen = get_current_screen();

	// Add blog layout class
	if ( $screen->id === "post" ) {
		$classes = dinerize_layout_type( 'blog' );
	}

	// Add page layout class
	if ( $screen->id === "page" ) {
		$classes = dinerize_layout_type( 'page' );
	}
	
	return $classes;
}
add_filter( 'admin_body_class', 'dinerize_admin_body_classes' );