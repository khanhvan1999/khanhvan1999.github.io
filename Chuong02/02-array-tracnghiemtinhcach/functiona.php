<?php
    $data = file('question.txt') or die("Cannot read file");
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
    
    array_shift($data);
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
    
    //array ([01]=>{[question]=>"......"}
    $arrQuestion = array();
    foreach ($data as $key=>$value){
        echo $value. "<br/>";
        
        //chuyển chuỗi thành mảng
        $tmp = explode("|", $value);
//         echo "<pre>";
//         print_r($tmp);
//         echo "</pre>";
        $id = $tmp[0];
        $question = $tmp[1];
        $arrQuestion[$id] = array("question"=>$question);
    }
//     echo "<pre>";
//     print_r($arrQuestion);
//     echo "</pre>";
?>