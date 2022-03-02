/*!
 * 3HVita JS Javascript V1.0
 * Copyright 2021 3HVita
 */

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
    }
});

// 서브메뉴 OPEN CLOSE
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// VIDEO LOOP currentTime
var vid = document.getElementById("vid");
vid.addEventListener("timeupdate", function () {
    if(this.currentTime >= 20.0) {
        this.currentTime = 20.0;
    }
});

/**
 * @since 2021.07.26 
 * @authoer hoasun
 * @function subscribeLayer - 구독 상태 확인 레이어 팝업 
 */

function subscribeLayer(){
    let subscribeLayer = document.querySelector(".subscribeLayer");
    subscribeLayer.style.display = 'flex';
    document.querySelector("html").style.overflow = 'hidden';
}

/**
 * @function firstSubscribe - 최초 구독자
 */
function firstSubscribe(){
    let subscribeBtn = document.querySelector("#subscribeBtn");
    let needDNA_Btn = document.createElement("a");

    subscribeBtn.innerHTML = '';

    needDNA_Btn.innerHTML = '유전자검사가필요해요!';

    let haveDNA_Btn = document.createElement("a");
    haveDNA_Btn.innerHTML = '유전자검사를받았어요^^';
    
    subscribeBtn.append(needDNA_Btn);
    subscribeBtn.append(haveDNA_Btn);
}

let closeSubscribePop = document.querySelector("#closeSubscribePop");
/**
 * @function closeSubscribePop.addEventListener - 구독 레이어 닫기
 */
closeSubscribePop.addEventListener('click',()=>{
  document.querySelector(".subscribeLayer").style.display = 'none';
  document.querySelector("html").style = ''
})

/**
 * @function reSubscribe - 재구독자
 */
function reSubscribe(){
    let subscribeBtn = document.querySelector("#subscribeBtn");
    console.log('재구독자')
}

$(document).on('ready', function() {
    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: '<img src="assets/img/right-arrow.png" class="slick-next-img">',
        prevArrow: '<img src="assets/img/left-arrow.png" class="slick-prev-img">',
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