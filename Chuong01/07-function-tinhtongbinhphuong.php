<?php 
    //tính tổng bình phương của hai số
    function pow2(&$n1, $n2){
        $result=0;
        $n1=$n1*$n1;
        $n2=$n2*$n2;
        $result=$n1+$n2;
        return $result;
    }
    $num1=2;
    $n2=4;
    $ketqua=pow2($num1, $n2);
    echo $ketqua;
    echo $num1;
    echo $n2;
    
    //tính tổng các chữ số của một số
//     function tongdigit($num){
//         if(is_numeric($num)){
//             $sum=0;
//             while($num>0){
//                 $digit=$num%10; // 232%10=2
//                 $sum+=$digit; //sum=2
//                 $num=($num-$digit)/10;// 232-2 /10 = 23
//             }
//             return $sum;
//         }
//     }

    //kéo file vào
    require '07-function.php';
    $kq = tongdigit(232);
    echo '<br/>'.$kq;
?>
