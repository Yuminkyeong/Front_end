<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

if(! defined('_INDEX_')) define('_INDEX_', TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<style>
	.btn {
	    border-radius: 34px;
	}
</style>

<div class="main-hero-video">
    <div class="jb-box">
        <video muted autoplay playsinline loop="loop" tabindex="-1"  preload="true">
            <source src="<?php echo G5_THEME_URL ?>/assets/video/210118_Video Call_4k_026_1_slim.mp4" loop="loop" type="video/mp4">
        </video>
        <div class="jb-text-wrap">
            <div class="jb-text">
                <h1>오직 당신만을 위해 만들어진<br> 하루 1팩 100% 맞춤 영양제<br> '<i class="icon-logo-c"></i>'</h1>
                <p>당신에게 필요한 영양성분이 궁금하다면<br>'건강체크'를 눌러주세요!</p>
                <div class="col-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <a href="<?php echo G5_URL; ?>/health_check.php" class="btn btn-light py-3 px-5 mt-3"><i class="icon-check-circle"></i> 건강체크 (Health Check)</a>
                </div>
            </div>
            <img src="<?php echo G5_THEME_URL ?>/assets/img/icon/scroll-down.png" class="ball"/>
        </div>
    </div>    
</div>

<div class="event-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="event-wrap color-bg-a">
                    <h1>3H Vita Promotion</h1>
                    <h3>무료 모발 서비스</h3>
                    <a href="#" class="btn btn-light py-2 px-3 mt-2">자세히 보기 <i class="icon-chevrons-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="event-wrap color-bg-b">
                    <h1>3H Vita Hot Event #1</h1>
                    <h3>무료 유전자 검사</h3>
                    <a href="#" class="btn btn-light py-2 px-3 mt-2">자세히 보기 <i class="icon-chevrons-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="event-wrap color-bg-c">
                    <h1>3H Vita Hot Event #2</h1>
                    <h3>건강검진 할인 이벤트</h3>
                    <a href="#" class="btn btn-light py-2 px-3 mt-2">자세히 보기 <i class="icon-chevrons-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bgcolor-f section-min">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="section-sub-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c c-orange"></i> Subscription Order</p>
                <h3 class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c c-orange"></i> 구독순서</h3>
                <ul class="nav nav-pills nav-fill d-flex align-items-center mb-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-a-tab" data-bs-toggle="pill" data-bs-target="#pills-a" type="button" role="tab" aria-controls="pills-a" aria-selected="true"><i class="icon-linegraph"></i><br>유전자 <br>검사</button>
                    </li>
                    <li class="nav-item h-100 d-flex justify-content-center align-items-center"><i class="icon-chevrons-right"></i></li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-b-tab" data-bs-toggle="pill" data-bs-target="#pills-b" type="button" role="tab" aria-controls="pills-b" aria-selected="false"><i class="icon-focus"></i><br>유전자 <br>심층분석</button>
                    </li>
                    <li class="nav-item h-100 d-flex justify-content-center align-items-center"><i class="icon-chevrons-right"></i></li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-c-tab" data-bs-toggle="pill" data-bs-target="#pills-c" type="button" role="tab" aria-controls="pills-c" aria-selected="false"><i class="icon-search1"></i><br>결과와 <br>분석</button>
                    </li>
                    <li class="nav-item h-100 d-flex justify-content-center align-items-center"><i class="icon-chevrons-right"></i></li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-d-tab" data-bs-toggle="pill" data-bs-target="#pills-d" type="button" role="tab" aria-controls="pills-d" aria-selected="false"><i class="icon-beaker"></i><br>포뮬라 & <br>영양제</button>
                    </li>
                </ul>
                <div class="tab-content mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-a" role="tabpanel" aria-labelledby="pills-a-tab">
                        <div class="tab-content-box">
                            집에서 5분 만에 DNA 테스트를 마칠 수 있습니다.<br>테스트는 연구에서 보여진 52개의 유전자 표지를 분석하여 <br class="m-br">여러분의 몸이 영양분을 처리하는 방식에 도움을 줍니다.
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-b" role="tabpanel" aria-labelledby="pills-b-tab">
                        <div class="tab-content-box">
                            온라인 라이프스타일 테스트를 통해 결과를 <br class="m-br">DNA 분석과 결합하여 <br class="m-br">보다 정확한 개인 비타민 팩을 제공합니다.<br>DNA 분석이 보여주지 않을 수 있는 요소들에 대한 <br class="m-br">더 정확한 통찰력을 줄 수 있습니다.
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab">
                        <div class="tab-content-box">
                            DNA 데이터 분석이 완료되면 대시보드에서 제공된 <br class="m-br">건강 파일과 함께 결과를 검토합니다.<br>당신은 당신의 독특한 영양소 요구 사항에 대한 <br class="m-br">자세한 정보를 찾을 수 있습니다.<br>또한 시간 경과에 따른 포뮬라의 <br class="m-br">변경 사항도 보실수 있습니다.
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-d" role="tabpanel" aria-labelledby="pills-d-tab">
                        <div class="tab-content-box">
                            100% 맞춤 포뮬라는 검사 결과에 따라 <br class="m-br">당신만을 위해 만들어집니다.<br>각각의 일일 팩은 18가지 필수 영양소와 <br class="m-br">미네랄의 안전하고 효과적인 선량을 함유하고 있고<br>여러분의 공식은 여러분의 생활 방식의 변화로 <br class="m-br">새로운 결과에 적응할 수 있습니다.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bgcolor-e section-min">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="section-sub-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c c-orange"></i> Video</p>
                <h3 class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c c-orange"></i> 영상</h3>
            </div>
            
            
            <div class="col-6">
	            <video src="https://www.3hvita.com/data/common/video.mp4" type="video/mp4" controls="" autoplay="" muted="" loop="loop" style="width:100%;"></video>
            </div>
            <div class="col-6">
	            <div class="video-container">
	            	<iframe width="560" height="315" src="https://www.youtube.com/embed/bYsQ-Ap2tMs?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
            </div>
<!--
            <div class="col-md-3 col-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <video src="<?php echo G5_THEME_URL ?>/assets/video/video2.mp4" type="video/mp4" controls="" autoplay="" muted="" loop="" style="width:100%;"></video>
            </div>
            <div class="col-md-9 col-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <video src="https://www.3hvita.com/data/common/video.mp4" type="video/mp4" controls="" autoplay="" muted="" loop="" style="width:100%;"></video>
            </div>
-->
            <div class="col-12 mt-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <br>
                오직 한 사람을 위해서 만들어진 개인 맞춤 영양제!<br>
                “ 당신은 자신의 몸에 대해 잘 알고 있습니다.<br>
                우리는 과학에 대해 잘 알고 있습니다.<br>
                3H Vita는 당신의 건강을 함께 지켜가고 싶습니다.”<br>
                <br><br>
                <div class="after-div">1-of-1 product just for you.Feel your best, we take care of the hard work.Our science, our honesty, always here for you.Let’s start this journey together</div>
            </div>
        </div>
    </div>
</div>

<div class="bgcolor-d section-min">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <p class="section-sub-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">I'll answer anything</p>
                <h3 class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c c-orange"></i> 무엇이든 물어보세요</h3>
            </div>
            <div class="col-md-11 col-12 col-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="icon-check-circle"></i> <br class="m-br">진짜 저만을 위한 영양제를 만들어 주나요? 그리고 왜 왜 Real 맞춤형이라고 하는 건가요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card-col">3H Vita는 개인의 유전자 검사와 현재 건강상태를 바탕으로 분석된 결과에 따라 제작되는 국내 최초 개인 맞춤 비타민&미네랄 맞춤영양제입니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="icon-check-circle"></i> <br class="m-br">맞춤 영양제 서비스를 제공하는 곳이 많던데, 다른 맞춤 영양제랑 비슷비슷하지 않나요? 어떤 점이 타사 제품과 다르고 3H Vita는 특별한가요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card-col">3H Vita는 마이크로비드(Microbead) 형태의 작은 구슬 모양으로 되어 있어 정확한 용량의 formula 제공 가능하여 부족 및 과다복용의 우려가 없는 제품입니다, 또한 코팅된 형태이기 때문에 체내에 흡수되면 10시간 이상의 약효 유지가 가능합니다. 코팅된 구슬 모양으로 인해 영양소 흡수 방해가 최소화되고 흡수를 최적화시킬 수 있습니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"><i class="icon-check-circle"></i> <br class="m-br">개인 DNA는 필수인가요? 그리고 DNA 검사는 어떻게 진행되나요? 피검사는 안 해도 되나요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <div class="card-col">네, 고객님! 유전자 검사는 필수입니다. 500가지 항목의 유전자 검사를 기반으로 질병 예측, 신체 기관 강약, 체질, 영양소 흡수력 등 개인 건강지표를 종합적으로 분석하기 위해 유전자 검사가 필요합니다. 타액으로 DNA검사가 진행되며, 별도의 혈액검사는 필요하지 않습니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4"><i class="icon-check-circle"></i> <br class="m-br">제가 채식주의자라서 먹는게 조심스러운데요. 혹시 영양제는 어떤 성분으로 만들어 지나요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                    <div class="card-col">네, 고객님. 영양제를 섭취할 때 성분을 파악하고 선택하셔야 해서 많은 고민이 있으실 텐데요. 일단 3H Vita는 18종 비타민과 미네랄을 함유하고 있으며 개인별 함량은 모두 다릅니다. 함유하고 있는 성분은 칼슘, 마그네슘, 코엔자임, 비타민E, 비타민B2, 비타민B6, 비타민B9, 비타민B12, 비타민D3, 셀레늄, 망간, 아연, 구리, 철분, 알파리놀렌산, 피토스테롤, 식이유황입니다. 90% 천연 유래성분이라 믿고 드셔도 됩니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5"><i class="icon-check-circle"></i> <br class="m-br">제가 영양제를 구매하게 되면 약은 어떻게 복용하고 보관하면 될까요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample5">
                    <div class="card-col">3H Vita는 하루에 한 번 1포를 물과 함께 드시면 됩니다. 기호에 따라 요거트, 우유와 함께 드셔도 좋습니다. 보관할 때는 직사광선을 피해 서늘한 곳에 보관해주시고, 개봉 후에는 바로 섭취하는 것이 좋습니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6"><i class="icon-check-circle"></i> <br class="m-br">기존에 먹고 있던 영양제도 계속 먹어도 되나요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample6">
                    <div class="card-col">이미 개인의 유전자와 라이프 스타일을 분석하여 부족한 영양 성분과 용량을 맞춰서 제작한 맞춤 영양제이므로 영양 과잉을 예방하기 위해 3H Vita 제품만을 섭취하시기를 권유 드립니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample7" role="button" aria-expanded="false" aria-controls="multiCollapseExample7"><i class="icon-check-circle"></i> <br class="m-br">연구가 입증된 영양제인가요? 솔직히 처음 들어보는 브랜드라 믿고 먹어도 되는지 고민이 되요.</a>
                <div class="collapse multi-collapse" id="multiCollapseExample7">
                    <div class="card-col">고객님, 3H Vita 제품은 이미 EFSA, ISO, FDA cGMP 인증을 받은 제품입니다. 안정성을 국제적으로 인정받은 영양제이므로 안심하고 드셔도 됩니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample8" role="button" aria-expanded="false" aria-controls="multiCollapseExample8"><i class="icon-check-circle"></i> <br class="m-br">일반적으로 얼마 기간 동안 먹으면 되나요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample8">
                    <div class="card-col">저희 제품은 구독 형태의 맞춤영양제를 제공합니다. 3개월, 6개월, 9개월,12개월 단위로 구매가 가능합니다. 개인의 건강상태나 라이프 스타일의 변화가 있는 경우에는 저희 고객센터에 문의주시고 맞춤 영양제의 성분 변화 유무를 체크한 후, 구매 진행해 주시길 권유 드립니다.</div>
                </div>
                <a class="btn-col" data-bs-toggle="collapse" href="#multiCollapseExample9" role="button" aria-expanded="false" aria-controls="multiCollapseExample9"><i class="icon-check-circle"></i> <br class="m-br">재구매 시 DNA나 라이프 검사를 다시 해야 하나요?</a>
                <div class="collapse multi-collapse" id="multiCollapseExample9">
                    <div class="card-col">재구매시에는 유전자 검사나 라이프 검사를 다시 받으실 필요 없이 구매가 가능합니다. 하지만 미리 설명해드린 것처럼 개인의 건강상태나 라이프 스타일의 변화가 있는 경우에는 저희 고객센터에 문의주시고 맞춤 영양제의 성분 변화 유무를 체크한 후, 구매 진행해 주시길 권유 드립니다.  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-img-c">
    <div class="bg-img-c-cover"></div>
    <div style="position:relative;z-index:10;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="alone-button">
                        <h1 class="mb-5">내 몸에 필요한<br>영양성분 궁금하세요?</h1>
                        <button type="button" class="btn btn-light py-3 px-5"><i class="icon-check-circle"></i> 건강체크 (Health Check)</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bgcolor-d section-min-slick">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="section-sub-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Member Review</p>
                <h3 class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c c-orange"></i> Story</h3>
            </div>
            <div class="col">
                <div class="special-slick-slider">
                    <section class="centerasasas slider d-flex justify-content-between wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review01.png')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">30대 처음 느낌편</h5>
                                    <p class="card-text py-3">HEALTHY 건강하게, <br>HAPPINESS 행복한, HUNDRED 100세까지</p>
                                    <a href="https://tv.naver.com/v/19394909" target="_blank" class="mb-5"><i class="icon-play"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review02.png')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">3h vita 유전자 검사</h5>
                                    <p class="card-text py-3">쉽고 재미있고 어렵지 않아요. <br>설명대로만 하면 내몸에 맞는 비타민을!</p>
                                    <a href="https://tv.naver.com/v/19235357" target="_blank" class="mb-5"><i class="icon-play"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review03.png')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">10대 호기심 편</h5>
                                    <p class="card-text py-3">다이어트, 몸매관리 하시는 분 추천, <br>음식섭취를 줄이면 몸속에 좋은 영양소도 부족해져요</p>
                                    <a href="https://tv.naver.com/v/18913463" target="_blank" class="mb-5"><i class="icon-play"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-01.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Adam C</h5>
                                    <p class="card-text py-3">As a med-student I am always looking to improve my health.</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-02.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Julia S</h5>
                                    <p class="card-text py-3">Love the microbead aspect of 3H Vita. They make it so easy...</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-03.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Devon F</h5>
                                    <p class="card-text py-3">Why couldn’t I have found these sooner? 3H Vita solves...</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-04.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Francesca G</h5>
                                    <p class="card-text py-3">Their customer service is superb. I spoke directly with the...</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-05.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Chris O</h5>
                                    <p class="card-text py-3">Just what I was looking for! Full health results with personalized...</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-06.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Dayne F</h5>
                                    <p class="card-text py-3">These vitamins are awesome! Have no flavor or scent and is so easy...</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-07.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Jake M</h5>
                                    <p class="card-text py-3">I am trying to practice a very healthy lifestyle and decided on...</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-08.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Jenna M</h5>
                                    <p class="card-text py-3">Finally Finally found a product made just for me and I can recommend...</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <div class="review-story-primg" style="background-image:url('<?php echo G5_THEME_URL ?>/assets/img/review/review-09.jpg')"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Kevin D</h5>
                                    <p class="card-text py-3">I am so ecstatic to finally have found a product that fits all my needs.</p>
                                    <a href="" target="_blank" class="mb-5"><i class="icon-message-circle"></i><br>자세히 보기</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="bg-img-a">
    <div class="bg-img-a-cover"></div>
    <div class="section-min portz-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="section-sub-title c-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Use of natural raw materials</p>
                    <h3 class="section-title c-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c"></i> High Quality 천연 원료 사용</h3>
                </div>
            </div>
            <div class="row nature-wrap d-flex justify-content-between my-5">
                <div class="col-md-auto col-12 c-white nw-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" >
                    <div><i class="icon-check-circle c-white "></i></div>
                    <p>Traceable<br>Nutrients</p>
                </div>
                <div class="col-md-auto col-12 c-white nw-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" >
                    <div><i class="icon-feather c-white "></i></div>
                    <p>Vegan Friendly</p>
                </div>
                <div class="col-md-auto col-12 c-white nw-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" >
                    <div><i class="icon-smile c-white "></i></div>
                    <p>Gluten and Major<br>Allergen Free</p>
                </div>
                <div class="col-md-auto col-12 c-white nw-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.0s" >
                    <div><i class="icon-slash c-white "></i></div>
                    <p>Non-GMO</p>
                </div>
                <div class="col-md-auto col-12 c-white nw-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s" >
                    <div><i class="icon-droplet"></i></div>
                    <p>No Artificial<br>Colorants or<br>Synthetic Fillers</p>
                </div>
            </div>
            <div class="row">
                <div class="col text-center c-white mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s" >
                    <p>90% 천연 유래성분과 10% <br class="m-br">의약품 등급의 합성원료를 사용</p>
                    <p>천연 유래성분의 경우, 전세계 최상 품질 사용</p>
                    <p>'5無' 유당, 클루텐, 착색료, 설탕, 충전제 FREE</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bgcolor-e section-min-slick">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="section-sub-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Recommended ingredients</p>
                <h3 class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><i class="icon-logo-c c-orange"></i> 추천성분</h3>
            </div>
            <div class="col">
                <div class="special-slick-slider">
                    <section class="centerasasas slider d-flex justify-content-between wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/01.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin B12</h5>
                                    <p class="card-text">methylcobalamin<br><br>Source : Fermentation</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/02.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin B2</h5>
                                    <p class="card-text">riboflavin<br><br>Source : Fermentation</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/03.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Selenium</h5>
                                    <p class="card-text">selenomethionine<br><br>Source : Mineral</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/04.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin B9 (Folate)</h5>
                                    <p class="card-text">methylfolate / folic acid<br><br>Source : Synthetic</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/05.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Manganese</h5>
                                    <p class="card-text">manganese sulphate<br><br>Source : Mineral</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/06.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin C</h5>
                                    <p class="card-text">ascorbic acid<br><br>Source : Fermentation</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/07.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin B6</h5>
                                    <p class="card-text">pyroxidine hydrochloride<br><br>Source : Pharmaceutical</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/08.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin D3</h5>
                                    <p class="card-text">cholecalciferol<br><br>Source : Biological</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/09.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">CoQ10</h5>
                                    <p class="card-text">ubiquinone<br><br>Source : Biological</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/10.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin E</h5>
                                    <p class="card-text">d-alpha tocopheryl acetate<br><br>Source : Bio. / Pharma</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/11.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ALA</h5>
                                    <p class="card-text">alpha lipoic acid<br><br>Source : Biological / Syn.</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/12.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">MSM</h5>
                                    <p class="card-text">methylsulfonylmethane<br><br>Source : Pharmaceutical</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/13.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Magnesium</h5>
                                    <p class="card-text">magnesium hydroxide<br><br>Source : Mineral</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/14.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Zinc</h5>
                                    <p class="card-text">zinc bisglycinate<br><br>Source : Mineral</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/15.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Phytosterols</h5>
                                    <p class="card-text">sito-, campe-, signma-<br><br>Source : Biological (pine)</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/16.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Copper</h5>
                                    <p class="card-text">copper sulphate<br><br>Source : Mineral</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/17.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Calcium</h5>
                                    <p class="card-text">calcium carbonate<br><br>Source : Biological</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-center">
                            <div class="card" style="width:80%;margin: 0 auto;">
                                <img src="<?php echo G5_THEME_URL ?>/assets/img/18.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Iron</h5>
                                    <p class="card-text">iron bisglycinate<br><br>Source : Mineral</p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="icon-search"></i><br>자세히 알아보기</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-img-b">
    <div class="bg-img-b-cover"></div>
    <div style="position:relative;z-index:10;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="alone-button">
                        <h1 class="mb-5 c-white"><i class="icon-logo-c"></i> 혜택!<br>지금 받으세요.</h1>
                        <button type="button" class="btn btn-light py-3 px-5"><i class="icon-check-circle"></i> Shop U (<i class="icon-logo-c"></i> 주문하기)</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Vitamin B12</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
        </div>
    </div>
</div>

<!-- Layer Popup (Event Information) -->
<!--
<div id="popup-cookie" class="popup_layer">
    <div class="popup_layer_body">
        <div class="popup-top-wrap">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner h-100">
                    <div class="carousel-item h-100 active">
                        <img src="<?php echo G5_THEME_URL ?>/assets/img/popup/event-sample-01.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="<?php echo G5_THEME_URL ?>/assets/img/popup/event-sample-01.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="<?php echo G5_THEME_URL ?>/assets/img/popup/event-sample-01.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="popup-bottom-btn">
            <a href="javascript:;" onclick="todaycloseWin();" alt="오늘 하루 열지 않기">오늘 하루 열지 않기</a></li>
            <a href="javascript:;" onclick="closeWin();" alt="닫기"><i class="lnr lnr-cross"></i></a>
        </div>
    </div>
</div>
-->
<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
