<?php
$content = get_the_content();

// If there is no quote or pullquote print the content.
if ( has_block( 'core/quote', $content ) ) {
	one_page_print_first_instance_of_block( 'core/quote', $content );
} elseif ( has_block( 'core/pullquote', $content ) ) {
	one_page_print_first_instance_of_block( 'core/pullquote', $content );
} else {
	the_excerpt();
}
