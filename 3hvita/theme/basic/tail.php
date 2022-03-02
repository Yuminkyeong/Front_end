<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 footer-menu">
                <a href="#">DNA TEST ORDER</a>
                <a href="#">TERMS OF SERVICE</a>
                <a href="#">PRIVACY POLICY</a>
                <a href="#">CONTACT US</a>
            </div>
            <div class="col-md-4 col-12 footer-menu-sns">
                <a href="#"><img src="<?php echo G5_THEME_URL ?>/assets/img/instagram.png" class="sns-icon" alt="..."></a>
                <a href="#"><img src="<?php echo G5_THEME_URL ?>/assets/img/facebook.png" class="sns-icon" alt="..."></a>
                <a href="#"><img src="<?php echo G5_THEME_URL ?>/assets/img/blog.png" class="sns-icon" alt="..."></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 col-12">
                <h1><i class="icon-logo-c"></i></h1>
                <p>로이바이오 주식회사 ㅣ 사업자번호:260-86-01978 ㅣ 대표:박동현</p>
                <p>개인정보취급담당자:홍길동</p>
                <p>서울특별시 강남구 선릉로 661, 3층 303호 ㅣ 연구소:서울특별시 강남구 선릉로 661, 석영빌딩 303호</p>
                <p>통신판매업신고:제 2020-서울강남-03029호 <a href="#">사업자정보확인</a></p>
                <p>유통판매업신고:제 2018-0107314호</p>
                <p>건강기능식품판매업신고:제 2018-0107314호</p>
            </div>
            <div class="col-md-4 col-12">
                <h1>고객센터</h1>
                <p>고객문의:roybio@naver.com ㅣ 전화:070-4647-0356</p>
                <p>상담시간:평일10:00~18:00 (점심시간 13:00~14:00)</p>
                <p>제휴문의:roybio@naver.com</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p>© 2020 Roy group. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>



<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");