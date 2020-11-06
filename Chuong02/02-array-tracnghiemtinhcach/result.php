<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style type="text/css">
            *{
	           margin:0px;
            	padding:0px;
            }
            
            .content{
	           margin: 10px auto;
            	width: 500px;
            	padding: 10px;
            	height: auto;
            	border: 2px solid #ddd;
            }
            
            .content h1{
	           color: red;
            	text-align: center;
            }
            
            li{
	           list-style: none;
            }
        </style>
	</head>
	<body>
	<?php 
		   	       echo "<pre>";
		   	       print_r($_POST);
		   	       echo "</pre>";
$data = file("question.txt") or die ("Cannot read file");
echo "<pre>";
print_r($data);
echo "</pre>";
$point = 0;
array_shift($data);
foreach ($data as $key=>$value){
    $tmp = explode("|", $value);
    $id = $tmp[0];
    
        $point = $point + (int)$_POST[$id];
  
}
$data1 = file("result.txt") or die ("Cannot read file");
echo "<pre>";
print_r($data1);
echo "</pre>";

array_shift($data1);

foreach ($data1 as $key => $value){
    $tmp1 = explode('|', $value);
//     echo "<pre>";
//     print_r($tmp1);
//     echo "</pre>";
    $min = $tmp1[0];
    $max = $tmp1[1];
    $content = $tmp1[2];
    if($point >= $min && $point <= $max){
        $result = $content;
        break;
    }
}

	?>
		<div class = "content">
			<h1>Kết quả trắc nghiệm tính cách</h1>
			<p><b>Tổng số điểm của bạn là: </b><?php echo $point;?></p>
			<p><?php echo $result;?></p>
		</div>
	</body>
</html>