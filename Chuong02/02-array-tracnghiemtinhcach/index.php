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
	   //lấy mảng question
	   require_once 'functiona.php';
	   //lấy mảng option
	   require_once 'functionb.php';
	   
// 	       echo "<pre>";
// 	       print_r($arrOption);
// 	       echo "</pre>";

	   $newArr = array();
	   foreach ($arrQuestion as $key=>$value){
	       $newArr[$key]["question"] = $value["question"];
	       $newArr[$key]["sentences"] = $arrOption[$key];
	   }
	   
// 	   	       echo "<pre>";
// 	   	       print_r($newArr);
// 	   	       echo "</pre>";
	?>
		<div class="content">
			<h1>Trắc nghiệm tính cách</h1>
			<form action = "result.php" method="post" name="mainform">
			<?php 
			     $i = 1;
			     foreach ($newArr as $key=>$value){
			         echo '<div class="question">';
			         echo '<p>
						<span>Câu hỏi '.$i.': </span> '.$value["question"].' </p>';
			         echo '<ul>';
					foreach ($value["sentences"] as $keyC=>$valueC){
					    echo '	<li><label><input type="radio" name="'.$key.'" value = "'.$valueC["point"].'">'.$valueC["option"].'</label></li>';
					}
					echo '</ul>';
			         echo '</div>';
			         
			         $i++;
			     }
			?>
				
					
					
				
				<input type="submit" value="Kiểm tra" name="submit">
			</form>
		</div>
	</body>
</html>