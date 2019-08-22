<?php // author - ISA(류윤종)

require_once("path.php");
global $card;

$count = 0;
$response['version'] = VERSION;
add_text('11111');
add_image('and','end');
add_basic('st','md', 'ls');
$json = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json; ?>