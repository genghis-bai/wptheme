<?php 

	function wptheme_resources(){

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	//link stylesheet

	add_action('wp_enqueue_scripts', 'wptheme_resources');

// Get Top Ancestor

function get_top_ancestor_id() {

	global $post;

	if ($post -> post_parent) {
		
		$ancestors = array_reverse(get_post_ancestors($post -> ID));

		return $ancestors[0];
	}

	return $post -> ID;
}

// Does page have children?

function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	
	return count($pages);	
}

// Customize excerpt word count length

function custom_excerpt_length()
{
	return 25;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

// Theme setup

function wptheme_setup()

{
	//Navigation Menus

	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		));

	// Acd Featured Image Support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, true);

	// Add post format support

	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}

add_action('after_setup_theme', 'wptheme_setup');

// Add Widget Locations

function ourWidgetsInit()

{
	register_sidebar(array(

		'name' => 'Sidebar',
		'id' => 'sidebar1'

		));

	register_sidebar(array(

		'name' => 'Footer Area 1',
		'id' => 'footer1'

		));

	register_sidebar(array(

		'name' => 'Footer Area 2',
		'id' => 'footer2'

		));

	register_sidebar(array(

		'name' => 'Footer Area 3',
		'id' => 'footer3'

		));

	register_sidebar(array(

		'name' => 'Footer Area 4',
		'id' => 'footer4'

		));


}

add_action('widgets_init', 'ourWidgetsInit');