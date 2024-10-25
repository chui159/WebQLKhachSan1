<?php
/**
 * Customizer Header
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/* Default Header
/*-------------------------------------------------------*/

// Show default header
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_header_show',
	'label'       => esc_html__( 'Show default header', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => true,
) );

// Sticky header
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_sticky_header_show',
	'label'       => esc_html__( 'Sticky header', 'dinerize' ),
	'description' => esc_html__( 'Will apply only on big screens', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => true,
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Sticky on mobile
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_sticky_mobile_header_show',
	'label'       => esc_html__( 'Sticky on mobile', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => false,
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Transparent header
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_transparent_header_show',
	'label'       => esc_html__( 'Transparent header', 'dinerize' ),
	'description' => esc_html__( 'Applies on all pages except blog page due to the overlapping', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => false,
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Header container width
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'slider',
	'settings'    => 'dinerize_settings_header_container_width',
	'label'       => esc_attr__( 'Header container width', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => 1260,
	'choices'     => array(
		'min'  => '400',
		'max'  => '1920',
		'step' => '1',
	),
	'output'       => array(
		array(
			'element'     => '.nav__container',
			'property'    => 'max-width',
			'units'       => 'px',
			'media_query'	=> '@media (min-width: 1400px)'
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
	'transport' => 'auto',
) );

// Header height
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'slider',
	'settings'    => 'dinerize_settings_header_height',
	'label'       => esc_attr__( 'Header height', 'dinerize' ),
	'description' => esc_html__( 'Will apply only on big screens', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => 100,
	'choices'     => array(
		'min'  => '40',
		'max'  => '200',
		'step' => '1',
	),
	'output'       => array(
		array(
			'element'     => '.nav__flex-parent',
			'property'    => 'height',
			'units'       => 'px',
			'media_query' => $bp_lg_up,
		),
		array(
			'element'     => '.nav',
			'property'    => 'min-height',
			'units'       => 'px',
			'media_query' => $bp_lg_up,
		),
		array(
			'element'     => '.nav__menu > li > a',
			'property'    => 'line-height',
			'units'       => 'px',
			'media_query' => $bp_lg_up,
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
	'transport' => 'auto',
) );

// Header sticky height
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'slider',
	'settings'    => 'dinerize_settings_header_sticky_height',
	'label'       => esc_attr__( 'Header sticky height', 'dinerize' ),
	'description' => esc_html__( 'Will apply only on big screens', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => 72,
	'choices'     => array(
		'min'  => '40',
		'max'  => '200',
		'step' => '1',
	),
	'output'       => array(
		array(
			'element'     => '.nav--sticky.sticky .nav__flex-parent',
			'property'    => 'height',
			'units'       => 'px',
			'media_query' => $bp_lg_up,
		),
		array(
			'element'     => '.nav--sticky.sticky .nav__menu > li > a',
			'property'    => 'line-height',
			'units'       => 'px',
			'media_query' => $bp_lg_up,
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
	'transport' => 'auto',
) );

// Header mobile height
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'slider',
	'settings'    => 'dinerize_settings_header_mobile_height',
	'label'       => esc_attr__( 'Header mobile height', 'dinerize' ),
	'description' => esc_html__( 'Will apply only on mobile screens', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => 60,
	'choices'     => array(
		'min'  => '40',
		'max'  => '200',
		'step' => '1',
	),
	'output'       => array(
		array(
			'element'     => '.nav__header',
			'property'    => 'height',
			'units'       => 'px',
			'media_query' => $bp_lg_down,
		),
		array(
			'element'     => '.nav',
			'property'    => 'min-height',
			'units'       => 'px',
			'media_query' => $bp_lg_down,
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
	'transport' => 'auto',
) );

// Logo height
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'slider',
	'settings'    => 'dinerize_settings_header_logo_height',
	'label'       => esc_attr__( 'Header logo height', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => 25,
	'choices'     => array(
		'min'  => '10',
		'max'  => '200',
		'step' => '1',
	),
	'output'       => array(
		array(
			'element'     => '.nav__header .logo',
			'property'    => 'max-height',
			'units'       => 'px',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
	'transport' => 'auto',
) );

// Logo sticky height
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'slider',
	'settings'    => 'dinerize_settings_header_logo_sticky_height',
	'label'       => esc_attr__( 'Header logo sticky height', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => 25,
	'choices'     => array(
		'min'  => '10',
		'max'  => '200',
		'step' => '1',
	),
	'output'       => array(
		array(
			'element'     => '.nav--sticky.sticky .nav__header .logo',
			'property'    => 'max-height',
			'units'       => 'px',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
	'transport' => 'auto',
) );

// Menu items horizontal spacing
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'slider',
	'settings'    => 'dinerize_settings_header_text_links_horizontal_spacing',
	'label'       => esc_attr__( 'Menu text links horizontal spacing', 'dinerize' ),
	'description' => esc_html__( 'Will apply only on big screens', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => 17,
	'choices'     => array(
		'min'  => '0',
		'max'  => '60',
		'step' => '1',
	),
	'output'       => array(
		array(
			'element'     => '.nav__menu > li',
			'property'    => 'padding-left',
			'units'       => 'px',
			'media_query' => $bp_lg_up,
		),
		array(
			'element'     => '.nav__menu > li',
			'property'    => 'padding-right',
			'units'       => 'px',
			'media_query' => $bp_lg_up,
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
	'transport' => 'auto',
) );


// Show header button
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_header_button_show',
	'label'       => esc_html__( 'Show button', 'dinerize' ),
	'section'     => 'dinerize_settings_default_header',
	'default'     => true,
	'choices'     => array(
		'on'  => esc_attr__( 'On', 'dinerize' ),
		'off' => esc_attr__( 'Off', 'dinerize' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'dinerize_settings_header_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Header button shortcode
if ( class_exists( '\Kirki\Field\Code' ) ) {
	new \Kirki\Field\Code(
		[
			'settings'    => 'dinerize_settings_header_button_shortcode',
			'label'       => esc_html__( 'Shortcode', 'dinerize' ),
			'description' => esc_html__( 'Paste any available shortcode here. Example: [dinerize-socials]', 'dinerize' ),
			'section'     => 'dinerize_settings_default_header',
			'default'     => '[dinerize-button color="btn--stroke" size="btn--md"]' . esc_html__( 'Reservation', 'dinerize' ) . '[/dinerize-button]',
			'choices'     => [
				'language' => 'php',
			],
			'active_callback' => array(
				array(
					'setting'  => 'dinerize_settings_header_show',
					'operator' => '==',
					'value'    => true,
				),
				array(
					'setting'  => 'dinerize_settings_header_button_show',
					'operator' => '==',
					'value'    => true,
				)
			),
		]
	);
}