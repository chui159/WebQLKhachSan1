<?php
/**
 * Customizer Typography
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/*-------------------------------------------------------*/
/* Headings
/*-------------------------------------------------------*/

// H1
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_headings_h1',
	'label'       => '<h2 class="customizer-control-title__heading">' . esc_html__( 'H1 Headings', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_headings',
	'default'     => array(
		'font-family' => $heading_font,
		'font-size'   => '44px',
		'variant' 		=> '700',
		'line-height' => '1.3',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => $selector['h1'],
		)
	),
	'transport' => 'auto',
));

// H2
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_headings_h2',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'H2 Headings', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_headings',
	'default'     => array(
		'font-family' => $heading_font,
		'font-size'   => '37px',
		'variant' 		=> '700',
		'line-height' => '1.3',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => $selector['h2'],
		)
	),
	'transport' => 'auto',
));

// H3
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_headings_h3',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'H3 Headings', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_headings',
	'default'     => array(
		'font-family' => $heading_font,
		'font-size'   => '28px',
		'variant' 		=> '700',
		'line-height' => '1.3',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => $selector['h3'],
		)
	),
	'transport' => 'auto',
));

// H4
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_headings_h4',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'H4 Headings', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_headings',
	'default'     => array(
		'font-family' => $heading_font,
		'font-size'   => '24px',
		'variant' 		=> '700',
		'line-height' => '1.3',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => $selector['h4'],
		)
	),
	'transport' => 'auto',
));

// H5
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_headings_h5',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'H5 Headings', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_headings',
	'default'     => array(
		'font-family' => $heading_font,
		'font-size'   => '20px',
		'variant' 		=> '700',
		'line-height' => '1.3',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => $selector['h5'],
		)
	),
	'transport' => 'auto',
));

// H6
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_headings_h6',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'H6 Headings', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_headings',
	'default'     => array(
		'font-family' => $heading_font,
		'font-size'   => '16px',
		'variant' 		=> '700',
		'line-height' => '1.3',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => 'h6, .elementor-widget-tabs .elementor-tab-title, .elementor-accordion .elementor-tab-title',
		)
	),
	'transport' => 'auto',
));

// Body typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_body_typography',
	'label'       => '<h2 class="customizer-control-title__heading">' . esc_html__( 'Body Text', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_body_text',
	'default'     => array(
		'font-family'    => $body_font,
		'font-size'      => '16px',
		'variant' 			 => 'regular',
		'line-height'    => '1.65',
		'letter-spacing' => 'normal',
	),
	'output' => array(
		array(
			'element' => $selector['text'],
		),
	),
	'transport' => 'auto',
));


/*-------------------------------------------------------*/
/* Blog
/*-------------------------------------------------------*/

// Post title typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_post_title_typography',
	'label'       => '<h2 class="customizer-control-title__heading">' . esc_html__( 'Post title', 'dinerize' ) . '</h2>',
	'description' => esc_html__( 'Applies above 1200px,', 'dinerize' ),
	'section'     => 'dinerize_settings_typography_blog_text',
	'default'     => array(
		'font-size'   => '48px',
		'line-height' => '1.2',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => '.single-post__entry-title, .editor-post-title',
			'media_query' => '@media (min-width: 1200px)',
		)
	),
	'transport' => 'auto',
));

// Post typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_post_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Post body text', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_blog_text',
	'default'     => array(
		'font-family'    => $body_font,
		'font-size'      => '1.375rem',
		'line-height'    => '1.8',
		'letter-spacing' => 'normal',
	),
	'output'  => array(
		array(
			'element' => '.entry__article, .wp-block-post-content',
		)
	),
	'transport' => 'auto',
));

// Blockquote typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_blockquote_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Blockquote typography', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_blog_text',
	'default'     => array(
		'font-family' => $body_font,
		'variant' 		=> 'italic'
	),
	'output'  => array(
		array(
			'element' => 'blockquote',
		),
	),
	'transport' => 'auto',
));

