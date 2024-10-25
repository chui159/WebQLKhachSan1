<?php
/**
 * Customizer Page Title
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Page title padding
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'dimensions',
	'settings'    => 'dinerize_settings_page_title_padding',
	'label'       => esc_attr__( 'Page title top/bottom padding', 'dinerize' ),
	'section'     => 'dinerize_settings_page_title',
	'default'     => [
		'padding-top'    => '60px',
		'padding-bottom' => '60px',
	],
	'output'       => array(
		array(
			'element'     => '.page-title',
		),
	),
) );


// Show breadcrumbs
Kirki::add_field( 'dinerize_settings_config', array(
	'type'      => 'toggle',
	'settings'  => 'dinerize_settings_breadcrumbs_show',
	'label'     => esc_attr__( 'Show breadcrumbs', 'dinerize' ),
	'section'   => 'dinerize_settings_page_title',
	'default'   => true,
) );