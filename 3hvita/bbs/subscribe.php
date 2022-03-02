<?php
include_once('./_common.php');
include_once('./_head.php');

if(!$is_member)
    alert('회원로그인 후 이용해 주십시오.', G5_URL.'/bbs/login.php?url='.G5_URL.'/bbs/subscribe.php');

?>

    <link rel="stylesheet" href="./jellyStyle.css">
  
    <style type="text/css">
        #ft{min-width: 930px;};
    </style>

    <div id="sub01" class="subContainer " style="margin-top:100px ">
        <div class="subscribeHeader">
            <img id="subBack_1" src="https://www.3hvita.com/data/common/subBack_1.png">
            <img id="subBack_2" src="https://www.3hvita.com/data/common/subBack_2.png">
            <img id="subBack_3" src="https://www.3hvita.com/data/common/subBack_3.png">
            <ul>
                <li class="on prev">
                    <span>상품선택</span>
                </li>
                <li class="">
                    <span>정보확인</span>
                </li>
                <li class="">
                    <span>영양제결제</span>
                </li>
                <li class="">
                    <span>유전자 심층분석</span>
                </li>
                <li class="">
                    <span>심층분석 결제</span>
                </li>
            </ul>
        </div>
        <div id="box_1" class="choiceBox" style="padding-top: 52px;">
            <div class="subBox ">
                <input type="radio" id="sub01_01" name="si_gift" value="0" checked>
                <label for="sub01_01" class="subImg active" id="subImg_1">
                    <div class="subTextBox">
                        <div class="subText sCoreB cherry">최초구독 - 유전자 검사</div>
                        <ul>
                            <li class="subText sCoreM black">· 영양제<br>· 유전자 심층분석<br>· 유전자 검사</li>
                        </ul>
                        <div class="subText sCoreM lightGray">(영양제 제조시 필수)</div>
                    </div>
                </label>
            </div>
            <div class="subBox">
                <input type="radio" id="sub01_02" name="si_gift" value="1">
                <label for="sub01_02" class="subImg" id="subImg_2">
                    <div class="subTextBox">
                        <div class="subText sCoreB cherry">최초구독 - 유전자 검사 X</div>
                        <ul>
                            <li class="subText sCoreM black">· 영양제<br>· 유전자 심층분석<br>　</li>
                        </ul>
                        <div class="subText sCoreM lightGray">(영양제 제조시 필수)</div>
                    </div>
                </label>
            </div>
            <div class="subBox">
                <input type="radio" id="sub01_03" name="si_gift" value="2">
                <label for="sub01_03" class="subImg" id="subImg_3">
                    <div class="subTextBox">
                        <div class="subText sCoreB cherry">재구독</div>
                        <ul>
                            <li class="subText sCoreM black">· 영양제</li>
                        </ul>
                    </div>
                </label>
            </div>
        </div>


        <div id="box_2" class="choiceBox displayNone">
            <!--    <div class="promotion sCoreM">프로모션 코드 입력 : <input class="pText" type="text" name="pCode" maxlength="14"><span class="pconfirm">확인</span></div>-->
            <div class="subBox">
                <input type="radio" id="sub02_01" name="si_gift2" value="0" checked>
                <label for="sub02_01" class="subImg active" id="subImg_1">
                    <div class="subTextBox">
                        <div class="subText sCoreB cherry">1개월 구독(정기결제)</div>
                        <ul>
                            <li class="subText sCoreM black">$280 / 월</li>
                        </ul>
                        <!--		  <div class="subText sCoreM"></div>-->
                    </div>
                </label>
            </div>
            <div class="subBox">
                <input type="radio" id="sub02_02" name="si_gift2" value="1">
                <label for="sub02_02" class="subImg" id="subImg_2">
                    <div class="subTextBox">
                        <div class="subText sCoreB cherry">3개월 구독</div>
                        <ul>
                            <li class="subText sCoreM black txt centerLine">$280 / 월</li>
                        </ul>
                        <div class="discount subText sCoreM">$149 / 월</div>
                    </div>
                </label>
            </div>
            <div class="subBox">
                <input type="radio" id="sub02_03" name="si_gift2" value="2">
                <label for="sub02_03" class="subImg" id="subImg_3">
                    <div class="subTextBox">
                        <div class="subText sCoreB cherry">6개월 구독</div>
                        <ul>
                            <li class="subText sCoreM black txt centerLine">$280 / 월</li>
                        </ul>
                        <div class="discount subText sCoreM">$149 / 월</div>
                    </div>
                </label>
            </div>
        </div>

        <div class="btnArea" style="padding-top: 20px;">
            <div id="btnPrev" class="subscribeNext">
                <div class="btnBack"></div>
                <div class="btnText">이전</div>
            </div>
            <div id="btnNext" class="subscribeNext">
                <div class="btnBack"></div>
                <div class="btnText">다음</div>
            </div>

        </div>
    </div>
    <script>
        var Aprice = [159, 150];
        var Bprice = [149, 141];
        var Cprice = [95, 89];
        var Dprice = [0];

        // d = 입력 x
        // a = a코드
        // b = b코드
        textSet();
        function textSet(){
            var lang = '<?php echo $_GET["lang"]?>';
            var headerText = [["상품선택","Choose product"],["정보확인", "Check info"],["영양제결제","Payment"],["유전자 심층분석","Genetic Analysis"], ["심충분석 결제", "Analysis payment"]];
            if(lang == "en"){
                $(".subscribeHeader").find("span").each(function(_index){
                    $(this).html(headerText[_index][1])
                });
            }
        }


        $(".subBox").on("click", function(){
            $(this).siblings().each(function(){
                $(this).find(".subImg").removeClass("active");
            });
            $(this).find(".subImg").addClass("active");
        });

        $(".subscribeNext").on("click", function(){
            if($(this).attr("id") == "btnPrev"){
                goPrev();
            }
            else{
                goNext();
            }
        });

        var code_input = "d";


        $(".prev").on("click",function(){
            goPrev();
        });
        $(".pconfirm").on("click", function(){

            var subscribe_type = $(":input:radio[name=si_gift2]:checked").val();
            // if(subscribe_type == "0"){
            //     alert("1개월 구독상품은 프로모션 코드를 사용할수없습니다.");
            //     return false;
            // }

            $.ajax({
                url : '<?=G5_URL.'/shop/check_code.php'?>'
                ,data : {
                    req : 'c'
                    ,sp_id : $(".pText").val()
                }
                ,success : function ( data ){
                    var result = JSON.parse(data);
                    if(result != null){
                        if(result['sp_used'] == 'Y'){
                            code_input = "d";
                            alert('이미 사용된 코드입니다.');
                            $(".pText").val("");
                        }else{
                            if(result['sp_type'] == 'D33'){
                                code_input = "c";
                                alert('코드 확인완료, 일반회원 코드입니다 영양제 33%할인');
                                setDiscount(result['sp_type']);
                            }else if(result['sp_type'] == 'D37'){
                                code_input = "b";
                                alert('코드 확인완료, 파트너 코드입니다 영양제 37%할인');
                                setDiscount(result['sp_type']);
                            }else if(result['sp_type'] == 'D60'){
                                code_input = "a";
                                alert('코드 확인완료, 파트너 코드입니다 영양제 60%할인');
                                setDiscount(result['sp_type']);
                            }else if(result['sp_type'] == 'D100'){
                                code_input = "s";
                                alert('코드 확인완료, 파트너 코드입니다 영양제 100%할인');
                                setDiscount(result['sp_type']);
                            }
                        }
                    }else{
                        code_input = "d";
                        alert("존재하지 않는 코드입니다.")
                    }
                }
            });
        });
        function setDiscount(_type){
            if(_type =="D33"){
                $("#box_2").find(".discount").each(function(_index){
                    $(this).html("$" + Aprice[_index] + " / 월");
                });
            }else if(_type =="D37"){
                $("#box_2").find(".discount").each(function(_index){
                    $(this).html("$" + Bprice[_index] + " / 월");
                });
            }else if(_type =="D60"){
                $("#box_2").find(".discount").each(function(_index){
                    $(this).html("$" + Cprice[_index] + " / 월");
                });
            }else if(_type =="D100"){
                $("#box_2").find(".discount").eq(0).html("$" + Dprice[0] + " / 월");
            }

            if(_type == "D100"){
                $("#box_2").find(".txt").eq(0).addClass("centerLine");
            }else{
                $("#box_2").find(".txt").each(function(){
                    $(this).addClass("centerLine");
                });
            }


        }
        function goNext(){
            if($("#box_1").hasClass("displayNone")){
                var buy_type = $("#box_1").find("input:checked").attr("value");
                var sub_type = $("#box_2").find("input:checked").attr("value");
                if(sub_type == 0){
                    code_input = "d";
                }

                if(code_input == "s" && sub_type != 1){
                    code_input = "d";
                }
                var it_id = buy_type+sub_type+code_input;

                location.href =  "http://49.247.128.232/3hvita/mobile/shop/item.php?it_id=" + it_id;
            }else{
                $("#box_1").addClass("displayNone");
                $("#box_2").removeClass("displayNone");
                $(".promotion").css("display", "block");
                $(".subscribeHeader").find("li").each(function(_index){
                    if(_index == 1){
                        //$(this).addClass("on");
                    }
                });
                $("#btnPrev").css("display", "inline-block");
                $(".prev").css("cursor", "pointer");

            }
        }
        function goPrev(){
            $("#box_1").removeClass("displayNone");
            $("#box_2").addClass("displayNone");
            $(".promotion").css("display", "none");
            $(".subscribeHeader").find("li").each(function(_index){
                if(_index == 0){
                    $(this).addClass("on");
                }
                else{
                    $(this).removeClass("on");
                }
            });
            $("#btnPrev").css("display", "none");
        }
        $(".pText").on("keyup", function(){
            var strTemp = $(this).val().replace(/\-/g,"");
            strTemp = strTemp.replace(/[^a-zA-Z0-9]/g, "").toUpperCase();
            $(this).val(strTemp.replace(/([0-9A-Z]{8})(-?[0-9A-Z]+)/, "$1-$2").replace(/([0-9A-Z]{4})(-?[0-9A-Z]+)/, "$1-$2"));
        });
    </script>
<?php
include_once('./_tail.php');