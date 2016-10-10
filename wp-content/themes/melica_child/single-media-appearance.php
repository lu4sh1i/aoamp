<?php get_header(); ?>

<div style="margin-top:120px">
    <div class="container">
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