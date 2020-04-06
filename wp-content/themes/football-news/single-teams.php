
<?php

get_header();


while(have_posts(  )){
    the_post(  );



?>


<article class="single-teams">

        <?php 

            $teamBG = get_field('team_background');
            $teamcolor = get_field('team_color');

        ?>

        <div class="single-teams__header">
            <div class="single-teams__bg" style="background-image: url('<?php echo $teamBG; ?>'); background-color: <?php echo $teamcolor; ?>54;">
                    <div class="single-teams__img" style="border-color: <?php echo $teamcolor; ?>"><img src="<?php the_post_thumbnail_url(  ); ?>" alt=""></div>
                    <h3 class="single-teams__title" style="color: <?php echo $teamcolor; ?>"><?php the_title( ); ?></h3>
            </div>
        </div>
        <div class="single-teams__content">
            <h2 class="content__title" style="border-color: <?php echo $teamcolor; ?>">A Short Information About <span style="color: <?php echo $teamcolor; ?>"><?php the_title( ); ?></span></h2>
        <?php the_content(); ?>
        </div>

</article>



<?php 

};

get_footer();
?>