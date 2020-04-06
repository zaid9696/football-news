<?php

function footnball_scripts(){

    wp_enqueue_style( 'google_font','//fonts.googleapis.com/css?family=Muli:300,400,500,600,700&display=swap');
    // wp_enqueue_style( 'football_carousel', get_theme_file_uri('/css/owl.carousel.min.css'));
    wp_enqueue_style( 'football_main_style', get_theme_file_uri('/css/style.css'));

    
    // wp_enqueue_script( 'football_jquery_js', get_theme_file_uri( '/js/jquery-3.4.1.min.js' ), array('jquery'),'1.0' , true );
    // wp_enqueue_script( 'football_owl_js', get_theme_file_uri( '/js/owl.carousel.js' ), array('jquery'),'1.0' , true );
    wp_enqueue_script( 'football_main_js', get_theme_file_uri( '/dist/main.js' ), array('jquery'),'1.0' , true );
    wp_localize_script( 'football_main_js', 'footballData', array(
        'root_url' => get_site_url( )
    ) );

    
    
}

add_action('wp_enqueue_scripts', 'footnball_scripts');