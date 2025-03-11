<?php

function theme_support()
{
    // adds dynamic title tags
    add_theme_support('title-tag');

}
add_action('after_theme_setup', 'theme_support');


function register_styles()
{
    // registering/enqueuing stylesheets
    // edit array if using multiple stylesheets (possibly also Tailwind)
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('wren-blog', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'register_styles');


function register_scripts()
{
    // for registering/enqueueing JS scripts
    // gets loaded with wp_footer() in 
    // first param = 'handle'(name of blog); second param = the script; third = array; fourth = version
    wp_enqueue_script('wren-blog', get_template_directory_uri() . '/assets/js/filename.js', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'register_scripts');

