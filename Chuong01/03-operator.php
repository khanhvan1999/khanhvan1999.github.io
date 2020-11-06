<?php
    //so sánh $x++ và ++$x
    $x=10;
    $y=$x++; // trả về x sau đó tăng x lên 1 => $y = 10 và $x = 11
    echo $x . "<br/>";
    echo $y;
    
    //toán tử điều kiện
    $variable = "Khánh Vân";
    $result = (is_string($variable))?"Chuỗi":"Không phải chuỗi";
    echo $result;
?>