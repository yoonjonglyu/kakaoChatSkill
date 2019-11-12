<?php // author - ISA(류윤종)
namespace Controller;
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
// class화 해서 메소드를 불러오는 방식으로 할까 했지만 챗봇이라는 프로젝트의 특수성상 그럴 경우 오히려 공수만 더 늘어나지
// 캡슐화와 솔리드 원칙의 이점을 얻기 힘들다고 판단해서 그냥 네임스페이스 정도 쓰는걸로 결정했다.
function controll_test(){
    global $test; // param은 컨트롤러에서 글로벌로 끌어와 쓰자 최대한 view단에서 데이터에 접근 하지 못해야한다.
    
    $test = new \Datamodel\TestClass;
    $test->getTestData("foo","25","M");// 메소드를 실행해서 데이터를 포맷에 맞게 가공하고
    $test->getTest2Data(1, 2, 3); 

    $data = new \Datamodel\TestResult;
    $data->getTestResult();
    $result = $data->getResult($test); // 그걸 공통 클래스를 통해서 받아온다.
    
    return $result;
}
?>