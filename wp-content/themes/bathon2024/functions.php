<?php

function theme_scripts_and_styles()
{

//Enqueue a custom script
wp_enqueue_script('bathon-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer'=> true]);
wp_enqueue_script('bathon-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer'=> true]);

//Enqueue a custom style

//css reset
wp_enqueue_style('bathon-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');

//main css
wp_enqueue_style('bathon-main-style', get_template_directory_uri() . '/dist/styles/main.css');

}


add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');


