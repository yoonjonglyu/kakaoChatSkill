<?php // author - ISA(류윤종)
require_once('path.php');

//path
$asset = ASSETS."node/1/";

?>

<?php 
add_text('hello World');
$json = json_encode($response, JSON_UNESCAPED_UNICODE);// data 파싱  decode로 받는 부분도 추가하자 
echo $json;
?>