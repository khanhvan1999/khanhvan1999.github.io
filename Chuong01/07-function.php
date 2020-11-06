<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Loop</title>
		<style type="text/css">
	       .content{
	           margin: 15px auto;
	       	   text-align: center;
	       	width:800px;
	       	height: auto;
	       	border: 20px solid #0CC;
	       	padding: 20px;
	       }
	       
	       .content div{
	           border: 1px solid #0CC;
	       	padding: 5px;
	       	text-align: center;
            }
            
            .content div p{
	font-weight: bold
            }
            
            .content div p span{
	font-style: italic;
            	font-weight: normal;
            }
	       
	    </style>
	</head>
	<body>
        <div class="content">
        <?php 
        //hàm không tham số không trả về
            function createBox(){
                echo '<div style="width: 200px; height: 50px;">
        		      <p>Box A <span>(200x50)</span></p>
        	          </div>';
            }
            
            createBox();
            
            //hàm có trả về
            function createBox1(){
               $kq= '<div style="width: 200px; height: 50px;">
        		      <p>Box A <span>(200x50)</span></p>
        	          </div>';
               return $kq;
            }
            
            $result = createBox1();
            echo $result;
            
            function checkNumber(){
                $value=13;
                if($value%2==0){
                    return 1;
                }else{
                   return 0;
                }
            }
            
            $result1=checkNumber();
            if($result1==1){
                echo "Số chẵn";
            }else {
                echo "Số lẻ";
            }
            
            //truyền tham số vào hàm (1 tham số)
            function checkNumber1($value){
                if($value%2==0){
                    return 1;
                }else{
                    return 0;
                }
            }
            
            $result2=checkNumber1(23);
            if($result2==1){
                echo "Số chẵn";
            }else {
                echo "Số lẻ";
            }
            
            // truyền giá trị cho box
            $val="ABC";
            function createBox2($content, $width, $height){
                $result = '<div style="width: '.$width.'px; height:'.$height.'px;">
        		      <p>'.$content.'<span>('.$width.'x'.$height.')</span></p>
        	          </div>';
                global $val;
                echo $GLOBALS["val"];
                echo $val;
                return $result;
                
            }
            
            $boxA = createBox2("Box A",200,50);
            echo $boxA;
            $boxB = createBox2("Box B",300,50);
            echo $boxB;
            
            function tongdigit($num){
                if(is_numeric($num)){
                    $sum=0;
                    while($num>0){
                        $digit=$num%10; // 232%10=2
                        $sum+=$digit; //sum=2
                        $num=($num-$digit)/10;// 232-2 /10 = 23
                    }
                    return $sum;
                }
            }
        ?>
        	
        </div>
	</body>
</html>

