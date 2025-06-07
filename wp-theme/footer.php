<<<<<<< HEAD

<footer class="site-footer">


  <div class="containter">
  <nav class="footer-menu">
        <?php wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu', 'depth' =>2));?>
        </nav>
        </div>

</footer>
<div>
<?php


wp_footer();
?>
=======
<footer class="site-footer">

   <div class="container">
    <nav class="footer-menu">
        <?php  wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu', 'depth'=> 1));?>
    </nav>
   </div>

</footer>
</div>

<?php wp_footer();?>
>>>>>>> df52d5e7db7bb3b79d04ef8a8c4e24d45bd0b6ac
</body>
</html>