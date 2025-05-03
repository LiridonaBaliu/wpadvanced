
<?php  get_header(); ?>
<<<<<<< HEAD
<?php
if(have_posts()):
    while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
         <small>  Posted on: <?php the_time('F j,Y'); ?> at <?php the_time('g:i a');?> in <?php the_category();?></small>
        <p><?php the_content(); ?></p>
    <?php endwhile; ?>
<?php endif; ?>


=======
   <?php
   if(have_posts()):
   while(have_posts()): the_post(); ?>
   <h1><?php the_title(); ?></h1>
    <small>posted on: <?php the_time('F j,Y') ?> at <?php the_time('g:i a')?> in <?php the_category(); ?></small>
   <p><?php the_content(); ?></p>
   <?php endwhile; ?>
   <?php endif; ?>
>>>>>>> f192583e8a501f0b921f4c3d56519f761239253c
<?php  get_footer(); ?>
