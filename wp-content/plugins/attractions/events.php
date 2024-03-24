<?php /** 
 * Plugin Name: Events Plugin 
 * Plugin URI: http://webdevelopmenthelloleeds.test
 * Description: Plugin that ads attractions as custom post types. 
 * Version: 1.0 
 * Author: Aman Ali
 * Author URI: http://webdevelopmenthelloleeds.test
**/ 


// Creating custom posts
function event_post_type()
{
	$args = array(

		'labels' => array(
			'name' => 'Events',
			'singular_name' => 'Event',
		),
		'hierarchical' => false,
		'public' => true,
		'has-archive' => true,
		'menu-icon' => 'dashicons-admin-site-alt3',
		'supports' => array ('title', 'editor', 'thumbnail'),
	);

	register_post_type('event', $args);
}
add_action('init', 'event_post_type');