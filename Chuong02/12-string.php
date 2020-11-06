<?php
$str = '"Khánh Vân" CTK41';
echo $str."<br/>";

$str1 = '\'Khánh Vân\'';
echo $str1. "<br/>";

echo strlen($str)."<br/>";
echo mb_strlen($str)."<br/>";

$str3 = "PHP is easy";
echo str_word_count($str3)."<br/>";
echo strtoupper($str3)."<br/>";
echo strtolower($str3)."<br/>";
echo lcfirst($str3)."<br/>";
echo ucwords($str3)."<br/>";

// $array = array("a", "b", "c", "d", "e", "a");
// $newArr = array_count_values($array);
// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

$str4 = "hello php, php is easy";
echo stripos($str4, "php")."<br/>";

echo strrev($str4)."<br/>";

echo substr($str4, 6,6)."<br/>";
echo substr($str4, -1)."<br/>";

$str5 = "             PHP is easy             ";
$str5 = ltrim($str5);
echo $str5."<br/>";
$str5 = rtrim($str5,"easy");
echo $str5."<br/>";

trim($str5);
echo $str5."<br/>";

$str6 = "      Khánh    Vân          CTK41         ";
trim($str6);
echo $str6."<br/>";

$arr = explode(" ", $str6);
echo "<pre>";
print_r($arr);
echo "</pre>";

foreach ($arr as $key => $value){
    if(trim($value) == null){
        unset($arr[$key]);
    }
}

echo "<pre>";
print_r($arr);
echo "</pre>";

$newStr = implode(" ", $arr);
echo $newStr.' ';

//kiểm tra chuỗi rỗng

if(!isset($str6) || trim($str6)==""){
    echo "Chuỗi rỗng";
}else{
    echo "Không rỗng";
}




