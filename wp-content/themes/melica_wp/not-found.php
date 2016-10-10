<div class="box"><?php if ( is_front_page() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', MELICA_LG ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>

	<p><?php _e( 'Ne pare rău, dar nu am găsit ce căutai, încearcă alte cuvinte cheie', MELICA_LG ); ?></p>
	<?php get_search_form(); ?>

<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', MELICA_LG ); ?></p>
	<?php get_search_form(); ?>

<?php endif; ?></div>