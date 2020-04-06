
<?php

        get_header();


 ?>


    <h2 class="news__title"> Latest News  </h2>
<div class="news">

    <div class="news__container">
    <?php 

        $paged = (get_query_var( 'paged' ) ? get_query_var( 'paged' ): 1 );

        $sticky = get_option( 'sticky_posts' );
        $blogQuery = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'post',
            'paged' => $paged,
            'orderby' => 'date',
            'ignore_sticky_posts' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array('post-format-video'),
                    'operator' => 'NOT IN'
                )
            ),
            
    ));
    
        while($blogQuery->have_posts(  )){
                $blogQuery->the_post(  );
    ?>
    <div class="news__section">
            <div class="news__header" style="background-image: url(<?php the_post_thumbnail_url(  ); ?>)">
            
            </div>
            <h3 class="news__info">
                <?php the_title(); ?>
        </h3>
            <div class="news__content">

                <?php 
                 
                

                 if(has_excerpt(  )){

                  echo wp_trim_words( get_the_excerpt(  ), 20 );
                     
                 }else{

                   echo wp_trim_words( get_the_content(), 20 );

                 }

                 ?>
            </div> 
            <div class="news__btn">
                 <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
    </div>

    <?php
             } 
         echo '</div>';    
    ?>

    <div class="single__side">

    <?php 
    
        setPostViews(get_the_ID());
        $query = new WP_Query( array(
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 2
        ) ); 


        echo '<h2 class="side__title"> The Most Popular Posts </h2>';   
        echo '<div class="side__container">';
        while($query->have_posts()){
            $query->the_post(); ?>

            <div class="side__item">
                <div class="side__img"><img src="<?php the_post_thumbnail_url('side_size'); ?>" alt="<?php the_title(); ?>"></div>
                <div class="side__header">
                    <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                </div>
            </div>

            
       <?php }

       echo '</div>';


    ?>

    
    </div>

</div>

<div class="paginate">
<?php 

    echo paginate_links( array(
        'total' => $blogQuery->max_num_pages
    ) );
 ?>
</div>






<?php 

    get_footer();
?>