<?php 
/*
 * Template Name: Aparitii Media
 */

get_header();


if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
query_posts( 'post_type=post&cat=39&post_status=publish&paged=' . $paged );

?>
<div class="container" style="margin-top:120px;">
		

	<div class="row">
		<main class="col-md-8">
			<?php if ( have_posts() ) :

				// start the loop.
				while ( have_posts() ) : the_post();
					?> 
								
							
							<?php get_template_part( 'content-aparitii-media' ); ?>
							
						
					<?php
					// end the loop.
				endwhile;


				// previous/next page navigation.
				if(!melica_is_masonry()):
					melica_pagination();
				endif;


			// if no content, include the "No posts found" template.
			else :
				get_template_part( 'not-found' );

			endif;
			?>
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