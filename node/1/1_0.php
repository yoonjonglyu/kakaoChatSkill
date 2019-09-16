<?php // author - ISA(류윤종)
require_once('path.php');

//path
$asset = ASSETS."node/1/";

?>

<?php 
add_text('지역을 선택해주세요'); // 심플텍스트 추가 응답 3/1 사용

set_param('type', '1'); // 퀵메뉴 파라메터 지정 $params에 오브젝트 형식으로 저장한다.
add_quick('처음으로', 'block', '처음으로', MAINQ_0, $params);
add_quick('뒤로가기', 'block', '뒤로가기', MAINQ_0, $params); // 퀵메뉴 지정
$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json;
?>
?>