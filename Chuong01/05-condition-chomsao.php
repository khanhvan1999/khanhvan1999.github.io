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
	   
	   #content div.result{
	       padding-top: 20px;
	   	margin-left: 80px;
        }
        
        #content div.result img{
	   	   float: left;
	       height: 100px;
	   	   width: 100px;
	   	   overflow: hidden;
	   	   border-radius:50%;
	   }
	   
	   #content div.result p{
	   	   padding-left: 120px;
	       line-height: 75px;
	   	   text-align: justify;
	   }
	</style>
	</head>
	<body>
	<?php 
	   $day = "";
	   $mon = "";
	   $time = "";
	   $image= "";
	   $name = "";
	   $flag = true;
	   $ketqua="";
	   $result="";
	   if(isset($_POST["day"]) && isset($_POST["mon"])){
	       $day = $_POST["day"];
	       $mon = $_POST["mon"];
	       if(is_numeric($day) && is_numeric($mon)){
	           
	           switch ($mon){
	               case 1:
	                   if($day<=19) {$name = "Ma Kết"; $image = "capricorn"; $time = "23/12 - 19/1";}
	                   if($day>19) {$name = "Bảo Bình"; $image = "aquarius"; $time = "20/1 - 19/2";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 2:
	                   if($day<=19) {$name = "Bảo Bình"; $image = "aquarius"; $time = "20/1 - 19/2";}
	                   if($day>19) {$name = "Song Ngư"; $image = "pisces"; $time = "20/2 - 21/3";}
	                   if($day<1 || $day>29){$flag=false;}
	                   break;
	               case 3:
	                   if($day<=21) {$name = "Song Ngư"; $image = "pisces"; $time = "20/2 - 21/3";}
	                   if($day>21) {$name = "Bạch Dương"; $image = "aries"; $time = "22/3 - 20/4";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 4:
	                   if($day<=20) {$name = "Bạch Dương"; $image = "aries"; $time = "22/3 - 20/4";}
	                   if($day>20) {$name = "Kim Ngưu"; $image = "taurus"; $time = "21/4 - 21/5";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 5:
	                   if($day<=22) {$name = "Kim Ngưu"; $image = "taurus"; $time = "21/4 - 21/5";}
	                   if($day>22) {$name = "Song Tử"; $image = "gemini"; $time = "22/5 - 22/6";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 6:
	                   if($day<=22) {$name = "Song Tử"; $image = "gemini"; $time = "22/5 - 22/6";}
	                   if($day>22) {$name = "Cự Giải"; $image = "cancer"; $time = "23/6 - 23/7";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 7:
	                   if($day<=23) {$name = "Cự Giải"; $image = "cancer"; $time = "23/6 - 23/7";}
	                   if($day>23) {$name = "Sư Tử"; $image = "leo"; $time = "24/7 - 23/8";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 8:
	                   if($day<=23) {$name = "Sư Tử"; $image = "leo"; $time = "24/7 - 23/8";}
	                   if($day>23) {$name = "Xử Nữ"; $image = "virgo"; $time = "24/8 - 23/9";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 9:
	                   if($day<=23) {$name = "Xử Nữ"; $image = "virgo"; $time = "24/8 - 23/9";}
	                   if($day>23) {$name = "Thiên Xứng"; $image = "libra"; $time = "24/9 - 23/10";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 10:
	                   if($day<=23) {$name = "Thiên Xứng"; $image = "libra"; $time = "24/9 - 23/10";}
	                   if($day>23) {$name = "Hổ Cáp"; $image = "scorpio"; $time = "24/10 - 22/11";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 11:
	                   if($day<=22) {$name = "Hổ Cáp"; $image = "scorpio"; $time = "24/10 - 22/11";}
	                   if($day>22) {$name = "Nhân Mã"; $image = "sagittarius"; $time = "22/11 - 22/12";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 12:
	                   if($day<=22) {$name = "Nhân Mã"; $image = "sagittarius"; $time = "22/11 - 22/12";}
	                   if($day>22) {$name = "Ma Kết"; $image = "capricorn"; $time = "23/12 - 19/1";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	                   default:
	                       $flag = false;
	                       break;
	           }
	           
	           if($flag == true){
	               $ketqua = '<div class="result">
			             <img src="images/'. $image . '.jpg" />
			             <p>' . $name .' <span>('.ucfirst($image). ' : ' .$time .')</span></p>
		              </div>';
	               
	           }else {
	               echo $result = "Dữ liệu không hợp lệ";
	           }
	       } else {
	           $flag=false;
	           $result = "Dữ liệu không hợp lệ";
	       }
	   }
	?>
	<div id="content">
		<h1>Bạn thuộc chòm sao gì?</h1>
		<form name="mainform" action="" method="post">
			<div class="row">
				<span>Ngày sinh</span>
				<input type="text" name="day" value="<?php echo $day;?>" placeholder="Nhập ngày sinh" />
			</div>
			<div class="row">
				<span>Tháng sinh</span>
				<input type="text" name="mon" value="<?php echo $mon; ?>" placeholder="Nhập tháng sinh" />
			</div>
			<div class="row">
				<input name="submit" type="submit" value="Lấy chòm sao"/>
			</div>
			
				<?php echo $ketqua;?>
			
		</form>
		
		
	</div>
	
	
        
	</body>
</html>

