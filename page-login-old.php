<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Horizon Healthcare | Login</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/images/new-horizon-logo.png' ?>" type="image/x-icon">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/uikit.min.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/newhorizon.css' ?>">
    
</head>
<body>
    <main class="login-wrapper">
        <div class="uk-container uk-container-medium">
            <figure class="auth-logo uk-text-center">
                <a href="<?php echo home_url(); ?>">
                    <img src='<?php echo get_template_directory_uri() . "/images/new-horizon-logo.png" ?>' alt="NewHorizon Logo">
                </a>
            </figure>
            <div class="new-horizon-auth-form">
                <?php echo do_shortcode( '[ultimatemember form_id="49"]' ); ?>
            </div>
        </div>
    </main>
</body>
</html>