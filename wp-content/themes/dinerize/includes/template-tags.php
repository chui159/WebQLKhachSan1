<?php
/**
 * Custom template tags for this theme.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! function_exists( 'dinerize_meta_category' ) ) {
	/**
	* Post category meta
	*
	* @since 1.0.0
	*/
	function dinerize_meta_category( $echo = true ) {
		$categories = get_the_category();
		$separator = ( is_single() ) ? ' ' : ', ';
		$categories_output = '';
		$output = '';

		if ( ! empty( $categories ) ):
			foreach( $categories as $index => $category ):
				if ($index > 0) : $categories_output .= $separator; endif;
				$categories_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="entry__category-item">' . esc_html( $category->name ) . '</a>';
			endforeach;
		endif;

		if ( 'post' == get_post_type() ) :
			$output .= '<div class="entry__meta-item entry__category"><span>' . esc_html_x( 'in ', 'post categories', 'dinerize' ) . '</span>' . $categories_output . '</div>';
		endif;

		if ( $echo ) {
			echo html_entity_decode( esc_html( $output ) );
		} else {
			return $output;
		}

	}
}


if ( ! function_exists( 'dinerize_meta_date' ) ) {

	/**
	* Prints HTML with meta information for the current post-date/time.
	*/
	function dinerize_meta_date() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo '<span class="entry__meta-item entry__meta-date">
						<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>
					</span>'; // WPCS: XSS OK.		
	}

}


if ( ! function_exists( 'dinerize_meta_author' ) ) {
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function dinerize_meta_author( $avatar = false ) {
		?>
		<span class="entry__meta-item entry__meta-author">
			<a class="entry__meta-author-url" rel="author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
				<?php	if ( $avatar ) {
					echo get_avatar( get_the_author_meta( 'ID' ), 20, null, null, array( 'class' => array( 'entry__meta-author-img' ) ) );
				} ?>
				<span itemprop="author" itemscope itemtype="http://schema.org/Person" class="entry__meta-author-name">
					<?php echo esc_html( get_the_author() ); ?>
				</span>
			</a>
		</span>
		<?php
	}
}


if ( ! function_exists( 'dinerize_meta_comments' ) ) {
	/**
	* Post comments meta
	*
	* @since 1.0.0
	*/
	function dinerize_meta_comments() {

		$comments_num = get_comments_number();
		$output = '';

		if ( comments_open() ) {
			if( $comments_num == 0 ) {
				$comments = esc_html__( '0 Comments', 'dinerize' );
			} elseif ( $comments_num > 1 ) {
				$comments = $comments_num . esc_html__(' Comments', 'dinerize');
			} else {
				$comments = esc_html__('1 Comment', 'dinerize');
			}
			$comments = sprintf('<a href="%1$s">%2$s</a>', get_comments_link(), $comments );
		} else {
			$comments = esc_html__('Comments are closed', 'dinerize');
		}

		$output .= '<span class="entry__meta-item entry__meta-comments">' . $comments . '</span>';

		echo html_entity_decode( esc_html( $output ) );
	}
}


