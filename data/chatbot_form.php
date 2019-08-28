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
    global $count, $response, $card;

    $response['template']['outputs'][$count]['basicCard']['title'] ="$title";
    $response['template']['outputs'][$count]['basicCard']['description'] ="$des";
    $response['template']['outputs'][$count]['basicCard']['thumbnail']['imageUrl'] ="$thum";
    $card = "basicCard";
    $button = 0;
    $count++;

    return $button;
}

function add_commerce($I, $P, $dis, $pro, $nick, $thum, $link = null){
    global $count, $response, $card;

    $result = $P-$dis;

    $response['template']['outputs'][$count]['commerceCard']['description'] ="$I";
    $response['template']['outputs'][$count]['commerceCard']['price'] ="$P";
    $response['template']['outputs'][$count]['commerceCard']['discount'] ="$dis";
    $response['template']['outputs'][$count]['commerceCard']['discountPrice'] ="$result";
    $response['template']['outputs'][$count]['commerceCard']['currency'] ="won";
    $response['template']['outputs'][$count]['commerceCard']['thumbnails']['imageUrl'] ="$thum";
    if($link !== null){
        $response['template']['outputs'][$count]['commerceCard']['thumbnails']['link']["web"] ="$link";
    }
    $response['template']['outputs'][$count]['commerceCard']['profile']['imageUrl'] ="$pro";
    $response['template']['outputs'][$count]['commerceCard']['profile']['nickname'] ="$nick";
    $card = "commerceCard";
    $button = 0;
    $count++;

    return $button;
}

function add_button($I, $T, $C){
    global $count, $response, $button, $card;

    $response['template']['outputs'][$count-1][$card]['button'][$button]['action'] = "$I";
    $response['template']['outputs'][$count-1][$card]['button'][$button]['label'] = "$T";
    if ($I === "message"){
        $response['template']['outputs'][$count-1][$card]['button'][$button]['messageText'] = "$C";
    } else if($I === "webLink"){
        $response['template']['outputs'][$count-1][$card]['button'][$button]['webLinkUrl'] = "$C";
    } else if($I === "phone"){
        $response['template']['outputs'][$count-1][$card]['button'][$button]['phoneNumber'] = "$C";
    } else if($I === "block"){
        $response['template']['outputs'][$count-1][$card]['button'][$button]['messageText'] = "바로가기";
        $response['template']['outputs'][$count-1][$card]['button'][$button]['blockId'] = "$C";
    }
    $button++;

    return $response;
}

function add_extra ($I, $V){
    global $count, $response, $button, $card;

    $response['template']['outputs'][$count-1][$card]['button'][$button-1]['extra'][$I] = "$V";
}

?>