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
<?php get_template_part( 'inc/p-content', get_post_format() ); ?>

</article>