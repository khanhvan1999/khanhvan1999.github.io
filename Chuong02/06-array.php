<?php
    //nối mảng
    $array1 = array("a","b","c");
    $array2 =array(1,2,3);
    $array3 = array("pHp"=>"PHP", "jl"=>"Joomla", "pt" => "Python");
    $array4 =array(1,2,3,4,5,6);
    
    $newArr = array_merge($array1, $array2, $array3, $array4);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    
    $keyArr = array_rand($array3, 2);
    echo "<pre>";
    print_r($keyArr);
    echo "</pre>";
    
    $search = array_search("PHP", $array3);
    echo $search;
    
    //kiểm tra key value có tồn tại không
    if(array_key_exists("php", $array3)){
        echo "Exist";
    }
    
    if(in_array("PHP", $array3)){
        echo "Exist";
    } else{
        echo "Not Exist";
    }
    
    //chuyển key thành hoa hoặc thường
    $newArr1 = array_change_key_case($array3, CASE_UPPER);
    echo "<pre>";
    print_r($newArr1);
    echo "</pre>";
    
    //chuyển mảng thành chuỗi
   $string = implode("--", $array1);
   echo $string;
   
   //chuyển chuỗi thành mảng
   $fullName = "Hồ Hoàng Khánh Vân";
   $arr = explode(" ", $fullName);
   echo "<pre>";
   print_r($arr);
   echo "</pre>";
?>