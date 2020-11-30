<?php


function explore_setup_theme()
{

	// for dynamic title in tab bar
	add_theme_support('title-tag');

	// for dynamic image
	add_theme_support('custom-logo');

	// for adding field in dashboard 
	add_theme_support('post_thumbnails');
}
add_action('after_setup_theme', 'explore_setup_theme');
