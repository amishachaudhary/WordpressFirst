<?php
    include(get_theme_file_path('frontend/enqueue.php'));
    include(get_theme_file_path('frontend/setup.php'));

    add_action('wp_enqueue_scripts', 'first_Wordpress_enqueue_style');
