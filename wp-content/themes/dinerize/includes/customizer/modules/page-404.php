<?php
/**
 * Customizer Page 404
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Page 404 Image
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'image',
	'settings'    => 'dinerize_settings_page_404_image',
	'label'       => esc_attr__( 'Page 404 image', 'dinerize' ),
	'section'     => 'dinerize_settings_page_404',
	'default'     => DINERIZE_URI . '/assets/img/404/dinerize_404-min.jpg'
) );

// Title
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'text',
	'settings'    => 'dinerize_settings_page_404_title',
	'label'       => esc_attr__( 'Page 404 title', 'dinerize' ),
	'section'     => 'dinerize_settings_page_404',
	'default'     => esc_html__( 'Page Not Found', 'dinerize' ),
) );

// Description text
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'text',
	'settings'    => 'dinerize_settings_page_404_description',
	'label'       => esc_attr__( 'Page 404 description text', 'dinerize' ),
	'section'     => 'dinerize_settings_page_404',
	'default'     => esc_html__( 'Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'dinerize' ),
) );

// Button text
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'text',
	'settings'    => 'dinerize_settings_page_404_button_text',
	'label'       => esc_attr__( 'Page 404 button text', 'dinerize' ),
	'section'     => 'dinerize_settings_page_404',
	'default'     => esc_html__( 'Take Me Back Home', 'dinerize' ),
) );