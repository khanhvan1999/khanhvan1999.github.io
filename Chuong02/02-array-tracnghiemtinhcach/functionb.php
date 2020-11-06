<?php
    $data = file('option.txt') or die("Cannot read file");
    
    array_shift($data);
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
    
    $arrOption = array();
   foreach ($data as $key=>$value){
       $tmp = explode("|", $value);
//        echo "<pre>";
//        print_r($tmp);
//        echo "</pre>";
       
       $questionid = $tmp[0];
       $optionid = $tmp[1];
       $answer = $tmp[2];
       $point = $tmp[3];
       
       $arrOption[$questionid][$optionid]["option"] = $answer;
       $arrOption[$questionid][$optionid]["point"] = $point;
   }
   
//    echo "<pre>";
//    print_r($arrOption);
//    echo "</pre>";
?>