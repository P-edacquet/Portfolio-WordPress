<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>" />
        <?php wp_head(); ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    </head>
    <body>
    <?php wp_nav_menu(array(
    'menu'           => 'menuTop',
    'theme_location' => 'main-menu',
    'menu_id'        => 'navigation',
    'depth'          => 3,
    'container'      => false,
    'menu_class'     => 'nav'
)); ?>
    <!-- <header>
        <p>test</p>
        <?php wp_nav_menu(' menu-top '); ?>
    </header>  -->