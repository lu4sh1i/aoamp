<?php
/*
 * Template Name: Home page
 */

$GLOBALS['melica_homepage_id'] = get_the_ID();
get_header();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
query_posts( 'post_type=post&post_status=publish&paged=' . $paged );

putRevSlider("homepage");
?>
<div style="margin-top:40px">
	<div class="container">
		<div class="col-md-8">
			<?php get_template_part ('loop-1'); ?>
		</div>

	<aside class="<?php echo esc_attr($layout_classes[1]); ?> col-md-4">
		<?php dynamic_sidebar('primary-sidebar') ?>
	</aside>
	</div>
</div>
<?php
get_footer();