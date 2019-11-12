<?php // author - ISA(류윤종)
namespace DataModel;
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