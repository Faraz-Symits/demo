<?php
if ( function_exists( 'register_block_style' ) ) {
	function one_page_register_block_styles() {
		register_block_style(
			'core/columns',
			array(
				'name'  => 'onepage-columns-overlap',
				'label' => esc_html__( 'Overlap', 'onepage' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'onepage-border',
				'label' => esc_html__( 'Borders', 'onepage' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'onepage-border',
				'label' => esc_html__( 'Borders', 'onepage' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'onepage-border',
				'label' => esc_html__( 'Borders', 'onepage' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'onepage-image-frame',
				'label' => esc_html__( 'Frame', 'onepage' ),
			)
		);
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'onepage-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'onepage' ),
			)
		);
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'onepage-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'onepage' ),
			)
		);
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'onepage-border',
				'label' => esc_html__( 'Borders', 'onepage' ),
			)
		);
		register_block_style(
			'core/separator',
			array(
				'name'  => 'onepage-separator-thick',
				'label' => esc_html__( 'Thick', 'onepage' ),
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'onepage-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'onepage' ),
			)
		);
	}
	add_action( 'init', 'one_page_register_block_styles' );
}
