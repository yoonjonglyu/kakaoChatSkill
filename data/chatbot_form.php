<?php // author - ISA(류윤종)\

// 카카오톡 봇 2.0 기본 설정

define('VERSION', "2.0");

function add_text($I){
    global $count, $response, $carousel;

    $response['template']['outputs'][$count]['simpleText']['text'] ="$I";
    $count++;

    return $response;
}

function add_image($I, $A){
    global $count, $response, $carousel;

    $response['template']['outputs'][$count]['simpleImage']['imageUrl'] ="$I";
    $response['template']['outputs'][$count]['simpleImage']['altText'] ="$A";
    $count++;
    
    return $response;
}

function add_carousel($I){
    global $count, $response, $card, $carousel;

    $response['template']['outputs'][0]['carousel']['type'] = "$I";
    $carousel = true;
}

function end_carousel(){
    global $count, $response, $card, $carousel;
    $count =  sizeof($response['template']['outputs']);
    $carousel = false;
}

function add_basic($title, $des = '', $thum, $pro = '', $nick = '' , $like = '', $comm = '', $share = ''){
    global $count, $response, $card, $carousel;

    $card = "basicCard";
    $button = 0;

    if($carousel === true){
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['title'] = "$title";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['description'] = "$des";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['thumbnail'] = "$thum";
    } else {
        $response['template']['outputs'][$count][$card]['title'] ="$title";
        $response['template']['outputs'][$count][$card]['description'] ="$des";
        $response['template']['outputs'][$count][$card]['thumbnail']['imageUrl'] ="$thum";
    }
    $count++;

    return $button;
}

function add_commerce($I, $P, $dis, $pro, $nick, $thum, $link = null){
    global $count, $response, $card, $carousel;

    $result = $P-$dis;
    $card = "commerceCard";
    $button = 0;

    if($carousel === true){
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['description'] ="$I";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['price'] ="$P";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['discount'] ="$dis";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['discountPrice'] ="$result";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['currency'] ="won";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['thumbnails']['imageUrl'] ="$thum";
        if($link !== null){
            $response['template']['outputs'][0]['carousel']['items'][$count][$card]['thumbnails']['link']["web"] ="$link";
        }
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['profile']['imageUrl'] ="$pro";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['profile']['nickname'] ="$nick";
    } else {
        $response['template']['outputs'][$count][$card]['description'] ="$I";
        $response['template']['outputs'][$count][$card]['price'] ="$P";
        $response['template']['outputs'][$count][$card]['discount'] ="$dis";
        $response['template']['outputs'][$count][$card]['discountPrice'] ="$result";
        $response['template']['outputs'][$count][$card]['currency'] ="won";
        $response['template']['outputs'][$count][$card]['thumbnails']['imageUrl'] ="$thum";
        if($link !== null){
            $response['template']['outputs'][$count][$card]['thumbnails']['link']["web"] ="$link";
        }
        $response['template']['outputs'][$count][$card]['profile']['imageUrl'] ="$pro";
        $response['template']['outputs'][$count][$card]['profile']['nickname'] ="$nick";
    }
    $count++;

    return $button;
}

function add_list($I, $thum){
    global $count, $response, $card, $item, $carousel;

    $card = "listCard";
    $button = 0;
    $item = 0;

    if($carousel === true){
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['header']['title'] ="$I";
        $response['template']['outputs'][0]['carousel']['items'][$count][$card]['header']['imageUrl'] ="$thum";
    } else {
        $response['template']['outputs'][$count][$card]['header']['title'] ="$I";
        $response['template']['outputs'][$count][$card]['header']['imageUrl'] ="$thum";
    }
    

    $count++;

    return $button;
}

function add_item($I, $des, $thum, $link){
    global $count, $response, $card, $item, $carousel;

    if($carousel === true){
        $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['items'][$item]['title'] = "$I";
        $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['items'][$item]['description'] = "$des";
        $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['items'][$item]['imageUrl'] = "$thum";
        $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['items'][$item]['link']["web"] = "$link";
    } else {
        $response['template']['outputs'][$count-1][$card]['items'][$item]['title'] = "$I";
        $response['template']['outputs'][$count-1][$card]['items'][$item]['description'] = "$des";
        $response['template']['outputs'][$count-1][$card]['items'][$item]['imageUrl'] = "$thum";
        $response['template']['outputs'][$count-1][$card]['items'][$item]['link']["web"] = "$link";

    }
    $item++;

}

function add_button($I, $T, $C){
    global $count, $response, $button, $card, $carousel;

    if($carousel === true){
        $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['buttons'][$button]['action'] = "$I";
        $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['buttons'][$button]['label'] = "$T";
        if ($I === "message"){
            $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['buttons'][$button]['messageText'] = "$C";
        } else if($I === "webLink"){
            $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['buttons'][$button]['webLinkUrl'] = "$C";
        } else if($I === "phone"){
            $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['buttons'][$button]['phoneNumber'] = "$C";
        } else if($I === "block"){
            $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['buttons'][$button]['blockId'] = "$C";
        }
    } else {
        $response['template']['outputs'][$count-1][$card]['buttons'][$button]['action'] = "$I";
        $response['template']['outputs'][$count-1][$card]['buttons'][$button]['label'] = "$T";
        if ($I === "message"){
            $response['template']['outputs'][$count-1][$card]['buttons'][$button]['messageText'] = "$C";
        } else if($I === "webLink"){
            $response['template']['outputs'][$count-1][$card]['buttons'][$button]['webLinkUrl'] = "$C";
        } else if($I === "phone"){
            $response['template']['outputs'][$count-1][$card]['buttons'][$button]['phoneNumber'] = "$C";
        } else if($I === "block"){
            $response['template']['outputs'][$count-1][$card]['buttons'][$button]['blockId'] = "$C";
        }
    }

    $button++;

    return $response;
}

function add_quick($I, $A, $C, $blockId = null, $E = null){
    global $response;

    $response['template']['quickReplies'][sizeof($response['template']['quickReplies'])]["lebel"] = "$I";
    $response['template']['quickReplies'][sizeof($response['template']['quickReplies'])]["action"] = "$A";
    $response['template']['quickReplies'][sizeof($response['template']['quickReplies'])]["messageText"] = "$C";
    if($blockId !== null){
        $response['template']['quickReplies'][sizeof($response['template']['quickReplies'])]["blockId"] = "$blockId";
    }
    if($E !== null){
        $response['template']['quickReplies'][sizeof($response['template']['quickReplies'])]["extra"] = "$E";
    }
}

function set_param($K, $V){
    $params[$K] = "$V";
}

function add_extra($I, $V){
    global $count, $response, $button, $card, $carousel;

    if($carousel === true){
        $response['template']['outputs'][0]['carousel']['items'][$count-1][$card]['buttons'][$button-1]['extra'][$I] = "$V";
    } else {
        $response['template']['outputs'][$count-1][$card]['buttons'][$button-1]['extra'][$I] = "$V";
    }
}

?>