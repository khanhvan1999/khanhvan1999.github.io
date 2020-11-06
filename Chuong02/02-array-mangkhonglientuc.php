<?php
    $students=array();
    $students["name"] = "Khánh Vân";
    $students["age"] = "21 tuổi";
    $students[] = "Item1";
    
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    
    //in mảng 
    foreach ($students as $key => $value){
        echo $value ."<br/>";
    }
    
    echo "<br/>".$students["name"];
    
    //Cách 2
    $student = array("name" => "Khánh Vân", "age" => "21 tuổi");
    foreach ($student as $key => $value){
        echo "<br/>". $value ;
    }
?>