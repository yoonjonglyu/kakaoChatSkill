<?php // author - ISA(류윤종)
namespace DataModel;
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
<?php // data Model
// main 
class DataResult {
    static $result = array(); // 가공한 데이터를 담을 객체
    static $length = 0; // 가공한 데이터의 전체 길이
    
    public function getResult(){ // 가공한 데이터를 가져오는 메소드
        return $this->result;
    }
}
class TestResult extends DataResult {
    public function getTestResult($id){
        check_user($id);
    }
}
class TestClass extends DataResult {
    public function getTestData($name, $age, $sex){
        $this->result->name = $name;
        $this->result->age = $age;
        $this->result->sex = $sex;
        
        $this->length++;
        $this->result->length = $this->length;
    }

    public function getTest2Data($val1, $val2, $val3){
        global $test, $test2, $test3;

        $this->result->$val1 = $test;
        $this->result->$val2= $test2;
        $this->result->$val3 = $test3;
        
        //$this->length++;
        $this->result->$val1->length = $val3//$this->length;
    }
}
?>