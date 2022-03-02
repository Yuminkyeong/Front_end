<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<div class="header">
    <div class="header-in">
        <div class="row">
            <div class="col-md-3 col-6 logo-wrap d-flex justify-content-start align-items-center">
                <a href=""><i class="icon-logo-c"></i></a>
            </div>
            <div class="col-md-6 menu-wrap d-flex justify-content-center align-items-center">
                <div class="dropdown">
                    <a href="">Health Check</a>
                </div>
                <div class="dropdown">
                    <a href="" class="dropbtn">Shop Personalized Nutrition</a>
                    <div class="dropdown-content">
                        <a href="http://49.247.128.232/3hvita/bbs/subscribe.php">제품주문</a>
                        <a href="#">DNA TEST</a>
                        <a href="#">TAKE QUIZ</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="" class="dropbtn">My 3H Vita</a>
                    <div class="dropdown-content">
                        <a href="#">ACCOUNT 관리</a>
                        <a href="#">주문내역</a>
                        <a href="http://49.247.128.232/3hvita/bbs/genoplan_kit_check.php">DNA 키트 등록</a>
                        <a href="#">건강 REPORT 관리</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 submenu-wrap d-flex justify-content-end align-items-center">
                <a href="">
                    <i class="icon-shopping-cart"></i>
                </a>
                <span class="sidemenu" onclick="openNav()">
                    <i class="icon-menu"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col h-100 flex-side-menu">
                <a href="#">1:1 개인 맞춤 영양제 구독</a>
                <a href="#">DNA 검사키트 주문</a>
                <a href="#">3H Vita 스토리</a>
                <a href="#">My 3H Vita</a>
                <a href="#">로그아웃</a>
                <!--<a href="#">로그인</a>-->
            </div>
        </div>
    </div>
</div>