<?php
    $firstname = "Khánh Vân";
    $lastname = "Hồ Hoàng";
    $fullname = $firstname. ' ' .$lastname;
    $age = 21;
    echo $fullname;
    
    // xác định kiểu dữ liệu của biến
    var_dump($firstname);
    echo gettype($age);
    
    //chuyển kiểu dữ liệu
    $number = 123.65;
    echo (int)$number;
    settype($number, "integer");
    echo $number;
    
    //kiểm tra kiểu dữ liệu của biến
    echo is_numeric($age);
    
    //định nghĩa hằng
    define("PI", 3.14);
    echo "Giá trị của PI là: " .PI;
?>