<?php
function load_scripts(){
    wp_enqueue_style('style',get_template_directory_uri().'/style.css',false,'1.1','all');
    wp_enqueue_style('script',get_template_directory_uri().'/js/script.js',array(),'1.1',true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

function ds_setup() {
    add_theme_support('menu');
    register_nav_menu('primary','Primary Navigation');
}

add_action('init','ds_setup')

?>