<?php
// 루틴 설문조사 DB 입력
include_once('./_common.php');

//error_reporting(E_ALL);
//ini_set("display_errors",1);

header('Content-Type: application/json');
$json_quiz_data = stripslashes($_POST['quiz_data']);
$arr_quiz_data = json_decode($json_quiz_data,true);

try{
    foreach ($arr_quiz_data as $arr){
        $arr = json_decode($arr,true);
        $dao->setRootineQuizData($member['mb_id'],$arr);
    }
    echo true;
}catch (Exception $e){
    echo false;
}