if ( ! function_exists( 'dinerize_related_posts' ) ) {
	/**
	 * Related Posts
	 */
	function dinerize_related_posts() {

		global $post;
		$tags = wp_get_post_tags( $post->ID );
		$author_id = get_the_author_meta( 'ID' );
		$related_by = get_theme_mod( 'dinerize_settings_related_posts_relation', 'category' );

		$args = array(
			'post_type'=>'post',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'post__not_in' => array( get_the_ID() ),
			'ignore_sticky_posts' => true,
		);

		if ( $tags && 'tag' === $related_by ) {
			$tag_ids = array();
			foreach ( $tags as $tag ) {
				$tag_ids[] = $tag->term_id;
			}

			$args['tag__in'] = $tag_ids;

		} elseif ( 'category' === $related_by ) {
			$args['category__in'] = wp_get_post_categories( get_the_ID() );
		} elseif ( 'author' === $related_by ) {        
			$args['author'] = $author_id;
		}

		$query = new WP_Query( $args ); ?>

		<?php if ( $query->have_posts() ) : ?>

			<section class="related-posts">
				<h2 class="h3 mb-24"><?php echo esc_html__( 'You might also like', 'dinerize'); ?></h2>
				<div class="row">

					<?php while( $query->have_posts() ) : $query->the_post(); ?>

						<div class="col-sm-4">
							<article <?php post_class( 'entry related-posts__entry' ); ?> itemtype="https://schema.org/Article" itemscope="itemscope">
								<?php if ( has_post_thumbnail() ) : ?>
									<figure class="entry__img-holder related-posts__entry-img-holder">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<?php the_post_thumbnail( 'dinerize_blog_featured_small', array('class' => 'entry__img related-posts__entry-img' ) ); ?>
										</a>
									</figure>
								<?php endif; ?>

								<?php the_title( sprintf( '<h3 class="related-posts__entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

							</article><!-- #post-## -->
						</div>

					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

				</div> <!-- .row -->
			</section> <!-- .related-posts -->
		<?php endif;
	}
}


if ( ! function_exists( 'dinerize_multi_page_pagination' ) ) {
	/**
	* Multi-page pagination
	*
	* @since 1.0.0
	*/
	function dinerize_multi_page_pagination() {
		$defaults = array(
			'before'           => '<nav class="post-pagination">' . '<span>' . esc_html( 'Pages:', 'dinerize' ) . '</span>',
			'after'            => '</nav>',
			'link_before'      => '<span class="post-pagination__number">',
			'link_after'       => '</span>',
			'next_or_number'   => 'number',
			'separator'        => ' ',
			'nextpagelink'     => esc_html( 'Next page', 'dinerize' ),
			'previouspagelink' => esc_html( 'Previous page', 'dinerize' ),
			'pagelink'         => '%',
			'echo'             => 1
		);

		wp_link_pages( $defaults );
	}
}


if ( ! function_exists( 'dinerize_post_pagination' ) ) {
	/**
	* Post pagination
	*
	* @since 1.0.0
	*/
	function dinerize_post_pagination() {
		// Don't print empty markup if there's only one page.
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		} ?>

		<!-- Pagination Numbers -->
		<nav class="pagination clearfix">
			<?php $args = array(
				'prev_next'          => true,
				'prev_text'          => wp_kses( '<i class="dinerize-arrow-left"></i>', array( 'i' => array( 'class' => array() ) ) ),
				'next_text'          => wp_kses( '<i class="dinerize-arrow-right"></i>', array( 'i' => array( 'class' => array() ) ) ),
			); ?>
			<?php echo paginate_links( $args ); ?>
		</nav>

		<?php
	}
}


if ( ! function_exists( 'dinerize_post_nav' ) ) :
	/**
	* Display navigation to next/previous post when applicable.
	*
	* @since 1.0.0
	*/
	function dinerize_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );
		$get_next_post = get_next_post();
		$get_previous_post = get_previous_post();

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
		
		<nav class="entry-navigation">
			<h5 class="screen-reader-text"><?php echo esc_html__( 'Post navigation', 'dinerize' ); ?></h5>
			<div class="entry-navigation__row clearfix">

				<?php if ( ! empty( $get_next_post ) ) : ?>
					<div class="entry-navigation__col entry-navigation--left">
						<div class="entry-navigation__item">
							<div class="entry-navigation__body">
								<?php
									printf( '<i class="dinerize-arrow-left"></i><span class="entry-navigation__label">%s</span>', esc_html__('Previous Post', 'dinerize') );
									next_post_link( '<h6 class="entry-navigation__title">%link</h6>', _x( '%title', 'Next post link', 'dinerize' ) );
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( $get_previous_post ) ) : ?>
					<div class="entry-navigation__col entry-navigation--right">
						<div class="entry-navigation__item">
							<div class="entry-navigation__body">
								<?php
									printf( '<span class="entry-navigation__label">%s</span><i class="dinerize-arrow-right"></i>', esc_html__('Next Post', 'dinerize') );
									previous_post_link( '<h6 class="entry-navigation__title">%link</h6>', _x( '%title', 'Previous post link', 'dinerize' ) );  
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div> <!-- .entry-navigation__row -->
		</nav>
		<?php
	}
