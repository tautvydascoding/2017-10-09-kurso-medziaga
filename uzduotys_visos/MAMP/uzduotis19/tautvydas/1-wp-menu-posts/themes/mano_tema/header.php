<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
         <!-- cia Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ;?> /libs/bootstrap/css/bootstrap.min.css">

        <?php
            wp_head();
        ?>
    </head>
    <body>

        <header>
            <?php
            wp_nav_menu(array('theme_location' => 'topmenu'));
            ?>
        </header>
