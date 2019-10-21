<?php // author - ISA(류윤종)


	function conn() // db연결
	{
		$dbc = mysqli_connect(LOCALHOST, USERID, PASSWORD, DATABASE);
		
		mysqli_query($dbc, "set session character_set_connection=utf8;");
		mysqli_query($dbc, "set session character_set_results=utf8;");
		mysqli_query($dbc, "set session character_set_client=utf8;");
		
		return $dbc;
	}
	
	// users
	function check_user($user){
		$dbc = conn();
		$query = "SELECT * FROM test WHERE bot_user_id = '$user' LIMIT 1";
		$result = mysqli_query($dbc, $query);
		$result = mysqli_num_rows($result);

		return $result;
	}
	function insert_user($user){
		$dbc = conn();
		$query = "INSERT INTO test (bot_user_id) VALUES('$user')";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}
	function check_login($user_id, $user_password){
		$dbc = conn();
		$query = "SELECT * FROM members WHERE email = '$user_id' AND password = '$user_password' LIMIT 1";
		$result = mysqli_query($dbc, $query);

		return $result;
	}
	function login_user($user, $user_id, $user_password){
		$dbc = conn();
		$password = hash('sha256', $user_password."test");
		$query = "UPDATE test SET test = '$user_id', test = '$password' WHERE bot_user_id = '$user' LIMIT 1";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}
	function logout_user($user){
		$dbc = conn();
		$query = "UPDATE test SET test = null, test = null WHERE bot_user_id = '$user' LIMIT 1";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}
	function search_user($user){
		$dbc = conn();
		$query = "SELECT * FROM test WHERE bot_user_id = '$user' LIMIT 1";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}

	// manager
	function search_manager($dong, $ho){
		$dbc = conn();
		$query = "SELECT * FROM bbs WHERE category = 'test' AND test = '$dong' AND test = '$ho' LIMIT 12";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}

	// energy
	function add_energy($user){
		$dbc = conn();
		$query = "SELECT * FROM test WHERE user_id = '$user' LIMIT 1";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}
	function search_energy($user){
		$dbc = conn();
		$query = "SELECT * FROM test WHERE user_id = '$user' LIMIT 1";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}
	function delete_energy(){
		$dbc = conn();
		$query = "SELECT * FROM test WHERE user_id = '$user' LIMIT 1";
		$result = mysqli_query($dbc, $query);
		
		return $result;
	}

 ?>