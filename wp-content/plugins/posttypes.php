<?php
/**
 * Plugin Name: Wordpress custom post types and taxonomies
 * Description: A simple plugin that adds custom post types functionality
 * Version: 0.1
 * Author: Pavel Lupu
 * Licence: GPL2
 */

function my_custom_posttypes() {
    $event_labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Event',
        'menu_name'          => 'Events',
        'name_admin_bar'     => 'Event',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Event',
        'new_item'           => 'New Event',
        'edit_item'          => 'Edit Event',
        'view_item'          => 'View Event',
        'all_items'          => 'All Events',
        'search_items'       => 'Search Events',
        'parent_item_colon'  => 'Parent Events:',
        'not_found'          => 'No events found.',
        'not_found_in_trash' => 'No events found in Trash.',
    );

    $event_args = array(
        'labels'             => $event_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-calendar-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type('events', $event_args);

    $media_appearance = array(
        'name'               => 'Media Appearances',
        'singular_name'      => 'Media Appearance',
        'menu_name'          => 'Media Appearances',
        'name_admin_bar'     => 'Media Appearance',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Media Appearance',
        'new_item'           => 'New Media Appearance',
        'edit_item'          => 'Edit Media Appearance',
        'view_item'          => 'View Media Appearance',
        'all_items'          => 'All Media Appearances',
        'search_items'       => 'Search Media Appearances',
        'parent_item_colon'  => 'Parent Media Appearances:',
        'not_found'          => 'No Media Appearances found.',
        'not_found_in_trash' => 'No Media Appearances found in Trash.',
    );

    $media_appearance_args = array(
        'labels'             => $media_appearance,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-desktop',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'media-appearance' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type('media-appearance', $media_appearance_args);

    $press_release = array(
        'name'               => 'Press releases',
        'singular_name'      => 'Press release',
        'menu_name'          => 'Press releases',
        'name_admin_bar'     => 'Press release',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Press release',
        'new_item'           => 'New Press release',
        'edit_item'          => 'Edit Press release',
        'view_item'          => 'View Press release',
        'all_items'          => 'All Press releases',
        'search_items'       => 'Search Press releases',
        'parent_item_colon'  => 'Parent Press releases:',
        'not_found'          => 'No Press releases found.',
        'not_found_in_trash' => 'No Press releases found in Trash.',
    );

    $press_release_args = array(
        'labels'             => $press_release,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-media-text',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'press-release' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type('press-release', $press_release_args);

}

add_action('init', 'my_custom_posttypes');

// Flush rewrite rules to add "review" as a permalink slug
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'my_rewrite_flush' );


