<?php

function ThemeSetup()
{
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1650; /* PIXEL */
    }

    /* ajoute le support de flux rss dans le header */
    add_theme_support('automatic-feed-links');

    add_theme_support('post-thumbnails');


    $args = [
        "default-image" => get_template_directory_uri() . "/img/default.png",

        "default-text-color" => '000',

        'width' => '',
        'height' => '',
        "flex-width" => true,
        "flex-height" => true,
    ];


    add_theme_support('custom-header', $args);
}


add_action('after_setup_theme', 'ThemeSetup');


?>