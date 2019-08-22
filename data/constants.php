<?php // author - ISA(류윤종)

//blockid 블록아이디를 기입하는 장소
$blockid_main = [1,2,3,4,5,6,7,8];//메인
$blockid_1 = [1,2,3,4,5,6,7,8];//계층1
$blockid_2 = [1,2,3,4,5,6,7,8];//계층2
$blockid_3 = [1,2,3,4,5,6,7,8];//계층3
$blockid_4 = [1,2,3,4,5,6,7,8];//계층4
$blockid_5 = [1,2,3,4,5,6,7,8];//계층5
$blockid_6 = [1,2,3,4,5,6,7,8];//계층6
$blockid_7 = [1,2,3,4,5,6,7,8];//계층7
$blockid_8 = [1,2,3,4,5,6,7,8];//계층8


// 블록 사이즈 체크
$main_length = sizeof($blockid_main);
$node1_length = sizeof($blockid_1);
$node2_length = sizeof($blockid_2);
$node3_length = sizeof($blockid_3);
$node4_length = sizeof($blockid_4);
$node5_length = sizeof($blockid_5);
$node6_length = sizeof($blockid_6);
$node7_length = sizeof($blockid_7);
$node8_length = sizeof($blockid_8);


//constants 블록상수 선언
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
?>