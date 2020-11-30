<?php

add_action('init', 'mount_slider_post_type', 0);
add_action('init', 'mount_testimonial_post_type', 0);
add_action('init', 'mount_description_post_type', 0);




function mount_slider_post_type()
{
  // Labels for the Post Type
  $labels = array(
    'name'                => _x('Sliders', 'Post Type General Name', 'mount'),
    'singular_name'       => _x('Slider', 'Post Type Singular Name', 'mount'),
    'menu_name'           => __('Sliders', 'mount'),
    'parent_item_colon'   => __('Parent Slider', 'mount'),
    'all_items'           => __('All Sliders', 'mount'),
    'view_item'           => __('View Slider', 'mount'),
    'add_new_item'        => __('Add New Slider', 'mount'),
    'add_new'             => __('Add New Slider', 'mount'),
    'edit_item'           => __('Edit Slider', 'mount'),
    'update_item'         => __('Update Slider', 'mount'),
    'search_items'        => __('Search Slider', 'mount'),
    'not_found'           => __('No sliders found', 'mount'),
    'not_found_in_trash'  => __('Not found in trash', 'mount'),
  );
  // Another Customizations
  $args = array(
    'label'   => __('Sliders', 'mount'),
    'description' => __('Sliders for Mount', 'mount'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail',),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-images-alt2',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
  );
  // register the post Type
  register_post_type('sliders', $args);
}


function mount_description_post_type()
{
  // Labels for the Post Type
  $labels = array(
    'name'                => _x('descriptions', 'Post Type General Name', 'mount'),
    'singular_name'       => _x('description', 'Post Type Singular Name', 'mount'),
    'menu_name'           => __('descriptions', 'mount'),
    'parent_item_colon'   => __('Parent description', 'mount'),
    'all_items'           => __('All descriptions', 'mount'),
    'view_item'           => __('View description', 'mount'),
    'add_new_item'        => __('Add New description', 'mount'),
    'add_new'             => __('Add New description', 'mount'),
    'edit_item'           => __('Edit description', 'mount'),
    'update_item'         => __('Update description', 'mount'),
    'search_items'        => __('Search description', 'mount'),
    'not_found'           => __('No descriptions found', 'mount'),
    'not_found_in_trash'  => __('Not found in trash', 'mount'),
  );
  // Another Customizations
  $args = array(
    'label'   => __('descriptions', 'mount'),
    'description' => __('descriptions for Mount', 'mount'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail',),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-aside',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
  );
  // register the post Type
  register_post_type('descriptions', $args);
}




function mount_testimonial_post_type()
{
  // Labels for the Post Type
  $labels = array(
    'name'                => _x('Testimonials', 'Post Type General Name', 'mount'),
    'singular_name'       => _x('Testimonial', 'Post Type Singular Name', 'mount'),
    'menu_name'           => __('Testimonials', 'mount'),
    'parent_item_colon'   => __('Parent Testimonial', 'mount'),
    'all_items'           => __('All Testimonials', 'mount'),
    'view_item'           => __('View Testimonial', 'mount'),
    'add_new_item'        => __('Add New Testimonial', 'mount'),
    'add_new'             => __('Add New Testimonial', 'mount'),
    'edit_item'           => __('Edit Testimonial', 'mount'),
    'update_item'         => __('Update Testimonial', 'mount'),
    'search_items'        => __('Search Testimonial', 'mount'),
    'not_found'           => __('No testimonials found', 'mount'),
    'not_found_in_trash'  => __('Not found in trash', 'mount'),
  );
  // Another Customizations
  $args = array(
    'label'   => __('Testimonials', 'mount'),
    'description' => __('Testimonials for Mount', 'mount'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail', 'editor'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-comments',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
  );
  // register the post Type
  register_post_type('testimonials', $args);
}
