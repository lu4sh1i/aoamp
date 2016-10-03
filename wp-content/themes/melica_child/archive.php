<?php
get_header();

    if (have_posts()) {
        while ( have_posts() ) : the_post();
    ?>
    <div class="container">

         <article <?php post_class(); ?>>
            <h2> <?php the_title( ); ?> </h2>
         </article>

    </div>
 <?php
    endwhile;
    } else {
        $output = "";
        $output .= "<div class=\"container\">";
        $output .= "<div class=\"no-posts-available animated fadeInDown\">";
        $output .= "<h2 class=\"text-center \"> ". __("Nu am găsit nimic aici", MELICA_LG) . "</h2>";
        $output .= "</div>";
        $output .= "</div>";
        echo $output;
    }

get_footer();
 ?>