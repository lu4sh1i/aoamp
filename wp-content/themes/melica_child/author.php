<?php
get_header();

// WP_Query arguments
$args = array (
    'post_type'              => array( 'post', 'events', ' media-appearance', ' press-release' ),
);

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));


// The Query
    $query = new WP_Query( $args );
?>
    <div class="container">
        <div class="intro-text">
            <h1>Toate postările <?php echo $curauth->nickname ?>: </h1>
        </div>
    <?php
    if ($query->have_posts()) {
        while ( $query->have_posts() ) : $query->the_post();
    ?>

         <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>" > <?php the_title( ); ?> </a></h2>
         </article>


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
?>
  </div>


<?php get_footer(); ?>