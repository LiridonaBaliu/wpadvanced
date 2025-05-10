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
    $ds = array ('ds-theme', 'my-class');
}else {
    $ds = array('no-ds-theme');
}
?>
<body <?php body_class($ds)?>>
    <?php
    wp_nav_menu(array(
        'theme_location'=>'primary'
    ));

?>
