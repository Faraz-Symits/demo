<?php get_header(); ?>
<div class="container">
	<div class="row">
<?php
/* Start the Loop */
while (have_posts()) :
    the_post();

    get_template_part('template-parts/content/content-single');

    if (is_attachment()) {
        // Parent post navigation.
        the_post_navigation(
            [
                /* translators: %s: Parent post link. */
                'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'onepage'), '%title'),
            ]
        );
    }

    // If comments are open or there is at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }

    // Previous/next post navigation.
    $onepage_next = is_rtl() ? One_Page_get_icon_svg('ui', 'arrow_left') : One_Page_get_icon_svg('ui', 'arrow_right');
    $onepage_prev = is_rtl() ? One_Page_get_icon_svg('ui', 'arrow_right') : One_Page_get_icon_svg('ui', 'arrow_left');

    $onepage_next_label = esc_html__('Next post', 'onepage');
    $onepage_previous_label = esc_html__('Previous post', 'onepage');

    the_post_navigation(
        [
            'next_text' => '<p class="meta-nav">'.$onepage_next_label.$onepage_next.'</p><p class="post-title">%title</p>',
            'prev_text' => '<p class="meta-nav">'.$onepage_prev.$onepage_previous_label.'</p><p class="post-title">%title</p>',
        ]
    );
endwhile; // End of the loop.?>
</div>
</div>
<?php get_footer(); ?>
