<?php 
/** 
 * Plugin Name: Inner Attractions Plugin 
 * Plugin URI: http://webdevelopmenthelloleeds.test
 * Description: Plugin that adds attractions as custom post types. 
 * Version: 1.0 
 * Author: Aman Ali
 * Author URI: http://webdevelopmenthelloleeds.test
**/ 

// Our custom post type function 
function inner_attractions_create_posttype() {       
    register_post_type('inner-attractions',           
        array(             
            'labels' => array(                 
                'name' => __('Inner Attractions' ),                 
                'singular_name' => __('Inner Attractions' )             
            ),             
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail'),             
            'has_archive' => true,             
            'rewrite' => array('slug' => 'inner-attractions'),             
            'show_in_rest' => true,         
            )     
        ); 
    } 
// Hooking up our function to theme setup 
add_action( 'init', 'inner_attractions_create_posttype' ); 