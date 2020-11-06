<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Loop</title>
		<style type="text/css">
	       .content{
	           margin: 15px auto;
	       	   text-align: center;
	       }
	       
	       .content h1{
	           color:red;
	       }
	      
	       .content ul li{
	           text-decoration: none;
	       }
	       
	    </style>
	</head>
	<body>
        <div class="content">
        	<h1>Chép phạt</h1>
        	<ul>
        		<li>
        			<?php 
        			//cách 1
        			for($i=1;$i<=6;$i++){
        			    echo $i . ". Em hứa sẽ làm bài tập đầy đủ <br/>";
        			}
        			 
        			 //cách 2
        			 $i=1;
        			 while($i<=6){
        			     echo $i . ". Em hứa sẽ làm bài tập đầy đủ <br/>";
        			     $i++;
        			 }
        			 
        			 //cách 3
        			 $i=1;
        			 do{
        			     echo $i . ". Em hứa sẽ làm bài tập đầy đủ <br/>";
        			     $i++;
        			 }while ($i<=6);
        			?>
        		</li>
        	</ul>
        </div>
	</body>
</html>

