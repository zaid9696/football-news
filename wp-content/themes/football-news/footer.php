
<footer class="footer">
    <div class="footer__logo">
        <h2><a href="<?php echo site_url('/'); ?>">Football News</a></h2>
    </div>
    <div class="footer__menu-list">
            <?php

                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'footer__list'

                ) );

             ?>
    </div>
    <div class="footer__social">
            <?php 
                   $args = football_social(); 
             ?>
            <a href="<?php  echo $args['facebook'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri( '/img/facebook.png' ) ?>" alt=""></a>
            <a href="<?php echo $args['twitter'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri( '/img/twitter.png' ) ?>" alt=""></a>
            <a href="<?php echo $args['instagram'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri( '/img/instagram.png' ) ?>" target="_blank" alt=""></a>
            <a href="<?php echo $args['youtube'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri( '/img/youtube.png' ) ?>" alt=""></a>
    </div>
</footer>



    
    <?php wp_footer(  ); ?>
</body>
</html>