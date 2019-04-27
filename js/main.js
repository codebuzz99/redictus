$(document).ready(function(){
	$('#owl-carousel-4').owlCarousel({
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        slideSpeed : 600,
        paginationSpeed : 1000,
        rewindSpeed : 2000,
        nav : true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            $("#header").addClass("friz-header");
        }
        else {
            $("#header").removeClass("friz-header");
        }
    });

    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });

    var isMenuOpen = false;
    $(".menu-toggler").click(function(){
        $('.header-wrapper-items').slideToggle();
        $(this).toggleClass("menu-open");
        isMenuOpen = !isMenuOpen;
    });

    $(window).on('resize', function(){
        if($(window).width() > 767){
            $('.header-wrapper-items').show();
        }else{
            if(isMenuOpen){
                $('.header-wrapper-items').show();
            }else{
                $('.header-wrapper-items').hide();
            }
        }
    });

});

