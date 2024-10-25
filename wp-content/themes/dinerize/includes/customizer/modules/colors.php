<?php

/**
 * Customizer Colors
 *
 * @package Dinerize
 * @since 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
/*-------------------------------------------------------*/
/* General Colors
/*-------------------------------------------------------*/
// Primary color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'        => 'color',
    'settings'    => 'dinerize_settings_main_color',
    'label'       => esc_html__( 'Primary color', 'dinerize' ),
    'description' => esc_html__( 'Some elements should be customized with Elementor afterwards', 'dinerize' ),
    'section'     => 'dinerize_settings_general_colors',
    'default'     => $primary_color,
    'output'      => array(array(
        'element'  => ':root',
        'property' => '--dinery-main-color',
    )),
    'transport'   => 'auto',
) );
// Page background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'        => 'color',
    'settings'    => 'dinerize_settings_page_background_color',
    'label'       => esc_html__( 'Page background color', 'dinerize' ),
    'description' => esc_html__( 'Applies on a blog, archive and search results pages', 'dinerize' ),
    'section'     => 'dinerize_settings_general_colors',
    'default'     => '#ffffff',
    'output'      => array(array(
        'element'  => '.blog-section, .archive-section, .search-results-section',
        'property' => 'background-color',
    )),
    'transport'   => 'auto',
) );
// Buttons background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_buttons_background_color',
    'label'     => esc_html__( 'Buttons background color', 'dinerize' ),
    'section'   => 'dinerize_settings_general_colors',
    'default'   => $primary_color,
    'choices'   => array(
        'alpha' => true,
    ),
    'output'    => array(array(
        'element'  => $selector['buttons_color'],
        'property' => 'background-color',
        'context'  => array('front'),
    ), array(
        'element'  => $selector['buttons_color_editor'],
        'property' => 'background-color',
        'context'  => array('editor'),
    )),
    'transport' => 'auto',
) );
// Buttons text color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_buttons_text_color',
    'label'     => esc_html__( 'Buttons text color', 'dinerize' ),
    'section'   => 'dinerize_settings_general_colors',
    'output'    => array(array(
        'element'  => $selector['buttons_color'],
        'property' => 'color',
        'context'  => array('editor', 'front'),
    )),
    'transport' => 'auto',
) );
/*-------------------------------------------------------*/
/* Reservations Buttons Colors
/*-------------------------------------------------------*/
// Food ordering buttons background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_food_ordering_buttons_background_color',
    'label'     => esc_html__( 'Food ordering button background color', 'dinerize' ),
    'section'   => 'dinerize_settings_general_colors',
    'default'   => $primary_color,
    'choices'   => array(
        'alpha' => true,
    ),
    'output'    => array(array(
        'element'  => '.gloriafood-button, .glf-button',
        'property' => 'background-color',
        'suffix'   => '!important',
    )),
    'transport' => 'auto',
) );
// Table reservation buttons background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_table_reservation_buttons_background_color',
    'label'     => esc_html__( 'Table reservatins button background color', 'dinerize' ),
    'section'   => 'dinerize_settings_general_colors',
    'default'   => $secondary_color,
    'choices'   => array(
        'alpha' => true,
    ),
    'output'    => array(array(
        'element'  => '.gloriafood-button.reservation, .glf-button.reservation',
        'property' => 'background-color',
        'suffix'   => '!important',
    )),
    'transport' => 'auto',
) );
/*-------------------------------------------------------*/
/* Header Colors
/*-------------------------------------------------------*/
/* Default Header
/*-------------------------------------------------------*/
// Header background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_default_background_color',
    'label'     => esc_html__( 'Header background color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_default_colors',
    'default'   => 'rgba(255,255,255,0)',
    'choices'   => array(
        'alpha' => true,
    ),
    'output'    => array(array(
        'element'     => '.nav--default',
        'property'    => 'background-color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Menu links color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_default_menu_links_color',
    'label'     => esc_html__( 'Menu links color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_default_colors',
    'default'   => $heading_color,
    'output'    => array(array(
        'element'     => '.nav--default .nav__menu > li > a',
        'property'    => 'color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Menu links hover color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'        => 'color',
    'settings'    => 'dinerize_settings_header_default_menu_links_hover_color',
    'label'       => esc_html__( 'Menu links hover color', 'dinerize' ),
    'description' => esc_html__( 'Also applies for active menu link color', 'dinerize' ),
    'section'     => 'dinerize_settings_header_default_colors',
    'default'     => $primary_color,
    'output'      => array(array(
        'element'  => '.nav--default .nav__menu > li > a:hover,
				.nav--default .nav__menu > li > a:focus,
				.nav--default .nav__menu > li.active > a,
				.nav--default .nav__menu > .current_page_parent > a,
				.nav--default .nav__menu .current-menu-item > a',
        'property' => 'color',
    )),
    'transport'   => 'auto',
) );
// Dropdown background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_default_dropdown_background_color',
    'label'     => esc_html__( 'Dropdown background color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_default_colors',
    'default'   => '#ffffff',
    'output'    => array(array(
        'element'     => '.nav--default .nav__dropdown-menu, .nav--default .nav__menu > .nav__dropdown > .nav__dropdown-menu:before',
        'property'    => 'background-color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Dropdown menu links color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_default_dropdown_menu_links_color',
    'label'     => esc_html__( 'Dropdown menu links color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_default_colors',
    'default'   => $text_color,
    'output'    => array(array(
        'element'     => '.nav--default .nav__dropdown-menu > li > a',
        'property'    => 'color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Dropdown menu links hover color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_default_dropdown_menu_links_hover_color',
    'label'     => esc_html__( 'Dropdown menu links hover color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_default_colors',
    'default'   => $primary_color,
    'output'    => array(array(
        'element'     => '.nav--default .nav__dropdown-menu > li > a:hover, .nav--default .nav__dropdown-menu > li > a:focus',
        'property'    => 'color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Header button background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_default_button_background_color',
    'label'     => esc_html__( 'Header button background/stroke color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_default_colors',
    'default'   => $primary_color,
    'output'    => array(array(
        'element'  => '.nav--default .glf-button, .nav--default .btn:hover, .nav--default .btn:focus',
        'property' => 'background-color',
        'suffix'   => '!important',
    ), array(
        'element'  => '.nav--default .btn',
        'property' => 'border-color',
    )),
    'transport' => 'auto',
) );
// Header button hover text color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_default_button_hover_text_color',
    'label'     => esc_html__( 'Header button hover text color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_default_colors',
    'default'   => '#ffffff',
    'output'    => array(array(
        'element'  => '.nav--default .glf-button, .nav--default .btn:hover, .nav--default .btn:focus',
        'property' => 'color',
        'suffix'   => '!important',
    )),
    'transport' => 'auto',
) );
/* Transparent Header
/*-------------------------------------------------------*/
// Menu links color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_transparent_menu_links_color',
    'label'     => esc_html__( 'Menu links color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_transparent_colors',
    'default'   => '',
    'output'    => array(array(
        'element'     => '.nav--transparent .nav__holder:not(.sticky) .nav__menu > li > a',
        'property'    => 'color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Menu links hover color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'        => 'color',
    'settings'    => 'dinerize_settings_header_transparent_menu_links_hover_color',
    'label'       => esc_html__( 'Menu links hover color', 'dinerize' ),
    'description' => esc_html__( 'Also applies for active menu link color', 'dinerize' ),
    'section'     => 'dinerize_settings_header_transparent_colors',
    'default'     => '',
    'output'      => array(array(
        'element'  => '.nav--transparent .nav__holder:not(.sticky) .nav__menu > li > a:hover,
				.nav--transparent .nav__holder:not(.sticky) .nav__menu > li > a:focus,
				.nav--transparent .nav__holder:not(.sticky) .nav__menu > li.active > a,
				.nav--transparent .nav__holder:not(.sticky) .nav__menu > .current_page_parent > a,
				.nav--transparent .nav__holder:not(.sticky) .nav__menu .current-menu-item > a',
        'property' => 'color',
    )),
    'transport'   => 'auto',
) );
// Dropdown background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_transparent_dropdown_background_color',
    'label'     => esc_html__( 'Dropdown background color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_transparent_colors',
    'default'   => '#ffffff',
    'output'    => array(array(
        'element'     => '.nav--transparent .nav__dropdown-menu, .nav--transparent .nav__menu > .nav__dropdown > .nav__dropdown-menu:before',
        'property'    => 'background-color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Dropdown menu links color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_transparent_dropdown_menu_links_color',
    'label'     => esc_html__( 'Dropdown menu links color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_transparent_colors',
    'default'   => $text_color,
    'output'    => array(array(
        'element'     => '.nav--transparent .nav__dropdown-menu > li > a',
        'property'    => 'color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Dropdown menu links hover color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_transparent_dropdown_menu_links_hover_color',
    'label'     => esc_html__( 'Dropdown menu links hover color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_transparent_colors',
    'default'   => $primary_color,
    'output'    => array(array(
        'element'     => '.nav--transparent .nav__dropdown-menu > li > a:hover, .nav--transparent .nav__dropdown-menu > li > a:focus',
        'property'    => 'color',
        'media_query' => $bp_lg_up,
    )),
    'transport' => 'auto',
) );
// Header button background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_transparent_button_background_color',
    'label'     => esc_html__( 'Header button background/stroke color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_transparent_colors',
    'default'   => $primary_color,
    'output'    => array(array(
        'element'  => '.nav--transparent .glf-button, .nav--transparent .btn:hover, .nav--transparent .btn:focus',
        'property' => 'background-color',
        'suffix'   => '!important',
    ), array(
        'element'  => '.nav--transparent .btn',
        'property' => 'border-color',
    )),
    'transport' => 'auto',
) );
// Header button hover text color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_transparent_button_hover_text_color',
    'label'     => esc_html__( 'Header button hover text color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_transparent_colors',
    'default'   => '#ffffff',
    'output'    => array(array(
        'element'  => '.nav--transparent .glf-button, .nav--transparent .btn:hover, .nav--transparent .btn:focus',
        'property' => 'color',
        'suffix'   => '!important',
    )),
    'transport' => 'auto',
) );
/* Mobile Header
/*-------------------------------------------------------*/
// Mobile header background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_mobile_background_color',
    'label'     => esc_html__( 'Mobile header background color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_mobile_colors',
    'default'   => '#ffffff',
    'output'    => array(array(
        'element'     => '.nav',
        'property'    => 'background-color',
        'media_query' => $bp_lg_down,
    )),
    'transport' => 'auto',
) );
// Mobile menu links color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_mobile_menu_links_color',
    'label'     => esc_html__( 'Mobile menu links color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_mobile_colors',
    'default'   => $heading_color,
    'output'    => array(array(
        'element'     => '.nav__menu > li > a',
        'property'    => 'color',
        'media_query' => $bp_lg_down,
    )),
    'transport' => 'auto',
) );
// Mobile menu dividers color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_mobile_menu_dividers_color',
    'label'     => esc_html__( 'Mobile menu dividers color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_mobile_colors',
    'default'   => $mobile_menu_dividers_color,
    'choices'   => array(
        'alpha' => true,
    ),
    'output'    => array(array(
        'element'     => '.nav__menu li a',
        'property'    => 'border-bottom-color',
        'media_query' => $bp_lg_down,
    )),
    'transport' => 'auto',
) );
// Mobile Header menu toggle color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_header_mobile_menu_toggle_color',
    'label'     => esc_html__( 'Mobile menu toggle color', 'dinerize' ),
    'section'   => 'dinerize_settings_header_mobile_colors',
    'default'   => '#282e38',
    'output'    => array(array(
        'element'  => '.nav__icon-toggle-bar',
        'property' => 'background-color',
    )),
    'transport' => 'auto',
) );
/*-------------------------------------------------------*/
/* Page Title Colors
/*-------------------------------------------------------*/
// Page title background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_page_title_background_color',
    'label'     => esc_html__( 'Page title background color', 'dinerize' ),
    'section'   => 'dinerize_settings_page_title_colors',
    'default'   => $bg_light,
    'output'    => array(array(
        'element'  => '.page-title',
        'property' => 'background-color',
    )),
    'transport' => 'auto',
) );
// Page title heading color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_page_title_heading_color',
    'label'     => esc_html__( 'Page title heading color', 'dinerize' ),
    'section'   => 'dinerize_settings_page_title_colors',
    'default'   => $heading_color,
    'output'    => array(array(
        'element'  => '.page-title__title',
        'property' => 'color',
    )),
    'transport' => 'auto',
) );
// Page title subtitle color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_page_title_subtitle_color',
    'label'     => esc_html__( 'Page title subtitle color', 'dinerize' ),
    'section'   => 'dinerize_settings_page_title_colors',
    'default'   => $text_color,
    'output'    => array(array(
        'element'  => '.page-title__subtitle',
        'property' => 'color',
    )),
    'transport' => 'auto',
) );
/*-------------------------------------------------------*/
/* Blog Colors
/*-------------------------------------------------------*/
// Post links color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_post_links_color',
    'label'     => esc_html__( 'Post links color', 'dinerize' ),
    'section'   => 'dinerize_settings_blog_colors',
    'output'    => array(array(
        'element'  => $selector['post_links_color'],
        'property' => 'color',
    ), array(
        'element'  => '.edit-post-visual-editor a, .editor-rich-text__tinymce a',
        'property' => 'color',
        'context'  => array('editor'),
    )),
    'transport' => 'auto',
) );
// Post meta color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_post_meta_color',
    'label'     => esc_html__( 'Post meta color', 'dinerize' ),
    'section'   => 'dinerize_settings_blog_colors',
    'default'   => $meta_color,
    'output'    => array(array(
        'element'  => $selector['post_meta_color'],
        'property' => 'color',
    )),
    'transport' => 'auto',
) );
/*-------------------------------------------------------*/
/* Text Colors
/*-------------------------------------------------------*/
// Headings colors
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_headings_color',
    'label'     => esc_html__( 'Headings color', 'dinerize' ),
    'section'   => 'dinerize_settings_text_colors',
    'default'   => $heading_color,
    'output'    => array(array(
        'element'  => $selector['headings_color'],
        'property' => 'color',
    ), array(
        'element'  => '.edit-post-visual-editor .editor-post-title__block .editor-post-title__input,
			.edit-post-visual-editor .wp-block[data-type="core/heading"] h1,
			.edit-post-visual-editor .wp-block[data-type="core/heading"] h2,
			.edit-post-visual-editor .wp-block[data-type="core/heading"] h3,
			.edit-post-visual-editor .wp-block[data-type="core/heading"] h4,
			.edit-post-visual-editor .wp-block[data-type="core/heading"] h5,
			.edit-post-visual-editor .wp-block[data-type="core/heading"] h6',
        'property' => 'color',
        'context'  => array('editor'),
    )),
    'transport' => 'auto',
) );
// Text color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_text_color',
    'label'     => esc_html__( 'Text color', 'dinerize' ),
    'section'   => 'dinerize_settings_text_colors',
    'default'   => $text_color,
    'output'    => array(array(
        'element'  => $selector['text_color'],
        'property' => 'color',
    ), array(
        'element'  => '.edit-post-visual-editor',
        'property' => 'color',
        'context'  => array('editor'),
    )),
    'transport' => 'auto',
) );
// Widgets Text Color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_widget_text_color',
    'label'     => esc_html__( 'Widgets text color', 'dinerize' ),
    'section'   => 'dinerize_settings_text_colors',
    'default'   => $text_color,
    'output'    => array(array(
        'element'  => $selector['widgets_text_color'],
        'property' => 'color',
    )),
    'transport' => 'auto',
) );
/*-------------------------------------------------------*/
/* Footer Colors
/*-------------------------------------------------------*/
// Footer background color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_footer_background_color',
    'label'     => esc_html__( 'Footer background color', 'dinerize' ),
    'section'   => 'dinerize_settings_footer_colors',
    'output'    => array(array(
        'element'  => '.footer',
        'property' => 'background-color',
    )),
    'transport' => 'auto',
) );
// Footer widget title color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_footer_widgets_title_color',
    'label'     => esc_html__( 'Footer widgets title color', 'dinerize' ),
    'section'   => 'dinerize_settings_footer_colors',
    'output'    => array(array(
        'element'  => '.footer .widget-title',
        'property' => 'color',
    )),
    'transport' => 'auto',
) );
// Footer widget text color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_footer_widgets_text_color',
    'label'     => esc_html__( 'Footer widgets text color', 'dinerize' ),
    'section'   => 'dinerize_settings_footer_colors',
    'output'    => array(array(
        'element'  => $selector['footer_widgets_text_color'],
        'property' => 'color',
    )),
    'transport' => 'auto',
) );
// Footer bottom text color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_footer_bottom_text_color',
    'label'     => esc_html__( 'Footer bottom text color', 'dinerize' ),
    'section'   => 'dinerize_settings_footer_colors',
    'output'    => array(array(
        'element'  => '.copyright, .copyright a',
        'property' => 'color',
    )),
    'transport' => 'auto',
) );
// Footer bottom border color
Kirki::add_field( 'dinerize_settings_config', array(
    'type'      => 'color',
    'settings'  => 'dinerize_settings_footer_bottom_border_color',
    'label'     => esc_html__( 'Footer bottom border color', 'dinerize' ),
    'section'   => 'dinerize_settings_footer_colors',
    'default'   => '#E5E5E5',
    'output'    => array(array(
        'element'  => '.footer__bottom',
        'property' => 'border-color',
    )),
    'transport' => 'auto',
) );