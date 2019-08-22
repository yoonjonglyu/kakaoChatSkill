<?php // author - ISA(류윤종)\

// 카카오톡 봇 2.0 기본 설정

define('VERSION', "2.0");

function add_text($I){
    global $count, $response;

    $response['template']['outputs'][$count]['simpleText']['text'] ="$I";
    $count++;

    return $response;
}

function add_image($I, $A){
    global $count, $response;

    $response['template']['outputs'][$count]['simpleImage']['imageUrl'] ="$I";
    $response['template']['outputs'][$count]['simpleImage']['altText'] ="$A";
    $count++;
    
    return $response;
}
function add_basic($title, $des = '', $thum, $pro = '', $nick = '' , $like = '', $comm = '', $share = ''){
    global $count, $response;

    $response['template']['outputs'][$count]['basicCard']['title'] ="$title";
    $response['template']['outputs'][$count]['basicCard']['description'] ="$des";
    $response['template']['outputs'][$count]['basicCard']['thumbnail']['imageUrl'] ="$thum";
    $card = $response['template']['outputs'][$count]; 
    $count++;
    
    return $response;
}
function add_button($i){
    global $count, $response;

    $response['template']['outputs'][$count]['basicCard']['title'] ="$title";
    $response['template']['outputs'][$count]['basicCard']['description'] ="$des";
    $response['template']['outputs'][$count]['basicCard']['thumbnail']['imageUrl'] ="$thum";
    $card = $response['template']['outputs'][$count]; 
    $count++;
    
    return $response;
}
?>