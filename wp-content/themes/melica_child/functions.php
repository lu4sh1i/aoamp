<?php
/**
* Allow svg upload
*/

add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes ( $existing_mimes=array() ) {

	// add the file extension to the array

	$existing_mimes['svg'] = 'mime/type';

        // call the modified list of extensions

	return $existing_mimes;

}



// Adds a widget area to house a Polylang dropdown. See also accompanying css.
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Extra Widget After Navbar',
        'id' => 'extra-widget',
        'description' => 'Extra widget after the navbar',
        'before_widget' => '<div class="widget %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}


// Place the widget area after the navbar
add_filter ('__after_navbar', 'add_my_widget');

function add_my_widget() {
    if (function_exists('dynamic_sidebar')) {
        dynamic_sidebar('Extra Widget After Navbar');
    }
}



function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post','page','events','media-appearance','press-release'));
    }

    return $query;
}

add_filter('pre_get_posts','searchfilter');

function ShortenText($text) { // Function name ShortenText
  $chars_limit = 30; // Character length
  $chars_text = strlen($text);
  $text = $text." ";
  $text = substr($text,0,$chars_limit);
  $text = substr($text,0,strrpos($text,' '));

  if ($chars_text > $chars_limit)
     { $text = $text."..."; } // Ellipsis
     return $text;
}


function fb_opengraph() {
    global $post;

    if(is_single()) {
        $type = "article";
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
        } else {
            $img_src = get_stylesheet_directory_uri() . '/img/aoamp.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>

    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="<?php if (is_single( )) {
            echo "article";
          } else echo "business.business" ?>"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src; ?>"/>

<?php
    } else {
        return;
    }
}

add_action('wp_head', 'fb_opengraph', 5);
