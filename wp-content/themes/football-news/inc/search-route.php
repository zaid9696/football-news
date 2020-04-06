<?php

add_action( 'rest_api_init', 'footballRegisterSearch' );

function footballRegisterSearch(){
    
    register_rest_route('footballnews/v1','search', array(

        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'footballSearchResults'

    ) );

}


function footballSearchResults($data){

    $mainquery = new WP_Query(array(
        'post_type' => array('post', 'teams'),
        's' => sanitize_text_field($data['term'])
    ));


    $mainResults = array();

    while($mainquery->have_posts()){

        $mainquery->the_post();

        if(get_post_type( ) == 'post' && get_post_format(  ) != 'video' ){

            array_push($mainResults, array(
                'title' => get_the_title(  ),
                'link' => get_the_permalink(  ),
                'image' => get_the_post_thumbnail_url(0,'drop_size'),
                'type' => get_post_type(  )
            ));
            
        }

        if(get_post_type( ) == 'teams'){

            array_push($mainResults, array(
                'title' => get_the_title(  ),
                'link' => get_the_permalink(  ),
                'image' => get_the_post_thumbnail_url(0,'drop_size' ),
                'type' => get_post_type(  )
            ));

        }

    }


    return $mainResults;


}