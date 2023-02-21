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
    // if ( !is_admin() ) wp_deregister_script('jquery');

    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js', array(), '3.6.1', 'true' );

    wp_enqueue_script( 'swiper-js', get_template_directory_uri(). '/js/swiper-8.4.4.min.js', array(), '8.4.4', 'true' );

    wp_enqueue_script( 'uikit-js', get_template_directory_uri(). '/js/uikit.min.js', array(), '3.15.10', 'true' );

    wp_enqueue_script( 'fontawesome-js', get_template_directory_uri(). '/js/fontawesome.min.js', array(), '6.2.0', 'true' );

    wp_enqueue_script( 'main-js', get_template_directory_uri(). '/js/newhorizon.js', array('jquery'), '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'newhorizon_scripts' );


// Theme support
include get_theme_file_path( '/inc/theme-support.php' );
include get_theme_file_path( '/inc/custom-login.php' );

add_action('um_custom_field_validation_user_email_details','um_custom_validate_user_email_details', 999, 3);

function um_custom_validate_user_email_details( $key, $array, $args ) {

    if ( $key == 'user_email' && isset( $args['user_email'] )) {

        if ( $args['user_email'] == '' ) {
            UM()->form()->add_error( 'user_email', __( 'E-mail Address is required', 'ultimate-member' ) );
        } elseif ( !is_email( $args['user_email'] ) ) {
            UM()->form()->add_error( 'user_email', __( 'The email you entered is invalid', 'ultimate-member' ) );
        } elseif ( email_exists( $args['user_email'] ) ) {
            UM()->form()->add_error( 'user_email', __( 'The email you entered is already registered', 'ultimate-member' ) );
        }
    }
}

/**
 * Restrict registration for under 18 years old.
 *
 * @param array $args Form Arguments.
 */
function um_custom_validate_birth_date( $args ) {
	if ( ! empty( $args['birth_date'] ) ) {
		// Birth date as a Unix timestamp.
		$then = strtotime( $args['birth_date'] );

		// A person 18'th birthday as a Unix timestamp.
		$adulthood = strtotime( '+18 years', $then );

		// Current time.
		$now = time();

		if ( $now < $adulthood ) {
			UM()->form()->add_error( 'birth_date', __( 'You should be over 17 years old.', 'ultimate-member' ) );
		}
	}
}
add_action( 'um_submit_form_errors_hook_', 'um_custom_validate_birth_date', 30, 1 );

?>