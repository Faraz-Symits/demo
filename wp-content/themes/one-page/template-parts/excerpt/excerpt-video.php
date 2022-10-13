<?php
$content = get_the_content();

if ( has_block( 'core/video', $content ) ) {
	one_page_print_first_instance_of_block( 'core/video', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	one_page_print_first_instance_of_block( 'core/embed', $content );
} else {
	one_page_print_first_instance_of_block( 'core-embed/*', $content );
}
the_excerpt();
