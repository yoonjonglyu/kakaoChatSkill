<?php // author - ISA(류윤종)

require_once("path.php");

$asset = ASSETS."main/";

add_text('11111'); // 심플텍스트 추가 응답 3/1 사용

add_carousel('basicCard'); // 캐로셀 카드 종류 지정
$button = add_basic('st','md', 'ls');
    add_button('message', '구경하기', '짜잔! 우리가 찾던 보물입니다'); // 버튼추가 계층구조로 추가된다.
    add_extra('type','2'); // 버튼에 파라메터 지정하기
    add_button('webLink', '구경하기', '짜잔! 우리가 찾던 보물입니다');
$button = add_basic('st','md', 'ls');
    add_button('message', '구경하기', '짜잔! 우리가 찾던 보물입니다');
    add_button('webLink', '구경하기', '짜잔! 우리가 찾던 보물입니다');
$button = add_basic('st','md', 'ls');
    add_button('message', '구경하기', '짜잔! 우리가 찾던 보물입니다');
    add_button('webLink', '구경하기', '짜잔! 우리가 찾던 보물입니다');
$button = add_basic('st','md', 'ls');
    add_button('message', '구경하기', '짜잔! 우리가 찾던 보물입니다');
    add_button('webLink', '구경하기', '짜잔! 우리가 찾던 보물입니다');
$button = add_basic('st','md', 'ls');
    add_button('message', '구경하기', '짜잔! 우리가 찾던 보물입니다');
    add_extra('dd2','asd');
    add_button('webLink', '구경하기', '짜잔! 우리가 찾던 보물입니다');
end_carousel(); // 캐로셀끝
set_param('type', '1'); // 퀵메뉴 파라메터 지정 $params에 오브젝트 형식으로 저장한다.
add_quick('바로가기', 'share', '바로가기', MAINQ_0, $params); // 퀵메뉴 지정
$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json;
?>