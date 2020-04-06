
    $(".owl-carousel").owlCarousel({
        items:4,
        stagePadding:0,
        loop:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                loop:false
            }
        }
    });

    $('.nav__arrow-down').on('click', function(){

       
    

        const arrow = this;
        const subMenu =  $(this).next('.sub-menu')
     

        subMenu.fadeToggle(320);
        $(this).toggleClass('rotate-arrow');
    });


    
    $('.nav__cancel').on('click', function(){

        $('#navSearch').fadeOut(320);
        $('body').removeClass('noscroll');

    });

    $('.nav__search').on('click', function(){

        console.log($('#navSearch'));

        $('#navSearch').fadeIn(320).css({'display': 'flex'});
        $('body').addClass('noscroll');
        
        
    })
    
    $('.cancenl').on('click', function(){
        $('.nav__container').fadeOut(320);
    });

    $('.menu').on('click', function(){
        
        $('.nav__container').fadeIn(320).css({'display': 'flex'});

    })



