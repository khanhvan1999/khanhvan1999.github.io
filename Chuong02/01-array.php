<?php
//cách 1
    $students=array();
    $students[] = "Khánh Vân";
    $students[] = "21 tuổi";
    //xem phần tử mảng
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    
    //kiểm tra mảng rỗng hay không
    //Cách 1
    $length = count($students);
    echo $length;
    
    //Cách 2
    if(!empty($students)){
        echo "Không là mảng rỗng";
    }else {
        echo "Là mảng rỗng";
    }
    
//cách 2
    $students=array();
    $students[0] = "Khánh Vân";
    $students[1] = "21 tuổi";
    
//cách 3
    $student = array("Khánh Vân", "21 tuổi");
    //$student = array();
    //Cách 1
    echo $student[1];
    //Cách 2
    if(!empty($student)){
        for($i=0; $i<count($student);$i++){
            echo "<br/>".$student[$i];
        }
    }else{
        echo "Mảng rỗng";
    }
    //Cách 3
    if(!empty($student)){
        foreach ($student as $key => $value){
            echo $value."<br/>";
        }
    }
?>