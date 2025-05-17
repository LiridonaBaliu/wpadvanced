<?php
function load_scripts(){
    wp_enqueue_style('wp_style',get_template_directory_uri()."/style.css",false,'1.1','all');
     wp_enqueue_style('bootsrap_style',get_template_directory_uri()."/css/bootstrap.min.css",false,'1.1','all');

    wp_enqueue_script('wp_style',get_template_directory_uri()."/js/script.js",false,'1.1','true');
    wp_enqueue_script('bootstrap_js',get_template_directory_uri()."/js/bootstrap.bundle.min.js",false,'1.1','true');
}
add_action('wp_enqueue_scripts','load_scripts');


function config() {

   register_nav_menus(
  
      array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu',
      )
      );

    $args = array(
        'height' => 225,
        'width' => 1920,
    );
    add_theme_support('custom-header',$args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
    'height' =>110,
    'width' => 200,
    'flex-height' => true,
    'flex-width' => true,
  ));

    add_theme_support('automatic-feed-links');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption','style','script'));
   add_theme_support('title-tag');

}


add_action('after_setup_theme', 'config',0);

?>