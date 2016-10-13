<?php get_header(); ?>

<div class="events-bg"> <div class="dark-bg"></div> </div>


	<div class="container">
		<?php
		if (have_posts()) {
			$postcount = 0;
			while ( have_posts() ) : the_post();

		?>
		<div class="eveniment col-xs-4">
		<div class="event-date-container">
		    <?php

		        $dateformatstring = "M, Y";
		        $unixtimestamp = strtotime(get_field('event_date'));

		        if (get_field('event_date')) {
		                echo '<h4 class="event-date">';
		                echo date('d', $unixtimestamp). " ";
		                echo date_i18n($dateformatstring, $unixtimestamp);
		                echo '</h4>';


		            }
		            else {
		                echo "";
		            }


		    ?>
		</div>
			 <article <?php post_class(); ?>>

			 </article>

		</div>
		<?php
			$postcount++;
			if ($postcount % 3 == 0) { ?>
				<div class="clearfix"></div>
		<?php } ?>

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


<?php
get_footer();
?>
