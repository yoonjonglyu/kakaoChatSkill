<?php // author - ISA(류윤종)

//path
$ROOT = $_SERVER['DOCUMENT_ROOT']; // 루트
define('ROOT', $ROOT.'/kakaoChatSkill/'); // 프로젝트 시작점
define('DATA', ROOT.'data/'); // 데이터 관련 경로
define('ASSETS', ROOT.'assets/'); // 파일 관련 경로
define('MODULES', ROOT.'modules/'); // 모듈(기능) 관련 경로
?>


<?php // 모듈 연결 및 프로그램 시작 & 초기화
require_once(DATA.'chatbot_form.php'); // 카카오톡 스킬 
require_once(DATA.'constants.php'); // 상수모음
require_once(DATA.'sql_user.php'); // db 관련 모음

/*
require_once(MODULES.'test.php');
*/


// kakao res init 응답 변수 초기화 
$req = json_decode(file_get_contents("php://input"), true); // req data json
$count = 0; //item count
$card = ''; // 카드 구분
$item = 0; // 리스트 아이템 count
$quick = 0; // 퀵메뉴 count
$params = array(); // 파라메터 초기화
$carousel = false; // 캐로셀 스위치
$response['version'] = VERSION; // json 선언
 ?>