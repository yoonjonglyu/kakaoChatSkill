<?php // author - ISA(류윤종)
require_once('path.php');

//path
$asset = ASSETS."node/1/";

?>

<?php 
$result = Controller\controll_test(); 
$max = (int)$result->length;

if($max > 0){
    if($type === 1){
        add_text($result[$index]->year."년 ".$result[$index]->month."월 관리비 고지서"); // 심플텍스트 추가 응답 3/1 사용
        add_text("전기 : ".$result[$index]->electric."\n".
        "수도 : ".$result[$index]->waterworks."\n".
        "온수 : ".$result[$index]->hotwater."\n".
        "난방 : ".$result[$index]->heat."\n".
        "총 관리비 : ".$result[$index]->price." 원"
        );
        add_quick('이전', 'block', '이전', NODEQ1_1); // 퀵메뉴 지정
    } else {
        add_text('관리비 고지서 조회'); // 심플텍스트 추가 응답 3/1 사용

        add_carousel('basicCard');
        
        for($int = 0; $int < $max; $int++){
            $button = add_basic($result[$int]->month."월 관리비", "-관리비 : ".$result[$int]->price."원");
                add_button("block", "상세보기",NODE1_0); // 버튼추가 계층구조로 추가된다.
                add_extra("type","1"); // 버튼에 파라메터 지정하기
                add_extra("index",$int); // 버튼에 파라메터 지정하기
        }

        
        end_carousel();

        add_quick('처음으로', 'block', '처음으로', NODEQ1_0);
        add_quick('에너지검침', 'block', '에너지검침', NODEQ1_2); // 퀵메뉴 지정
        add_quick('시설예약', 'block', '시설예약', NODEQ1_3); // 퀵메뉴 지정
        add_quick('차량조회', 'block', '차량조회', NODEQ1_4); // 퀵메뉴 지정
    }

} else {
    add_text('등록된 고지서가 없습니다.');
    
    add_quick('처음으로', 'block', '처음으로', NODEQ1_0);
    add_quick('에너지검침', 'block', '에너지검침', NODEQ1_2); // 퀵메뉴 지정
    add_quick('시설예약', 'block', '시설예약', NODEQ1_3); // 퀵메뉴 지정
    add_quick('차량조회', 'block', '차량조회', NODEQ1_4); // 퀵메뉴 지정
}


$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json;
?>