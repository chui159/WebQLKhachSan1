<?php

/**
 * Theme Customizer
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
function dinerize_customize_register(  $wp_customize  ) {
    // Customize Background Settings
    $wp_customize->get_section( 'background_image' )->title = esc_html__( 'Background Styles', 'dinerize' );
    $wp_customize->get_control( 'background_color' )->section = 'background_image';
    // Remove Custom Header Section
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'colors' );
}

add_action( 'customize_register', 'dinerize_customize_register' );
// Check if Kirki is installed
if ( class_exists( 'Kirki' ) ) {
    // Selector Vars
    $selector = array(
        'headings_color'            => 'h1,h2,h3,h4,h5,h6, .comment-author__name',
        'text_color'                => 'body,
			.breadcrumbs .trail-item a,
			.breadcrumbs .trail-item > span,
			.deo-newsletter-gdpr-checkbox__label,
			figcaption,
			.comment-form-cookies-consent label',
        'widgets_text_color'        => '.elementor-widget-wp-widget-recent-posts a,
			.widget_recent_entries a,
			.elementor-widget-wp-widget-nav_menu a,
			.widget_nav_menu a,
			.elementor-widget-wp-widget-categories a,
			.widget_categories a,
			.elementor-widget-wp-widget-pages a,
			.widget_pages a,
			.elementor-widget-wp-widget-pages-archives a,
			.widget_archive a,
			.elementor-widget-wp-widget-meta a,
			.widget_meta a',
        'footer_widgets_text_color' => '.footer,
			.footer__widgets a:not(.social),
			.footer__nav-menu li a,
			.footer .widget_recent_entries a,			
			.footer .widget_nav_menu a,			
			.footer .widget_categories a,			
			.footer .widget_pages a,		
			.footer .widget_archive a,		
			.footer .widget_meta a',
        'post_links_color'          => '.entry__article p a, .entry__article li:not(.wp-social-link) a',
        'post_meta_color'           => '.entry__meta li, .entry__meta a, .comment-date',
        'headings'                  => 'h1,h2,h3,h4,h5,h6',
        'h1'                        => 'h1, .h1',
        'h2'                        => 'h2, .h2',
        'h3'                        => 'h3, .h3',
        'h4'                        => 'h4, .h4',
        'h5'                        => 'h5, .h5',
        'h6'                        => 'h6, .h6',
        'text'                      => 'body',
        'buttons'                   => 'input[type="button"],
			input[type="reset"],
			input[type="submit"],
			button,
			.btn,
			.button,
			.elementor-widget-button .elementor-button,
			.wp-block-button .wp-block-button__link
			',
        'buttons_color'             => 'input[type="button"],
			input[type="reset"],
			input[type="submit"],	
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus,
			.elementor-widget-button .elementor-button,
			.mc4wp-form-fields input[type=submit]:focus,
			.btn,
			.btn:hover,
			.btn:focus,
			.btn--color,
			.button,
			.button:hover,
			.button:focus,
			.deo-slick-slider-arrow-next
		',
        'buttons_color_editor'      => '.wp-block-button__link:not(.has-background),
			.wp-block-button__link:not(.has-background):active,
			.wp-block-button__link:not(.has-background):focus,
			.wp-block-button__link:not(.has-background):hover,
			.wp-block-button__link:not(.has-background):visited
			',
    );
    $heading_font = 'Jost';
    $body_font = 'Lora';
    $heading_color = '#343434';
    $text_color = '#4B4B4B';
    $meta_color = '#818181';
    $primary_color = '#a87f34';
    // gold
    $secondary_color = '#2d3650';
    // blue
    $mobile_menu_dividers_color = '#eaeaea';
    $bg_light = '#F8F8F8';
    $bp_lg_up = '@media (min-width: 1025px)';
    $bp_lg_down = '@media (max-width: 1024px)';
    // Kirki
    Kirki::add_config( 'dinerize_settings_config', array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
        'option_name' => 'dinerize_settings_config',
    ) );
    /**
     * SECTIONS / PANELS
     **/
    $priority = 20;
    $uniqid = 1;
    // 1. GENERAL PANEL
    Kirki::add_panel( 'dinerize_settings_general', array(
        'title'    => esc_attr__( 'General', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // Preloader
    Kirki::add_section( 'dinerize_settings_preloader', array(
        'title' => esc_html__( 'Preloader', 'dinerize' ),
        'panel' => 'dinerize_settings_general',
    ) );
    // Page content
    Kirki::add_section( 'dinerize_settings_page_content', array(
        'title' => esc_html__( 'Page content', 'dinerize' ),
        'panel' => 'dinerize_settings_general',
    ) );
    // Back to Top
    Kirki::add_section( 'dinerize_settings_back_to_top', array(
        'title' => esc_html__( 'Back to Top', 'dinerize' ),
        'panel' => 'dinerize_settings_general',
    ) );
    // 2. HEADER PANEL
    Kirki::add_panel( 'dinerize_settings_header', array(
        'title'    => esc_html__( 'Header', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // Default Header
    Kirki::add_section( 'dinerize_settings_default_header', array(
        'title'       => esc_html__( 'Default Header', 'dinerize' ),
        'description' => esc_html__( 'Options for the default header', 'dinerize' ),
        'panel'       => 'dinerize_settings_header',
    ) );
    // 3. Footer
    Kirki::add_section( 'dinerize_settings_footer', array(
        'title'    => esc_html__( 'Footer', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // 4. LAYOUT PANEL
    Kirki::add_panel( 'dinerize_settings_layout', array(
        'title'    => esc_html__( 'Layout', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // Blog Layout
    Kirki::add_section( 'dinerize_settings_blog_layout', array(
        'title'       => esc_html__( 'Blog', 'dinerize' ),
        'description' => esc_html__( 'Layout options for the blog pages', 'dinerize' ),
        'panel'       => 'dinerize_settings_layout',
    ) );
    // Projects Layout
    Kirki::add_section( 'dinerize_settings_projects_layout', array(
        'title'       => esc_html__( 'Projects', 'dinerize' ),
        'description' => esc_html__( 'Layout options for the projects archive pages', 'dinerize' ),
        'panel'       => 'dinerize_settings_layout',
    ) );
    // Services Layout
    Kirki::add_section( 'dinerize_settings_services_layout', array(
        'title'       => esc_html__( 'Services', 'dinerize' ),
        'description' => esc_html__( 'Layout options for the services archive pages', 'dinerize' ),
        'panel'       => 'dinerize_settings_layout',
    ) );
    // Page Layout
    Kirki::add_section( 'dinerize_settings_page_layout', array(
        'title'       => esc_html__( 'Page', 'dinerize' ),
        'description' => esc_html__( 'Layout options for the regular pages', 'dinerize' ),
        'panel'       => 'dinerize_settings_layout',
    ) );
    // Archive Layout
    Kirki::add_section( 'dinerize_settings_archive_layout', array(
        'title'       => esc_html__( 'Archive', 'dinerize' ),
        'description' => esc_html__( 'Layout options for archive and categories pages', 'dinerize' ),
        'panel'       => 'dinerize_settings_layout',
    ) );
    // Search Results Layout
    Kirki::add_section( 'dinerize_settings_search_results_layout', array(
        'title'       => esc_html__( 'Search Results', 'dinerize' ),
        'description' => esc_html__( 'Layout options for search result page', 'dinerize' ),
        'panel'       => 'dinerize_settings_layout',
    ) );
    // 5. Page title
    Kirki::add_section( 'dinerize_settings_page_title', array(
        'title'    => esc_attr__( 'Page Title', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // 6. BLOG PANEL
    Kirki::add_panel( 'dinerize_settings_blog', array(
        'title'    => esc_attr__( 'Blog', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // Post Meta
    Kirki::add_section( 'dinerize_settings_post_meta', array(
        'title'       => esc_html__( 'Post Meta', 'dinerize' ),
        'description' => esc_html__( 'These options will apply to the default WordPress posts. Customize Elementor widgets post meta via Elementor.', 'dinerize' ),
        'panel'       => 'dinerize_settings_blog',
    ) );
    // Single Post
    Kirki::add_section( 'dinerize_settings_single_post', array(
        'title' => esc_html__( 'Single Post', 'dinerize' ),
        'panel' => 'dinerize_settings_blog',
    ) );
    // Social Share
    Kirki::add_section( 'dinerize_settings_social_share', array(
        'title' => esc_html__( 'Social Share Buttons', 'dinerize' ),
        'panel' => 'dinerize_settings_blog',
    ) );
    // 7. COLORS PANEL
    Kirki::add_panel( 'dinerize_settings_colors', array(
        'title'    => esc_html__( 'Colors', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // General Colors
    Kirki::add_section( 'dinerize_settings_general_colors', array(
        'title' => esc_html__( 'General Colors', 'dinerize' ),
        'panel' => 'dinerize_settings_colors',
    ) );
    // HEADER COLORS PANEL
    Kirki::add_panel( 'dinerize_settings_header_colors', array(
        'title' => esc_html__( 'Header Colors', 'dinerize' ),
        'panel' => 'dinerize_settings_colors',
    ) );
    // Header Default
    Kirki::add_section( 'dinerize_settings_header_default_colors', array(
        'title' => esc_html__( 'Default Header', 'dinerize' ),
        'panel' => 'dinerize_settings_header_colors',
    ) );
    // Header Transparent
    Kirki::add_section( 'dinerize_settings_header_transparent_colors', array(
        'title' => esc_html__( 'Transparent Header', 'dinerize' ),
        'panel' => 'dinerize_settings_header_colors',
    ) );
    // Header Mobile
    Kirki::add_section( 'dinerize_settings_header_mobile_colors', array(
        'title' => esc_html__( 'Mobile Header', 'dinerize' ),
        'panel' => 'dinerize_settings_header_colors',
    ) );
    // Page Title Colors
    Kirki::add_section( 'dinerize_settings_page_title_colors', array(
        'title' => esc_html__( 'Page Title Colors', 'dinerize' ),
        'panel' => 'dinerize_settings_colors',
    ) );
    // Blog Colors
    Kirki::add_section( 'dinerize_settings_blog_colors', array(
        'title' => esc_html__( 'Blog Colors', 'dinerize' ),
        'panel' => 'dinerize_settings_colors',
    ) );
    // Text Colors
    Kirki::add_section( 'dinerize_settings_text_colors', array(
        'title' => esc_html__( 'Text Colors', 'dinerize' ),
        'panel' => 'dinerize_settings_colors',
    ) );
    // Footer Colors
    Kirki::add_section( 'dinerize_settings_footer_colors', array(
        'title' => esc_html__( 'Footer Colors', 'dinerize' ),
        'panel' => 'dinerize_settings_colors',
    ) );
    // 8. TYPOGRAPHY PANEL
    Kirki::add_panel( 'dinerize_settings_typography', array(
        'title'    => esc_html__( 'Typography', 'dinerize' ),
        'priority' => $priority++,
    ) );
    // Headings
    Kirki::add_section( 'dinerize_settings_typography_headings', array(
        'title' => esc_html__( 'Headings', 'dinerize' ),
        'panel' => 'dinerize_settings_typography',
    ) );
    // Body Text
    Kirki::add_section( 'dinerize_settings_typography_body_text', array(
        'title' => esc_html__( 'Body Text', 'dinerize' ),
        'panel' => 'dinerize_settings_typography',
    ) );
    // Blog
    Kirki::add_section( 'dinerize_settings_typography_blog_text', array(
        'title' => esc_html__( 'Blog', 'dinerize' ),
        'panel' => 'dinerize_settings_typography',
    ) );
    // Form Elements
    Kirki::add_section( 'dinerize_settings_typography_forms_text', array(
        'title' => esc_html__( 'Form Elements', 'dinerize' ),
        'panel' => 'dinerize_settings_typography',
    ) );
    // Header
    Kirki::add_section( 'dinerize_settings_typography_header', array(
        'title' => esc_html__( 'Header', 'dinerize' ),
        'panel' => 'dinerize_settings_typography',
    ) );
    // 11. Page 404
    Kirki::add_section( 'dinerize_settings_page_404', array(
        'title'       => esc_html__( 'Page 404', 'dinerize' ),
        'description' => esc_html__( 'Settings for page 404', 'dinerize' ),
        'priority'    => $priority++,
    ) );
    // Load modules
    require DINERIZE_DIR . '/includes/customizer/modules/site-identity.php';
    require DINERIZE_DIR . '/includes/customizer/modules/general.php';
    require DINERIZE_DIR . '/includes/customizer/modules/header.php';
    require DINERIZE_DIR . '/includes/customizer/modules/layout.php';
    require DINERIZE_DIR . '/includes/customizer/modules/page-title.php';
    require DINERIZE_DIR . '/includes/customizer/modules/blog.php';
    require DINERIZE_DIR . '/includes/customizer/modules/colors.php';
    require DINERIZE_DIR . '/includes/customizer/modules/typography.php';
    require DINERIZE_DIR . '/includes/customizer/modules/footer.php';
    require DINERIZE_DIR . '/includes/customizer/modules/page-404.php';
}
// endif Kirki check