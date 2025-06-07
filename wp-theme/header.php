<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    wp_head();

    ?>
</head>
<?php
 if(is_front_page()) {
    $ds = array('ds-theme', 'my-class');
 }else {
    $ds = array('no-ds-theme');
 }
?>
<body <?php body_class($ds )?>>

<<<<<<< HEAD
    <?php
      if(!is_page('landing-page')): ?>
      <section class="menu area"></section>
       <nav class="main menu">
      <button class="check-button">
        <div class="menu icon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        </button>
        <?php wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth' =>2));?>

      <nav>
        </div>
    </section>

    <?php endif; ?>
 
=======
   <?php

     if(!is_page('landing-page')): ?>
     <section class="menu-area">

    <div class="container">
        <nav class="main-menu">
            <button class="check-button">
                <div class="menu-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <?php  wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth'=> 2));?>
        </nav>
    </div>
     </section>

     <?php endif; ?>
>>>>>>> df52d5e7db7bb3b79d04ef8a8c4e24d45bd0b6ac
