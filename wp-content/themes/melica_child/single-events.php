<?php get_header();
    if ( has_post_thumbnail() ) {
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
    }
    else {
        $themeroot = get_stylesheet_directory_uri();
        $thumb = array($themeroot . "/img/heading-4.jpg");
    }

    $dateformatstring = "M, Y";
    $unixtimestamp = strtotime(get_field('event_date'));
?>
<?php
    while ( have_posts() ) : the_post();
?>
<div style="
            background-image: url('<?php echo $thumb['0'];?>');
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #fff; height:40vh;">

            <div class="dark-bg">
            </div>
 </div>

    <div class="container event-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <div class="col-md-2">
        <hr>
            <h4 class="letterspacing-4 text-uppercase text-muted"><?php _e("Eveniment") ?></h4>

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
         <div class="event-meta">
             <p class="text-uppercase text-muted margin0 posted"><?php _e("Postat la "); ?><br></p>
             <p><?php echo the_date('d M, Y') ?></p>
             <p class="text-uppercase text-muted margin0 posted"><?php _e("De către "); ?><br></p>
             <p><?php echo get_the_author( ); ?></p>
         </div>
         <hr>
        </div>
        <div class="col-md-9 col-md-offset-1">
                    <article <?php post_class( ); ?>>
                        <img src="<?php echo $large['0'];  ?>" alt="">
                        <h1 class="event-title larger"><?php the_title( ); ?></h1>
                        <?php the_content( ); ?>
                    </article>


                <?php
                endwhile; // End of the loop.
                ?>

                </main><!-- #main -->
            </div><!-- #primary -->
            <?php get_template_part('inc/related-articles') ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>