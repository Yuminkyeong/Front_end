<?php
include_once('./_common.php');
include_once('./_head.php');

if(!$is_member)
    alert('회원로그인 후 이용해 주십시오.', G5_URL.'/bbs/login.php?url='.G5_URL.'/bbs/genoplan_kit_check.php');
?>

    <style type="text/css">
        #ft{min-width: 680px;}
        .subContainer{min-width: 680px}
    </style>
    <link rel="stylesheet" href="./jellyStyle.css">

    <div class="subContainer kit_check" style="margin-top:100px ">
        <form action="./genoplan_form.php">
            <div class="contents">
                <div>
                    <h1 class="mb-15">제품등록 - 신규</h1>
                    <div class="mb-30">타액수집기의 인증키 12자리 또는 13자리를 입력해주세요.</div>
                </div>
                <div class="kit_img mb-30">
                    <img data-v-292eee7e="" src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSJub25lIiBoZWlnaHQ9IjEwMyIgdmlld0JveD0iMCAwIDIwMiAxMDMiIHdpZHRoPSIyMDIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIwMSA5OC4xNDI5YzAgMS43MTcyLTEuMDg1IDMuMjg3MS0yLjc0OCAzLjcxNDEtLjQzMy4xMTItLjc2Mi4xNzQtLjgyOS4xMjhsLS4xMzItLjEwNC00MS4zNzQtMzIuNjQ3MWgtMTQ5LjkxN2MtMi43NjE0MyAwLTQuOTk5OTktMi4yMzg2LTQuOTk5OTktNXYtMjMuNjE3YzAtMi43NjE0IDIuMjM4NTctNSA1LTVoMTQ5LjkxNjk5bDQxLjM3NC0zMy4yNzg1OGMuMTY5LS4xNDk3OS4zNzEtLjI1NDc3LjU4Ni0uMzA4MWwuMTY0LS4wMzAyMi40ODYuMjAwNThjMS40OTcuNjE4MTYgMi40NzMgMi4wNzc3NCAyLjQ3MyAzLjY5NzA5eiIgZmlsbD0iI2ZmZiIgc3Ryb2tlPSIjMzQzYTQwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJtMTEyLjk1MiAzNS4wMDU3djM0LjIyODIiIHN0cm9rZT0iIzM0M2E0MCIgc3Ryb2tlLXdpZHRoPSIyIi8+PHBhdGggZD0ibTY5LjM4MTMgMzUuMDA1N3YzNC4yMjgyIiBzdHJva2U9IiMzNDNhNDAiIHN0cm9rZS13aWR0aD0iMiIvPjxwYXRoIGQ9Im0yNS44MTA1IDM1LjAwNTd2MzQuMjI4MiIgc3Ryb2tlPSIjMzQzYTQwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJtMTEyLjk1MiA0NC43ODUyaDE0LjY2OTJ2ODcuMTQwOGgtMTQuNjY5MnoiIHN0cm9rZT0iIzM0M2E0MCIgc3Ryb2tlLXdpZHRoPSIyIiB0cmFuc2Zvcm09Im1hdHJpeCgwIDEgLTEgMCAxNTcuNzM3MiAtNjguMTY2OCkiLz48cGF0aCBkPSJtNjkuMzgxMyA0NC43ODUyaDE0LjY2OTJ2NDMuNTcwNGgtMTQuNjY5MnoiIGZpbGw9IiNhOWQ5ZDYiIHN0cm9rZT0iIzQ5NTA1NyIgc3Ryb2tlLXdpZHRoPSIyIiB0cmFuc2Zvcm09Im1hdHJpeCgwIDEgLTEgMCAxMTQuMTY2NSAtMjQuNTk2MSkiLz48cGF0aCBkPSJtMTAzIDM2djI2aC02OHYtMjZ6IiBmaWxsPSIjZmZmIiBzdHJva2U9IiMzNDNhNDAiIHN0cm9rZS13aWR0aD0iMiIvPjxnIGZpbGw9IiMzNDNhNDAiPjxwYXRoIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0ibTY1LjYyNSAzOS44OTU1aC0xLjIxMDN2OC41NTdoMS4yMTAzem0tMjEuMTgwMSAwaC0xLjIxMDN2OC41NTcxaDEuMjEwM3ptMjQuODExMSAwaDMuMDI1OHY4LjU1N2gtMy4wMjU4em0tMS44MTU1IDBoLTEuMjEwM3Y4LjU1N2gxLjIxMDN6bTIzLjYwMDcgMGgxLjIxMDN2OC41NTdoLTEuMjEwM3ptMy4wMjU2IDBoLTEuMjEwMnY4LjU1N2gxLjIxMDJ6bS00MS4xNDk4IDBoMS4yMTAzdjguNTU3aC0xLjIxMDN6bTMuMDI1OCAwaC0xLjIxMDN2OC41NTdoMS4yMTAzem0xOC4xNTQ0IDBoMS4yMTAydjguNTU3aC0xLjIxMDJ6bS0yNy4yMzE3IDBoLTEuODE1NHY4LjU1N2gxLjgxNTR6bTMzLjI4MyAwaDEuMjEwM3Y4LjU1N2gtMS4yMTAzem0zLjYzMSAwaC0xLjgxNTR2OC41NTdoMS44MTU0em0tMzMuMjgzMSAwaDEuODE1NXY4LjU1N2gtMS44MTU1em0tMS44MTU0IDBoLS42MDUxdjguNTU3aC42MDUxem0yOC40NDE3IDBoLjYwNTJ2OC41NTdoLS42MDUyem03Ljg2NzEgMGgtLjYwNTJ2OC41NTdoLjYwNTJ6bS0yNi4wMjE0IDBoMS44MTU0djguNTU3aC0xLjgxNTR6bTMwLjI1NzIgMGgtMS44MTU0djguNTU3aDEuODE1NHptLTI3LjIzMTQgMGguNjA1MXY4LjU1N2gtLjYwNTF6bS00LjIzNiAwaC0uNjA1MXY4LjU1N2guNjA1MXoiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGQ9Im00My40MTYgNTQuNTM0My4xMzMyLS40OTUxYy4xMzMxLS40NzA2LjI2NjItLjk4NDEuMzgxMi0xLjQ3OTFoLjAyNDJjLjEzMzEuNDg4OS4yNTQyIDEuMDA4NS4zOTM0IDEuNDc5MWwuMTMzMS40OTUxem0xLjU3MzQgMS44NjQyaC45MzhsLTEuNDQwMy00LjUyM2gtMS4wNTI5bC0xLjQzNDIgNC41MjNoLjkwNzdsLjMxNDctMS4xNjEzaDEuNDUyM3oiLz48cGF0aCBkPSJtNDcuMzk2IDU0LjUzNDMuMTMzMi0uNDk1MWMuMTMzMS0uNDcwNi4yNjYyLS45ODQxLjM4MTItMS40NzkxaC4wMjQyYy4xMzMyLjQ4ODkuMjU0MiAxLjAwODUuMzkzNCAxLjQ3OTFsLjEzMzEuNDk1MXptMS41NzM0IDEuODY0MmguOTM4bC0xLjQ0MDMtNC41MjNoLTEuMDUyOWwtMS40MzQyIDQuNTIzaC45MDc3bC4zMTQ3LTEuMTYxM2gxLjQ1MjN6Ii8+PHBhdGggZD0ibTUxLjM3NiA1NC41MzQzLjEzMzItLjQ5NTFjLjEzMzEtLjQ3MDYuMjY2Mi0uOTg0MS4zODEyLTEuNDc5MWguMDI0MmMuMTMzMi40ODg5LjI1NDIgMS4wMDg1LjM5MzQgMS40NzkxbC4xMzMxLjQ5NTF6bTEuNTczNCAxLjg2NDJoLjkzOGwtMS40NDAyLTQuNTIzaC0xLjA1M2wtMS40MzQyIDQuNTIzaC45MDc3bC4zMTQ3LTEuMTYxM2gxLjQ1MjN6Ii8+PHBhdGggZD0ibTU1LjM1NjEgNTQuNTM0My4xMzMxLS40OTUxYy4xMzMxLS40NzA2LjI2NjItLjk4NDEuMzgxMi0xLjQ3OTFoLjAyNDJjLjEzMzIuNDg4OS4yNTQyIDEuMDA4NS4zOTM0IDEuNDc5MWwuMTMzMS40OTUxem0xLjU3MzMgMS44NjQyaC45MzhsLTEuNDQwMi00LjUyM2gtMS4wNTNsLTEuNDM0MiA0LjUyM2guOTA3N2wuMzE0Ny0xLjE2MTNoMS40NTI0eiIvPjxwYXRoIGQ9Im01OC4yNTg1IDU0Ljk2ODJoMS42NTJ2LS42NDE3aC0xLjY1MnoiLz48cGF0aCBkPSJtNjAuODczNCA1Ni4zOTg1aDEuNTk3NmMuOTg2NCAwIDEuNzM2OC0uNDIxNyAxLjczNjgtMS4zMzI1IDAtLjYxMTItLjM1NzEtLjk1MzUtLjg0MTItMS4wNjk2di0uMDMwNmMuMzgxMi0uMTM0NC42MTEyLS41NjIzLjYxMTItLjk3NzkgMC0uODQzNS0uNzAyLTEuMTEyNC0xLjYyMTgtMS4xMTI0aC0xLjQ4MjZ6bS44OTU2LTIuNjgzMnYtMS4xNDkxaC41MzI1Yy41Mzg2IDAgLjgwNDkuMTU4OS44MDQ5LjU1NjIgMCAuMzYwNi0uMjQ4MS41OTI5LS44MTcuNTkyOXptMCAxLjk4NjR2LTEuMzE0MWguNjIzM2MuNjE3MyAwIC45NDQuMTgzNC45NDQuNjIzNCAwIC40NzA3LS4zMzI4LjY5MDctLjk0NC42OTA3eiIvPjxwYXRoIGQ9Im02NS4xMTM0IDU2LjM5ODVoMS41OTc2Yy45ODY0IDAgMS43MzY4LS40MjE3IDEuNzM2OC0xLjMzMjUgMC0uNjExMi0uMzU3MS0uOTUzNS0uODQxMi0xLjA2OTZ2LS4wMzA2Yy4zODEzLS4xMzQ0LjYxMTItLjU2MjMuNjExMi0uOTc3OSAwLS44NDM1LS43MDE5LTEuMTEyNC0xLjYyMTgtMS4xMTI0aC0xLjQ4MjZ6bS44OTU3LTIuNjgzMnYtMS4xNDkxaC41MzI1Yy41Mzg2IDAgLjgwNDguMTU4OS44MDQ4LjU1NjIgMCAuMzYwNi0uMjQ4MS41OTI5LS44MTY5LjU5Mjl6bTAgMS45ODY0di0xLjMxNDFoLjYyMzJjLjYxNzMgMCAuOTQ0MS4xODM0Ljk0NDEuNjIzNCAwIC40NzA3LS4zMzI5LjY5MDctLjk0NDEuNjkwN3oiLz48cGF0aCBkPSJtNjkuMzUzNSA1Ni4zOTg1aDEuNTk3NWMuOTg2NCAwIDEuNzM2OC0uNDIxNyAxLjczNjgtMS4zMzI1IDAtLjYxMTItLjM1Ny0uOTUzNS0uODQxMS0xLjA2OTZ2LS4wMzA2Yy4zODEyLS4xMzQ0LjYxMTItLjU2MjMuNjExMi0uOTc3OSAwLS44NDM1LS43MDItMS4xMTI0LTEuNjIxOC0xLjExMjRoLTEuNDgyNnptLjg5NTYtMi42ODMydi0xLjE0OTFoLjUzMjVjLjUzODYgMCAuODA0OC4xNTg5LjgwNDguNTU2MiAwIC4zNjA2LS4yNDgxLjU5MjktLjgxNjkuNTkyOXptMCAxLjk4NjR2LTEuMzE0MWguNjIzM2MuNjE3MiAwIC45NDQuMTgzNC45NDQuNjIzNCAwIC40NzA3LS4zMzI4LjY5MDctLjk0NC42OTA3eiIvPjxwYXRoIGQ9Im03My41OTM1IDU2LjM5ODVoMS41OTc2Yy45ODY0IDAgMS43MzY3LS40MjE3IDEuNzM2Ny0xLjMzMjUgMC0uNjExMi0uMzU3LS45NTM1LS44NDExLTEuMDY5NnYtLjAzMDZjLjM4MTItLjEzNDQuNjExMi0uNTYyMy42MTEyLS45Nzc5IDAtLjg0MzUtLjcwMi0xLjExMjQtMS42MjE4LTEuMTEyNGgtMS40ODI2em0uODk1Ni0yLjY4MzJ2LTEuMTQ5MWguNTMyNWMuNTM4NiAwIC44MDQ5LjE1ODkuODA0OS41NTYyIDAgLjM2MDYtLjI0ODEuNTkyOS0uODE3LjU5Mjl6bTAgMS45ODY0di0xLjMxNDFoLjYyMzNjLjYxNzIgMCAuOTQ0LjE4MzQuOTQ0LjYyMzQgMCAuNDcwNy0uMzMyOC42OTA3LS45NDQuNjkwN3oiLz48cGF0aCBkPSJtNzcuNTc5NCA1NC45NjgyaDEuNjUydi0uNjQxN2gtMS42NTJ6Ii8+PHBhdGggZD0ibTgyLjAyMTggNTYuNDg0MWMuNTgxIDAgMS4wNTktLjIzMjMgMS40MjgyLS42NjYzbC0uNDcyLS41NjIzYy0uMjQyMS4yNjI4LS41NDQ3LjQ0NjItLjkyNTkuNDQ2Mi0uNzA4IDAtMS4xNjc5LS41OTI5LTEuMTY3OS0xLjU3NjkgMC0uOTcxOS41MDgzLTEuNTU4NiAxLjE4Ni0xLjU1ODYuMzM4OSAwIC41OTkxLjE1ODkuODIzLjM3ODlsLjQ3Mi0uNTc0NWMtLjI5MDQtLjMwNTYtLjc0NDMtLjU4MDctMS4zMTMxLS41ODA3LTEuMTMxNiAwLTIuMDgxNy44NzQxLTIuMDgxNyAyLjM2NTQgMCAxLjUwOTcuOTE5OCAyLjMyODggMi4wNTE0IDIuMzI4OHoiLz48cGF0aCBkPSJtODUuODgzNiA1Ni40ODQxYy41ODEgMCAxLjA1OS0uMjMyMyAxLjQyODItLjY2NjNsLS40NzItLjU2MjNjLS4yNDIxLjI2MjgtLjU0NDcuNDQ2Mi0uOTI1OS40NDYyLS43MDggMC0xLjE2NzktLjU5MjktMS4xNjc5LTEuNTc2OSAwLS45NzE5LjUwODMtMS41NTg2IDEuMTg2MS0xLjU1ODYuMzM4OCAwIC41OTkuMTU4OS44MjI5LjM3ODlsLjQ3MjEtLjU3NDVjLS4yOTA1LS4zMDU2LS43NDQ0LS41ODA3LTEuMzEzMi0uNTgwNy0xLjEzMTYgMC0yLjA4MTcuODc0MS0yLjA4MTcgMi4zNjU0IDAgMS41MDk3LjkxOTggMi4zMjg4IDIuMDUxNCAyLjMyODh6Ii8+PHBhdGggZD0ibTg5Ljc0NTUgNTYuNDg0MWMuNTgwOSAwIDEuMDU5LS4yMzIzIDEuNDI4MS0uNjY2M2wtLjQ3Mi0uNTYyM2MtLjI0MjEuMjYyOC0uNTQ0Ni40NDYyLS45MjU5LjQ0NjItLjcwOCAwLTEuMTY3OS0uNTkyOS0xLjE2NzktMS41NzY5IDAtLjk3MTkuNTA4My0xLjU1ODYgMS4xODYxLTEuNTU4Ni4zMzg4IDAgLjU5OTEuMTU4OS44MjMuMzc4OWwuNDcyLS41NzQ1Yy0uMjkwNS0uMzA1Ni0uNzQ0NC0uNTgwNy0xLjMxMzItLjU4MDctMS4xMzE2IDAtMi4wODE3Ljg3NDEtMi4wODE3IDIuMzY1NCAwIDEuNTA5Ny45MTk4IDIuMzI4OCAyLjA1MTUgMi4zMjg4eiIvPjxwYXRoIGQ9Im05My42MDczIDU2LjQ4NDFjLjU4MDkgMCAxLjA1OS0uMjMyMyAxLjQyODEtLjY2NjNsLS40NzItLjU2MjNjLS4yNDIxLjI2MjgtLjU0NDYuNDQ2Mi0uOTI1OS40NDYyLS43MDggMC0xLjE2NzktLjU5MjktMS4xNjc5LTEuNTc2OSAwLS45NzE5LjUwODMtMS41NTg2IDEuMTg2MS0xLjU1ODYuMzM4OSAwIC41OTkxLjE1ODkuODIzLjM3ODlsLjQ3Mi0uNTc0NWMtLjI5MDUtLjMwNTYtLjc0NDMtLjU4MDctMS4zMTMyLS41ODA3LTEuMTMxNiAwLTIuMDgxNy44NzQxLTIuMDgxNyAyLjM2NTQgMCAxLjUwOTcuOTE5OCAyLjMyODggMi4wNTE1IDIuMzI4OHoiLz48L2c+PC9zdmc+" alt="">
                </div>
                <input type="hidden">
                <input class="serial_text non_phoneNumber mb-15" id="sn" name="sn" type="text" placeholder="AAAA-BBBB-DDDD" maxlength="14">
                <div id="false_div" class="mb-15" style="text-align: center; color: red">
                    사용할 수 없는 인증키 입니다.
                </div>
                <div class="mb-15">
                    <button class="keyBtn" type="button" onclick="checkSerialNumber()">인증키 확인</button>
                </div>
                <div id="success_div" class="" >
                    <div class="boxText mb-15">동의서 작성 후 제품등록이 가능합니다.</div>
                    <button class="agreeBtn" type="submit">동의서 작성</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        document.addEventListener('keydown', function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
            };
        }, true);
        function checkSerialNumber(){
            $.ajax({
                type : "get"
                ,data : { serialNumber : $("#sn").val() }
                // ,dataType:"text"
                ,url : "./checkSerialNumber.php"
                ,success : function ( data ){
                    if(data['success']){
                        $("#success_div").show();
                        $("#false_div").hide();
                    }else{
                        $("#false_div").show();
                        $("#success_div").hide();
                    }
                }
                ,error : function ( data ){
                    console.log(data);
                }
            });
        }
        $(".serial_text").on("keyup", function(){
            var strTemp = $(this).val().replace(/\-/g,"");
            strTemp = strTemp.replace(/[^a-zA-Z0-9]/g, "").toUpperCase();
            $(this).val(strTemp.replace(/([0-9A-Z]{8})(-?[0-9A-Z]+)/, "$1-$2").replace(/([0-9A-Z]{4})(-?[0-9A-Z]+)/, "$1-$2"));

        });
    </script>

<?php
include_once('./_tail.php');