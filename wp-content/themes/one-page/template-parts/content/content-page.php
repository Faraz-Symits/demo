<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (!is_front_page()) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part('template-parts/header/entry-header'); ?>
			<?php one_page_post_thumbnail(); ?>
		</header>
	<?php elseif (has_post_thumbnail()) : ?>
		<header class="entry-header alignwide">
			<?php one_page_post_thumbnail(); ?>
		</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php
        the_content();

        wp_link_pages(
            [
                'before' => '<nav class="page-links" aria-label="'.esc_attr__('Page', 'onepage').'">',
                'after' => '</nav>',
                /* translators: %: Page number. */
                'pagelink' => esc_html__('Page %', 'onepage'),
            ]
        );
        ?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer default-max-width">
			<?php
            edit_post_link(
                sprintf(
                    /* translators: %s: Post title. Only visible to screen readers. */
                    esc_html__('Edit %s', 'onepage'),
                    '<span class="screen-reader-text">'.get_the_title().'</span>'
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
