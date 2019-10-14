<?php // author - ISA(류윤종)


	function conn() // db연결
	{
		$dbc = mysqli_connect(LOCALHOST, USERID, PASSWORD, DATABASE);
		
		mysqli_query($dbc, "set session character_set_connection=utf8;");
		mysqli_query($dbc, "set session character_set_results=utf8;");
		mysqli_query($dbc, "set session character_set_client=utf8;");
		
		return $dbc;
    }
	function check_user($user){
		$dbc = conn();
		$query = "SELECT * FROM usertable WHERE user_id = '$user"
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}
 ?>