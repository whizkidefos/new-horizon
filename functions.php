<?php

// Register Menus
function newhorizon_menus() {
    register_nav_menus( 
        array (
            'main-menu'  => 'Main Menu'
        )
     );
}
add_action( 'init', 'newhorizon_menus' );

// Load stylesheets and javascript files
function newhorizon_scripts() {
    // Bootstrap
    wp_enqueue_style( 'uikit-css', get_template_directory_uri(). '/css/uikit.min.css', array(), '3.15.10' );

    // Google Fonts
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap' );

    // Swiper CSS
    wp_enqueue_style( 'swiper-css', get_template_directory_uri(). '/css/swiper-8.4.4.min.css', array(), '8.4.4' );

    // Font Awesome CSS
    wp_enqueue_style( 'Font_Awesome', get_template_directory_uri(). '/css/fontawesome.min.css', array(), '6.2.0' );

    // Main CSS
    wp_enqueue_style( 'main-css', get_template_directory_uri(). '/css/newhorizon.css', array('uikit-css', 'googlefonts'), '1.0.0' );

    // JavaScripts
    if ( !is_admin() ) wp_deregister_script('jquery');

    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js', array(), '3.6.1', 'true' );

    wp_enqueue_script( 'swiper-js', get_template_directory_uri(). '/js/swiper-8.4.4.min.js', array(), '8.4.4', 'true' );

    wp_enqueue_script( 'uikit-js', get_template_directory_uri(). '/js/uikit.min.js', array(), '3.15.10', 'true' );

    wp_enqueue_script( 'fontawesome-js', get_template_directory_uri(). '/js/fontawesome.min.js', array(), '6.2.0', 'true' );

    wp_enqueue_script( 'main-js', get_template_directory_uri(). '/js/newhorizon.js', array('jquery'), '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'newhorizon_scripts' );



?>