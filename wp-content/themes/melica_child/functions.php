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

