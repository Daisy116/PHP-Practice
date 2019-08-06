<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy', 
                'myHeight'=>191, 
                'myWeight'=>91);
    echo "大家好，我的名字叫".$myArray['myName']."<br>";
    echo "我的身高是".$myArray['myHeight']."公分<br>";
    echo "體重是".$myArray['myWeight']."公斤<br>";
?>