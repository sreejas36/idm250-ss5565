<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="logo">
                <img src="assets/logo.svg" alt="Logo">
                <h1>Sreeja Satish</h1>
            </div>
            <div class="menu"> 
                <ul>
                    <li><a href="index.php">Work</a></li>
                    <li>✧</li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li>✧</li>
                    <li><a href="about.php">About</a></li>
                </ul>
        </nav>
    </header>