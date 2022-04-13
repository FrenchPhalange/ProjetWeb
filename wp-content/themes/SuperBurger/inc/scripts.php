<?php

function ScriptsTheme()
{

    wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css', [], 1.0);
    
    wp_enqueue_style('main-responsive_css', get_template_directory_uri() . '/css/main-responsive.css', [], 1.0);

    wp_enqueue_style('font-aweasome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', [], 1.0);

    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], 1.0);

    wp_enqueue_script('main_script', get_template_directory_uri() . '/js/main.js', [], 1.0,true);

}
add_action('wp_enqueue_scripts', 'ScriptsTheme');