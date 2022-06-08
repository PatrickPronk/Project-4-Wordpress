<!DOCTYPE html>
<html lang="en">

<head>

    <?php wp_head(); ?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Wonder Reviews</title>



</head>

<body <?php body_class(); ?>>

    <header>
        <?php
        wp_nav_menu(

            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'top-bar',
            )
        );
        ?>
    </header>