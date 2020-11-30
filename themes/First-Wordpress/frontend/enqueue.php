<?php

function first_Wordpress_enqueue_style()
{

  // get_template_directory_uri()
  // goes to current Directory
  $uri = get_theme_file_uri();


  // to register css
  // syntax:

  // wp_register_style('name' $uri . 'path || link');

  wp_register_style('googleapis_css', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&family=Roboto&display=swap');
  wp_register_style('bootstrap_css', $uri . '/assets/css/bootstrap.min.css');
  wp_register_style('carousel_css', $uri . '/assets/css/owl.carousel.min.css');
  wp_register_style('carousel_min_css', $uri . '/assets/css/owl.carousel.min.css');
  wp_register_style('fancybox_css', $uri . '/assets/css/jquery.fancybox.min.css');
  wp_register_style('style_css', $uri . '/assets/css/style.css');
  wp_register_style('custom_css', $uri . 'style.css');


  // enqueued class
  // syntax:

  // wp_enqueue_style('name')


  wp_enqueue_style('googleapis_css');
  wp_enqueue_style('bootstrap_css');
  wp_enqueue_style('carousel_css');
  wp_enqueue_style('carousel_min_css');
  wp_enqueue_style('fancybox_css');
  wp_enqueue_style('style_css');
  wp_enqueue_style('custom_css');



  // to register Scripts
  // syntax:

  // wp_register_script('name' $uri . 'path || link');

  wp_register_script('jQuery_js', $uri . '/assets/js/jquery-3.4.1.min.js');
  wp_register_script('bootstrap_js', $uri . '/assets/js/bootstrap.min.js');
  wp_register_script('popper_js', $uri . '/assets/js/popper.js');
  wp_register_script('OWL_js', $uri . '/assets/js/owl.carousel.min.js');
  wp_register_script('isotope_js', $uri . '/assets/js/isotope-min.js');
  wp_register_script('fancybox_js', $uri . '/assets/js/jquery.fancybox.min.js');
  wp_register_script('unveil_js', $uri . '/assets/js/jquery.unveil.js');
  wp_register_script('min_js', $uri . '/assets/js/all.min.js');
  wp_register_script('custom_js', $uri . '/assets/js/custom.js');

  // enqueued js
  // syntax

  // wp_enqueue_script('name')

  wp_enqueue_script('jQuery_js');

  wp_enqueue_script('bootstrap_js');
  wp_enqueue_script('popper_js');
  wp_enqueue_script('OWL_js');
  wp_enqueue_script('isotope_js');
  wp_enqueue_script('fancybox_js');
  wp_enqueue_script('unveil_js');
  wp_enqueue_script('min_js');
  wp_enqueue_script('custom_js');
}
