<?php
include '../web/connection.php';
include '../class/database.php';
include '../class/userdangky.php';
$errMsg = 'Đăng ký thành công';
$data = new taikhoandangki();
function myupload($file,$thumuc,$loaifile=array('jpg','png','gif'),$maxsize=1,$tenfile='file_')
{
	if(is_array($file))
	{
		if(isset($file['name'],$file['size'],$file['tmp_name'],$file['type'],$file['error']) && $file['error']==0)
		{
			//kiem tra kich thuox file
			$size = $maxsize*1024*1024;
			if($file['size']>0 && $file['size']<=$size)
			{
				//kiem tra loai file
				//lay duoi file
				//abc.jpg;
				$duoi = substr($file['name'],strrpos($file['name'],'.')+1);//>jpg
				//dung mang
				//$ar = explode('.',$file['name']);
				//$duoi2 = $ar[count($ar)-1];//=>jpg
				if(in_array($duoi,$loaifile))
				{
					//ten trung
					$newname= $tenfile.time().'.'.$duoi;
					$fullpath= $thumuc.'/'.$newname;
					if(move_uploaded_file($file['tmp_name'],$fullpath))
						return $fullpath;
					else
						return false;
				}
				return false;
			}	
			return false;	
		}
		return false;
	}
	return false;
}
$hinh='';

if(isset($_FILES['hinh']))
	$hinh = myupload($_FILES['hinh'],'avatar');
$thongbao = '';

if(isset($_POST['submit'])){
		/*$hinhanh = $_REQUEST['imageid'];*/
		$data->them(array($_POST['Name'],$_POST['Email'],$_POST['numphone'],$_POST['address'],$_POST['Note'],$hinh));
		echo "<script>alert('Đăng ký thành công')</script>";		
		}

?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<style>
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
}
body{
	background-image:url(imagesdk/baroi.jpg); 
}
</style>
	<title>Classic Register Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Classic Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="cssdk/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="cssdk/font-awesome.css">
	<link rel="stylesheet" href="style.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- //web-fonts -->
</head>

