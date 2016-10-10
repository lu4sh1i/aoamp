<?php get_header(); ?>

<div class="events-bg"> <div class="dark-bg"></div> </div>


    <div class="container">
        <?php
        if (have_posts()) {
            $postcount = 0;
            while ( have_posts() ) : the_post();

        ?>
        <div class="eveniment col-xs-4">
             <article <?php post_class(); ?>>
                <?php get_template_part( 'inc/event-header', melica_get_pf_template() ); ?>
                <div class="meta">
                    <h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php echo ShortenText(get_the_title()); ?></a></h1>
                    <div class="subline">
                            <time datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( 'F j, Y' ) ?></time>
                            <span><?php printf(__( 'De <a href="%s">%s</a>', MELICA_LG ), esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), get_the_author() ) ?></span>
                    </div>
                </div>
                <div class="text-left read-more">
                    <a class="btn btn-primary small" href="<?php the_permalink() ?>"><?php _e( 'Vezi Mai Mult', MELICA_LG ) ?></a>
                </div>
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
