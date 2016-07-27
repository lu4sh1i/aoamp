<?php 
/*
 * Template Name: Media Page
 */


$GLOBALS['melica_homepage_id'] = get_the_ID();
get_header();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
query_posts( 'post_type=post&post_status=publish&paged=' . $paged );

?>
<div class="container" style="margin-top:120px;">
		

	<div class="row">
		<main class="col-md-8">
			<?php get_template_part('loop'); ?>
		</main>
		<div class="col-md-4">
			<aside>
				<?php dynamic_sidebar('primary-sidebar') ?>
			</aside>
		</div>
	</div>

</div>
		<?php
get_footer();
