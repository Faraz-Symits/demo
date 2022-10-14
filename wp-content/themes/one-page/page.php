<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col">
<?php
while (have_posts()) :
    the_post();
    get_template_part('template-parts/content/content-page');
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile; ?>
</div>
    </div>
</div>
<?php get_footer(); ?>