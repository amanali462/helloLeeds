<?php
/**
 * Plugin Name: Outer Attractions Plugin
 * Plugin URI: http://webdevelopmenthelloleeds.test
 * Description: Plugin that adds attractions as custom post types.
 * Version: 1.0
 * Author: Aman Ali
 * Author URI: http://webdevelopmenthelloleeds.test
**/

// Our custom post type function
function outer_attractions_create_posttype() {
    register_post_type('outer-attractions',
        array(
            'labels' => array(
                'name' => __('Outer Attractions'),
                'singular_name' => __('Outer Attractions')
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'rewrite' => array('slug' => 'outer-attractions'),
            'show_in_rest' => true,
        )
    );
}

// Hooking up our function to theme setup
add_action('init', 'outer_attractions_create_posttype');
