<?php
//제노플랜 키트 시리얼넘버 유효성 검사
include_once('./_common.php');
include_once ('./Curl_common.php');
header('Content-Type: application/json; charset=utf-8');
$api_url = $GenoplanUrl."/api/external/checkSerialNumber.php";
$serialNumber = $_GET['serialNumber'];
$w = $_GET["w"];
if($w == "o"){
    $check_3hvita = $dao->checkSerialNumber($serialNumber);
    if($check_3hvita['isChk'] == "1"){
        $output['success'] = false;
        $output['success2'] = false;
        $output = json_encode($output, JSON_UNESCAPED_UNICODE);
        echo $output;
    }else{
        $output['success'] = true;
        $output['success2'] = true;
        $output = json_encode($output, JSON_UNESCAPED_UNICODE);
        echo $output;
    }
}else{
    $check_3hvita = $dao->checkSerialNumber($serialNumber);
    if($check_3hvita['isChk'] == "1"){
        $output = array();
        $output['success'] = false;
        $output['success2'] = false;
        $output = json_encode($output, JSON_UNESCAPED_UNICODE);
        echo $output;
    }else{
        $output = array();
        $curl = new Curl_common();

        $postData = array();
        $postData['requestKey'] = $GenoplanReqyestKey;
        $postData['serialNumber'] = $serialNumber;

        $response_data = $curl->curl_post($api_url , $postData);
        $output = json_encode($response_data, JSON_UNESCAPED_UNICODE);
        echo $output;
    }
}

