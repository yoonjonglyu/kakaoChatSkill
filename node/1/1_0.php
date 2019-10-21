<?php // author - ISA(류윤종)
require_once('path.php');

//path
$asset = ASSETS."node/1/";

?>

<?php 
$result = manage_bill(); 
$max = (int)$result['length'];

if($max > 0){
    if($type === 1){
        add_text($result[$index]['year']."년 ".$result[$index]['month']."월 관리비 고지서"); // 심플텍스트 추가 응답 3/1 사용
        add_text("전기 : ".$result[$index]['electric']."\n".
        "수도 : ".$result[$index]['waterworks']."\n".
        "온수 : ".$result[$index]['hotwater']."\n".
        "난방 : ".$result[$index]['heat']."\n".
        "일반관리비 : ".$result[$index]['general']."\n".
        "청소비 : ".$result[$index]['clean']."\n".
        "소독비 : ".$result[$index]['disinfection']."\n".
        "승강기유지비 : ".$result[$index]['elevator']."\n".
        "수선유지비 : ".$result[$index]['repair']."\n".
        "장기수선충당금 : ".$result[$index]['longrepair']."\n".
        "경비비 : ".$result[$index]['security']."\n".
        "건물보험료 : ".$result[$index]['insurance']."\n".
        "회계감사비 : ".$result[$index]['account']."\n".
        "입주자대표회의 : ".$result[$index]['tenant']."\n".
        "위탁관리비 : ".$result[$index]['consignment']."\n".
        "공동전기료 : ".$result[$index]['pubelectric']."\n".
        "승강기전기 : ".$result[$index]['liftelectric']."\n".
        "공동수도료 : ".$result[$index]['pubwater']."\n".
        "기본난방비 : ".$result[$index]['basicheat']."\n".
        "선거관리위원희 : ".$result[$index]['vote']."\n\n".
        "총 관리비 : ".$result[$index]['price']." 원"
        );
        add_quick('이전', 'block', '이전', NODEQ1_1); // 퀵메뉴 지정
    } else {
        add_text('관리비 고지서 조회'); // 심플텍스트 추가 응답 3/1 사용

        add_carousel('basicCard');
        
        for($int = 0; $int < $max; $int++){
            $button = add_basic($result[$int]['month']."월 관리비", "-관리비 : ".$result[$int]['price']."원");
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