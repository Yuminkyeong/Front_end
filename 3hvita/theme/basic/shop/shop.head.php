<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$q = isset($_GET['q']) ? clean_xss_tags($_GET['q'], 1, 1) : '';

if(G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_javascript('<script src="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/owlcarousel/owl.carousel.css">', 0);
?>

<div class="header">
    <div class="header-in">
        <div class="row">
            <div class="col-md-3 col-6 logo-wrap d-flex justify-content-start align-items-center">
                <a href="<?php echo G5_URL; ?>"><i class="icon-logo-c"></i></a>
            </div>
            <div class="col-md-6 menu-wrap d-flex justify-content-center align-items-center">
                <div class="dropdown">
                    <a href="<?php echo G5_URL; ?>/health_check.php">Health Check</a>
                </div>
                <div class="dropdown">
                    <a href="" class="dropbtn">Shop Personalized Nutrition</a>
                    <div class="dropdown-content">
                        <a href="<?php echo G5_BBS_URL; ?>/subscribe.php">제품주문</a>
                        <a href="#">DNA TEST</a>
                        <a href="#">TAKE QUIZ</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="" class="dropbtn">My 3H Vita</a>
                    <div class="dropdown-content">
                        <a href="#">ACCOUNT 관리</a>
                        <a href="#">주문내역</a>
                        <a href="<?php echo G5_BBS_URL; ?>/genoplan_kit_check.php">DNA 키트 등록</a>
                        <a href="#">건강 REPORT 관리</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 submenu-wrap d-flex justify-content-end align-items-center">
                <a href="<?php echo G5_SHOP_URL; ?>/cart.php" class="cart-area-btn">
                    <i class="icon-shopping-cart"></i><!-- <span class="count"><?php echo get_boxcart_datas_count(); ?></span> -->
                </a>
	            <?php if ($is_member) {  ?>
	                <span class="sidemenu" onclick="openNav()">
	                    <i class="icon-menu"></i>
	                </span>
	            <?php } else { ?>
	                <a class="sidemenu" href="<?php echo G5_BBS_URL ?>/login.php?url=<?php echo $urlencode; ?>">
	                    <i class="icon-user1"></i>
	                </a>
	            <?php }  ?>
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
                <a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
            </div>
        </div>
    </div>
</div>
