<?php get_header(); ?>
<div class="events-bg">
	<div class="dark-bg">
	</div>
</div>

<?php 
	
	$args = array( 'post_type' => 'evenimente', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
	<div class="container">
		<div class="eveniment">
			 <article <?php post_class(); ?>>
			 	<?php get_template_part( 'inc/p-header', melica_get_pf_template() ); ?>
			 	<div class="meta">
			 		<h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h1>
					<div class="subline">
							<time datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( 'F j, Y' ) ?></time>
							<span><?php printf(
									__( 'By <a href="%s">%s</a>', MELICA_LG ),
									esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
									get_the_author()
								) ?></span>
					</div>
				</div>
				<?php get_template_part( 'inc/p-excerpt', get_post_format() ); ?>
				<div class="text-left read-more">
			<a class="btn btn-primary small" href="<?php the_permalink() ?>"><?php _e( 'Vezi Mai Mult', MELICA_LG ) ?></a>
		</div>
			 </article>
		</div>
	</div>
	 <?php 
	endwhile;

 ?>

<?php 
get_footer();
?>
