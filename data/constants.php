<?php // author - ISA(류윤종)

//dbconfig 데이터베이스 연결정보

define('LOCALHOST', 'host');// DB서버경로
define('USERID', 'user1'); // 사용자
define('PASSWORD', 'password'); // 비밀번호
define('DATABASE', 'dbtest');  // use database

// blockid 블록아이디를 기입하는 장소
$blockid_main = ["1",2,3,4,5,6,7,8,9,10,11,12,13,14,null]; // *메인 한 카드에 버튼 3개가 들어가니 3개씩 묶어서 사용한다. 사용하지 않는 버튼은 null 으로 사용한다.
$blockid_1 = [1,2,3,4,5,6,7,8];//계층1                     // * 전체 블록은 블록아이디 전체 길이에 맞춰서 자동으로 상수를 생성하는 시스템.
$blockid_2 = [1,2,3,4,5,6,7,8];//계층2
$blockid_3 = [1,2,3,4,5,6,7,8];//계층3
$blockid_4 = [1,2,3,4,5,6,7,8];//계층4
$blockid_5 = [1,2,3,4,5,6,7,8];//계층5
$blockid_6 = [1,2,3,4,5,6,7,8];//계층6
$blockid_7 = [1,2,3,4,5,6,7,8];//계층7
$blockid_8 = [1,2,3,4,5,6,7,8];//계층8


// quck menu 
$quick_main = ["5cebabe605aaa7533585ad6e",2,3,4,5];//메인
$quick_1 = [1,2,3,4,5];//계층1
$quick_2 = [1,2,3,4,5];//계층2
$quick_3 = [1,2,3,4,5];//계층3
$quick_4 = [1,2,3,4,5];//계층4
$quick_5 = [1,2,3,4,5];//계층5
$quick_6 = [1,2,3,4,5];//계층6
$quick_7 = [1,2,3,4,5];//계층7
$quick_8 = [1,2,3,4,5];//계층8


// 블록 길이 체크
$main_length = sizeof($blockid_main);
$node1_length = sizeof($blockid_1);
$node2_length = sizeof($blockid_2);
$node3_length = sizeof($blockid_3);
$node4_length = sizeof($blockid_4);
$node5_length = sizeof($blockid_5);
$node6_length = sizeof($blockid_6);
$node7_length = sizeof($blockid_7);
$node8_length = sizeof($blockid_8);

// quick 길이 체크
$mainq_length = sizeof($quick_main);
$nodeq1_length = sizeof($quick_1);
$nodeq2_length = sizeof($quick_2);
$nodeq3_length = sizeof($quick_3);
$nodeq4_length = sizeof($quick_4);
$nodeq5_length = sizeof($quick_5);
$nodeq6_length = sizeof($quick_6);
$nodeq7_length = sizeof($quick_7);
$nodeq8_length = sizeof($quick_8);


// constants 블록상수 선언
for($num = 0; $num < $main_length; $num++){
define('MAIN_'.$num, $blockid_main[$num]);
}
for($num = 0; $num < $node1_length; $num++){
    define('NODE1_'.$num, $blockid_1[$num]);
    }
    for($num = 0; $num < $node2_length; $num++){
        define('NODE2_'.$num, $blockid_2[$num]);
        }
        for($num = 0; $num < $node3_length; $num++){
            define('NODE3_'.$num, $blockid_3[$num]);
            }
            for($num = 0; $num < $node4_length; $num++){
                define('NODE4_'.$num, $blockid_4[$num]);
                }
                for($num = 0; $num < $node5_length; $num++){
                    define('NODE5_'.$num, $blockid_5[$num]);
                    }
                    for($num = 0; $num < $node6_length; $num++){
                        define('NODE6_'.$num, $blockid_6[$num]);
                        }
                        for($num = 0; $num < $node7_length; $num++){
                            define('NODE7_'.$num, $blockid_7[$num]);
                            }
                            for($num = 0; $num < $node8_length; $num++){
                                define('NODE8_'.$num, $blockid_8[$num]);
                                }

// quick 메뉴 

for($num = 0; $num < $mainq_length; $num++){
    define('MAINQ_'.$num, $quick_main[$num]);
    }
    for($num = 0; $num < $nodeq1_length; $num++){
        define('NODEQ1_'.$num, $quick_1[$num]);
        }
        for($num = 0; $num < $nodeq2_length; $num++){
            define('NODEQ2_'.$num, $quick_2[$num]);
            }
            for($num = 0; $num < $nodeq3_length; $num++){
                define('NODEQ3_'.$num, $quick_3[$num]);
                }
                for($num = 0; $num < $nodeq4_length; $num++){
                    define('NODEQ4_'.$num, $quick_4[$num]);
                    }
                    for($num = 0; $num < $nodeq5_length; $num++){
                        define('NODEQ5_'.$num, $quick_5[$num]);
                        }
                        for($num = 0; $num < $nodeq6_length; $num++){
                            define('NODEQ6_'.$num, $quick_6[$num]);
                            }
                            for($num = 0; $num < $nodeq7_length; $num++){
                                define('NODEQ7_'.$num, $quick_7[$num]);
                                }
                                for($num = 0; $num < $nodeq8_length; $num++){
                                    define('NODEQ8_'.$num, $quick_8[$num]);
                                    }
?>