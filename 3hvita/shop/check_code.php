<?php
include_once('./_common.php');

//error_reporting(E_ALL);
//ini_set("display_errors",1);

$req =  $_GET['req'];

switch ($req){
    case 'c' :
        $sp_id = $_GET['sp_id'];
        $sp_id = strtoupper($sp_id);
        $sql = "select sp_used , sp_type from stripe_coupon where sp_id = '{$sp_id}' ";
        $result = sql_fetch($sql);
        if($result != null){
            if($result['sp_used'] == "N"){
                set_session("stripe_code",$sp_id);
            }
        }
        echo json_encode($result);
        break;
    case 'u' :

        $sp_id = $_GET['sp_id'];
        $sp_id = strtoupper($sp_id);
        $od_id = $_GET['od_id'];
        $used_time = date("Y-m-d H:i:s");

        $sql = "update stripe_coupon set mb_id = '{$member['mb_id']}' , sp_used = 'Y' , od_id = '{$od_id}' , sp_used_datetime = '{$used_time}' where sp_id = '{$sp_id}' ";
        echo $sql;
        $result = sql_query($sql);
        break;
}


