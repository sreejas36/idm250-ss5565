<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@100;400;700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>
        <?php 
            wp_title('|', true, 'right'); //About
            bloginfo('name'); //IDM250
        ?>
    </title>
    <link rel="stylesheet" href="styles/main.css">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <nav>
            <div class="navigation">
                <a class="logo" href="index.php">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.svg" alt="logo">
                    <!-- <h1>Sreeja Satish</h1> -->
                </a>
                <div class="nav-menu">
                    <ul class="nav-items">
                        <li><a href="index.php">Work</a></li>
                        <li>✧</li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li>✧</li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>