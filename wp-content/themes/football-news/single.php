
<?php

get_header();


while(have_posts(  )){
    the_post(  );



?>


<article class="single">

    <div class="single__content">

        <div class="single__header">
        <div class="single__featured-image" style="background-image: url(<?php the_post_thumbnail_url( ) ?>)"></div>
        <?php echo sharethis_inline_buttons(); ?>
        <h2 class="single__title"><?php the_title(  );  ?></h2>
        <div class="single__meta">
            <span> <h4>By</h4> <?php the_author_posts_link( ); ?></span>
            <span> <h4>Posted on</h4> <?php the_time( 'd F Y' ); ?></span>
        </div>
        <div class="single__main">
            <?php the_content(  ); ?>
        </div>
        <div class="single__category">
            <h3>Related Topics</h3>
            <?php the_category() ?>
        </div>

    </div>
    

    </div>
    <div class="single__side">

    <?php 
    
        setPostViews(get_the_ID());
        $query = new WP_Query( array(
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 4
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

</article>




<?php 

};

get_footer();
?>