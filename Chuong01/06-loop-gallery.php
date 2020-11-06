<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Image Gellery</title>
		<style type="text/css">
	       .content{
	           margin: 15px auto;
	       	   text-align: center;
	       	   width: 400px;
	       }
	       
	       .content h1{
	           color:red;
	       }
	      
	       .content ul li{
	           text-decoration: none;
	       }
	       
	       .content div.image{
	           margin: 20px 0;
	       }
	       
            .content div.image img{
            	margin: 10px 0;
            	width:300px;
            	height: 180px;           
            	       }
            	       
            .content div.image a{
            	display: block;
            	background-color:#686f97;
            	padding:3px 10px;
            	text-decoration: none;   
            	color: #fff;      
            	       }
            	       
            .content div.image a: hover{
	               color:red;
            }
	       
	    </style>
	</head>
	<body>
        <div class="content">
        	<h1>Image Gallery</h1>
        	<div class="image">
        	<?php 
        	//cách 1
//         	if(isset($_GET["show"])){
//         	       $i = 1;
//         	       do{
//         	           echo '<img alt="" src="images/meo'.$i.'.jpg" />';
//         	           $i++;
//         	       }while($i<=4);
//         	   } else{
//         	       echo '<img src="images/meo1.jpg" />';
//         	   }
        	   
        	   //cách 2
        	   $i=1;
        	   do{
        	       echo '<img alt="" src="images/meo'.$i.'.jpg" />';
        	       $flag=0;
        	       if(isset($_GET["show"])){
        	           $flag=1;
        	           $i++;
        	       }
        	   }while($i<=4 && $flag==1 )
        	?>
        		
        		<a href="06-loop-gallery.php?show=1">Show All</a>
        	</div>
        </div>
	</body>
</html>

