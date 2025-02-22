<?php 

function theme_styles_and_scripts() 
{
    wp_enqueue_style(
        'idm-normalize', //Handle for the stylesheet. Has to be unique.
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
        [],
        '8.0.1'
    );

    wp_enqueue_style(
        'idm-main-style',
        get_template_directory_uri() . '/styles/main.css',
        [], 
        filemtime(get_template_directory() . '/styles/main.css')
    );
    // wp_enqueue_script(
    //     'idm250-ss5565-script',
    //     get_template_directory_uri() . '/asset/scripts/main.js',
    //     [],
    //     filemtime(get_template_directory() . '/asset/scripts/main.js'),
    //     true //Load in the footer
    // );

    wp_enqueue_style(
        'google-fonts',
        "https://https://fonts.googleapis.com/css2?family=Gayathri:wght@100;400;700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap",
        [], 
        filemtime(get_template_directory() . '/styles/main.css')
    );
}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');

function theme_setup()
{
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus([
        'primary-menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'theme_setup');

?>
