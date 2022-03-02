/*!
 * 3HVita JS Javascript V1.0
 * Copyright 2021 3HVita
 */

// 서브메뉴 OPEN CLOSE
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(function(){
    var shrinkHeader = 10;
        $(window).scroll(function() {
        var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('.header').addClass('active');
            }
            else {
                $('.header').removeClass('active');
            }
        });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    };
    $(".centerasasas").slick({
        dots: true,
        infinite: true,
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 1,
/*
        nextArrow: '<img src="assets/img/right-arrow.png" class="slick-next-img">',
        prevArrow: '<img src="assets/img/left-arrow.png" class="slick-prev-img">',
*/
        speed: 500,
        autoplay: true,
        autoplaySpeed: 3500,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            }
        ]
    });
});
