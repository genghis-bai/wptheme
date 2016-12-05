<?php 

	function wptheme_resources(){

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	//link stylesheet

	add_action('wp_enqueue_scripts', 'wptheme_resources');

//Navigation Menus

register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
	));



