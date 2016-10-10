<?php get_header(); ?>

<div style="margin-top:120px">
    <div class="container">
    <div class="event-date-container-single">
            <?php

                $dateformatstring = "d M, Y";
                $unixtimestamp = strtotime(get_field('event_date'));

                if (get_field('event_date')) {
                        echo '<h4 class="event-date text-center">';
                        echo date_i18n($dateformatstring, $unixtimestamp);
                        echo '</h4>';
                    }
                    else {
                        echo "";
                    }


            ?>
            </div>
        <div class="col-md-8">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'inc/content-single', get_post_format() );

                endwhile; // End of the loop.
                ?>

                </main><!-- #main -->
            </div><!-- #primary -->
            <?php get_template_part('inc/related-articles') ?>
        </div>
        <div class="col-md-4">
            <aside>
                <?php dynamic_sidebar('primary-sidebar') ?>
            </aside>
        </div>
    </div>
</div>

<?php get_footer(); ?>