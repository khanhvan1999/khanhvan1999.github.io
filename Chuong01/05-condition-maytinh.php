<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form</title>
		<style type="text/css">
	   #content{
	   margin: 15px auto;
	   	width: 600px;
	   	height: 300px;
	   border: 2px solid #000000;
	   	text-align: center;
	   }
	   
	   #content h1{
	color:red;
	   }
	   
	   #content div.row{
	       margin-top: 15px;
	   }
	</style>
	</head>
	<body>
	<?php 
	$num1 = "";
	$num2 = "";
	$calculator = "";
	$result="";
	$flag = true;
	if(isset($_POST["so1"]) && isset($_POST["cal"]) && isset($_POST["so2"])){
	    $num1 = $_POST["so1"];
	    $num2 = $_POST["so2"];
	    $calculator = $_POST["cal"];
	    
	    if(is_numeric($num1) && is_numeric($num2)){
	        switch ($calculator){
	            case "+":
	                $result = $num1 + $num2;
	                break;
	            case "-":
	                $result = $num1 - $num2;
	                break;
	            case "*":
	                $result = $num1 * $num2;
	                break;
	            case "/":
	                $result = $num1 / $num2;
	                break;
	            case "%":
	                $result = $num1 % $num2;
	                break;
	            default:
	                $result = "Phép tính không hợp lệ";
	                break;
	                
	        }
	    } else {
	        $result = "Số nhập không hợp lệ";
	        $flag=false;
	    }
	}
	   
	?>
	<div id="content">
		<h1>Mô phỏng máy tính điện tử</h1>
		<form name="mainform" action="" method="post">
			<div class="row">
				<span>Số thứ nhất</span>
				<input type="text" name="so1" value="<?php echo $num1?>" placeholder="Nhập số thứ nhất" />
			</div>
			<div class="row">
				<span>Phép toán</span>
				<input type="text" name="cal" value="<?php echo $calculator?>" placeholder="Nhập phép toán" />
			</div>
			<div class="row">
				<span>Số thứ hai</span>
				<input type="text" name="so2" value="<?php echo $num2?>" placeholder="Nhập số thứ hai" />
			</div>
			<div class="row">
				<input name="submit" type="submit" value="Xem kết quả"/>
			</div>
			<p class="row">Kết quả: <?php 
			 if($flag == true){
			     echo $num1 . " " . $calculator ." ". $num2 . " " . " = " .$result;
			 }else{
			     echo $result;
			 }
			?> </p>
		</form>
	</div>
	
	
        
	</body>
</html>

