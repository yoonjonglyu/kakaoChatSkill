<?php // author - ISA(류윤종)
require_once("path.php"); 

$asset = ASSETS."main/";

// data request
$user = $req['userRequest']['user']['id']; // id set

add_text("최신 지원사업 정보를 제공하는\n지원사업알리미챗봇 입니다."); // 심플텍스트 추가 응답 3/1 사용

add_carousel("basicCard"); // 캐로셀 카드 종류 지정
$button = add_basic("오늘의 지원사업","오늘 올라온 지원사업 oneclick 확인 \n현재조건: null", $asset."1.png");
    add_button("block", "NEW", MAIN_0)  ; // 버튼추가 계층구조로 추가된다.
    add_extra("type","0"); // 버튼에 파라메터 지정하기
    add_button("block", "조건설정", MAIN_1);
$button = add_basic("지원사업검색","지원사업을 보다 편하고 쉽게 검색가능", $asset."2.png");
    add_button("message", "빠른검색", MAIN_3); // 버튼추가 계층구조로 추가된다.
    add_extra("type","0"); // 버튼에 파라메터 지정하기
    add_button("block", "키워드검색", MAIN_4);
$button = add_basic("내 관심사업 조회","내가 등록한 관심사업을 쉽고 빠르게 확인",$asset."3.png");
    add_button("block", "조회", MAIN_6);
    add_button("block", "관리", MAIN_7);
$button = add_basic("즐겨찾기검색","자주찾는 지역/분야 원클릭 검색", $asset."4.png");
    add_button("block", "지역-분야", 'null');
    add_button("block", "지역-분야", 'null');
    add_button("block", "관리", MAIN_11);
$button = add_basic("통계","인기사업 및 지원사업 통계", $asset."5.png");
    add_button("block", "지역별 TOP 10", MAIN_12);
    add_button("block", "지역별 TOP 10", MAIN_13);
end_carousel(); // 캐로셀끝

set_param("type", "1"); // 퀵메뉴 파라메터 지정 $params에 오브젝트 형식으로 저장한다.
add_quick("오늘의 지원사업", "block", "오늘의 지원사업", MAINQ_0, $params);
add_quick("사용법", "block", "사용안내", MAINQ_1, $params); // 퀵메뉴 지정
add_quick("의견/문의", "block", "의견/문의", MAINQ_2, $params);

$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json;
?>