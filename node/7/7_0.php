<?php // author - ISA(류윤종)
require_once('path.php');

//path
$asset = ASSETS."node/7/";

?>

<?php 
add_text('hello World');
$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json;
?>