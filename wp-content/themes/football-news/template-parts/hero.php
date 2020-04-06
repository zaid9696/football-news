

<div class="hero">

    <div class="hero__content">
        <div class="hero__header">
            <h1><?php the_title( ) ?></h1>
        </div>

        <div class="hero__excerpt">
            <p><?php the_excerpt(  ) ?></p>
        </div>
        <div class="hero__btn">
        <a href="<?php the_permalink() ?>" class="btn--z">Read More</a>
        </div>

    </div>
    <div class="hero__background" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        
    </div>

</div>