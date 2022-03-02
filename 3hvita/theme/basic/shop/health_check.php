<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

if(! defined('_INDEX_')) define('_INDEX_', TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>


<div class="sub-hero-wrap">
	<h1 class="text-center">Health Check</h1>
</div>


<div class="container py-5">
	<div class="row">
		<div class="col">

            <script>

                function next(){
                   // $(".card-body1").hide();
                    var x1 = document.getElementById("b");
                    x1.style.display= "none";

                    var x = document.getElementById("a");
                    x.style.display= "block";
                   // $("$a").show();
                }


            </script>
            <style>
                #a{
                    display: none;
                }
            </style>
			<!-- 건강체크 퀴즈 화면 -->
			<div class="card p-5 quiz-wrap">
                <div class="card-body" id="b">
				<div class="display-6 text-center text-danger mb-5">1/21</div>
				<div class="progress">
					<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				
				
				<div class="card-body" >
					<h5 class="card-title">여러분은 어떤 특정한 식이요법을 따르시나요?</h5>
					<div class="card-text card-flex">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								완벽한 채식 식단 (식물성 식품만 섭취)
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								채식 식단 (육류, 어패류를 제외하고 섭취)
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault3">
								팔레오 식단
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault4">
								잡식성(특별한 식단을 유지하지 않습니다)
							</label>
						</div>
					</div>
					
					<div class="text-center">
						<button class="btn btn-outline-warning btn-lg" type="button" onclick="next();">다음</button>
					</div>
				</div>
                </div>


				<div id= "a" class="card-body">

                    <div class="display-6 text-center text-danger mb-5">2/21</div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

					<h5 class="card-title">일주일에 얼마나 자주 유제품을 드시나요?</h5>
					<div class="card-text card-flex">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								섭취하지 않습니다
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								일주일에 1~3회 섭취
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault3">
								일주일에 4~6회 섭취
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault4">
								매일 섭취 하고 있습니다.
							</label>
						</div>
					</div>

					<div class="text-center">
						<button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
						<button class="btn btn-outline-warning btn-lg" type="button">다음</button>
					</div>
				</div>

                <!--
                <div class="card-body">
                    <h5 class="card-title">일주일에 얼마나 과일이랑 채소를 드시나요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                섭취하지 않습니다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                일주일에 1~3회 섭취
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                일주일에 4~6회 섭취
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                매일 섭취 하고 있습니다.
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">글루텐은 어떤가요? 피하세요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                아니요
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                네
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">일주일에 생선을 얼마나 드시나요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                섭취하지 않습니다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                일주일에 1~3회 섭취
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                일주일에 4~6회 섭취
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                매일 섭취 하고 있습니다.
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">영문 이름을 작성해주세요</h5>
                    <div class="card-text">
                        <div class="row g-3 py-5">
                            <div class="col-md-6">
                                <label for="" class="form-label">영문 성</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">영문 이름</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">현재 흡연중이신가요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                아니요
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                흡연중 (하루 10개비 이상)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                흡연중 (하루 10개비 이하)
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">성별은 무엇인가요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                남자
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                여자
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">지금 임신을 하셨거나 모유수유 중이십니까?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                네 현재 임신중입니다.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                임신 시도중입니다.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                모유수유중입니다.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                아니요
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">생리에 대한 질문입니다</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                몇시간 마다 대형 패드나 탑폰을 교채 해야합니다.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                3~4시간마다 중형 패드나 탑폰을 교채 해야합니다.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                하루에 2~3번 중형이나 소형 패드나 탑폰을 교채 해야합니다.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                생리중 중형이나 소형 패드나 탑폰을 쏩니다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault5">
                                해당 되지 않습니다
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">각성제(예: 카페인)를 사용하지 않은 여러분의 하루 에너지 수준은 어떻습니까?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                하루 종일 피곤하다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                보통이다 하지만 가끔 피곤한 날이 있다.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                하루 종일 쌩쌩하다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                기운이 매우 넘친다
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">여러분의 하루 스트레스 수준은 어떠신가요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                낮다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                보통
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                높다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                극도의 스트레스
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">여러분의 평소 기분은 어떠신가요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                나쁨
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                안정적
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                행복
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                황홀
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">출생일자를 알려주세요</h5>
                    <div class="card-text">
                        <div class="row g-3 py-5">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-1">
                                년
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-1">
                                월
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-1">
                                일
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">키와 몸무게를 알려주세요</h5>
                    <div class="card-text">
                        <div class="row g-3 py-5">
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-1">
                                몸무게(kg)
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-1">
                                키(cm)
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">일주일에 운동을 얼마나 하시나요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                0회
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                2~3회
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                4~6회
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                매일
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">운동외에 여러분의 일상에서 활동하시는 스타일은 어떠신가요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                주로 앉아있음 , 자주 움직이지 않는다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                가끔씩 일어나서 움직인다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                항상 일어나있으며 움직인다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                항상 일어나있으며 육체적 노동이 매우 많다
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">일주일에 얼마나 자주 직사광선에 15분 이상 노출되어 있으신가요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                0~1회
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                2~3회
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                4~6회
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                매일
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">결혼 유무를 알려주세요</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                기혼
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                약혼
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                미혼
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">자녀분들이 있으신가요?</h5>
                    <div class="card-text card-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                네, 자녀들이 있습니다
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                출산예정
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                아니요
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">비밀번호</h5>
                    <div class="card-text">
                        <div class="row g-3 py-5">
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="">
                            </div>
                            <div class="col-md-6">
                                건강체크 패스워드 입력
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">3H Vita가 이메일 주소로 건강체크 결과지를 보내드려요</h5>
                    <div class="card-text">
                        <div class="row g-3 py-5">
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="">
                            </div>
                            <div class="col-md-6">
                                이메일 입력
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary btn-lg" type="button">이전</button>
                        <button class="btn btn-outline-warning btn-lg" type="button">다음</button>
                    </div>
                </div>
-->
				
			</div>
			
			<!-- 건강체크 완료시 모든 퀴즈가 끝나면 나오는 화면 -->
			<div class="card p-5 quiz-complate-wrap text-center">
				<div class="py-5">
					<div class="text-center display-1 mb-5"><i class="icon-documents text-warning"></i></div>
					<h1 class="mb-5 display-1">Thank you!</h1>
					<h3 class="mb-5">Your body will finally be able to experience what credible vitamins feel like with 3H Vita.</h3>
					<h5 class="mb-5">3H Vita가 당신에게 맞는 추천 성분을 알려 드릴께요!</h5>
					<a href="#" class="btn btn-warning py-3 px-5 mt-3"><i class="icon-check-circle"></i> 건강 체크 결과보기</a>
				</div>
			</div>
			
		</div>
	</div>
</div>


<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');