<!DOCTYPE html>
<html lang="en">

<head>

    <?php wp_head(); ?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Wonder Reviews</title>



</head>

<body <?php body_class(); ?>>

    <nav class="topnav">
        <a href="<?php echo get_permalink(21); ?>">Home</a>
        <a href="<?php echo get_permalink(23); ?>">About Us</a>
        <a href="<?php echo get_tag_link(4); ?>">Overview</a>

        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </nav>