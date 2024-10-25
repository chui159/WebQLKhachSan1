<?php

/**
 * Theme functions and definitions.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
// Set the content width based on the theme's design and stylesheet.
if ( !isset( $content_width ) ) {
    $content_width = 1240;
    /* pixels */
}
// Constants
define( 'DINERIZE_VERSION', '1.2.3' );
define( 'DINERIZE_DIR', get_template_directory() );
define( 'DINERIZE_URI', get_template_directory_uri() );
if ( !function_exists( 'dinerize_fs' ) ) {
    // Create a helper function for easy SDK access.
    function dinerize_fs() {
        global $dinerize_fs;
        if ( !isset( $dinerize_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $dinerize_fs = fs_dynamic_init( array(
                'id'             => '11226',
                'slug'           => 'dinerize',
                'premium_slug'   => 'dinerize-pro',
                'type'           => 'theme',
                'public_key'     => 'pk_65be7d8bd829fe93c6675523b1b66',
                'is_premium'     => false,
                'premium_suffix' => 'Pro',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(
                    'slug'    => 'dinerize-theme',
                    'contact' => false,
                    'support' => false,
                    'parent'  => array(
                        'slug' => 'themes.php',
                    ),
                ),
                'is_live'        => true,
            ) );
        }
        return $dinerize_fs;
    }

    // Init Freemius.
    dinerize_fs();
    // Signal that SDK was initiated.
    do_action( 'dinerize_fs_loaded' );
}
// Includes
require_once DINERIZE_DIR . '/includes/admin/theme-admin.php';
require_once DINERIZE_DIR . '/includes/theme-setup.php';
require_once DINERIZE_DIR . '/includes/theme-functions.php';
require_once DINERIZE_DIR . '/includes/theme-hooks.php';
require_once DINERIZE_DIR . '/includes/template-tags.php';
require_once DINERIZE_DIR . '/includes/template-parts.php';
require_once DINERIZE_DIR . '/includes/class-breadcrumb-trail.php';
require_once DINERIZE_DIR . '/includes/class-dinerize-query.php';
require_once DINERIZE_DIR . '/includes/class-dinerize-walker-nav-menu.php';
require_once DINERIZE_DIR . '/includes/class-dinerize-walker-comment.php';
require_once DINERIZE_DIR . '/includes/customizer/customizer.php';
/**
 * Theme styles.
 */
function dinerize_theme_styles() {
    wp_enqueue_style(
        'dinerize-styles',
        DINERIZE_URI . '/style.min.css',
        array(),
        DINERIZE_VERSION,
        'all'
    );
    wp_style_add_data( 'dinerize-styles', 'rtl', 'replace' );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    // Fonts
    if ( !class_exists( 'Kirki' ) ) {
        wp_enqueue_style(
            'dinerize-google-fonts',
            '//fonts.googleapis.com/css2?family=Jost:wght@400;500;700&family=Lora:ital,wght@0,400;0,700;1,400&display=swap',
            [],
            null
        );
    }
}

add_action( 'wp_enqueue_scripts', 'dinerize_theme_styles' );
/**
 * Editor styles.
 */
function dinerize_editor_assets() {
    wp_enqueue_style( 'dinerize-editor-styles', get_theme_file_uri( '/assets/css/editor.css' ), false );
    wp_style_add_data( 'dinerize-editor-styles', 'rtl', 'replace' );
    if ( !class_exists( 'Kirki' ) ) {
        wp_enqueue_style(
            'dinerize-editor-google-fonts',
            '//fonts.googleapis.com/css2?family=Jost:wght@400;500;700&family=Lora:ital,wght@0,400;0,700;1,400&display=swap',
            [],
            null
        );
    }
}

add_action( 'enqueue_block_editor_assets', 'dinerize_editor_assets' );
/**
 * Theme scripts.
 */
function dinerize_theme_scripts() {
    wp_enqueue_script(
        'dinerize-scripts',
        DINERIZE_URI . '/assets/js/scripts.min.js',
        array('jquery'),
        DINERIZE_VERSION,
        true
    );
    $Dinerize_Data = array(
        'home_url'             => esc_url( home_url( '/' ) ),
        'theme_path'           => DINERIZE_URI,
        'mobile_header_sticky' => (bool) get_theme_mod( 'dinerize_settings_sticky_mobile_header_show', false ),
    );
    wp_localize_script( 'dinerize-scripts', 'Dinerize_Data', $Dinerize_Data );
}

add_action( 'wp_enqueue_scripts', 'dinerize_theme_scripts' );
/**
 * Theme admin scripts and styles.
 */
function dinerize_admin_scripts() {
    $screen = get_current_screen();
    wp_enqueue_style( 'dinerize-admin-styles', DINERIZE_URI . '/assets/admin/css/admin-styles.css' );
    if ( $screen->id === 'appearance_page_one-click-demo-import' ) {
        wp_register_script(
            'dinerize-admin-scripts',
            DINERIZE_URI . '/assets/admin/js/dinerize-admin-scripts.js',
            array('jquery-core'),
            false,
            true
        );
        wp_enqueue_script( 'dinerize-admin-scripts' );
    }
}

add_action( 'admin_enqueue_scripts', 'dinerize_admin_scripts' );
/**
 * Theme WP Customizer scripts and styles.
 */
function dinerize_customizer_scripts() {
    wp_enqueue_style( 'dinerize-customizer-styles', DINERIZE_URI . '/assets/css/customizer/customizer.css' );
}

add_action( 'customize_controls_enqueue_scripts', 'dinerize_customizer_scripts' );