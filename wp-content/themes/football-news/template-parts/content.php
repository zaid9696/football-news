
    
        <div class="content__card">
            <div class="content__background" style="background-image: url(<?php the_post_thumbnail_url( ); ?>)"></div>
            <div class="content__meta">
                <span class="content__author">By <?php the_author_posts_link( ); ?></span>
                <span class="content__time"><?php the_time( 'd F Y' ); ?></span>
            </div>
            <div class="content__container-title">
            <h3 class="content__card-title">
                <?php the_title( ); ?>
            </h3>
            </div>
            <div class="content__btn"><a href="<?php the_permalink() ?>" class="btn--z">Read More</a></div>
        </div>