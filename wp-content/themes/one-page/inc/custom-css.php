<?php
function one_page_generate_css( $selector, $style, $value, $prefix = '', $suffix = '', $display = true ) {
	if ( ! $value || ! $selector ) {
		return '';
	}

	$css = sprintf( '%s { %s: %s; }', $selector, $style, $prefix . $value . $suffix );

	if ( $display ) {
		echo wp_strip_all_tags( $css ); // phpcs:ignore WordPress.Security.EscapeOutput
	}
	return $css;
}
