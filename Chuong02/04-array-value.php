<?php 
    $courses = array("name"=>"PHP", "time"=>"200");
    echo "<pre>";
    print_r($courses);
    echo "</pre>";
    
    $newArr = array_values($courses);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    
    $newArr1 = array_keys($courses);
    echo "<pre>";
    print_r($newArr1);
    echo "</pre>";
    
    $course = array("PHP", "Joomla", "Java", "JS");
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    
    //xóa phần tử cuối
    $lastItem = array_pop($course);
    echo $lastItem;
    
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    
    //xóa phần tử đầu
    $firstItem = array_shift($course);
    echo $firstItem;
    
    echo "<pre>";
    print_r($course);
    echo "</pre>";
    
    //xóa nhiều phần tử
    $course1 = array("PHP", "Joomla", "Java", "JS", "Python");
    echo "<pre>";
    print_r($course1);
    echo "</pre>";
    
    function removeItem(&$array, $type = "first", $total = 2){
        $result = array();
        if(!empty($array)){
            if($type == "first"){
                for($i=1;$i<=$total;$i++){
                    $result[] = array_shift($array);
                }
            }else if($type == "last"){
                for($i=1;$i<=$total;$i++){
                    $result[] = array_pop($array);
                }
            }
        }
        return $result;
    }
    
    $arrTemp = removeItem($course1, "first", 2);
    
    echo "<pre>";
    print_r($arrTemp);
    echo "</pre>";
    
    echo "<pre>";
    print_r($course1);
    echo "</pre>";
?>