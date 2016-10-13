<?php get_header(); ?>

<div class="events-bg"> <div class="dark-bg"></div> </div>

<div class="container content-wrap">
	<div class="white-bg">

		<?php
			if (have_posts()) {
				$postcount = 0;
				while ( have_posts() ) : the_post();

				$dateformatstring = "M, Y";
				$unixtimestamp = strtotime(get_field('event_date'));
		?>
		<div class="row event">
				 <article <?php post_class(); ?>>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<?php
						if (get_field('event_date')) {
							// if set, collect the date
							$datenr = date('d', $unixtimestamp);
							$datemonth = date('M', $unixtimestamp);
							$year = date('Y', $unixtimestamp);

							// output the date
							$output = "<h3 class=\"date-number\">" . $datenr . "</h3>";
							$output .= "<p class=\"month-year\">" . $datemonth . "<br>";
							$output .= $year . "</p>";
							echo $output;
			            }
			            else {
			                echo "";
			            }
		             ?>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="event-wrapper">
							<h2><a href="<?php the_permalink(); ?>" class="event-title"><?php the_title(); ?></a></h2>
							<a href="<?php the_permalink(); ?>" class="text-uppercase letterspacing-4 btn-slim"><?php _e("Vezi Eveniment"); ?></a>
						</div>
					</div>
				 </article>
		</div>
	 <?php
	endwhile;
	} else {
		$output = "";
		$output .= "<div class=\"container\">";
		$output .= "<div class=\"no-posts-available animated fadeInDown\">";
		$output .= "<h2 class=\"text-center \"> ". __("Nici un eveniment", MELICA_LG) . "</h2>";
		$output .= "</div>";
		$output .= "</div>";
		echo $output;
	}
  ?>

	</div>
</div>


<?php
	get_footer();
?>
