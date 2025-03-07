<?php

class Dinerize_Walker_Nav_Menu extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = array() ) { //ul
		$indent = str_repeat("\t", $depth);
		$submenu = ( $depth > 0 ) ? ' nav__dropdown-child-submenu' : '';
		$output .= "\n$indent<ul class=\"nav__dropdown-menu$submenu depth_$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = ($args->walker->has_children) ? 'nav__dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;

		if( $depth && $args->walker->has_children ) {
			$classes[] = 'nav__dropdown-submenu';
		}

		$class_names = join( ' ', apply_filters( 'dinerize_nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'dinerize_nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ( $args->walker->has_children ) ? ' class="nav__item-dropdown" ' : '';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'dinerize_nav_item_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $args->walker->has_children ) ? '</a><button class="nav__dropdown-trigger" aria-expanded="false"><span class="screen-reader-text">' . esc_html__( 'Show sub menu', 'dinerize' ) . '</span><i class="dinerize-chevron-down"></i></button>' : '</a>'; 
		$item_output .= $args->after;

		$output .= apply_filters( 'dinerize_walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}

	// function end_el( ) {

	// }

	// function end_lvl( ) {

	// }
}
