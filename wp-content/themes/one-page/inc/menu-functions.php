<?php
function one_page_add_sub_menu_toggle( $output, $item, $depth, $args ) {
	if ( 0 === $depth && in_array( 'menu-item-has-children', $item->classes, true ) ) {
		$output .= '<button class="sub-menu-toggle" aria-expanded="false" onClick="onepageExpandSubMenu(this)">';
		$output .= '<span class="icon-plus">' . one_page_get_icon_svg( 'ui', 'plus', 18 ) . '</span>';
		$output .= '<span class="icon-minus">' . one_page_get_icon_svg( 'ui', 'minus', 18 ) . '</span>';
		$output .= '<span class="screen-reader-text">' . esc_html__( 'Open menu', 'onepage' ) . '</span>';
		$output .= '</button>';
	}
	return $output;
}
add_filter( 'walker_nav_menu_start_el', 'one_page_add_sub_menu_toggle', 10, 4 );
function one_page_get_social_link_svg( $uri, $size = 24 ) {
	return one_page_SVG_Icons::get_social_link_svg( $uri, $size );
}
function one_page_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
	// Change SVG icon inside social links menu if there is supported URL.
	if ( 'footer' === $args->theme_location ) {
		$svg = one_page_get_social_link_svg( $item->url, 24 );
		if ( ! empty( $svg ) ) {
			$item_output = str_replace( $args->link_before, $svg, $item_output );
		}
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'one_page_nav_menu_social_icons', 10, 4 );
function one_page_add_menu_description_args( $args, $item, $depth ) {
	if ( '</span>' !== $args->link_after ) {
		$args->link_after = '';
	}

	if ( 0 === $depth && isset( $item->description ) && $item->description ) {
		// The extra <span> element is here for styling purposes: Allows the description to not be underlined on hover.
		$args->link_after = '<p class="menu-item-description"><span>' . $item->description . '</span></p>';
	}

	return $args;
}
add_filter( 'nav_menu_item_args', 'one_page_add_menu_description_args', 10, 3 );