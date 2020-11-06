<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form</title>
		<style type="text/css">
	   #tnt_pagination {
	    display: block;
	   	text-align: left;
	   	height: 22px;
	   	line-height: 22px;
	   	clear: both;
	   	padding-top: 3px;
	   	font-family: Arial, Helvetica, sans-serif;
	   	font-size: 12px;
	   	font-weight: normal;
	   }
	   
	   #tnt_pagination a:link, #tnt_pagination a:visited{
	    padding: 7px;
	   	padding-top: 2px;
	   	padding-bottom: 2px;
	   	border: 1px solid #EBEBEB;
	   	margin-left: 7px;
	   	text-decoration: none;
	   	background-color: #F5F5F5;
	   	color: #0072bc;
	   	font-weight: normal
	   }
	   
	   #tnt_pagination .disabled_tnt_pagination{
	    padding: 7px;
	   	padding-top: 2px;
	   	padding-bottom: 2px;
	   	border: 1px solid #EBEBEB;
	   	margin-left: 7px;
	   	text-decoration: none;
	   	background-color: #F5F5F5;
	   	color: #D7D7D7;
	   	cursor: default;
	   }
	</style>
	</head>
	<body>
	
		<form action="" method="post" name="mainform">
			<input type="text" name="name" value="" placeholder="Nhập tên" />
			<input type="password" name="pass" value="" placeholder="Nhập mật khẩu"/>
			<input type="submit" name="submit" value="Đăng nhập" />
		</form>
		<?php 
    //Cách 1
    if ($_POST["name"]=="khanhvan" && $_POST["pass"]="123")
        echo "Bạn đã đăng nhập thành công";
    else 
        echo "Đăng nhập thất bại";
    
    //Cách 2
        $result = ($_POST["name"]=="khanhvan" && $_POST["pass"]="123")? "Đăng nhập thành công" : "Đăng nhập không thành công";
        echo $result;
        ?>	
        
        <div id="tnt_pagination">
        	<span class="disabled_tnt_pagination">Prev</span> 
        	<a href="04-form.php?page=1">1</a>
        	<a href="04-form.php?page=2">2</a>
        	<a href="04-form.php?page=3">3</a>
        	<a href="04-form.php?page=4">4</a>
        	<a href="04-form.php?page=5">5</a>
        	<a href="04-form.php?page=6">6</a>
        	<a href="04-form.php?page=7">7</a>
        	<a href="04-form.php?page=8">8</a>
        	<a href="#forward">Next</a>
        </div>
        <?php $page = (isset($_GET["page"]))?$_GET["page"]:"0";?>
        <p>Bạn đang ở trang thứ <?php echo $page; ?></p>
        
	</body>
</html>

