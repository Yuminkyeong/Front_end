<?php
include_once('./_common.php');
include_once('./_head.php');

if(!$is_member)
    alert('회원로그인 후 이용해 주십시오.', G5_URL.'/bbs/login.php?url='.G5_URL.'/api/genoplan_kit_check.php');
?>

<div class="registered_container">
    <form action="./setAgreementGenoplan.php" id="genoForm" method="post">
        <div class="form-group">
            <label for="">키트번호</label>
            <input type="text" name="serialNumber" class="form-control" id="serialNumber" value="<?=$_GET['sn']?>" required readonly maxlength="15">
        </div>

        <div class="form-group">
            <label for="">성명</label>
            <input type="text" name="username1" class="form-control half" id="username1" placeholder="성" required value="<?php echo isset($member) == true ? iconv_substr($member["mb_name"],0,1,"utf-8") :"" ?>">
            <input type="text" name="username2" class="form-control half" id="username2" placeholder="이름" required value="<?php echo isset($member) == true ? mb_substr($member["mb_name"],1) :"" ?>">
            <input type="hidden" name="username" id="username"value=""><!--이름전송데이터-->
        </div>

        <div class="form-group half">
            <label for="">생년월일</label>
            <select id="user_year" name="user_year">
                <?php
                for($i = 2021; $i > 1900; $i--){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>
            <select id="user_month" name="user_month">
                <?php
                for($i = 1; $i <= 12; $i++){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>

            <select id="user_day" name="user_day">
                <?php
                for($i = 1; $i <= 31; $i++){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>
            <input type="hidden" name="birthday" id="birthday" value=""><!--생년월일-->
        </div>

        <div class="form-group half">
            <label for="">성별</label>
            <input type="radio" id="남자"name="gender" value="M">
            <label class="radioLabel" for="남자">남자</label>
            <input type="radio" id="여자"name="gender" value="F">
            <label class="radioLabel" for="여자">여자</label>

        </div>

        <div class="form-group">
            <label for="이메일">이메일주소</label>
            <input type="email" class="form-control half-left" id="이메일" aria-describedby="emailHelp" placeholder="이메일 주소" required>
        </div>

        <!--<div class="form-group">
            <label for="address">자택주소</label>
            <div><input type="text" class="form-control" id="주소" placeholder="주소 1 / 도로명 주소"></div>
            <div><input type="text" class="form-control" id="주소2" placeholder="주소 2 / 건물명 / 동 / 호"></div>
            <div><input type="text" class="form-control" id="도시" placeholder="도시"></div>
            <div><input type="text" class="form-control" id="주도지역" placeholder="주 / 도 / 지역"></div>
            <div><input type="text" class="form-control" id="우편번호" placeholder="우편번호"></div>
        </div>-->
        <div class="form-group">
            <label for="phone">휴대폰번호<span> ("-"없이 번호만 입력 하세요)</span></label>
            <input type="text" class="form-control half-left" id="phone" name="phone" placeholder="휴대폰번호" maxlength="13"required/>
        </div>
        <div class="file-text">전자서명</div>
        <div id="singCanvas" class= "">
            <canvas id="sig-canvas" width="640" height="260" class=" border border-primary">
                Get a better browser, bro.
            </canvas>
            <div class="subBox">
                <div class="mb-15">네모 빈 칸에 본인 서명을 작성하세요</div>
                <div class="">※ 천천히 정확하게 서명을 작성해야 인식이 잘 됩니다</div>

            </div>
            <div class="singBtnBox">
                <input type="button" id="sig-clearBtn" class="singBtn"  value="다시쓰기">
                <input type="button" id="사인제출" class="singBtn" onclick="CloseMySelf(this);" value ="제출">
            </div>

        </div>
        <div class="">
            <img id="sig-image" src="" alt=""/>
            <input type="hidden" id="sig-image-uri" name="sig-image-uri"/>
        </div>
        <div class="mb-15">전자서명은 법적 구속력이 있는 종이 동의서에 본인 또는 대리인의 직접 한 서명과 동일한 법적 효력을 가집니다. 따라서 전자서명 후 하단의 약관 동의 및 필수동의 항목에 체크를 해야 해당 문서의 내용에 동의한 것으로 처리됩니다.</div>
        <!--<div class="form-group ">사인을 제출 해주세요.</div>-->


        <div class="form-group">
            <label for="">필수동의 항목</label>
            <div class="agreeBox mb-15"><input type="checkbox" required name="dna_agree">유전자검사 동의서(필수)<div class="arrow"><img src="./arrowRight.png"></div></div>
            <div class="agreeBox mb-15"><input type="checkbox" required name="third_party_agree">민감정보 제3자 제공 동의서(필수)<div class="arrow"><img src="./arrowRight.png"></div></div>
            <div class="agreeBox mb-15"><input type="checkbox" required name="third_party_agree_seller">민감정보 제3자 제공 동의서(판매자)(필수)<div class="arrow"><img src="./arrowRight.png"></div></div>
            <div class="agreeBox"><input type="checkbox" required name="dna_cooperation_agree">유전자연구 협력 동의서(필수)<div class="arrow"><img src="./arrowRight.png"></div></div>
            <!--			<label for="">선택동의 항목</label>-->
            <input type="hidden"    name="agree_code" value="2584">
        </div>

        <!--<input type="text" name="serialNumber" value="" readonly>
        <input type="text" name="agreement" value="3840">
        <input type="text" name="username" value="라한솔">
        <input type="text" name="phone" value="010-2323-1212">
        <input type="text" name="birthday" value="1999-09-09">
        <input type="text" name="gender" value="M">
        <input type="hidden" name="signature" value="">-->
        <div class="submitBox">
            <button class="submitBtn" type="submit">전송</button>
        </div>
    </form>
    <div class="popup">
        <div class="whiteBack">
            <div class="popClose">x</div>
            <div class="popTitle"></div>
            <div class="popContents"></div>
            <div data="" class="popConfirmBtn">확인</div>
        </div>
    </div>
</div>
<script src="https://www.3hvita.com/api/signature05.js"></script>
<script>
    var aPopContents = new Array();
    aPopContents[0] = "유전자검사 서비스에 관한 설명사항<br><br>1. 본 검사의 의의<br><br>(1) 본 검사의 목적<br><br>제노플랜재팬 주식회사 (이하 「제노플랜」)가 제공하는 유전자검사 서비스 (이하 「본 검사」)는 개인 맞춤 건강관리를 위해 고객의 유전 정보와 설문 답변 등을 종합하여 개인의 유전적 위험도 및 그 경향에 관한 정보 제공을 목적으로 합니다.<br><br>・본 검사는 의료 행위, 법의학 감정 및 유전성 질환을 검사하는 서비스가 아니며, 의사의 진단을 대체할 수 없습니다. ・본 검사 결과는 검사를 실시한 고객과 유사한 유전 정보를 지닌 집단의 유전적 위험도와 경향을 통계적인 확률로 나타냅니다. ・본 검사 결과는 현재의 건강상태를 나타내는 것이 아닙니다. ・본 검사를 통해 예상치 못한 질병이나 체질의 위험 또는 본인과 유사한 유전자를 지닌 가족의 유전적 위험도가 확인되는 경우가 있습니다<br><br>(2) 본 검사의 방법<br><br>본 검사는 고객의 타액에서 채취한 DNA(이하 「시료」)의 SNP(단일염기다형성)를 해석하는 방법으로 진행됩니다. 본 검사는 일본에 소재한 제노플랜 연구소에서 진행되며 본 검사의 수행을 위해 고객의 시료가 일본으로 반출됩니다. 본 검사의 결과 해석은, 아시아인을 대상으로 한 연구를 우선 순위로 하여 항목과의 연관성을 입증한 신뢰도 높은 논문을 기반으로 이루어집니다. 제노플랜은 최신 연구 성과를 지속적으로 반영하여 검사의 정확도를 향상시키고 있습니다. 본 검사에 사용된 분석 기법이나 관련 분야의 연구 진전 등으로 인해 분석 기법, 분석 정확도, 결과의 해석 방법이 변경될 수 있으며, 이로 인해 검사 결과가 변경될 수 있습니다.시료의 변질 등 제노플랜의 책임없는 사유로 인해 검사를 진행할 수 없는 경우 일부 서비스 제공이 제한될 수 있습니다.<br><br>(3) 시료의 취급∙관리<br><br>제노플랜은 본 검사가 진행되는 동안 안전한 방법으로 시료를 보존∙관리하며, 검사 완료 후 관련 법령에 따라 적법한 방식으로 폐기합니다<br><br>(4) 예측되는 결과 및 불이익<br><br>고객은 본 검사의 결과로 인해 예상치 못한 혼란이나 정신적 부담을 느낄 수 있습니다. 제노플랜은 고객의 개인정보 보호를 위하여 정보 보안 관리에 최선을 다하며, 본인 외 제3자의 검사 결과 열람을 제한합니다. 다만, 본인의 동의가 있는 경우에 한해 검사 결과를 제3자에게 제공할 수 있으며, 이로 인해 검사 결과가 부적절하게 취급되는 경우 본인 또는 가족이 사회적 불이익을 받을 수 있습니다.<br><br>2. 동의서 철회<br><br>고객은 본 검사의 동의를 언제든지 철회할 수 있습니다. 본 검사 동의 후 동의를 철회하고자 할 경우에는 제노플랜 웹사이트를 통해 문의주시기 바랍니다. 동의가 철회되면, 제노플랜이 보관하는 시료와 검사 결과는 관련 법령에 따라 적법하게 폐기됩니다. 단, 검사 비용은 환불되지 않습니다.<br><br>3. 시료 및 정보 취급<br><br>(1) 정보 관리<br><br>제노플랜은 고객의 안전한 개인정보 보호를 위하여 특정 개인을 식별할 수 없도록 조치（이하 「비식별화」）하여 고객의 개인정보를 관리합니다. 고객의 개인정보는 개인정보보호법에 따라 비식별화된 정보로 엄격히 관리하며, 제3의 연구 기관에 검사를 의뢰하는 경우에도, 모든 개인정보는 비식별화 처리됩니다.<br><br>(2) 제3자 정보 제공<br><br>제노플랜은 개인정보에 해당되지 않는 비식별화된 정보를 제3자에게 제공하는 경우가 있으며, 이 경우 제노플랜의 웹사이트 또는 앱을 통해 고지합니다. 또한 제노플랜은 개인정보보호법에 따라 고객의 동의를 얻은 경우에 한하여 제3자에게 정보를 제공합니다. 제노플랜은 검사 정확도의 향상을 위해 고객의 유전 정보를 하기 법인에 제공할 수 있습니다.<br><br>・Genoplan Inc. ・Genoplan Korea Inc. ・Genoplan Singapore Pte. Ltd.<br><br>상기 법인은 제노플랜의 관계회사이며, 제노플랜과 동일한 수준의 보안 관리 시스템을 이용하여 정보를 관리합니다. 제노플랜은 고객으로부터 수령한 시료를 상기 법인에 제공하지 않습니다.<br><br>4. 개인유전정보의 제공<br><br>본 검사의 결과는 제노플랜 웹사이트 또는 앱으로 제공되며, 개인정보보호법에 의거하여 이메일, 문자, 팩스 등으로 발송하지 않습니다. 단, 법원 또는 정부기관에서 정보 제공을 요청하는 경우, 제노플랜은 법령에 따라 요구되는 최소 한도 내에서 필요 정보를 제공합니다.<br><br>5. 문의처<br><br>본 검사에 관해 궁금한 점은 제노플랜 웹사이트를 통해 문의주시기 바랍니다. 제노플랜은 각종 법령 등에 따라 답변 여부를 판단하여 결정할 수 있으며, 문의 내용에 따라 답변을 드리지 않을 수도 있습니다.<br><br>6. 면책<br><br>제노플랜은 본 검사의 결과로 인하여 고객 및 제3자에게 피해가 발생한 경우 그 책임을 지지 않습니다. 또한, 제노플랜은 이하의 사유로 인해 고객 및 제3자에게 손해가 발생한 경우에도 책임을 지지 않습니다.<br><br>・고객이 본 검사를 현재의 건강 상태나 체질의 확인 또는 질병의 진단을 목적으로 사용하였을 때 ・고객이 본 검사 결과 및 제반 정보를 하기의 목적으로 사용하였을 때     - 상업 행위 등 사적 이용 외 목적     - 유전성 질환 및 법의학 감정 등을 위한 목적 ・제노플랜이 정한 방법에 따르지 않고 시료를 채취, 보존, 배송 등을 하였을 때 ・배송업체가 제노플랜의 예상을 벗어난 취급 및 관리하여 시료가 변질되거나 잘못 배송되었을 때 ・고객의 귀책사유로 인해 검사 접수가 되지 않거나 시료가 변질되어 본 검사 결과를 얻지 못하였을 때 ・기술 및 연구의 진전 등으로 인해 본 검사 결과 및 제반 정보가 변경되었을 때 ・천재지변 및 불가항력 등의 발생으로 인해 본 검사 결과 및 제반 정보가 변경되었을 때<br><br>7. 준거법과 관할<br><br>본 동의서에 관한 준거법은 일본법으로 합니다. 본 동의서와 관련하여 고객과 제노플랜 간에 분쟁이 발생하는 경우, 해당 분쟁(조정 포함)에 대해서는 도쿄간이재판소 또는 도쿄지방재판소를 제1심 전속적 합의관할로 합니다."
    aPopContents[1] = "제노플랜재팬 주식회사 (이하 “당사” 라고 함) 는 당사가 제공하는 유전자 검사 서비스 (이하 “본검사” 라고 함) 에 관련 하여 당사가 취득하는 고객의 유전자정보, 유전적 위험도 및 그 경향에 관한 정보 외 본 검사에 따라 얻는 일체의 민감정보 (개인정보처리방침제2조제3항에 규정된 민감정보를 의미합니다.) 를 하기와 같이 제3자 에게 제공합니다.<br><br>1. 민감정보를 제공받는 자 : 제노플랜헬스케어, Roy Group Inc., Claya Inc.<br><br>2. 민감정보를 제공받는 자의 민감정보 이용 목적 : Mybook 구매 및 유전자 검사 결과 기반 맞춤 상담<br><br>3. 제공하는 민감정보의 항목 : 유전자검사 결과<br><br>4. 민감정보를 제공받는 자의 민감정보 보유 및 이용 기간 : 제휴 계약의 계약 기간 종료 까지의 기간 또는 고객에 의한 개인정보 제3자 제공 동의의 철회 시. 덧붙여 동의의 철회는 당사 홈페이지를 통하여 가능 합니다.<br><br>5. 귀하는 동의를 거부할 수 있으나, 동의를 거부할 경우 유전자 기반 맞춤 상품 또는 추천 서비스가 제공되지 않습니다."
    aPopContents[2] = "제노플랜재팬 주식회사 (이하 “당사” 라고 함) 는 당사가 제공하는 유전자 검사 서비스 (이하 “본검사” 라고 함) 에 관련 하여 당사가 취득하는 고객의 유전자정보, 유전적 위험도 및 그 경향에 관한 정보 외 본 검사에 따라 얻는 일체의 민감정보 (개인정보처리방침제2조제3항에 규정된 민감정보를 의미합니다.) 를 하기와 같이 제3자 에게 제공합니다.<br><br>1. 민감정보를 제공받는 자 : 유전자분석 서비스 판매자<br><br>2. 민감정보를 제공받는 자의 민감정보 이용 목적 : Mybook 구매 및 유전자 검사 결과 기반 맞춤 상담<br><br>3. 제공하는 민감정보의 항목 : 유전자검사 결과<br><br>4. 민감정보를 제공받는 자의 민감정보 보유 및 이용 기간 : 제휴 계약의 계약 기간 종료 까지의 기간 또는 고객에 의한 개인정보 제3자 제공 동의의 철회 시. 덧붙여 동의의 철회는 당사 홈페이지를 통하여 가능 합니다.<br><br>5. 귀하는 동의를 거부할 수 있으나, 동의를 거부할 경우 유전자 기반 맞춤 상품 또는 추천 서비스가 제공되지 않습니다."
    aPopContents[3] = "1. 연구 협력의 의의<br><br>제노플랜은 고객이 동의한 경우 본 검사를 통해 얻은 고객의 인체유래물등(고객의 시료와 그로부터 얻은 유전정보)을 맞춤형 서비스 실현을 위한 유전자연구에 이용합니다. 맞춤형 서비스 실현을 위한 유전자연구란 고객의 유전정보, 식생활, 생활환경 등의 정보를 이용하여 향후 발병할 수 있는 질병의 예측 정확도를 높이고 예방책을 찾기 위한 연구（이하「본 연구」）입니다. 제노플랜은 본 연구를 위해 귀하의 인체유래물등과 식생활, 운동습관과 같은 설문 정보를 활용합니다. 다만 본 연구에 이용되는 정보 및 설문 항목은 추가・변경될 수 있습니다.<br><br>제노플랜이 귀하의 인체유래물등을 본 연구에 이용하는 것을 동의하실 경우 「유전자연구 협력 동의서」(이하 「본 동의서」)를 작성해주시기 바랍니다. 본 동의서에 대한 동의 여부는 귀하가 자발적으로 선택할 수 있으며, 본 검사 제공에 어떠한 영향도 미치지 않습니다. 즉, 본 동의서에 동의하지 않더라도 본 검사 제공에 불이익은 없습니다.<br><br>2. 동의의 철회<br><br>귀하는 본 동의서에 대한 동의를 언제든지 철회할 수 있으며, 동의 철회에 대한 불이익은 없습니다. 귀하가 동의를 철회할 경우 제노플랜은 보관하고 있던 귀하의 인체유래물등을 지체없이 관련 법령에 따라 안전하고 적법하게 폐기합니다. 단, 귀하의 개인정보가 재식별 가능성이 없는 비식별정보에 해당하는 경우 귀하가 동의를 철회하더라도 이미 연구에 활용되고 있거나 연구 결과가 발표된 경우에는 귀하의 인체유래물등의 이용을 중지할 수 없습니다.<br><br>3. 연구의 기간<br><br>본 연구는 제노플랜 내부심사위원회의 승인을 통해 그 기간이 정해집니다. 승인된 연구는, 연구책임자의 허가 후 1년동안 진행되며, 기간의 연장이 필요할 경우 제노플랜의 내부심사위원회의 별도 승인을 받아 기간을 연장할 수 있습니다. 이 경우, 제노플랜의 웹사이트 등을 통해 연장된 기간을 게시합니다.<br><br>4. 연구의 방법<br><br>본 연구는 제노플랜의 윤리심사위원회의 승인을 받아 이루어집니다. 본 연구를 위해 이용되는 유전정보의 범위는 제노플랜이 본 검사를 통해 귀하에게 제공하는 범위보다 넓습니다. 본 연구의 성과는 학회 또는 학술지 등에 발표될 수 있으며, 제노플랜의 웹사이트 등을 통해서도 공개됩니다.<br><br>5. 시료 등의 취급<br><br>제노플랜은 귀하의 인체유래물등을 본 연구에 활용하는 경우 새로운 인증키를 부여하여 재식별이 가능한 경우와 불가능한 경우로 구분하여 관리합니다. 제노플랜이 본 연구 외 제노플랜의 윤리심사위원회의 승인을 얻어 실시하는 연구에서 인체유래물등의 이용을 종료하였을 때에는 관련 법령에 따라 안전하고 적법하게 인체유래물등을 폐기합니다.<br><br>6. 향후 다른 연구（인간 게놈・유전자해석연구 포함）에 이용될 가능성<br><br>제노플랜은 귀하로부터 제공받는 인체유래물등을 윤리심사위원회의 승인을 받아 다른 연구기관에 제공할 수 있으며, 제공된 인체유래물등은 목적이 특정되지 않은 연구（인간 게놈・유전자해석 연구 포함）에 이용될 수 있습니다.<br><br>7. 공동연구<br><br>제노플랜은 다른 연구기관(기업 포함)과 공동 연구를 수행할 수 있습니다. 공동연구는 제노플랜과 공동 연구기관의 윤리심사위원회의 승인을 받아 수행할 수 있으며, 연구 착수 전 제노플랜이 관리하는 웹사이트에 관련 정보를 게시합니다. 제노플랜은 공동연구 진행을 위해 인체유래물등을 공동 연구기관에 제공할 수 있습니다.<br><br>8. 제3자 제공<br><br>제노플랜은 내부심사위원회의 승인 후 제노플랜의 연구 결과 및 인체유래물등을 제3자가 수행하는 연구를 위해 제공할 수 있습니다. 단, 본 경우에도 제노플랜은 모든 정보를 비식별화여 제3자에게 제공합니다.<br><br>9. 지식 재산권<br><br>본 연구의 결과로 발생한 지식재산 등의 권리 및 이에 따른 경제적 이익은 모두 제노플랜에 귀속됩니다. 또한, 제노플랜과 제3자의 공동연구의 결과로 발생한 지식재산 등의 권리 및 이에 따른 경제적 이익은 제노플랜과 공동연구기관(또는 연구자)에 귀속됩니다.<br><br>10. 본 연구의 책임자<br><br>본 연구의 책임자는 아래와 같습니다.<br><br>제노플랜재팬 주식회사<br><br>현지책임자 : Shinya Eto<br><br>11. 본 연구에 관한 문의<br><br>본 연구와 관련된 궁금한 사항은 제노플랜 웹사이트를 통해 문의주시기 바랍니다.<br><br>12. 준거법과 관할<br><br>본 동의서에 관한 준거법은 일본법으로 합니다. 본 동의서와 관련하여 고객과 제노플랜 간에 분쟁이 발생하는 경우 해당 분쟁（조정을 포함함）에 대해서는 도쿄간이재판소 또는 도쿄지방재판소를 제1심 전속적 합의관할로 합니다."
    $(document).ready(function(){
        $("#phone").on("keyup",function(){
            $(this).val($(this).val().replace(/[^0-9]/g, ""));
            var strTemp = $(this).val().replace(/\-/g,"");
            $(this).val(strTemp.replace(/([0-9A-Z]{7})(-?[0-9A-Z]+)/, "$1-$2").replace(/([0-9A-Z]{3})(-?[0-9A-Z]+)/, "$1-$2"));
        });
        $(".agreeBox").on("click", function(e){
            if($(this).find("input[type=checkbox]").is(":checked")){
                $(this).find("input[type=checkbox]").prop("checked", false);
            }
            else{
                openPop($(this));
            }

        });
        $(".agreeBox").find("input[type=checkbox]").on("click", function(e){
            $(this).prop("checked", !$(this).is(":checked"));
        })
        function openPop(_target){
            $(".popup").find(".popTitle").html(_target.text());
            $(".popup").find(".popContents").html(aPopContents[$(".agreeBox").index(_target)]);
            $(".popup").find(".popConfirmBtn").attr("data", $(".agreeBox").index(_target));
            $(".popup").css("display", "block");
            $(".popup").find(".popContents").scrollTop(0);
        }
        $(".popClose").on("click", function(){
            $(".agreeBox").eq($(".popConfirmBtn").attr("data")).find("input[type=checkbox]").prop("checked", false);
            $(".popup").css("display", "none");
        });

        $(".popConfirmBtn").on("click", function(){
            $(".agreeBox").eq($(".popConfirmBtn").attr("data")).find("input[type=checkbox]").prop("checked", true);
            $(".popup").css("display", "none");
        });
        $("#genoForm").on("submit", function(){

            if($('input:checkbox[name="dna_cooperation_agree"]').is(":checked")){
                console.log("tete");
            }

            if($('#sig-image-uri').val() == ""){
                alert("사인을 제출해주세요");
                return false;
            }
            $("#username").val($("#username1").val() + $("#username2").val())
            $("#birthday").val($("#user_year").val() + "-" + itostr($("#user_month").val()) + "-" + itostr($("#user_day").val()));

            return true;
        });

    });
    function itostr(_num){
        return (Number(_num) < 10) ? "0"+_num : _num;
    }
    function CloseMySelf(sender) {
        try {
            var canvas = document.getElementById("sig-canvas");
            $("#singCanvas").css("display", "none");
            var sigImage = document.getElementById("sig-image");
            $('#sig-image-uri').val(canvas.toDataURL());
            sigImage.setAttribute("src", canvas.toDataURL());
        } catch (err) {
        }
    }
</script>