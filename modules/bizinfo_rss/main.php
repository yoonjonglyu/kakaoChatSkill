<?php // author - ISA(류윤종)
require_once('../MM.php');// 모듈연결

require_once('category_table.php');// rss category
require_once('region_table.php');// rss regiron

//bizinfo rss parse &  insert db
require_once('bizinfo_rss_get.php'); // get url
require_once('bizinfo_rss_insert.php'); // insert db
?>
