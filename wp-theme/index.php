<<<<<<< HEAD
<?php get_header(); ?>
<?php
if(have_posts()):
    while(have_posts()): the_post();?>
    <h1><?php the_title(); ?></h1>
    <small> Posted on: <?php the_time ('F j,Y'); ?> at <?php the_time('g:i a');?> in <?php the_category();?></small>

    <p><?php the_content();?></p>
    <?php endwhile; ?>
    <?php endif; ?>
; 
<?php get_footer(); ?>
=======

<?php  get_header(); ?>

<?php

   if(have_posts()):
   while(have_posts()): the_post(); ?>
   <h1><?php the_title(); ?></h1>
    <small>posted on: <?php the_time('F j,Y') ?> at <?php the_time('g:i a')?> in <?php the_category(); ?></small>
    <div><?php the_post_thumbnail(array(200,200));?></div>
   <p><?php the_content(); ?></p>
   <?php endwhile; ?>
   <?php endif; ?>
<?php  get_footer(); ?>
>>>>>>> 0828cdc4437de734a4f1bfb68b27cce5418f500d
