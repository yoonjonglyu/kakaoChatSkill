<?php // author - ISA(류윤종)

require_once("path.php");


add_text('11111');


add_image('and','end');


$button = add_basic('st','md', 'ls');
    add_button('message', '구경하기', '짜잔! 우리가 찾던 보물입니다');
    add_extra('cc', 'ss');
    add_extra('dd2','asd');
    add_button('webLink', '구경하기', '짜잔! 우리가 찾던 보물입니다');
    add_extra('aa','bb');


$button = add_commerce('바보상자팝니다', '2000', '100', 'profileimg', '보물팔이 징징이', 'thumsrc', 'link');
    add_button('share', '공유하기', '필요없는 요소');
    add_button('block', '구경하기', '짜잔! 우리가 찾던 보물입니다');


$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json; 
?>