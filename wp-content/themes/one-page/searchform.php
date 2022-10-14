<?php
$twentytwentyone_unique_id = wp_unique_id('search-form-');

$twentytwentyone_aria_label = !empty($args['aria_label']) ? 'aria-label="'.esc_attr($args['aria_label']).'"' : '';
?>
<div class="container">
<form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above.?> method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
<div class="form-group">
	<input type="search" id="<?php echo esc_attr($twentytwentyone_unique_id); ?>" class="search-field form-control" value="<?php echo get_search_query(); ?>" name="s"  placeholder="Search" />
</div>
<br/>
<button type="submit" class="btn btn-primary"><?php echo esc_attr_x('Search', 'submit button', 'twentytwentyone'); ?></button>
</form>
</div>