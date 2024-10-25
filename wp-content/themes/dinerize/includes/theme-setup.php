<?php

/**
 * Theme setup.
 *
 * @package Dinerize
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
if ( !function_exists( 'dinerize_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function dinerize_setup() {
        load_theme_textdomain( 'dinerize', DINERIZE_DIR . '/languages' );
        // Enable theme support
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );
        add_theme_support( 'post-formats', array('video', 'audio') );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'custom-background', apply_filters( 'dinerize_custom_background_args', array(
            'default-color' => '#ffffff',
            'default-image' => '',
        ) ) );
        add_theme_support( 'custom-header' );
        // Gutenberg
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_editor_style();
        add_theme_support( 'editor-color-palette', array(
            array(
                'name'  => esc_html__( 'gold', 'dinerize' ),
                'slug'  => 'gold',
                'color' => '#a87f34',
            ),
            array(
                'name'  => esc_html__( 'blue', 'dinerize' ),
                'slug'  => 'blue',
                'color' => '#2d3650',
            ),
            array(
                'name'  => esc_html__( 'dark', 'dinerize' ),
                'slug'  => 'dark',
                'color' => '#343434',
            ),
            array(
                'name'  => esc_html__( 'grey', 'dinerize' ),
                'slug'  => 'grey',
                'color' => '#4B4B4B',
            ),
            array(
                'name'  => esc_html__( 'white', 'dinerize' ),
                'slug'  => 'white',
                'color' => '#ffffff',
            ),
            array(
                'name'  => esc_html__( 'black', 'dinerize' ),
                'slug'  => 'black',
                'color' => '#000000',
            )
        ) );
        // Thumbnails
        add_image_size(
            'dinerize_thumbnail',
            68,
            68,
            1
        );
        add_image_size(
            'dinerize_blog_featured_small',
            400,
            0,
            false
        );
        add_image_size(
            'dinerize_blog_featured_tall',
            400,
            480,
            1
        );
        add_image_size(
            'dinerize_blog_featured_medium',
            800,
            0,
            false
        );
        add_image_size(
            'dinerize_blog_featured_large',
            1240,
            0,
            false
        );
        // Nav menus
        register_nav_menus( array(
            'primary-menu'       => esc_html__( 'Primary Menu', 'dinerize' ),
            'footer-bottom-menu' => esc_html__( 'Footer Bottom Menu', 'dinerize' ),
        ) );
    }

}
// theme_setup
add_action( 'after_setup_theme', 'dinerize_setup' );
// Update Elementor Defaults
if ( 1 != get_option( 'dinerize_elementor_defaults', 0 ) ) {
    add_option( 'dinerize_elementor_defaults', 0 );
}
/**
* Update Elementor defaults.
*/
function dinerize_update_elementor_defaults() {
    if ( 1 != get_option( 'dinerize_elementor_defaults' ) ) {
        update_option( 'elementor_scheme_color', array(
            1 => '#343434',
            2 => '#2d3650',
            3 => '#4B4B4B',
            4 => '#a87f34',
        ) );
        update_option( 'elementor_scheme_color-picker', array(
            1 => '#a87f34',
            2 => '#2d3650',
            3 => '#4B4B4B',
            4 => '#343434',
            5 => '#FFFBF5',
            6 => '#E8E4D6',
            7 => '#FFFFFF',
            8 => '#000000',
        ) );
        update_option( 'elementor_disable_color_schemes', 'yes' );
        update_option( 'elementor_disable_typography_schemes', 'yes' );
        update_option( 'dinerize_elementor_defaults', 1 );
        // Disable Kirki telemetry
        add_filter( 'kirki_telemetry', '__return_false' );
        // Remove admin notices for Instagram Feed
        update_option( 'sbi_rating_notice', 'dismissed' );
        remove_action( 'admin_notices', 'sbi_usage_tracking' );
        remove_action( 'admin_notices', 'sbi_usage_opt_in' );
        remove_action( 'admin_notices', 'sbi_notices_html' );
    }
}

add_action( 'init', 'dinerize_update_elementor_defaults' );
// Disable GLF Restaurant System redirect
if ( class_exists( 'GLF_Restaurant_System' ) ) {
    global $GLF_Restaurant_System;
    delete_option( 'glf_plugin_redirect' );
    remove_action( 'admin_init', array($GLF_Restaurant_System, 'glf_plugin_activation_redirect') );
}
/**
* Register widget areas.
*/
function dinerize_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'dinerize' ),
        'id'            => 'dinerize-blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Page Sidebar', 'dinerize' ),
        'id'            => 'dinerize-page-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Instagram', 'dinerize' ),
        'id'            => 'dinerize-footer-instagram',
        'before_widget' => '<div id="%1$s" class="instagram-feed instagram-feed--wide text-center %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="instagram-feed__title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'dinerize' ),
        'id'            => 'dinerize-footer-col-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'dinerize' ),
        'id'            => 'dinerize-footer-col-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'dinerize' ),
        'id'            => 'dinerize-footer-col-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4', 'dinerize' ),
        'id'            => 'dinerize-footer-col-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'dinerize_widgets_init' );
/**
* TGMPA plugins activation.
*/
if ( is_admin() ) {
    require_once DINERIZE_DIR . '/includes/class-tgm-plugin-activation.php';
    add_action( 'tgmpa_register', 'dinerize_tgmpa_register_required_plugins' );
}
function dinerize_tgmpa_register_required_plugins() {
    $plugins = array(array(
        'name'     => esc_html__( 'Kirki', 'dinerize' ),
        'slug'     => 'kirki',
        'required' => true,
    ), array(
        'name'     => esc_html__( 'Elementor', 'dinerize' ),
        'slug'     => 'elementor',
        'required' => true,
    ));
    $config = array(
        'id'           => 'tgmpa',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => true,
        'message'      => '',
        'strings'      => array(
            'page_title'                     => esc_html__( 'Install Required Plugins', 'dinerize' ),
            'menu_title'                     => esc_html__( 'Install Plugins', 'dinerize' ),
            'installing'                     => esc_html__( 'Installing Plugin: %s', 'dinerize' ),
            'updating'                       => esc_html__( 'Updating Plugin: %s', 'dinerize' ),
            'oops'                           => esc_html__( 'Something went wrong with the plugin API.', 'dinerize' ),
            'return'                         => esc_html__( 'Return to Required Plugins Installer', 'dinerize' ),
            'plugin_activated'               => esc_html__( 'Plugin activated successfully.', 'dinerize' ),
            'activated_successfully'         => esc_html__( 'The following plugin was activated successfully:', 'dinerize' ),
            'plugin_already_active'          => esc_html__( 'No action taken. Plugin %1$s was already active.', 'dinerize' ),
            'plugin_needs_higher_version'    => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'dinerize' ),
            'complete'                       => esc_html__( 'All plugins installed and activated successfully. %1$s', 'dinerize' ),
            'dismiss'                        => esc_html__( 'Dismiss this notice', 'dinerize' ),
            'notice_cannot_install_activate' => esc_html__( 'There are one or more required or recommended plugins to install, update or activate.', 'dinerize' ),
            'contact_admin'                  => esc_html__( 'Please contact the administrator of this site for help.', 'dinerize' ),
            'nag_type'                       => 'updated',
        ),
    );
    tgmpa( $plugins, $config );
}
