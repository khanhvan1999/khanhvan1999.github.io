<?php 
    //tìm các số từ 1 - 100 chia hết cho 8
    $i = 1;
    $dem = 0;
    do {
        //chỉ xuất 3 số đầu tiên
       if($dem<3){
           if($i % 8 == 0)
           {
               echo $i . '<br/>';
               $dem++;
           }
       }else 
           break;
       $i++;
    }while($i<=100);
    
    //in các số từ 1 đến 10 trừ 3 vs 8
    for($i=1; $i<=10; $i++){
        if($i==3 || $i==8)
            continue;
        echo $i . '<br/>';
    }
 ?>