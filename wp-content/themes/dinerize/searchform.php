<?php
/**
 * Search form
 *
 * @package Dinerize
 */
?>

<form role="search" method="get" class="search-form relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-input" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'dinerize' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-button" aria-label="<?php esc_attr_e( 'search button', 'dinerize' ) ?>"><i class="dinerize-search search-icon"></i></button>
</form>