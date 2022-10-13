<?php
if ( has_block( 'core/paragraph', get_the_content() ) ) {

	one_page_print_first_instance_of_block( 'core/paragraph', get_the_content(), 2 );
} else {

	the_excerpt();
}
