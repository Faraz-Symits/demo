<?php get_header(); ?>
<div class="text-center">
<header class="page-header alignwide">
  <h1 class="page-title text-danger"><?php esc_html_e( 'No Conten Found!', 'onepage' ); ?></h1>
</header>
</div>
<div class="text-left">
<div class="error-404 not-found default-max-width">
  <div class="page-content alert">
    <p><?php esc_html_e( 'No Content Found! at this location. You may try to search it?', 'onepage' ); ?></p>
  </div>
  <div class="text-center">
    <p><?php get_search_form(); ?></p>
</div>
<?php get_footer(); ?>