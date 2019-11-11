<?php // author - ISA(류윤종)
require_once("path.php"); 

$asset = ASSETS."main/";


if($type === 1){
    add_text("챗봇입니다.\n사용하실려면 로그인이 필요합니다."); // 심플텍스트 추가 응답 3/1 사용

    set_param("type", "2"); // 퀵메뉴 파라메터 지정 $params에 오브젝트 형식으로 저장한다.
    add_quick("로그인하기", "block", "로그인하기", MAINQ_1, $params);
}
else if($type === 2){
    add_text("챗봇입니다.\n로그인 하시겠습니까?"); // 심플텍스트 추가 응답 3/1 사용

    add_quick("처음으로", "block", "처음으로", MAINQ_0);

    set_param("type", "3"); // 퀵메뉴 파라메터 지정 $params에 오브젝트 형식으로 저장한다.
    set_param("userId", "$login_id");
    set_param("userPwd", "$login_pwd");
    add_quick("로그인", "block", "로그인", MAINQ_0, $params);
} else if($type === 3){
    $result = login_talk(); // login model
    if($result === 1){
        add_text("챗봇입니다.\n과 연동완료 되었습니다\n처음으로 돌아가 주십시오.\nID :".$user_id); // 심플텍스트 추가 응답 3/1 사용
    } else {
        add_text("챗봇입니다.\n과 연동에 실패하였습니다.\n처음으로 돌아가주십시오.");
    }
    add_quick("처음으로", "block", "처음으로", MAINQ_0);
} else if($type === 4){
    logout_talk(); // logout model

    add_text("챗봇입니다.\n성공적으로 로그아웃 하였습니다.\n처음으로 돌아가 주십시오."); // 심플텍스트 추가 응답 3/1 사용

    add_quick("처음으로", "block", "처음으로", MAINQ_0);
} else {
    add_text("챗봇입니다."); // 심플텍스트 추가 응답 3/1 사용

    add_carousel("basicCard"); // 캐로셀 카드 종류 지정

    $button = add_basic("not","", $asset."1.png");
        add_button("webLink", "not(test)", MAIN_0)  ; // 버튼추가 계층구조로 추가된다.
        add_button("webLink", "person(test)", MAIN_1);
    $button = add_basic("관리비","", $asset."2.png");
        add_button("block", "고지서조회", MAIN_3); // 버튼추가 계층구조로 추가된다.
    $button = add_basic("test","",$asset."3.png");
        add_button("block", "test", MAIN_6);
        add_button("block", "test", MAIN_7);
    $button = add_basic("test","test test/분야 test 검색", $asset."4.png");
        add_button("block", "test", MAIN_9);
        add_button("block", "test", MAIN_10);
    $button = add_basic("test","", $asset."5.png");
        add_button("block", "test", MAIN_12);
        add_button("block", "test", MAIN_13);
    $button = add_basic("test","test 및 test 통계", $asset."5.png");
        add_button("webLink", "test(test)", MAIN_15);
    end_carousel(); // 캐로셀끝

    set_param("type", "4");
    add_quick("로그아웃", "block", "로그아웃", MAINQ_0, $params);
}

$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json;
?>