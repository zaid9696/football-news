
<?php

get_header();
?>


<?php 



    if(have_posts(  )){
        
        $sticky = get_option( 'sticky_posts' );
        $postQuery = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'post__in' => $sticky,
            'ignore_sticky_posts' => 1
        ));
        

        if(isset($sticky[0])){

            
            while($postQuery->have_posts()){
                
                $postQuery->the_post();
                get_template_part( '/template-parts/hero', '');
                
            }
        }

        
    }
    wp_reset_postdata(  );
    ?>

<?php 

    


$sticky = get_option( 'sticky_posts' );
$blogQuery = new WP_Query(array(
    'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'post__not_in' => array($sticky[0]),
        'tax_query' => array(
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => array('post-format-video'),
                'operator' => 'NOT IN'
            )
        ),
    ));
    
    // print_r($sticky[0]);
    if($blogQuery->have_posts()){
        
        echo '<div class="content">';
        echo '<h2 class="content__title"> Latest News </h2>';
        echo '<div class="content__cards">';

        while($blogQuery->have_posts()){
            $blogQuery->the_post();
              get_template_part( '/template-parts/content', '' );

        }

        echo '<a href="'. site_url('/news') .'" class="content__btn-view">View More</a>';

        echo '</div>';

        echo '</div>';
    }
    
    wp_reset_postdata(  );

?>

<?php 

    if(have_posts(  )){


        $video_post = new WP_Query(array(
            'post_type' => 'post',
        ));
        
        while($video_post->have_posts(  )){
            $video_post->the_post(  );
            
            // echo the_title(  );
            // echo get_post_format( );

            get_template_part( 'template-parts/'.get_post_format( ).'', '' );

        }

    }

    wp_reset_postdata( );

?>


<?php 

    if(have_posts(  )){


        $team_post = new WP_Query(array(
            'post_type' => 'teams',
            'posts_per_page' => -1,
        ));

        echo '<div class="teams">';
        echo '<h2 class="teams__title">Teams</h2>';
        echo '<div class="owl-carousel" >';

        
        while($team_post->have_posts(  )){
            $team_post->the_post(  ); 
            $team_color = get_field('team_color');
            ?>
            
           <div class="teams__container" style="color: <?php echo $team_color; ?>">
               <img class="teams__img" src="<?php the_post_thumbnail_url(  )  ?>" alt="Team <?php the_ID(  );   ?>">
               <p class="teams__name"><a style="color: <?php echo $team_color; ?>" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
            </div>
        

           

      <?php  }

        echo '</div>';

        echo '</div>';

    }

?>




<?php 

get_footer();
?>