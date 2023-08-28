<?php

    add_filter('jpeg_quality', function($arg){return 95;});
 
    if ( ! function_exists( 'biotop_setup' ) ) {
        function biotop_setup() {
        
            load_theme_textdomain( 'biotop', get_template_directory() . '/languages' );
            register_nav_menus( array(
                'main'   => __( 'Main Menu', 'biotop' )
            ) );
            add_theme_support( 'post-thumbnails' );

            // add_image_size( 'gallery', 1000, 500 );
        }
    }
    add_action( 'after_setup_theme', 'biotop_setup' );

    function enqueue_files() {
        //wp_enqueue_style( 'style', get_stylesheet_uri() );
        //wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/normalize.css', array(), '1.0', 'all');
        wp_deregister_script('jquery');

        if( pll_current_language() == 'fr' ) {
        } else {
        }
    }

    add_action( 'wp_enqueue_scripts', 'enqueue_files' ); 

?>