<?php
/**
 * Customizer Footer
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


// Show footer
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_footer_show',
	'label'       => esc_attr__( 'Show default footer', 'dinerize' ),
	'section'     => 'dinerize_settings_footer',
	'default'     => true,

) );

// Show footer widgets
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_footer_widgets_show',
	'label'       => esc_attr__( 'Show footer widgets', 'dinerize' ),
	'section'     => 'dinerize_settings_footer',
	'default'     => true,

	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_footer_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Footer columns
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'select',
	'settings'    => 'dinerize_settings_footer_columns',
	'label'       => esc_html__( 'How many columns to show', 'dinerize' ),
	'section'     => 'dinerize_settings_footer',
	'default'     => 'four-col',
	'choices'     => array(
		'one-col' => esc_attr__( '1 Column', 'dinerize' ),
		'two-col' => esc_attr__( '2 Columns', 'dinerize' ),
		'three-col' => esc_attr__( '3 Columns', 'dinerize' ),
		'four-col' => esc_attr__( '4 Columns', 'dinerize' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_footer_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );


// Show bottom footer
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_footer_bottom_show',
	'label'       => esc_attr__( 'Show bottom footer', 'dinerize' ),
	'section'     => 'dinerize_settings_footer',
	'default'     => true,

) );

// Show bottom footer menu
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_footer_bottom_menu_show',
	'label'       => esc_attr__( 'Show bottom footer menu', 'dinerize' ),
	'section'     => 'dinerize_settings_footer',
	'default'     => true,

	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_footer_bottom_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Show bottom footer year
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_footer_bottom_year_show',
	'label'       => esc_attr__( 'Show bottom footer year', 'dinerize' ),
	'section'     => 'dinerize_settings_footer',
	'default'     => true,

	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_footer_bottom_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Bottom footer text
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'text',
	'settings'    => 'dinerize_settings_footer_bottom_text',
	'section'     => 'dinerize_settings_footer',
	'label'       => esc_html__( 'Bottom footer text', 'dinerize' ),
	'description' => esc_html__( 'Allowed HTML: a, span, i, em, strong', 'dinerize' ),
	'sanitize_callback' => 'wp_kses_post',
	'default'     => sprintf( esc_html__( 'Dinerize, Made by %1$sDeoThemes%2$s' , 'dinerize' ), '<a href="'. esc_url( 'https://deothemes.com' ) .'">', '</a>' ),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_footer_bottom_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );