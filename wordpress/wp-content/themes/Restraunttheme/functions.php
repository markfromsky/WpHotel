<?php 
	function connect_resources(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts', 'connect_resources');

	register_nav_menus( array(
		"top_menu" => __("Top Menu"),
		"social_menu" => __("Socia links"),
	));
	function custom_excerpt_length(){
		return 10;
	}
	add_filter('excerpt_length','custom_excerpt_length');
	function custom_theme_setup(){
	add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme','custom_theme_setup');
	add_image_size('new-image',200,200,true);
	add_image_size('image-single',500,500,true);
 ?>