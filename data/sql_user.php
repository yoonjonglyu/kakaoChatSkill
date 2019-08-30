<?php // author - ISA(류윤종)
	function conn()
	{
		$dbc = mysqli_connect(LOCALHOST, USERID, PASSWORD, DATABASE);
		
		mysqli_query($dbc, "set session character_set_connection=utf8;");
		mysqli_query($dbc, "set session character_set_results=utf8;");
		mysqli_query($dbc, "set session character_set_client=utf8;");
		
		return $dbc;
    }
    function show_table($I){
        conn();
        mysqli_query('SELECT * FROM tables');
        return $I;
    }
 ?>