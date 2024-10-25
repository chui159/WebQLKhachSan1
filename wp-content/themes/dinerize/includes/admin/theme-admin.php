<?php

/**
 * Theme admin functions.
 *
 * @package Dinerize
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
/**
* Add admin menu
*
* @since 1.0.0
*/
function dinerize_theme_admin_menu() {
    add_theme_page(
        esc_html__( 'Getting Started', 'dinerize' ),
        esc_html__( 'Dinerize', 'dinerize' ),
        'manage_options',
        'dinerize-theme',
        'dinerize_admin_page_content',
        30
    );
}

add_action( 'admin_menu', 'dinerize_theme_admin_menu' );
/**
* Getting started admin page content.
*
* @since    1.0.0
*/
function dinerize_admin_page_content() {
    $theme_name = 'Dinerize';
    $videos = array(
        'theme-installation' => array(
            'links' => array(array(
                'link_url'     => 'https://www.youtube.com/watch?v=hHCj2z0gRyU',
                'link_text'    => esc_html__( 'Theme Installation', 'dinerize' ),
                'link_img_src' => DINERIZE_URI . '/assets/admin/img/videos/dinerize_video_demo_import.jpg',
            )),
        ),
    );
    $features = array(
        'demo-import'       => array(
            'title' => esc_html__( 'One Click Demo Import', 'dinerize' ),
            'url'   => '',
            'free'  => '<i class="deo-list-item-icon deo-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
            'pro'   => '<i class="deo-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
        ),
        '24-7-support'      => array(
            'title' => esc_html__( 'Priority email support', 'dinerize' ),
            'url'   => '',
            'free'  => '<i class="deo-list-item-icon deo-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
            'pro'   => '<i class="deo-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
        ),
        'elementor-widgets' => array(
            'title' => esc_html__( 'Elementor widgets', 'dinerize' ),
            'url'   => '',
            'free'  => esc_html__( 'Basic', 'dinerize' ),
            'pro'   => esc_html__( 'Premium widgets', 'dinerize' ),
        ),
        'gdpr'              => array(
            'title' => esc_html__( 'GDPR tools', 'dinerize' ),
            'url'   => '',
            'free'  => '<i class="deo-list-item-icon deo-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
            'pro'   => '<i class="deo-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
        ),
        'slider-revolution' => array(
            'title' => esc_html__( 'Slider Revolution', 'dinerize' ),
            'url'   => '',
            'free'  => '<i class="deo-list-item-icon deo-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
            'pro'   => esc_html__( 'Included (save $109)', 'dinerize' ),
        ),
    );
    ?>

		<div class="deo-page-header">
			<div class="deo-page-header__container">
				<div class="deo-page-header__branding">
					<img src="<?php 
    echo esc_url( DINERIZE_URI . '/assets/admin/img/dinerize_logo.png' );
    ?>" class="deo-page-header__logo" alt="<?php 
    echo esc_attr__( 'Dinerize', 'dinerize' );
    ?>">
					<span class="deo-theme-version"><?php 
    echo esc_html( DINERIZE_VERSION );
    ?></span>
				</div>
				<div class="deo-page-header__tagline">
					<?php 
    echo esc_html__( 'Made by ', 'dinerize' );
    ?>
					<a href="https://deothemes.com/"><?php 
    echo esc_html__( 'DeoThemes', 'dinerize' );
    ?></a>
				</div>				
			</div>
		</div>

		<div class="wrap deo-container">
			<div class="deo-grid">
				<div class="deo-grid-content">
					<div class="deo-body">

						<h1 class="deo-title"><?php 
    esc_html_e( 'Getting Started', 'dinerize' );
    ?></h1>
						<p class="deo-text">
							<?php 
    printf( __( 'Dinerize is now installed and ready to use! Get ready to build something beautiful. Check the <a href="%1$s" target="_blank">Documentation</a> for installation and customization guides. We hope you enjoy it!', 'dinerize' ), esc_url( 'https://docs.deothemes.com/dinerize/' ) );
    ?>
						</p>

						<?php 
    ?>
						
						<?php 
    if ( dinerize_fs()->is_not_paying() ) {
        ?>
							<!-- Comparison -->
							<section class="deo-section">
								<h2 class="deo-heading"><?php 
        echo esc_html__( 'Free Vs Pro', 'dinerize' );
        ?></h2>
								<table class="deo-comparison widefat striped table-view-list">
									<thead>
										<tr>
											<th><span><?php 
        echo esc_html__( 'Features', 'dinerize' );
        ?></span></th>
											<th><span><?php 
        printf( esc_html__( '%s Free', 'dinerize' ), $theme_name );
        ?></span></th>
											<th><span><?php 
        printf( esc_html__( '%s Pro', 'dinerize' ), $theme_name );
        ?></span></th>
										</tr>
									</thead>
									<tbody>
										<?php 
        foreach ( $features as $feature ) {
            ?>
											<tr>
												<td><?php 
            echo esc_html( $feature['title'] );
            ?></td>
												<td><?php 
            echo wp_kses( $feature['free'], array(
                'i' => array(
                    'class'       => array(),
                    'aria-hidden' => array(),
                ),
            ) );
            ?></td>
												<td><?php 
            echo wp_kses( $feature['pro'], array(
                'i' => array(
                    'class'       => array(),
                    'aria-hidden' => array(),
                ),
            ) );
            ?></td>
											</tr>
										<?php 
        }
        ?>
									</tbody>
								</table>
								<a href="<?php 
        echo esc_url( dinerize_fs()->get_upgrade_url() );
        ?>" class="button button-primary button-hero">
									<span><?php 
        echo esc_html__( 'Get Pro', 'dinerize' );
        ?></span>
								</a>
							</section>
						<?php 
    }
    ?>

					</div> <!-- .body -->
				</div> <!-- .content -->

				<aside class="deo-grid-sidebar">
					<div class="deo-grid-sidebar-widget-area">

						<div class="deo-widget">
							<h2 class="deo-widget-title"><?php 
    echo esc_html__( 'Useful Links', 'dinerize' );
    ?></h2>
							<ul class="deo-useful-links">
								<li>
									<a href="https://wordpress.org/support/theme/dinerize/reviews/#new-post" target="_blank"><?php 
    echo esc_html__( 'Rate Us ★★★★★', 'dinerize' );
    ?></a>
								</li>
								<li>
									<a href="https://docs.deothemes.com/dinerize" target="_blank"><?php 
    echo esc_html__( 'Knowledge Base', 'dinerize' );
    ?></a>
								</li>
							</ul>
						</div>

						<div class="deo-widget deo-widget-video-tutorials">
							<h2 class="deo-widget-title"><?php 
    esc_html_e( 'Video Tutorials', 'dinerize' );
    ?></h2>
							<ul class="deo-video-tutorials">
								<?php 
    foreach ( (array) $videos as $video_items => $video ) {
        echo '<li class="deo-video-tutorials__item">';
        foreach ( $video['links'] as $key => $link ) {
            echo '<a href="' . esc_url( $link['link_url'] ) . '" class="deo-video-tutorials__url" target="_blank" rel="noopener">';
            echo '<img src="' . esc_url( $link['link_img_src'] ) . '" alt="' . esc_html( $link['link_text'] ) . '" class="deo-video-tutorials__img" />';
            echo '<span class="deo-video-tutorials__label">' . esc_html( $link['link_text'] ) . '</span>';
            echo '</a>';
        }
        echo '</li>';
    }
    ?>
							</ul>
						</div>					

					</div>					
				</aside>

			</div>
		</div>
	<?php 
}

/**
* Change theme icon
*
* @since 1.0.0
*/
function dinerize_fs_custom_icon() {
    return DINERIZE_DIR . '/assets/admin/img/theme-icon.jpg';
}

dinerize_fs()->add_filter( 'plugin_icon', 'dinerize_fs_custom_icon' );
/**
 * Add extra permissions to Freemius
 */
function dinerize_freemius_extra_permissions(  $permissions  ) {
    $permissions['newsletter'] = array(
        'icon-class' => 'dashicons dashicons-email-alt',
        'label'      => dinerize_fs()->get_text_inline( 'Newsletter', 'dinerize' ),
        'desc'       => dinerize_fs()->get_text_inline( 'Your email is added to our newsletter. Updates, announcements, marketing, no spam. Unsubscribe anytime.', 'dinerize' ),
        'priority'   => 15,
    );
    return $permissions;
}

dinerize_fs()->add_filter( 'permission_list', 'dinerize_freemius_extra_permissions' );