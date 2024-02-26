<?php

// function theme_scripts_and_styles()
// {

// //Enqueue a custom script
// wp_enqueue_script('bathon-tailwind-script', 'https://cdn.tailwindcss.com');
// wp_enqueue_script('bathon-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer'=> true]);

// //Enqueue a custom style

// //css reset
// wp_enqueue_style('bathon-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');

// //main css
// wp_enqueue_style('bathon-main-style', get_template_directory_uri() . '/dist/styles/main.css');

// }

function theme_scripts_and_styles()
{
    // Enqueue a custom script
    // wp_enqueue_script('idm-tailwind-script', 'https://cdn.tailwindcss.com');
    wp_enqueue_script('idm-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);

    // Enqueue a custom style
    wp_enqueue_style('idm-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/scripts/styles/main.css');
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');


// add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function register_theme_menus()
{
    register_nav_menus([
        
            'primary'=> 'Primary Menu',
            'footer' => 'Footer Menu',
            '404-menu'=> '404 Menu'
        ]);
}

add_action('init', 'register_theme_menus');