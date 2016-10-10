<?php
get_header();
?>
    <style>
        .press-release {
            background-color: #222;
        }
        .empty-space-50 {
            margin-top: 50px;
        }
    </style>
<div class="empty-space-50"></div>
    <div class="container">
<?php
    if (have_posts()) {
        while ( have_posts() ) : the_post();
    ?>



<div class="col-xs-8">
         <article <?php post_class(); ?> >

            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail("thumbnail");
            }  ?>
            <h2> <?php echo ShortenText(get_the_title()); ?> </h2>


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
    } ?>
    </div>
<?php
    get_footer();
?>