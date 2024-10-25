<?php
/**
 * The main header template file
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
} ?>

<?php
	$shortcode = get_theme_mod( 'dinerize_settings_header_button_shortcode' );
	$header_type_meta = get_post_meta( get_the_ID(), '_dinerize_header_type', true );	
?>

<div class="nav__header">

	<!-- Logo -->					
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-url" itemtype="https://schema.org/Organization" itemscope="itemscope">
		<?php if ( get_theme_mod( 'dinerize_settings_logo_dark' ) || get_theme_mod( 'dinerize_settings_logo_dark_retina' ) ) : ?>
			<img src="<?php echo esc_attr( get_theme_mod( 'dinerize_settings_logo_dark' ) ) ?>" srcset="<?php echo esc_attr( get_theme_mod( 'dinerize_settings_logo_dark' ) ) . ' 1x' ?>, <?php echo esc_attr( get_theme_mod( 'dinerize_settings_logo_dark_retina' ) ) . ' 2x' ?>" class="logo logo--dark" alt="<?php bloginfo( 'name' ) ?>">
			<?php if ( get_theme_mod( 'dinerize_settings_transparent_header_show', false ) || 'nav--transparent' === $header_type_meta ) : ?>
				<img src="<?php echo esc_attr( get_theme_mod( 'dinerize_settings_logo_light' ) ) ?>" srcset="<?php echo esc_attr( get_theme_mod( 'dinerize_settings_logo_light' ) ) . ' 1x' ?>, <?php echo esc_attr( get_theme_mod( 'dinerize_settings_logo_light_retina' ) ) . ' 2x' ?>" class="logo logo--light" alt="<?php bloginfo( 'name' ) ?>">
			<?php endif; ?>
		<?php else : ?>
			<span class="site-title site-title--dark"><?php bloginfo( 'name' ) ?></span>
		<?php endif; ?>
	</a>

	<!-- Mobile toggle -->
	<?php if ( has_nav_menu('primary-menu') ) : ?>
		<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'dinerize' ); ?></span>
			<span class="nav__icon-toggle-bar"></span>
			<span class="nav__icon-toggle-bar"></span>
			<span class="nav__icon-toggle-bar"></span>
		</button>
	<?php endif; ?>	

</div> <!-- .nav__header -->


<?php if ( has_nav_menu('primary-menu') ) : ?>
	<!-- Navbar -->
	<nav class="nav__wrap collapse navbar-collapse" id="navbar-collapse" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
	
		<?php
		wp_nav_menu( array(
			'theme_location'  => 'primary-menu',
			'fallback_cb'			=> '__return_false',
			'container'       => false,
			'menu_class'      => 'nav__menu',
			'walker'          => new Dinerize_Walker_Nav_Menu()
		) );

		if ( get_theme_mod( 'dinerize_settings_header_button_show', true ) ) : ?>
			<div class="nav__right--mobile d-lg-none">			
				<?php	echo do_shortcode( $shortcode ); ?>
			</div>
		<?php endif; ?>

	</nav> <!-- end nav-wrap -->

<?php endif; ?>


<?php if ( get_theme_mod( 'dinerize_settings_header_button_show', true ) ) : ?>
	<!-- Nav right -->
	<div class="nav__right d-lg-block d-none">			
		<?php echo do_shortcode( $shortcode ); ?>
	</div> <!-- .nav__right -->
<?php endif; ?>