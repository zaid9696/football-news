
<?php

// Theme Support Options

add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_image_size('drop_size', 250,250);
add_image_size('side_size', 450,250);
 
 function football_nav_setup(){

    register_nav_menu( 'primary', 'Navigtion Header' );
    register_nav_menu( 'footer', 'Footer Navigation' );

 }

 add_action('after_setup_theme', 'football_nav_setup');


 function football_embededd_media($type = array()){

   $content = do_shortcode( apply_filters( 'the_content', get_the_content( )) );

   $embed = get_media_embedded_in_content( $content, $type );
   if(in_array('audio', $type)){

      $output = str_replace('?visual=true', '?visual=false' ,$embed[0]);
   }else{
      $output = $embed[0];
   }

   return $output;

 }

 function football_social($args = null){


         $social = new WP_Query(array(
            'post_type' => 'socialmedia'
      ));


      
      while($social->have_posts(  )){
            $social->the_post();
            $twitter = get_field('football_twitter');
            $instagram = get_field('footabll_instagram');
            $youtube = get_field('football_youtube');
            $facebook = get_field('football_facebook');

            $args['facebook'] = $facebook; 
            $args['twitter'] = $twitter; 
            $args['instagram'] = $instagram; 
            $args['youtube'] = $youtube; 
      }

      return $args;


 }

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
   $countKey = 'post_views_count';
   $count = get_post_meta($postID, $countKey, true);
   if($count==''){
       $count = 0;
       delete_post_meta($postID, $countKey);
       add_post_meta($postID, $countKey, '0');
   }else{
       $count++;
       update_post_meta($postID, $countKey, $count);
   }
}