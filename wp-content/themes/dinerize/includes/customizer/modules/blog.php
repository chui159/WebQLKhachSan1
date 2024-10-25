<?php
/**
 * Customizer Blog
 *
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
* Meta
*/

// Meta category
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_meta_category_show',
	'label'       => esc_attr__( 'Show meta category', 'dinerize' ),
	'section'     => 'dinerize_settings_post_meta',
	'default'     => true,
) );

// Meta date
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_meta_date_show',
	'label'       => esc_attr__( 'Show meta date', 'dinerize' ),
	'section'     => 'dinerize_settings_post_meta',
	'default'     => true,
) );

// Meta author
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_meta_author_show',
	'label'       => esc_attr__( 'Show meta author', 'dinerize' ),
	'section'     => 'dinerize_settings_post_meta',
	'default'     => true,
) );

// Meta comments
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_meta_comments_show',
	'label'       => esc_attr__( 'Show meta comments', 'dinerize' ),
	'section'     => 'dinerize_settings_post_meta',
	'default'     => true,
) );


// Post excerpt
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_post_excerpt_show',
	'label'       => esc_attr__( 'Show post excerpt', 'dinerize' ),
	'section'     => 'dinerize_settings_post_meta',
	'default'     => true,
) );


/**
* Single Post
*/

// Featured Image
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_single_featured_image_show',
	'label'       => esc_attr__( 'Show featured image', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,

) );

// Meta categories
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_single_category_show',
	'label'       => esc_attr__( 'Show categories', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Meta date
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_single_date_show',
	'label'       => esc_attr__( 'Show date', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Meta author
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_single_author_show',
	'label'       => esc_attr__( 'Show author', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Post tags
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_post_tags_show',
	'label'       => esc_attr__( 'Show tags', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Post author box
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_author_box_show',
	'label'       => esc_attr__( 'Show author box', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Social Share Buttons
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_post_share_buttons_show',
	'label'       => esc_attr__( 'Show share buttons', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Post pagination
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_prev_next_post_pagination_show',
	'label'       => esc_attr__( 'Show pagination', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Post comments
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_comments_show',
	'label'       => esc_attr__( 'Show comments', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,
) );

// Related posts heading
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'custom',
	'settings'    => 'separator-' . $uniqid++,
	'section'     => 'dinerize_settings_single_post',
	'default'     => '<h3 class="customizer-title">' . esc_attr__( 'Related Posts', 'dinerize' ) . '</h3>',
) );

// Related posts
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'dinerize_settings_related_posts_show',
	'label'       => esc_attr__( 'Show related posts', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => true,

) );

// Related by
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'select',
	'settings'    => 'dinerize_settings_related_posts_relation',
	'label'       => esc_html__( 'Related by', 'dinerize' ),
	'section'     => 'dinerize_settings_single_post',
	'default'     => 'category',
	'choices'     => array(
		'category' => esc_attr__( 'Category', 'dinerize' ),
		'tag' => esc_attr__( 'Tag', 'dinerize' ),
		'author' => esc_attr__( 'Author', 'dinerize' ),
	),
) );


/**
* Socials Share Buttons
*/



// Facebook Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_facebook',
	'label'       => esc_attr__( 'Facebook', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => true,
) );

// Twitter Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_twitter',
	'label'       => esc_attr__( 'Twitter', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => true,
) );

// Linkedin Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_linkedin',
	'label'       => esc_attr__( 'Linkedin', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => false,
) );

// Pinterest Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_pinterest',
	'label'       => esc_attr__( 'Pinterest', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => true,
) );

// Vkontakte Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_vkontakte',
	'label'       => esc_attr__( 'Vkontakte', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => false,
) );

// Pocket Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_pocket',
	'label'       => esc_attr__( 'Pocket', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => true,
) );

// Facebook Messenger Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_facebook_messenger',
	'label'       => esc_attr__( 'Facebook Messenger', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => false,
) );

// Whatsapp Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_whatsapp',
	'label'       => esc_attr__( 'Whatsapp', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => true,
) );

// Viber Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_viber',
	'label'       => esc_attr__( 'Viber', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => false,
) );

// Telegram Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_telegram',
	'label'       => esc_attr__( 'Telegram', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => false,
) );

// Line Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_line',
	'label'       => esc_attr__( 'Line', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => false,
) );

// Reddit Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_reddit',
	'label'       => esc_attr__( 'Reddit', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => false,
) );

// Email Share
Kirki::add_field( 'dinerize_settings_config', array(
	'type'        => 'checkbox',
	'settings'    => 'dinerize_settings_share_email',
	'label'       => esc_attr__( 'Email', 'dinerize' ),
	'section'     => 'dinerize_settings_social_share',
	'default'     => true,
) );