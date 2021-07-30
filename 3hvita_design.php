<?php

include_once('./_common.php');
define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
// $nutrient[0][name]=  "Vitamin B12";		$nutrient[0][type]=  "methylcobalamin<br>Source: Fermentation"; 			$nutrient[0][explan] =  "";					
// $nutrient[1][name]=  "Vitamin B2";   	$nutrient[1][type]=  "riboflavin<br>Source: Fermentation";      			$nutrient[1][explan] =  "";                   
// $nutrient[2][name]=  "Selenium";		$nutrient[2][type]=  "selenomethionine<br>Source: Mineral";   	  			$nutrient[2][explan] =  "";
// $nutrient[3][name]=  "Folate (B9)";		$nutrient[3][type]=  "methylfolate / folic acid<br>Source: Synthetic";   	$nutrient[3][explan] =  "";					
// $nutrient[4][name]=  "Manganese";   	$nutrient[4][type]=  "manganese sulphate<br>Source: Mineral";      			$nutrient[4][explan] =  "";                   
// $nutrient[5][name]=  "Vitamin C";		$nutrient[5][type]=  "ascorbic acid<br>Source: Fermentation";      			$nutrient[5][explan] =  "";
// $nutrient[6][name]=  "Vitamin B6";		$nutrient[6][type]=  "pyroxidine hydrochloride<br>Source: Pharmaceutical"; 	$nutrient[6][explan] =  "";					
// $nutrient[7][name]=  "Vitamin D3";   	$nutrient[7][type]=  "cholecalciferol<br>Source: Biological";      			$nutrient[7][explan] =  "";                   
// $nutrient[8][name]=  "CoQ10";			$nutrient[8][type]=  "ubiquinone<br>Source: Biological";     				$nutrient[8][explan] =  "";
// $nutrient[9][name]=  "Vitamin E";		$nutrient[9][type]=  "d-alpha tocopherylacetate<br>Source: Bio. / Pharma";  $nutrient[9][explan] =  "";					
// $nutrient[10][name]= "ALA";   			$nutrient[10][type]= "alpha lipoic acid<br>Source: Biological / Syn.";     	$nutrient[10][explan] = "";                   
// $nutrient[11][name]= "MSM";				$nutrient[11][type]= "methylsulfonylmethane<br>Source: Pharmaceutical";     $nutrient[11][explan] = "";
// $nutrient[12][name]= "Magnesium";		$nutrient[12][type]= "magnesium hydroxide<br>Source: Mineral";  	 		$nutrient[12][explan] = "";					
// $nutrient[13][name]= "Zinc";	   		$nutrient[13][type]= "zinc bisglycinate<br>Source: Mineral";   			  	$nutrient[13][explan] = "";                   
// $nutrient[14][name]= "Phytosterols";	$nutrient[14][type]= "sito-, campe-, signma-<br>Source: Bio (pine)";   	  	$nutrient[14][explan] = "";
// $nutrient[15][name]= "Copper";   		$nutrient[15][type]= "copper sulphate<br>Source: Mineral";     				$nutrient[15][explan] = "";                   
// $nutrient[16][name]= "Calcium";			$nutrient[16][type]= "calcium carbonate<br>Source: Biological";  			$nutrient[16][explan] = "";
// $nutrient[17][name]= "Iron";			$nutrient[17][type]= "iron bisglycinate<br>Source: Mineral";  				$nutrient[17][explan] = "";

