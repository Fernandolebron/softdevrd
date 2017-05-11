<?php 
	//register Nav walker class alias
	require_once('wp_bootstrap_navwalker.php');

	//Theme Support
	function wpb_theme_setup(){

		//Nav Menus 
		register_nav_menus(array(
			'primary' => _('Primary Menu')

			));

		add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail',  417, 160, true); 
	add_image_size('banner-image', 1200, 600, true);
	add_image_size('new-image', 400, 400, true);
	}

	add_action('after_setup_theme', 'wpb_theme_setup');


function ourWidgetsInit(){
	register_sidebar( array(
			'name' => 'sidebar',
			'id' => 'sidebar1',
		));
}

add_action('widgets_init','ourWidgetsInit');


?>