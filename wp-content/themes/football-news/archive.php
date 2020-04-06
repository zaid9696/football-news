
<?php

get_header();


?>


<h2 class="archive__title"> <?php the_archive_title( ); ?>  </h2>
<div class="archive">


<?php 

while(have_posts(  )){
        the_post(  );
     if(get_post_format( ) != 'video'){
         
      
?>

<div class="archive__container">

    <div class="archive__header">
    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( ) ?>" alt=""></a>
    </div>
    <div class="archive__content">
       <a href="<?php the_permalink(); ?>"><h2 class="archive__club-title"><?php the_title( ); ?></h2></a>
       <a href="<?php the_permalink(); ?>">
            <p class="archive__para">
            <?php 
            if(has_excerpt(  )){
            echo wp_trim_words( get_the_excerpt(  ), 30 );        
            }else{
            echo wp_trim_words( get_the_content(), 30 );
            }
        ?>
            </p>
       </a>
       <div class="archive__meta">
           <span><strong>Posted By</strong> <?php the_author_posts_link(  )?></span>
           <span><strong>Posted On</strong> <?php the_time( 'd F Y' )?></span>

       </div>
    

    </div>

</div>




<?php 
    };
    
    }
?>

</div>
<div class="paginate">
<?php 

echo paginate_links();
?>
</div>





<?php 

get_footer();

?>