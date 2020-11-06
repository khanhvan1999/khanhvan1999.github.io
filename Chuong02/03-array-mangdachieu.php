<?php
    //Quản lý thông tin sinh viên
    //Cách 1;
    $students = array();
    $students["SV001"] = array("name"=>"Khánh Vân", "sex"=>1, "score"=>array(4,5,6));
    $students["SV002"] = array("name"=>"Nam Hồng", "sex"=>1, "score"=>array(5,6,7));
    $students["SV003"] = array("name"=>"Văn A", "sex"=>0, "score"=>array(6,7,8));
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    
    //Cách 2
    $student = array(
                        "SV001" => array(
                                            "name"=>"Khánh Vân",
                                            "sex"=>1,
                                            "score"=>array(4,5,6)
                                        ),
                        "SV002" => array(
                                            "name"=>"Nam Hồng",
                                            "sex"=>1,
                                            "score"=>array(5,6,6)
                                        )
                    );
        //cho biết tên SV001
    echo $students["SV001"]["name"]."<br/>";
    
        //cho biết điểm môn thứ hai của SV002
    echo $student["SV002"]["score"][1]."<br/>";
    
        //thay đổi tên của SV002 thành Thị Nở
    $student["SV002"]["name"] = "Thị Nở";
    echo "<pre>";
    print_r($student);
    echo "</pre>";
    
//  $sum=0;
//     $score=array(5,6,7);
//     for($i=0;$i<count($score);$i++){
//         $sum += $score[$i];
//     }
//     echo $sum . "<br/>";
    
    if(!empty($student)){
        foreach ($student as $key => $value){
            $name = $value["name"];
            $sex = ($value["sex"])==1?"Nữ":"Nam";
            $score = $value["score"];
//             $total_score = $value["score"][0] + $value["score"][1] + $value["score"][2];
//             echo $total_score;
            //cách 1
            $sum=0;
            for($i=0;$i<count($score);$i++){
                $sum += $score[$i];
            }
            //cách 2
            $sum=array_sum($value["score"]);
            echo $key . " Tên: ".$name." - giới tính: ".$sex. " - tổng điểm: " .$sum . "<br/>";
        }
    }
    
?>