<?php


function football_custom_type(){


    register_post_type( 'teams', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Team',
            'add_new_item' => 'Add New Item',
            'edit_item' => 'Edit Team',
            'all_items' => 'All Teams',
            'singlur_name' => 'Team'
        ),
        'menu_icon' => 'dashicons-groups'
    ) );

    register_post_type( 'socialmedia', array(
        'supports' => array('title'),
        'public' => true,
        'labels' => array(
            'name' => 'Social Media',
            'add_new_item' => 'Add New Social Link',
            'edit_item' => 'Edit Social Link',
            'all_items' => 'All Social Links',
            'singlur_name' => 'Social'
        ),
        'menu_icon' => 'dashicons-networking'
    ) );

}

add_action( 'init', 'football_custom_type' );