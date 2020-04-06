<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( ); ?>
</head>
<body>

<div class="nav">
<span class="menu"><img src="<?php echo get_theme_file_uri('/img/menu.svg') ?>" alt="" srcset=""></span>
        <div class="nav__logo">
            <a href="<?php echo site_url('/'); ?>"><span>Football News</span></a>
        </div>
        <div class="nav__container">
        <span class="cancenl"><img src="<?php echo get_theme_file_uri('/img/close-button.svg') ?>" alt="" srcset=""></span>
        <div class="nav__list_menu">
            <?php 

                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav__menu',
                        'after' => '<span class="nav__arrow-down"><img src="'.get_theme_file_uri('/img/arrow.svg').'"></span>'
                        
                    ) );
            ?>
            
        </div>
        <div class="nav__icons">
        <?php 
                   $args = football_social(); 
             ?>
            <a href="<?php  echo $args['facebook'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/facebook.svg') ?>" alt="Facebook"></a>
            <a href="<?php echo $args['twitter'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/twitter.svg') ?>" alt="Twitter"></a>
            <a href="<?php echo $args['instagram'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/instagram.svg') ?>" alt="Instagram"></a>
            <a href="<?php echo $args['youtube'] ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/youtube.svg') ?>" alt="Youtube"></a>
            <sapn class="nav__search">
                <img src="<?php echo get_theme_file_uri('/img/magnifying-glass.svg') ?>" alt="Search" srcset="">
            </sapn>
        </div>

        </div>
        <form id="navSearch">
            <span class="nav__cancel"><img src="<?php echo get_theme_file_uri('/img/close-button.svg') ?>" alt="" srcset=""></span>
                <input type="search" class="nav__search-input" placeholder="Search Here">
                <span class="loading"><img src="<?php echo  get_theme_file_uri('/img/Rolling.svg') ?>" alt=""></span>
                <!-- <div class="search__dropdown"  data-simplebar>

                    <a href="#" class="search__link">
                        <div class="search_pic">
                        <img class="post" src="" alt="">
                        </div>
                        <div class="search__header"><h3 class="header-teams">Chelsea 0-2 Man Utd &#8211; Ole Gunnar Solskjaer FULL Post Match Press Conference &#8211; Premier League</h3></div>
                    </a>
                        
                </div> -->
        </form>
</div>