// Blog meta typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_blog_meta_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Blog meta', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_blog_text',
	'default'     => array(
		'font-family'    => $heading_font,
		'font-size'      => '1rem',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => '.entry__meta-item',
		),
	),
	'transport' => 'auto',
));

// Tags typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_tags_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Tags', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_blog_text',
	'default'     => array(
		'font-family'    => $heading_font,
		'font-size'      => '0.875rem',
		'letter-spacing' => 'normal',
		'text-transform' => 'uppercase'
	),
	'output' => array(
		array(
			'element' => '.widget_tag_cloud a, .entry__tags a',
			'suffix'	=> '!important'
		),
	),
	'transport' => 'auto',
));

// Categories widget typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_categories_widget_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Categories Widget', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_blog_text',
	'default'     => array(
		'font-family'    => $heading_font,
		'font-size'      => '1.125rem',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => '.elementor-widget-wp-widget-categories li a, .widget_categories li a',
		),
	),
	'transport' => 'auto',
));


/*-------------------------------------------------------*/
/* Forms
/*-------------------------------------------------------*/

// Buttons typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_buttons_typography',
	'label'       => '<h2 class="customizer-control-title__heading">' . esc_html__( 'Buttons', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_forms_text',
	'default'     => array(
		'font-family'    => $heading_font,
		'variant'		 => '700',
		'letter-spacing' => 'normal',
		'text-transform' => 'uppercase'
	),
	'output' => array(
		array(
			'element' => $selector['buttons'],
		),
		array(
			'element' => '.wp-block-button .wp-block-button__link',
			'context' => array( 'editor' ),			
		)
	),
	'transport' => 'auto',
));

// Reservation buttons typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_reservation_buttons_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Reservation Buttons', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_forms_text',
	'default'     => array(
		'font-family'    => $heading_font,
		'variant'		 => '700',
		'letter-spacing' => 'normal',
		'text-transform' => 'uppercase'
	),
	'output' => array(
		array(
			'element' => '.gloriafood-button, .glf-button',
			'suffix'	=> '!important'
		),
	),
	'transport' => 'auto',
));


// Labels typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_labels_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Labels', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_forms_text',
	'default'     => array(
		'font-family'    => $heading_font,
		'font-size'			 => '0.75rem',
		'variant'		 => '700',
		'letter-spacing' => 'normal',
		'text-transform' => 'uppercase'
	),
	'output' => array(
		array(
			'element' => 'label',
		),
	),
	'transport' => 'auto',
));

// Input fields typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_input_fields_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Input Fields', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_forms_text',
	'default'     => array(
		'font-family'    => $body_font,
		'font-size'			 => '15px',
		'variant'		 => 'normal',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => 'input, select, textarea',
		),
	),
	'transport' => 'auto',
));


/*-------------------------------------------------------*/
/* Header
/*-------------------------------------------------------*/

// Menu Links typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_menu_links_typography',
	'label'       => '<h2 class="customizer-control-title__heading">' . esc_html__( 'Menu Links Typography', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_header',
	'default'     => array(
		'font-family' => $heading_font,
		'variant' => '500',
		'font-size'		=> '13px',
		'letter-spacing' => 'normal',
		'text-transform' => 'uppercase'
	),
	'output' => array(
		array(
			'element' => '.nav__menu > li > a',
		),
	),
	'transport' => 'auto',
));

// Dropdown menu Links typography
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'dinerize_settings_dropdown_menu_links_typography',
	'label'       => '<hr class="customizer-separator"><h2 class="customizer-control-title__heading">' . esc_html__( 'Dropdown Menu Links Typography', 'dinerize' ) . '</h2>',
	'section'     => 'dinerize_settings_typography_header',
	'default'     => array(
		'font-family' => $heading_font,
		'variant' => '400',
		'font-size'		=> '16px',
		'letter-spacing' => 'normal',
	),
	'output' => array(
		array(
			'element' => '.nav__dropdown-menu li a',
		),
	),
	'transport' => 'auto',
));