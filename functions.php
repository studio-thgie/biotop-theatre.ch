<?php

    add_filter('jpeg_quality', function($arg){return 95;});
 
    if ( ! function_exists( 'biotop_setup' ) ) {
        function biotop_setup() {
        
            load_theme_textdomain( 'biotop', get_template_directory() . '/languages' );
            register_nav_menus( array(
                'main'   => __( 'Main Menu', 'biotop' )
            ) );
            add_theme_support( 'post-thumbnails' );

            /**
             * Add Custom Image Sizes
             */
            add_image_size( 'event-preview', 900, 600, true);
            add_image_size( 'header-slideshow', 1280, 500 );
            add_image_size( 'event-header', 1920, 9999 );
            add_image_size( 'team-member', 378, 567 );
            add_image_size( 'downloads', 600, 600 );
        }
    }
    add_action( 'after_setup_theme', 'biotop_setup' );

    function enqueue_files() {
        //wp_enqueue_style( 'style', get_stylesheet_uri() );
        //wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/normalize.css', array(), '1.0', 'all');
        wp_deregister_script('jquery');

        /* if( pll_current_language() == 'fr' ) {
        } else {
        } */
    }

    add_action( 'wp_enqueue_scripts', 'enqueue_files' ); 

?>