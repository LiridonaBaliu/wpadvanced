<?php
<<<<<<< HEAD
/*
Template Name: General Template
*/
=======
 /*
  Template Name: General Template
 */
>>>>>>> df52d5e7db7bb3b79d04ef8a8c4e24d45bd0b6ac
?>

<?php get_header();?>

<<<<<<< HEAD
<div id="content"class="site-content">
    <div id="primary" class="content-area">
        <main id="mai" class="site-main">
=======
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
>>>>>>> df52d5e7db7bb3b79d04ef8a8c4e24d45bd0b6ac
            <div class="container">
                <div class="general-template">
                    <?php
                      if(have_posts()):
<<<<<<< HEAD
                      while(have_posts()): the_post();
                       ?>
                        <article>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </article>
                        <?php
                        endwhile;

                    else:
                        ?>
                        <p>Noting yet to be displayed</p>
                        <?php endif; ?>
=======
                        while(have_posts()): the_post();
                    ?>
                    <article>
                      <h1><?php the_title(); ?></h1>
                      <?php the_content(); ?>
                    </article>
                    <?php 
                    endwhile;
                else:
                    ?>
                    <p>Nothing yet to be displayed!</p>
                    <?php endif; ?>
>>>>>>> df52d5e7db7bb3b79d04ef8a8c4e24d45bd0b6ac
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer();?>