<?php
/*
* Template Name: Consiliu Director
*/

get_header();
the_post();

// sidebar & classes
$show_sidebar   = melica_has_sidebar();
$layout_classes = melica_get_layout();

// title
$content     = get_the_content();
$inner_title = false;
if ( has_shortcode( $content, 'header' ) ) {
	$inner_title = true;
}
$content = do_shortcode( $content );


// $GLOBALS['melica_pheader'] contains a HTML output from [header] shortcode
// that is can be used in pages
if ( ! isset( $GLOBALS['melica_pheader'] ) ) {
	$GLOBALS['melica_pheader'] = '';
}
?>

<section class="nopadding-sm">

	<!-- content -->
	

		<main class="<?php echo esc_attr($layout_classes[0]); ?> nopadding-sm">
			
			<article <?php post_class(); ?>>

					<!-- page header -->
					<?php if ( melica_has_sidebar() ) {
						echo  ($GLOBALS['melica_pheader']);
					} ?>
					<div class="container">
						<!-- page text -->
						<?php the_content(); ?>
						
					</div>


				<!-- pagination -->
				<?php wp_link_pages(); ?>

			</article>
		</main>

</section>

<?php 
get_footer();
?>
