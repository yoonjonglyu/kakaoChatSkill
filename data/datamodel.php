<?php // author - ISA(류윤종)
$req = json_decode(file_get_contents("php://input"), true); // req data json

// data request
$user = $req['userRequest']['user']['id']; // id set
$extra = $req['action']['clientExtra']; // param set
if(isset($req['action']['params'])){
    $user_extra = $req['action']['params']; // extra set
}

// check user
$login_user = (int)check_user($user);
if($login_user === 0 && isset($user)){
    insert_user($user);
}

// users
$result = search_user($user);
$logins = (int)mysqli_num_rows($result);

 // login
 if($logins === 1){
    while($row = mysqli_fetch_array($result)){
        $user_id = $row['test_user_id'];
        $user_pwd = $row['test_user_password'];
    }
 } else {
    $user_id = null;
    $user_pwd = null;
 }


$result = check_login($user_id, $user_pwd);
while($row = mysqli_fetch_array($result)){
    $user_dong = $row['test_content'];
    $user_ho = $row['test_content'];
}
$result = (int)mysqli_num_rows($result);

if($result === 0){ // login fail
    $user_id = null;
    $user_pwd = null;
}


// data parse
if($user_id !== null && $user_pwd !== null){
    $type = 5;
} else {
    $type = 1;
}

// chat params
if(isset($user_extra['login_id'])){
    $login_id = $user_extra['login_id'];
} else {
    $login_id = null;
}
if(isset($user_extra['login_pwd'])){
    $login_pwd = $user_extra['login_pwd'];
} else {
    $login_pwd = null;
}

//extra params
if(isset($extra['type'])){
    $type = (int)$extra['type'];
}
if(isset($extra['userId'])){
    $user_id = $extra['userId'];
}
if(isset($extra['userPwd'])){
    $user_password = $extra['userPwd'];
}
if(isset($extra['index'])){
    $index = $extra['index'];
}
?>
<?php // data controller
// main 
function login_talk(){
    global $user, $user_id, $user_password;

    $password = hash('sha256', $user_password."test");
    
    login_user($user, $user_id, $user_password);
    
    $result = check_login($user_id, $password);
    $result = (int)mysqli_num_rows($result);

    return $result;
}
function logout_talk(){
    global $user;

    logout_user($user);
}
// manager Node1_1
function manage_bill(){
    global $user_id, $user_pwd, $user_dong, $user_ho;

    $data = search_manager($user_dong, $user_ho);
    $result = array();
    $max = 0;

    while($row = mysqli_fetch_array($data)){
        $result[$max]['year'] = $row['test_year'];
        $result[$max]['month'] = $row['test_month'];
        $result[$max]['price'] = $row['test_price'];
        $result[$max]['electric'] = $row['test_1'];
        $result[$max]['waterworks'] = $row['test_2'];
        $result[$max]['hotwater'] = $row['test_3'];
        $result[$max]['heat'] = $row['test_4'];
        $result[$max]['general'] = $row['test_5'];
        $result[$max]['clean'] = $row['test_6'];
        $result[$max]['disinfection'] = $row['test_7'];
        $result[$max]['elevator'] = $row['test_8'];
        $result[$max]['repair'] = $row['test_9'];
        $result[$max]['longrepair'] = $row['test_10'];
        $result[$max]['security'] = $row['test_11'];
        $result[$max]['insurance'] = $row['test_12'];
        $result[$max]['account'] = $row['test_13'];
        $result[$max]['tenant'] = $row['test_14'];
        $result[$max]['consignment'] = $row['test_15'];
        $result[$max]['pubelectric'] = $row['test_16'];
        $result[$max]['liftelectric'] = $row['test_17'];
        $result[$max]['pubwater'] = $row['test_18'];
        $result[$max]['basicheat'] = $row['test_19'];
        $result[$max]['vote'] = $row['test_20'];

        $max++;
    }
    $result['length'] = $max-1;

    return $result;
}
?>