<body background="imagesdk/baroi.jpg">
	<!--header-->
	<?php
				
			?>
	<h1>
		<span class="title">F</span>orm
		<span class="title">Đ</span>ăng
		<span class="title">K</span>ý
		</h1>
	<!--//header-->
	<!-- content -->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			
			<form action="dangky.php" id="from_register" method="post" onSubmit="return Validation()" enctype="multipart/form-data">
				<div style="text-align: center">
				
				</div>
				<div class="form-style-agile">
					<label>Họ và tên</label>
					<div class="pom-agile">
						<input placeholder="Họ và tên" id="hoten" name="Name" type="text" >
						<span class="fa fa-user-o" aria-hidden="true"></span>
						
					</div>
					<span id = "hotenid" class="text-danger front-weight-bold"></span>
				</div>
				<div class="form-style-agile">
					<label>Email</label>
					<div class="pom-agile">
						<input placeholder="Email" name="Email" id="email" type="text" >					
						<span class="fa fa-envelope" aria-hidden="true"></span>
						
					</div>
					<span id = "emailid" class="text-danger front-weight-bold"></span>
				</div>
				<div class="form-style-agile">
					<label>Số điện thoại</label>
					<div class="pom-agile">
						<input placeholder="Số điện thoại" name="numphone" id="phone" type="text" >
						<span class="fa fa-phone" aria-hidden="true"></span>
						
					</div>
					<span id = "phoneid" class="text-danger front-weight-bold"></span>
				</div>
				<div class="form-style-agile">
					<label>Địa chỉ</label>
					<div class="pom-agile">
						<input placeholder="Địa chỉ" name="address" id="adress" type="text" >
						<span class="fa fa-address-card" aria-hidden="true"></span>
						
					</div>
					<span id = "adressid" class="text-danger front-weight-bold"></span>
				</div>
				<div class="form-style-agile">
					<label>Ghi chú</label>
					<div class="pom-agile">
						<input placeholder="Ghi chú" name="Note" id="note" type="text" >
						<span class="fa fa-bookmark" aria-hidden="true"></span>
						
					</div>
					<span id = "noteid" class="text-danger front-weight-bold"></span>
				</div>
				<div class="form-style-agile">
					<label>Hình đại diện </label>
					<div >
            			<input type="file" id="file-input" name="hinh" class="form-control-file">
            			
					</div>
					<span id ="imageid" class="text-danger"></span>
				</div>
					
				<div align="center" class="clear"></div>
				<div class="container" align="center">
  				<!--<button style="text-align: " type="submit" class="btn btn-warning">Đăng ký</button>-->
				<input type="submit" name="submit" value="Đăng ký" class="btn btn-success">
				<p><b><a href="../vanglai.php" >Quay lại</a></b></p>
				</div>
			</form>
		</div>
	</div>
	<!-- //content -->
	<!--footer-->
	<div class="footer">
		
	</div>
	<!--//footer-->

	
	<script type="text/javascript"> 
		function Validation() {
			var user = document.getElementById('hoten').value;
			var email = document.getElementById('email').value;
			var phonenum = document.getElementById('phone').value;
			var adress = document.getElementById('adress').value;
			var note = document.getElementById('note').value;
			var image = document.getElementById("file-input");

			//check the name

			if(user == "")
			{		
				document.getElementById('hotenid').innerHTML = "Vui lòng nhập họ và tên";
				return false;
			}
			if((user.length < 5) || (user.length > 50))
			{
				document.getElementById('hotenid').innerHTML = "Vui lòng nhập họ tên trên 5 và dưới 50 kí tự";
				return false;
			}
			if(!isNaN(user))
			{
				document.getElementById('hotenid').innerHTML = "Vui lòng nhập kí tự";
				return false;

			}
			//check the email
			if(email == "")
			{
				document.getElementById('hotenid').innerHTML = "";
				document.getElementById('emailid').innerHTML = "Vui lòng nhập email";
				return false;

			}
			if(email.indexOf('@') <= 0 )
			{
				document.getElementById('emailid').innerHTML = "Vui lòng nhập đúng định dạng example@email.com";
				return false;
			}
			if((email.charAt(email.length-4)!='.') &&(email.charAt(email.length-4)!='.'))
			{
				document.getElementById('emailid').innerHTML = "Vui lòng điền email.com sau @";
				return false;
			}
			
			//check the phone number


			if(phonenum == "")
			{
				document.getElementById('emailid').innerHTML = "";
				document.getElementById('phoneid').innerHTML = "Vui lòng nhập số điện thoại";
				return false;
			}
			if(isNaN(phonenum))
			{
				document.getElementById('phoneid').innerHTML = "Vui lòng chỉ nhập số";
				return false;
			}	
			if(phonenum.length < 10)
			{
				document.getElementById('phoneid').innerHTML = "Số điện thoại phải đủ 10 số";
				return false;
			}	
			if(phonenum.length > 10) 
			{
				document.getElementById('phoneid').innerHTML = "Số điện thoại phải đủ 10 số";
				return false;
			}	
				
			//check the address

			if(adress == "")
			{				
				document.getElementById('emailid').innerHTML = "";
				document.getElementById('phoneid').innerHTML = "";
				document.getElementById('adressid').innerHTML = "Vui lòng nhập địa chỉ";
				return false;
			}
			if((adress.length < 5) || (adress.length > 50))
			{
				document.getElementById('adressid').innerHTML = "Vui lòng nhập họ tên trên 5 và dưới 50 kí tự";
				return false;
			}
			if(!isNaN(adress))
			{
				document.getElementById('emailid').innerHTML = "";

				document.getElementById('adressid').innerHTML = "Vui lòng nhập thêm kí tự về địa chỉ của bạn ";
				return false;
			}	
			// check the note

			if(note == "")
			{	
				document.getElementById('hotenid').innerHTML = "";
				document.getElementById('phoneid').innerHTML = "";
				document.getElementById('emailid').innerHTML = "";
				document.getElementById('adressid').innerHTML = "";
				document.getElementById('noteid').innerHTML = "Vui lòng nhập mô tả về bạn";
				return false;
			}
			if(image.value.length < 4) {
				document.getElementById('hotenid').innerHTML = "";
				document.getElementById('phoneid').innerHTML = "";
				document.getElementById('emailid').innerHTML = "";
				document.getElementById('adressid').innerHTML = "";
				document.getElementById('noteid').innerHTML = "";
    			document.getElementById('imageid').innerHTML = "Vui lòng chọn ảnh đại diện";
    			image.focus();
    		return false;
    		}
			
			
			
		}
	</script>
	
</body>

</html>