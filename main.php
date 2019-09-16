<?php // author - ISA(류윤종)

require_once("path.php");

$asset = ASSETS."main/";

add_text('11111'); // 심플텍스트 추가 응답 3/1 사용

add_carousel('basicCard'); // 캐로셀 카드 종류 지정
$button = add_basic('오늘의 지원사업','오늘 올라온 지원사업 oneclick 확인 현재조건:', 'ls');
    add_button('message', '오늘의 지원사업', '오늘의 지원사업'); // 버튼추가 계층구조로 추가된다.
    add_extra('type','0'); // 버튼에 파라메터 지정하기
    add_button('block', '조건설정', '설정하기');
$button = add_basic('지원사업검색','지원사업 검색 도우미', 'ls');
    add_button('message', '빠른검색', '빠른검색'); // 버튼추가 계층구조로 추가된다.
    add_extra('type','0'); // 버튼에 파라메터 지정하기
    add_button('block', '키워드검색', '키워드검색');
$button = add_basic('내 관심사업 조회','내가 등록한 관심사업 조회', 'ls');
    add_button('block', '조회하기', '짜잔! 우리가 찾던 보물입니다');
    add_button('webLink', '관심사업 관리', '짜잔! 우리가 찾던 보물입니다');
$button = add_basic('즐겨찾기검색','자주찾는 지역/분야 원클릭 검색', 'ls');
    add_button('block', '지역-분야', '짜잔! 우리가 찾던 보물입니다');
    add_button('block', '지역-분야', '짜잔! 우리가 찾던 보물입니다');
    add_button('block', '지역-분야', '짜잔! 우리가 찾던 보물입니다');
$button = add_basic('설정','즐겨찾기&관심사업 관리', 'ls');
    add_button('message', '즐겨찾기 추가', '짜잔! 우리가 찾던 보물입니다');
    add_button('webLink', '즐겨찾기 제거', '짜잔! 우리가 찾던 보물입니다');
$button = add_basic('통계','인기사업 및 지원사업 통계', 'ls');
    add_button('message', '지역별 TOP 10', '짜잔! 우리가 찾던 보물입니다');
    add_button('webLink', '지역별 TOP 10', '짜잔! 우리가 찾던 보물입니다');
end_carousel(); // 캐로셀끝

set_param('type', '1'); // 퀵메뉴 파라메터 지정 $params에 오브젝트 형식으로 저장한다.
add_quick('오늘의 지원사업', 'block', '오늘의 지원사업', MAINQ_0, $params);
add_quick('사용법', 'block', '사용안내', MAINQ_0, $params); // 퀵메뉴 지정
add_quick('의견/문의', 'block', '의견/문의', MAINQ_0, $params);
$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json;
?>