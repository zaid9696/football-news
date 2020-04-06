
<?php

get_header();

    while(have_posts(  )){
        the_post(  );
    

?>
<div class="page">

    <h2 class="page__title"><?php the_title(  ); ?></h2>

    <div class="page__content">

        <?php the_content(  ); ?>

    </div>



</div>



<?php 

    }

get_footer();

?>