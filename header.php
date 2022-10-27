<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . "/images/new-horizon-logo.png" ?>" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="uk-container uk-container-large navigation-bar">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src='<?php echo get_template_directory_uri() . "/images/new-horizon-logo.png" ?>' alt="NewHorizon Logo">
                </a>
            </div><!-- Logo -->
            <div class="right-nav">
                <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container'      => 'nav',
                        'container_class'=> 'main-menu'
                    );
                    wp_nav_menu( $args );
                ?>
                <div class="button-container">
                    <a href="/apply-now" class="uk-button uk-button-default nav-cta">Apply Now</a>
                    <a href="/login" class="uk-button uk-button-secondary nav-cta">Login</a>
                </div>
            </div>
        </div><!-- navigation bar -->
        <div class="burger">
            <span class="burger-bar"></span>
        </div>
    </header>