<?php

	
    add_filter('jpeg_quality', function($arg){return 95;});
 
    if ( ! function_exists( 'biotop_setup' ) ) {
        function biotop_setup() {
        
            load_theme_textdomain( 'biotop', get_template_directory() . '/languages' );
            register_nav_menus( array(
                'main_de'   => __( 'Main Menu DE', 'biotop' ),
                'footer_de'   => __( 'Footer DE', 'biotop' ),
                'main_fr'   => __( 'Main Menu FR', 'biotop' ),
                'footer_fr'   => __( 'Footer FR', 'biotop' ),
            ) );
            add_theme_support( 'post-thumbnails' );

            /**
             * Add Custom Image Sizes
             */
            add_image_size( 'event-preview', 900, 600, true);
            add_image_size( 'header-slideshow', 1280, 1280 );
            add_image_size( 'event-header', 1920, 9999 );
            add_image_size( 'team-member', 378, 567 );
            add_image_size( 'downloads', 600, 600 );
        }
    }
    add_action( 'after_setup_theme', 'biotop_setup' );

    function enqueue_files() {
        //wp_enqueue_style( 'style', get_stylesheet_uri() );
        //wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/normalize.css', array(), '1.0', 'all');
        //wp_deregister_script('jquery');

        /* if( pll_current_language() == 'fr' ) {
        } else {
        } */
    }

    add_action( 'wp_enqueue_scripts', 'enqueue_files' ); 



        /**
     * Flus JSON generation
     */
    add_action('rest_api_init', function () {
        register_rest_route( 'biotop/v1', 'events',array(
            'methods'  => 'GET',
            'callback' => 'get_events'
        ));
        register_rest_route( 'biotop/v2', 'events',array(
            'methods'  => 'GET',
            'callback' => 'get_events_v2'
        ));
    });
      

    function get_events($request) {

        global $sitepress;
        $sitepress->switch_lang('fr');

        $events_raw = new WP_Query( array(
            'post_type' => 'Events',
            'posts_per_page' => -1,
            'meta_query' 		=> array(
                array(
                    'key'			=> 'date_and_time',
                    'compare'		=> '>=',
                    'value'			=> date('Y-m-d H:i:s'),
                    'type'			=> 'DATETIME'
                ),
            ),
            'order'				=> 'ASC',
            'orderby'			=> 'meta_value',
            'meta_key'			=> 'date_and_time',
            'meta_type'			=> 'DATE'
        ) );
        $events = [];

        if (empty($events_raw)) {
            return new WP_Error( 'no_events', 'no events found', array('status' => 404) );
        }

        while ( $events_raw->have_posts() ) {
            $events_raw->the_post();

            $p = get_field('production');
            $v = get_field('venue');
            $date = strtotime(get_field('date_and_time'));

            if($v->ID != 912 && $v->ID != 224){
                continue;
            }

            $event_exists = false;
            $event_title = get_the_title( $p->ID );

            if(get_field('override_language')) {
                $lang = get_field('override_language');
            } else {
                $lang = get_field('language', $p->ID);
            }

            if( in_array( 'de', $lang ) !== false && in_array( 'fr', $lang ) !== false) {
                $event_lang = 'fr/de';
            } else {
                if( in_array( 'de', $lang ) !== false) {
                    $event_lang = 'de';
                }
                if( in_array( 'fr', $lang ) !== false) {
                    $event_lang = 'fr';
                }
            }

            $date_status = '';
            if(get_field('sold')){
                $date_status = 'SOLDOUT';
            }
            if(get_field('canceled')){
                $date_status = 'CANCELED';
            }
            if(get_field('postponed')){
                $date_status = 'RESCHEDULDED';
            }

            foreach($events as $key => $evt){
                if($evt['event_title'] == $event_title && $evt['event_lang'] == $event_lang){
                    
                    $events[$key]['event_dates'][] = [
                        'start_date' => date_i18n('Y-m-d H:i', $date),
                        'date_status' => $date_status
                    ];

                    $event_exists = true;

                    break;
                }
            }

            if(!$event_exists){

                $events[] = [
                    'event_id' => get_the_ID(),
                    'event_title' => get_the_title( $p->ID ),
                    'event_lang' => $event_lang,
                    'subtitle' => get_field('subtitle', $p->ID),
                    'event_description' => get_the_content(null, false, $p->ID),
                    'event_dates' => [
                        [
                            'start_date' => date_i18n('Y-m-d H:i', $date),
                            'date_status' => $date_status
                        ]
                    ],
                    'event_categories' => ['TH'],
                    'event_status' => 'PUBLIC',
                    'event_canceled' => get_field('canceled'),
                    'event_postponed' => get_field('postponed'),
                    'image_url' => get_the_post_thumbnail_url( $p->ID, 'event-header' ),
                    'detail_url' => get_permalink( $p->ID ),
                    'venue_name' => get_the_title( $v->ID ),
                    'venue_address' => get_field('street', $v->ID ),
                    'venue_zip' => get_field('zip', $v->ID ),
                    'venue_city' => get_field('city', $v->ID )
                ];

            }
        }
    
        $response = new WP_REST_Response(array(
            'api_key' => 'CS-CFfm9zLTcY',
            'events'  => $events
        ));
        $response->set_status(200);
    
        return $response;
    }

    function get_events_v2($request) {

        global $sitepress;
        $sitepress->switch_lang('fr');

        $events_raw = new WP_Query( array(
            'post_type' => 'Events',
            'posts_per_page' => -1,
            'meta_query' 		=> array(
                array(
                    'key'			=> 'date_and_time',
                    'compare'		=> '>=',
                    'value'			=> date('Y-m-d H:i:s'),
                    'type'			=> 'DATETIME'
                ),
            ),
            'order'				=> 'ASC',
            'orderby'			=> 'meta_value',
            'meta_key'			=> 'date_and_time',
            'meta_type'			=> 'DATE'
        ) );
        $events = [];

        if (empty($events_raw)) {
            return new WP_Error( 'no_events', 'no events found', array('status' => 404) );
        }

        while ( $events_raw->have_posts() ) {
            $events_raw->the_post();
            
            if(get_field('for_school')){
                continue;
            }

            $p = get_field('production');
            $v = get_field('venue');
            $date = strtotime(get_field('date_and_time'));

            if($v->ID != 912 && $v->ID != 224){
                continue;
            }

            $event_exists = false;
            $event_title = get_the_title( $p->ID );

            if(get_field('override_language')) {
                $lang = get_field('override_language');
            } else {
                $lang = get_field('language', $p->ID);
            }

            if( in_array( 'de', $lang ) !== false && in_array( 'fr', $lang ) !== false) {
                $event_lang = 'fr/de';
            } else {
                if( in_array( 'de', $lang ) !== false) {
                    $event_lang = 'de';
                }
                if( in_array( 'fr', $lang ) !== false) {
                    $event_lang = 'fr';
                }
            }

            $date_status = '';
            if(get_field('sold')){
                $date_status = 'SOLDOUT';
            }
            if(get_field('canceled')){
                $date_status = 'CANCELED';
            }
            if(get_field('postponed')){
                $date_status = 'RESCHEDULDED';
            }

            foreach($events as $key => $evt){
                if($evt['event_title'] == $event_title && $evt['event_lang'] == $event_lang){
                    
                    $events[$key]['event_dates'][] = [
                        'start_date' => date_i18n('Y-m-d H:i', $date),
                        'date_status' => $date_status
                    ];

                    $event_exists = true;

                    break;
                }
            }

            if(!$event_exists){

                $event = [
                    'event_school' => get_field('for_school'),
                    'event_id' => get_the_ID(),
                    'event_title' => get_the_title( $p->ID ),
                    'event_lang' => $event_lang,
                    'event_subtitle' => get_field('subtitle', $p->ID),
                    'event_description' => get_the_content(null, false, $p->ID),
                    'event_duration' => get_field('duration', $p->ID),
                    'event_age' => get_field('age', $p->ID),
                    'event_dates' => [
                        [
                            'start_date' => date_i18n('Y-m-d H:i', $date),
                            'date_status' => $date_status
                        ]
                    ],
                    'event_categories' => ['TH'],
                    'event_status' => 'PUBLIC',
                    'image_url' => get_the_post_thumbnail_url( $p->ID, 'event-header' ),
                    'detail_url' => get_permalink( $p->ID ),
                    'venue_id' => $v->ID,
                    'venue_name' => get_the_title( $v->ID ),
                    'venue_address' => get_field('street', $v->ID ),
                    'venue_zip' => get_field('zip', $v->ID ),
                    'venue_city' => get_field('city', $v->ID )
                ];

                $p_d = icl_object_id($p->ID, 'productions', false, 'de');

                $event['event_title_d'] = get_the_title( $p_d );
                $event['event_subtitle_d'] = get_field('subtitle', $p_d);
                $event['event_description_d'] = get_the_content(null, false, $p_d);
                $event['detail_url_d'] = get_permalink( $p_d );
                $event['image_url_d'] = get_the_post_thumbnail_url( $p_d, 'event-header' );

                $reservation = false;
            
                if(!is_null(get_field('reservation_activated'))){
                    $reservation = get_field('reservation_activated');
                }

                if($reservation) {
                    if(get_field('reservation_extern') != ''){
                        $link_d = get_field('reservation_extern');
                        $link_f = $link_d;
                    } else {
                        $link_d = 'https://biotop-theatre.ch/de/reservation?id=' . get_the_ID();
                        $link_f = 'https://biotop-theatre.ch/fr/reservation?id=' . get_the_ID();
                    }
                }

                $event['booking_url_d'] = $link_d;
                $event['booking_url_f'] = $link_f;

                $events[] = $event;
            }
        }
    
        $response = new WP_REST_Response(array(
            'api_key' => 'CS-CFfm9zLTcY',
            'events'  => $events
        ));
        $response->set_status(200);
    
        return $response;
    }

?>