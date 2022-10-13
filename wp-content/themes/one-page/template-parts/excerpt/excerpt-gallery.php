<?php
if ( has_block( 'core/gallery', get_the_content() ) ) {

	one_page_print_first_instance_of_block( 'core/gallery', get_the_content() );
}

the_excerpt();
