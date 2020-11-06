<?php
    $courses = array("PHP", "Joomla", "Python", "Java", "C#", "JQuery", "PHP");
    echo "<pre>";
    print_r($courses);
    echo "</pre>";
    
    $newArr = array_unique($courses);
    
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    
    //xóa
    unset($courses[1], $courses[2]);
    echo "<pre>";
    print_r($courses);
    echo "</pre>";
    
    //thêm
    $courses1 = array("PHP", "Joomla", "Python");
    echo "<pre>";
    print_r($courses1);
    echo "</pre>";
    
    $length = array_push($courses1, "HTML", "CSS");
    echo $length;
    
    echo "<pre>";
    print_r($courses1);
    echo "</pre>";
    
    $length1 = array_unshift($courses1, "Java");
    echo $length1;
    
    echo "<pre>";
    print_r($courses1);
    echo "</pre>";
    
    //đảo phần tử
    $newArr1 = array_reverse($courses1);
    echo "<pre>";
    print_r($newArr1);
    echo "</pre>";
    
    //hoán đổi $key $value
    $newArr2 = array_flip($courses1);
    echo "<pre>";
    print_r($newArr2);
    echo "</pre>";
    
    //min max sum
    $score = array(5,8,9,7,45,12,15,14,5,8,7,45,12,5,8,5,5);
    echo "<pre>";
    print_r($score);
    echo "</pre>";
    $sum = array_sum($score);
    echo $sum."<br/>";
    $min = min($score);
    echo $min."<br/>";
    $max = max($score);
    echo $max."<br/>";
    
    //thống kê số lần xuất hiện
    $newArr3 = array_count_values($score);
    echo "<pre>";
    print_r($newArr3);
    echo "</pre>";
?>