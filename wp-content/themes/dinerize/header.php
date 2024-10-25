<?php
/**
 * The header for this theme.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php dinerize_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php dinerize_head_bottom(); ?>
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to Content', 'dinerize' ) ?></a>

	<?php dinerize_body_top(); ?>

	<?php dinerize_preloader() ?>
	
	<div class="main-wrapper">

		<?php dinerize_header_before(); ?>

		<?php dinerize_header(); ?>
		
		<?php dinerize_header_after(); ?>

		<div id="content" class="site-content">
