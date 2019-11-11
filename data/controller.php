<?php // author - ISA(류윤종)
namespace Controller;
// class화 해서 메소드를 불러오는 방식으로 할까 했지만 챗봇이라는 프로젝트의 특수성상 그럴 경우 오히려 공수만 더 늘어나지
// 캡슐화와 솔리드 원칙의 이점을 얻기 힘들다고 판단해서 그냥 네임스페이스 정도 쓰는걸로 결정했다.
function controll_test(){
    global $test; // param은 컨트롤러에서 글로벌로 끌어와 쓰자 최대한 view단에서 데이터에 접근 하지 못해야한다.
    
    $test = new Datamodel\TestClass;
    $test->getTestData("foo","25","M");// 메소드를 실행해서 데이터를 포맷에 맞게 가공하고
    $test->getTest2Data(1, 2, 3); 

    $data = new Datamodel\TestResult;
    $data->getTestResult();
    $result = $data->getResult($test); // 그걸 공통 클래스를 통해서 받아온다.
    
    return $result;
}
?>