<?php
/**
 * Customizer Layout
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Blog layout
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'radio-image',
	'settings'    => 'dinerize_settings_blog_layout_type',
	'label'       => esc_html__( 'Layout type', 'dinerize' ),
	'section'     => 'dinerize_settings_blog_layout',
	'default'     => 'fullwidth',
	'choices'     => array(
		'left-sidebar'  => get_template_directory_uri() . '/assets/img/customizer/left-sidebar.png',
		'right-sidebar' => get_template_directory_uri() . '/assets/img/customizer/right-sidebar.png',
		'fullwidth'  		=> get_template_directory_uri() . '/assets/img/customizer/fullwidth.png',
	),
) );

// Blog columns
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'select',
	'settings'    => 'dinerize_settings_blog_columns',
	'label'       => esc_html__( 'Columns', 'dinerize' ),
	'description' => esc_html__( 'Use this option for regular blog pages, such as homepage', 'dinerize' ),
	'section'     => 'dinerize_settings_blog_layout',
	'default'     => 'col-lg-6',
	'choices'     => array(
		'col-lg-12' => esc_attr__( '1 Column', 'dinerize' ),
		'col-lg-6' => esc_attr__( '2 Columns', 'dinerize' ),
		'col-lg-4' => esc_attr__( '3 Columns', 'dinerize' ),
		'col-lg-3' => esc_attr__( '4 Columns', 'dinerize' ),
	),
) );


// Page Layout
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'radio-image',
	'settings'    => 'dinerize_settings_page_layout_type',
	'label'       => esc_html__( 'Layout type', 'dinerize' ),
	'section'     => 'dinerize_settings_page_layout',
	'default'     => 'fullwidth',
	'choices'     => array(
		'left-sidebar'  => get_template_directory_uri() . '/assets/img/customizer/left-sidebar.png',
		'right-sidebar' => get_template_directory_uri() . '/assets/img/customizer/right-sidebar.png',
		'fullwidth'  		=> get_template_directory_uri() . '/assets/img/customizer/fullwidth.png',
	),
) );

// Archives Layout
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'radio-image',
	'settings'    => 'dinerize_settings_archive_layout_type',
	'label'       => esc_html__( 'Layout type', 'dinerize' ),
	'section'     => 'dinerize_settings_archive_layout',
	'default'     => 'fullwidth',
	'choices'     => array(
		'left-sidebar'  => get_template_directory_uri() . '/assets/img/customizer/left-sidebar.png',
		'right-sidebar' => get_template_directory_uri() . '/assets/img/customizer/right-sidebar.png',
		'fullwidth'  		=> get_template_directory_uri() . '/assets/img/customizer/fullwidth.png',
	),
) );

// Archives columns
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'select',
	'settings'    => 'dinerize_settings_archive_columns',
	'label'       => esc_html__( 'Columns', 'dinerize' ),
	'section'     => 'dinerize_settings_archive_layout',
	'default'     => 'col-lg-4',
	'choices'     => array(
		'col-lg-12' => esc_attr__( '1 Column', 'dinerize' ),
		'col-lg-6'  => esc_attr__( '2 Columns', 'dinerize' ),
		'col-lg-4'  => esc_attr__( '3 Columns', 'dinerize' ),
		'col-lg-3'  => esc_attr__( '4 Columns', 'dinerize' ),
	),
) );

// Search Layout
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'radio-image',
	'settings'    => 'dinerize_settings_search_results_layout_type',
	'label'       => esc_html__( 'Layout type', 'dinerize' ),
	'section'     => 'dinerize_settings_search_results_layout',
	'default'     => 'fullwidth',
	'choices'     => array(
		'left-sidebar'  => get_template_directory_uri() . '/assets/img/customizer/left-sidebar.png',
		'right-sidebar' => get_template_directory_uri() . '/assets/img/customizer/right-sidebar.png',
		'fullwidth'  		=> get_template_directory_uri() . '/assets/img/customizer/fullwidth.png',
	),
) );

// Search columns
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'select',
	'settings'    => 'dinerize_settings_search_results_columns',
	'label'       => esc_html__( 'Columns', 'dinerize' ),
	'section'     => 'dinerize_settings_search_results_layout',
	'default'     => 'col-lg-4',
	'choices'     => array(
		'col-lg-12' => esc_attr__( '1 Column', 'dinerize' ),
		'col-lg-6'  => esc_attr__( '2 Columns', 'dinerize' ),
		'col-lg-4'  => esc_attr__( '3 Columns', 'dinerize' ),
		'col-lg-3'  => esc_attr__( '4 Columns', 'dinerize' ),
	),
) );