$nutrient[0][name]=  "비타민 B12";		$nutrient[0][type]=  ""; $nutrient[0][explan] =  "";  $nutrient[0][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2009.1223";
$nutrient[1][name]=  "비타민 B2";   	$nutrient[1][type]=  ""; $nutrient[1][explan] =  "";  $nutrient[1][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1814";
$nutrient[2][name]=  "셀레늄";			$nutrient[2][type]=  ""; $nutrient[2][explan] =  "";  $nutrient[2][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1727";
$nutrient[3][name]=  "엽산";			$nutrient[3][type]=  ""; $nutrient[3][explan] =  "";  $nutrient[3][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1760";
$nutrient[4][name]=  "망간";  	 		$nutrient[4][type]=  ""; $nutrient[4][explan] =  "";  $nutrient[4][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2009.1217";
$nutrient[5][name]=  "비타민 C";		$nutrient[5][type]=  ""; $nutrient[5][explan] =  "";  $nutrient[5][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1815";
$nutrient[6][name]=  "비타민 B6";		$nutrient[6][type]=  ""; $nutrient[6][explan] =  "";  $nutrient[6][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1759";
$nutrient[7][name]=  "비타민 D3";   	$nutrient[7][type]=  ""; $nutrient[7][explan] =  "";  $nutrient[7][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1468";
$nutrient[8][name]=  "CoQ10";			$nutrient[8][type]=  ""; $nutrient[8][explan] =  "";  $nutrient[8][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1793";
$nutrient[9][name]=  "비타민 E";		$nutrient[9][type]=  ""; $nutrient[9][explan] =  "";  $nutrient[9][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1816";
$nutrient[10][name]= "알파리포산";   	$nutrient[10][type]= ""; $nutrient[10][explan] = "";  $nutrient[10][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1474";
$nutrient[11][name]= "MSM";				$nutrient[11][type]= ""; $nutrient[11][explan] = "";  $nutrient[11][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1746";
$nutrient[12][name]= "마그네슘";		$nutrient[12][type]= ""; $nutrient[12][explan] = "";  $nutrient[12][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1807";
$nutrient[13][name]= "아연";	   		$nutrient[13][type]= ""; $nutrient[13][explan] = "";  $nutrient[13][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1819";
$nutrient[14][name]= "피토스테롤";		$nutrient[14][type]= ""; $nutrient[14][explan] = "";  $nutrient[14][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2008.781";
$nutrient[15][name]= "구리";   			$nutrient[15][type]= ""; $nutrient[15][explan] = "";  $nutrient[15][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2009.1211";
$nutrient[16][name]= "칼슘";			$nutrient[16][type]= ""; $nutrient[16][explan] = "";  $nutrient[16][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2009.1210";
$nutrient[17][name]= "철분";			$nutrient[17][type]= ""; $nutrient[17][explan] = "";  $nutrient[17][link] ="https://efsa.onlinelibrary.wiley.com/doi/pdf/10.2903/j.efsa.2010.1740";

			
?>

<script src="<?php echo G5_JS_URL; ?>/swipe.js"></script>
<script src="<?php echo G5_JS_URL; ?>/shop.mobile.main.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@1,700&display=swap" rel="stylesheet">
<?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
<style>
	#ft{min-width: 1400px;};
</style>
<div class="mainRow">
   <img src="<?php echo G5_DATA_URL; ?>/common/main_1.png">
   <div class="textArea_1">
		<div class="pb-30">
		</div>
		<div class="titleText yellow ">
		당신을 위해서 만들어진
		</div>
		<div class="titleText gray mb-30">
		당신이 필요한 유일한 영양제 팩
		</div>
		<div class="smallText light mb-30">
		세계에서 가장 과학적으로 발달한 영양제 팩으로<br>
		당신의 고유한 영양소 니즈를 파악합니다.
		</div>
		<div class="smallText bold mb-30">
		<span>✓ 100% 개인화 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;✓ 천연 재료<br>✓ 18 필수 영양소</span>
		</div>
		<a href="https://www.3hvita.com/bbs/subscribe.php"><div class="orderBtn mid mb-30"><span>3HVITA 주문하기</span></div></a>
   </div>
</div>

<div class="mainRow">
   <img src="<?php echo G5_DATA_URL; ?>/common/main_2.png">
   <div class="textArea_2">
		<div class="titleText brown mb-30">
		 추측은 이제 그만
		</div>
		<div class="smallText fontThe bold mb-30">
		DNA 테스트는 당신을 위한 영양소와 정확한 복용량을 결정하는데 필수입니다.
		</div>
		<div class="DNA mb-30">
		<span>DNA</span>
		</div>
		<div class="smallText light mb-30">
		50가지 이상의 일반적인 유전적 변화는 여러분의 몸이 주요 영양소를<br>
		흡수하고, 신진대사에 영향을 미치는데, 이것은 특정한 영양소<br>
		결핍이나 민감성을 유발할 수 있습니다. 유전학 때문에, 대부분의<br>
		사람들은 다이어트나 대량 판매 보조	식품으로부터 적절한 양의<br>
		필수 영양소를 섭취하지 못하고 있습니다.
		</div>
		<div class="smallText bold mb-30">
		</div>
		<!--<a href="#"><div class="ReadMore"><span>더 읽기</span></div></a>-->
   </div>
</div>


<div class="mainRow row_3">
   <img class="backgroundImage" id="image3_1" src="<?php echo G5_DATA_URL; ?>/common/3_1.png">
   <img class="backgroundImage" id="image3_2" src="<?php echo G5_DATA_URL; ?>/common/3_2.png">
   <img class="backgroundImage" id="image3_3" src="<?php echo G5_DATA_URL; ?>/common/3_3.png">
   <img class="backgroundImage" id="image3_4" src="<?php echo G5_DATA_URL; ?>/common/3_4.png">
   <img class="backgroundImage" id="image3_5" src="<?php echo G5_DATA_URL; ?>/common/3_5.png">
   <div class="textArea_3">
		<div class="titleText gray mb-4">
		영양제 구독순서
		</div>
		<ul class="ul_3 mb-4">
			<li class="on">
				<div class="liTitle">유전자 검사</div>
			</li>
			<li>
				<div class="liTitle">유전자 심층분석</div>
			</li>
			<li>
				<div class="liTitle">결과와 분석</div>
			</li>
			<li>
				<div class="liTitle">포뮬라 & 영양제</div>
			</li>
		</ul>
		<div class="liMotion">
			<div class="liText on">
			집에서 하는 DNA 검사 테스트<br><br>
			집에서 5분 만에 DNA 테스트를 마칠 수 있습니다. 테스트는 연구에서 보여진 52개의 유전자 표지를 분석하여 여러분의 몸이 영양분을 처리하는 방식에 도움을 줍니다.
			</div>
			<div class="liText">
			온라인 라이프스타일 테스트를 통해 결과를 DNA 분석과 결합하여 보다 정확한 개인 비타민 팩을 제공합니다. DNA 분석이 보여주지 않을 수 있는 요소들에 대한 더 정확한 통찰력을 줄 수 있습니다.
			</div>
			<div class="liText">
			DNA 데이터 분석이 완료되면 대시보드에서 제공된 건강 파일과 함께 결과를 검토합니다. 당신은 당신의 독특한 영양소 요구 사항에 대한 자세한 정보를 찾을 수 있습니다. 또한 시간 경과에 따른 포뮬라의 변경 사항도 보실수 있습니다.
			</div>
			<div class="liText">
			100% 맞춤 포뮬라는 검사 결과에 따라 당신만을위해 만들어집니다. 각각의 일일 팩은 18가지 필수 영양소와 미네랄의 안전하고 효과적인 선량을 함유하고 있고 여러분의 공식은 여러분의 생활 방식의 변화로 새로운 결과에 적응할 수 있습니다.
			</div>
		</div>
		<div class="halfArea halfLeft">
			<div class="mark">
				<img class="mb-30"src="<?php echo G5_DATA_URL; ?>/common/mark_1.png">
				<div class="middleText fontThe bold mb-30">100% 개인 정보 보호 보장</div>
				<!--<div class="smallText fontThe lightGray light">이 뜻이 뭔가요?</div>-->
			</div>
		</div>
		<div class="halfArea halfRight">
			<div class="mark pr-15">
				<img class="mb-30" src="<?php echo G5_DATA_URL; ?>/common/mark_2.png?ver=2">
				<div class="middleText fontThe bold mb-30">ISO 승인</div>
			</div>
			<div class="mark">
				<img class="mb-30" src="<?php echo G5_DATA_URL; ?>/common/mark_3.png?ver=2">
				<div class="middleText fontThe bold mb-30">FDA cGMP</div>
				<!--<div class="smallText fontThe lightGray light">이 뜻이 뭔가요?</div>-->
			</div>
		</div>
   </div>
</div>


<div class="mainRow">
   <img src="<?php echo G5_DATA_URL; ?>/common/main_4.png">
   <div class="textArea_4">
		<div class="titleText center black mb-30">
		 진정한 <span class="bold">개인 맟춤</span>
		</div>
		<video src="<?php echo G5_DATA_URL; ?>/common/video.mp4" type="video/mp4" controls="" autoplay muted loop></video>
	</div>
	<div class="textArea_4 right">
		<div class="smallText fontThe bold mb-30">
		3HVITA는 당신만을 위한 100% 개인화된<br>
		마이크로비드 영양제를 만들기 위해<br>
		당신의 DNA와 라이프 스타일을 분석하는<br>
		유일한 건강 회사입니다
		</div>
		<div class="smallText fontThe bold mb-30">
		라이프스타일 분석은 당신의 삶에 대한<br>
		일반적인 통찰력을 줄 수 있지만,<br>
		DNA 테스트와 결합하면 당신의 독특한<br>
		요구 사항에 대한 사실이 훨신 정확하게 드러납니다.
		</div>
   </div>
</div>


<div class="mainRow">
   <img src="<?php echo G5_DATA_URL; ?>/common/main_5.png">
   <div class="textArea_5">
		<div class="titleText gray mb-15">
		당신만을 위한 세상의 유일한 real 영양제
		</div>
		<!--<div class="smallText lightGray light mb-15">
		Your unique 3HVITA formula will contain safe and effective doses of 18 vital nutrients and minerals, based on your test results.
		</div>-->
		<ul class="ul_5 mb-15">
			<?php
			  for ($i=0; $i<count($nutrient); $i++) {
				 echo '<li><a href="'.$nutrient[$i][link].'" target="_blank"><img src="'.G5_DATA_URL.'/common/circle_'.$i.'.png"><div class="textBox fontGmarket"><div class="middleText bold pb-5">'.$nutrient[$i][name].'</div><div class="explanText">'.$nutrient[0][type].'</div></div></a></li>';
			  }
			?>
		</ul>
		<a href="https://www.3hvita.com/bbs/subscribe.php"><div class="orderBtn mid mb-15"><span>3HVITA 주문하기</span></div></a>
		<!--<div class="smallText fontThe">or Take the Free Lifestyle Assessment</div>-->
   </div>
</div>


<div class="mainRow">
   <img src="<?php echo G5_DATA_URL; ?>/common/main_6.png">
   <div class="textArea_6">
		<div class="titleText green mb-30">
		알약 NO, 마이크로비드 OK!
		</div>
		<div class="smallText fontThe bold mb-30">
		우리의 고유한 슬로우 릴리스 마이크로비드 전달 시스템은<br>
		최대 흡수와 가장 정확한 선량 측정을 가능하게합니다.<br>
		기존에 있는 비타민은 아침에 큰 많은 알약들을 삼키기 힘들고<br>
		정말로 이 모든 비타민이 필요한지 피곤하고 궁금하게 만들죠.
		</div>
		<div class="smallText fontThe mid mb-30">
		· 프리미엄 원료 영양소<br>
		· 100% 채식주의자<br>
		· 제약 등급<br>
		· 메스꺼움 없음, 천천히 배출<br>
		</div>
   </div>
</div>





<div class="mainRow">
   <img src="<?php echo G5_DATA_URL; ?>/common/main_7.png">
   <div class="textArea_7">
		<div class="titleText green mb-30">
		Real review
		</div>

       <div class="latest_wr">
           <!--  사진 최신글2 { -->
           <?php
           // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
           echo latest('theme/review_basic', 'review', 10, 23);
           ?>
           <!-- } 사진 최신글2 끝 -->
       </div>
   
   <!-- 메인리뷰-->
<!--	--><?php
//	// 상품리뷰
//	$sql = " select a.is_id, a.mb_id, a.is_subject, a.is_time, a.is_content, a.it_id, b.it_name
//				from `{$g5['g5_shop_item_use_table']}` a join `{$g5['g5_shop_item_table']}` b on (a.it_id=b.it_id)
//				where a.is_confirm = '1'
//				order by a.is_id desc
//				limit 0,8 ";
//	$result = sql_query($sql);
//
//	for($i=0; $row=sql_fetch_array($result); $i++) {
//		if($i == 0) {
//			echo '<div class="review_7">'.PHP_EOL;
//		}
//		$review_href = G5_SHOP_URL.'/item.php?it_id='.$row['it_id'];
//	?>
<!--		<div class="review_li rv_--><?php //echo $i;?><!--">-->
<!--			<div class="review_wr">-->
<!--				<div class="review_hd">-->
<!--					<a href="--><?php //echo $review_href; ?><!--" class="prd_img">--><?php //echo get_itemuselist_thumbnail($row['it_id'], $row['is_content'], 240, 130); ?><!--</a>-->
<!--					<div class="review_text">-->
<!--						<div class="review_id center">--><?php //echo get_text(cut_str($row['mb_id'], 3))."/".passing_time(get_text(cut_str($row['is_time'], 20))); ?><!-- </div>-->
<!--						<div class="review_tit center">--><?php //echo get_text(cut_str($row['is_subject'], 20)); ?><!--</div>-->
<!--						<div class="center">--><?php //echo $row['it_name']; ?><!--</div>-->
<!--						<p>--><?php //echo get_text(cut_str(strip_tags($row['is_content']), 100), 1); ?><!--</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	--><?php
//	}
//
//	if($i > 0) {
//		echo '</div>'.PHP_EOL;
//		echo '</div>'.PHP_EOL;
//	}
	?>
	</div>
</div>
<script>
	$(document).ready(function(){
		$(".liTitle").on("click", function(){
			$(this).parents().find(".liMotion").each(function(){
				$(this).removeClass("active");
			});
			$(this).siblings(".liMotion").addClass("active");
			
		});
		
		$(".ul_3 li").each(function(){
			$(this).on("click", function(){
				if($(this).hasClass("on")){
				}
				else{
					$(this).siblings().each(function(){
						$(this).removeClass("on");
					})
					$(this).addClass("on")
					$(".liMotion").children().removeClass("on");
					$(".liMotion").children().eq($(this).index()).addClass("on");
					
				}
			});
		});
	});
	
</script>


<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
?>