endif;


if ( ! function_exists( 'dinerize_author_box' ) ) {
	/**
	* Author Box
	*/
	function dinerize_author_box() {

		$socials = [
			'facebook'  => get_the_author_meta( 'facebook' ),
			'twitter'   => get_the_author_meta( 'twitter' ),
			'linkedin'  => get_the_author_meta( 'linkedin' ),
			'instagram' => get_the_author_meta( 'instagram' ),
			'youtube'   => get_the_author_meta( 'youtube' ),
			'vimeo'     => get_the_author_meta( 'vimeo' ),
			'pinterest' => get_the_author_meta( 'pinterest' ),			
			'github' 		=> get_the_author_meta( 'github' ),		
			'snapchat'  => get_the_author_meta( 'snapchat' ),
			'bloglovin' => get_the_author_meta( 'bloglovin' ),
			'blogger'   => get_the_author_meta( 'blogger' ),
			'telegram'  => get_the_author_meta( 'telegram' )		
		];

		$website = rtrim( get_the_author_meta( 'url' ), '/' );

		if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="entry-author entry-author--box clearfix">
				<figure itemscope itemprop="image" class="entry-author__img-holder">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 64, null, null, array( 'class' => array( 'entry-author__img' ) ) ); ?>
					</a>                
				</figure>
				<div class="entry-author__info">
					<h6 class="entry-author__name" itemprop="url" rel="author">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" itemprop="name">
							<span itemprop="author" itemscope itemtype="https://schema.org/Person" class="entry-author__name">
								<?php the_author_meta( 'display_name' ); ?>
							</span>
						</a>
					</h6>
					<?php if ( ! empty( $website ) ) : ?>
						<a href="<?php echo esc_url( $website ); ?>" class="entry-author__website" rel="noopener nofollow" target="_blank">
							<span class="entry-author__website-text"><?php echo esc_url( $website ); ?></span>
						</a>
					<?php endif; ?>
					<div class="entry-author__description"><?php the_author_meta( 'description' ); ?></div>

					<?php if (
						get_the_author_meta( 'facebook' ) ||
						get_the_author_meta( 'twitter' ) ||
						get_the_author_meta( 'linkedin' ) ||
						get_the_author_meta( 'instagram' ) ||
						get_the_author_meta( 'youtube' ) ||
						get_the_author_meta( 'vimeo' ) ||
						get_the_author_meta( 'pinterest' ) ||
						get_the_author_meta( 'github' ) ||
						get_the_author_meta( 'snapchat' ) ||
						get_the_author_meta( 'bloglovin' ) ||
						get_the_author_meta( 'blogger' ) ||
						get_the_author_meta( 'telegram' )
					) : ?>
					
						<!-- Socials -->
						<div class="entry-author__socials socials socials--nobase">
							<?php foreach ( $socials as $key => $value ) {
								if ( $value ) : ?>
									<a href="<?php echo esc_url( $value ); ?>" class="social" title="<?php echo esc_attr( $key ); ?>" rel="noopener nofollow" target="_blank">
										<i class="dinerize-<?php echo esc_attr( $key ); ?>"></i>
									</a>
								<?php endif;
							} ?>
						</div>
					<?php endif; ?>

				</div>
			</div>
		<?php endif;
	}
}


if ( ! function_exists( 'dinerize_term_description' ) ) {
	/**
	* Adds class to term description
	* @since 1.0.0
	*/
	function dinerize_term_description( $before = '', $after = '</div>' ) {
		$description = apply_filters( 'get_the_archive_description', wp_strip_all_tags( term_description() ) );
		if ( ! empty( $description ) ) {
			echo html_entity_decode( esc_html( $before . $description . $after ) );
		}
	}
}