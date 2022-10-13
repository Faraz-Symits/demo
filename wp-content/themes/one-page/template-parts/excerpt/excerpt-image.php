<?php
if (
	! one_page_can_show_post_thumbnail() &&
	has_block( 'core/image', get_the_content() )
) {

	one_page_print_first_instance_of_block( 'core/image', get_the_content() );
}

the_excerpt();
