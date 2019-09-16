<?php // author - ISA(류윤종)
	function conn() // db연결
	{
		$dbc = mysqli_connect(LOCALHOST, USERID, PASSWORD, DATABASE);
		
		mysqli_query($dbc, "set session character_set_connection=utf8;");
		mysqli_query($dbc, "set session character_set_results=utf8;");
		mysqli_query($dbc, "set session character_set_client=utf8;");
		
		return $dbc;
    }
	function search_basic($region, $category){
		conn();
		mysqli_query("SELECT * FROM bizinfodata WHERE sp_region = '$region' AND sp_category = '$category");
	}
 ?>