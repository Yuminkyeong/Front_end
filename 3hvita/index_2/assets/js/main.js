/*!
 * 3HVita JS Javascript V1.0
 * Copyright 2021 3HVita
 */

// 서브메뉴 OPEN CLOSE
function openNav() {
    document.getElementById("mySidenav").style.width = "30%";
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
    
    /* section3 slide*/
            let $slideWrap = $('.slide-wrap');
            let $slideView = $('.slide-view');
            let $nextBtn   = $('.right-btn');
            let $prevBtn   = $('.left-btn');
            let cnt        = 0;
            let $slideW    = 648;
            let n          = $('.slide').length-3;
            let $pageBtn   = $('.page-btn');

            console.log(n);
           
            //1.메인슬라이드
            function mainSlideFn(){
                $slideWrap.stop().animate({left: -$slideW*cnt},600,function(){
                    if(cnt>n){ 
                        cnt=0
                    }
                    if(cnt<0) {
                        cnt=n
                    }
                $slideWrap.stop().animate({left:-$slideW*cnt},0);
                });
                pageBtnColorEventFn();
            }

            //2.다음카운터슬라이드
            function nextSlideCountFn(){
                cnt ++ ;
                mainSlideFn();
            }

            //2.1 이전 카운터 슬라이드
            function prevSlideCountFn(){
                cnt --;
                mainSlideFn();
            }

            //3.1 다음버튼이벤트
            $nextBtn.on({
                click:function(){
                    if(!$slideWrap.is(':animated')){
                        nextSlideCountFn();
                    }
                }
            });

            //3.2 이전 버튼 이벤트
            $prevBtn.on({
                click:function(){
                    if(!$slideWrap.is(':animated')){
                        prevSlideCountFn();
                    }
                }
            });

            //페이지 버튼 이벤트 

            function pageBtnColorEventFn(){
                $pageBtn.removeClass('addPage');
                $pageBtn.eq( cnt > n ? 0 : cnt ).addClass('addPage');
            }
            pageBtnColorEventFn();

            $pageBtn.each(function(idx){
                $(this).on({
                    click:function(){
                        cnt = idx;
                        mainSlideFn();
                    }
                });
            });

             // 스와이프 작업
            /* $slideView.swipe({
                
                swipeLeft:function(e){
                    e.preventDefault();
                    if(!$slideWrap.is(':animated')){
                        nextSlideCountFn();
                    }
                },
                swipeRight:function(e){
                    e.preventDefault();
                    if(!$slideWrap.is(':animated')){
                        prevSlideCountFn();
                    }
                }

            }); */
        
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