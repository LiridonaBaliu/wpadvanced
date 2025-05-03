<?php
function load_scripts(){
    wp_enqueue_style('wp_style',get_template_directory_uri()."/style.css",false,'1.1','all');
    wp_enqueue_style('wp_style',get_template_directory_uri()."/js/script.js",false,'1.1','true');
}
add_action('wp_enqueue_scripts','load_scripts');

function ds_setup() {
    add_theme_support('menus');
    register_nav_menu('primary','primary navigation');

}

add_action('init','ds_setup')
?>