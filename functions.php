<?php

// Incluir mi Master.css
wp_register_style(
	'master',
	get_template_directory_uri() . '/assets/css/master.css',
	array(),
	false,
	'all'
);

// Incluir mi Master.js
wp_register_script('master-js', get_template_directory_uri() . '/assets/js/master.js', array(), false, );

wp_enqueue_style('master');
wp_enqueue_script('master-js');
// add_action('wp_enqueue_scripts', 'master-js');

// Theme options
add_theme_support('menus');

// Menus
register_nav_menus(
	array(
		'main-menu' => 'Main Menu',
		'daniel-mobile-menu' => 'Mobile Daniel Menu'
	)
);

/* Add custom classes to list item "li" */

function _namespace_menu_item_class($classes, $item)
{
	$classes[] = "nav-item"; // you can add multiple classes here
	return $classes;
}

add_filter('nav_menu_css_class', '_namespace_menu_item_class', 10, 2);
