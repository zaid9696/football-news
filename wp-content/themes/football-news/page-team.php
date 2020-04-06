
<?php

get_header();


?>


<h2 class="archive-teams__title"> All The Teams  </h2>
<div class="archive-teams">


<?php 
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$Query = new WP_Query(array(
    'paged' => $paged,
    'post_type' => 'teams',
    'posts_per_page' => 4,
));

while($Query->have_posts(  )){
        $Query->the_post(  );
        $teamColor = get_field('team_color');
?>

<div class="archive-teams__container" style="border-color: <?php echo $teamColor; ?>">

    <div class="archive-teams__header" style="border-color: <?php echo $teamColor; ?> ">
    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( ) ?>" alt=""></a>
    </div>
    <div class="archive-teams__content">
       <a href="<?php the_permalink(); ?>"><h2 class="archive-teams__club-title"><?php the_title( ); ?></h2></a>
       <a href="<?php the_permalink(); ?>">
            <p class="archive-teams__para">
            <?php 
            if(has_excerpt(  )){
            echo wp_trim_words( get_the_excerpt(  ), 30 );        
            }else{
            echo wp_trim_words( get_the_content(), 30 );
            }
        ?>
            </p>
       </a>
    

    </div>

</div>




<?php }; ?>

</div>
<div class="paginate">
<?php 

echo paginate_links( array(

'total' => $Query->max_num_pages
) );
?>
</div>





<?php 

get_footer();

?>