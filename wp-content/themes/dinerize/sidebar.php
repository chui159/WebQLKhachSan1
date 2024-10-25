<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Dinerize
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'dinerize-blog-sidebar' ) ) {
	return;
}
?>

<div itemtype="https://schema.org/WPSideBar" itemscope="itemscope" id="secondary" class="widget-area" role="complementary">
	
	<?php dinerize_sidebar_before(); ?>

	<?php dynamic_sidebar( 'dinerize-blog-sidebar' ); ?>

	<?php dinerize_sidebar_after(); ?>

</div><!-- #secondary -->
