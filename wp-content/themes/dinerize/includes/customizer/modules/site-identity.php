<?php
/**
 * Customizer Site Identity
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'custom',
	'settings'    => 'separator-' . $uniqid++,
	'section'     => 'title_tagline',
	'default'     => '<h3 class="customizer-title">' . esc_html__( 'Dark Logo', 'dinerize' ) . '</h3>',
) );

// Logo
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'image',
	'settings'    => 'dinerize_settings_logo_dark',
	'label'       => esc_html__( 'Logo', 'dinerize' ),
	'section'     => 'title_tagline',
) );	

// Logo Retina
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'image',
	'settings'    => 'dinerize_settings_logo_dark_retina',
	'label'       => esc_html__( 'Retina logo', 'dinerize' ),
	'description' => esc_html__( 'Logo 2x bigger size', 'dinerize' ),
	'section'     => 'title_tagline',
) );


Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'custom',
	'settings'    => 'separator-' . $uniqid++,
	'section'     => 'title_tagline',
	'default'     => '<h3 class="customizer-title">' . esc_html__( 'Light Logo', 'dinerize' ) . '</h3>',
) );

// Light Logo
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'image',
	'settings'    => 'dinerize_settings_logo_light',
	'label'       => esc_html__( 'Light logo', 'dinerize' ),
	'description' => esc_html__( 'Enabled on transparent header', 'dinerize' ),
	'section'     => 'title_tagline',
) );	

// Light Logo Retina
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'image',
	'settings'    => 'dinerize_settings_logo_light_retina',
	'label'       => esc_html__( 'Light retina logo', 'dinerize' ),
	'description' => esc_html__( 'Logo 2x bigger size', 'dinerize' ),
	'section'     => 'title_tagline',
) );