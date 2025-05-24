<?php
function load_scripts(){
    wp_enqueue_style('wp_style',get_template_directory_uri()."/style.css",false,'1.1','all');
     wp_enqueue_style('bootsrap_style',get_template_directory_uri()."/css/bootstrap.min.css",false,'1.1','all');

    wp_enqueue_script('wp_script',get_template_directory_uri()."/js/script.js",false,'1.1',true);
    wp_enqueue_script('bootstrap_js',get_template_directory_uri()."/js/bootstrap.bundle.min.js",false,'1.1',true);
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

function wpdevs_sidebars() {
    register_sidebar(
    array(
        'name' => 'blog sidebar',
        'id' => 'sidebar-blog',
        'description' => 'this is the blog sidebar. you can add your widegets here.',
        'before_widget' => '<div class="wiget=wrapper">',
        'after_wiget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
 
    )
    );
    register_sidebar(
    array(
        'name' => 'Service 1',
        'id' => 'Service-1',
        'description' => 'first service area',
        'before_widget' => '<div class="wiget=wrapper">',
        'after_wiget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
 
    )
    );
    register_sidebar(
    array(
        'name' => 'Service 2',
        'id' => 'Service-2',
        'description' => 'second service area',
        'before_widget' => '<div class="wiget=wrapper">',
        'after_wiget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
 
    )
    );
    register_sidebar(
    array(
        'name' => 'Service 3',
        'id' => 'Service-3',
        'description' => 'third service area',
        'before_widget' => '<div class="wiget=wrapper">',
        'after_wiget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
 
    )
    );
}
add_action('widgets_init','wpdevs_sidebars');

?>