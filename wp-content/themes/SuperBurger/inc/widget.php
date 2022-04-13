<?php


function RegisterWidget()
{
    register_sidebar(
        [
            'name' => 'Header_Widget',
            'description' => __('ceci est ma zone du header'),
            'id' => 'header',
            'before_Widget' => "<div class='border border-info mb-3 rounded p-2'>",
            'after_Widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );

    register_sidebar(
        [
            'name' => 'Footer_Widget',
            'description' => __('ceci est ma zone du footer'),
            'id' => 'footer',
            'before_Widget' => "<div class='border border-info mb-3 rounded p-2'>",
            'after_Widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );
}
add_action('widgets_init', 'RegisterWidget');
