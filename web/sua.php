<?php
session_start();
include 'connection.php';
include '../class/database.php';
include '../class/userdangky.php';
include '../class/pager.php';
if(!isset($_COOKIE['userid'])){
header("location: login1.php");
}
$page = new pager();
$dk = new taikhoandangki();
$data = new database();
$sql = 'SELECT * FROM taikhoandangki WHERE id = '.$_GET['id'].'';
$data->setquery($sql);
$kq = $data ->loadrow();

if(isset($_POST['submit'])){
	$dk->sua(array($_POST['Name'],$_POST['Email'],$_POST['numphone'],$_POST['address'],$_POST['Note'],$_GET['id']));
	echo "<script>alert('Sửa thông tin thành công, vui lòng quay lại xem cập nhật')</script>";		
}		
?>
<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa thông tin</title>
	<link href="admin1/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin1/css/font-awesome.min.css" rel="stylesheet">
	<link href="admin1/css/datepicker3.css" rel="stylesheet">
	<link href="admin1/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php /*?><?php echo $_SESSION['userid'];?><?php */?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="trangchu.php"><em class="fa fa-dashboard">&nbsp;</em> Trang chủ</a></li>
			<li><a href="admin1/widgets.php"><em class="fa fa-calendar">&nbsp;</em> Quản lí đăng ký</a></li>
			<li><a href="admin1/charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Đổi mật khẩu</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"> Sửa thông tin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Sửa thông tin</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-default">
			<div class="panel-body"> 
			<form class="form-horizontal" action="" method="post" onSubmit="return Validation()" enctype="multipart/form-data">
				<div class="form-group">
									<label class="col-md-3 control-label" for="name">ID</label>
									<div class="col-md-9">
										<input id="idname" name="id" readonly type="text" value="<?=$kq->id?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Họ tên</label>
									<div class="col-md-9">
										<input id="name" name="Name" type="text" value="<?=$kq->hoten?>" class="form-control">
										<span id = "names" class="text-danger front-weight-bold"></span>
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Hình (Nếu có)</label>
									<div class="col-md-9">
										<input  name="hinhanh" type="hidden" value="<?=$kq->fileinput?>" class="form-control">
										<img src="<?=$kq->fileinput?>" width="200" height="200"/> <br>
										<div>
										</div>
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Email</label>
									<div class="col-md-9">
										<input class="form-control"   type="text" id="email" name="Email" value="<?=$kq->email?>" >
										<span id = "emails" class="text-danger front-weight-bold"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Sđt</label>
									<div class="col-md-9">
										<input class="form-control"   type="text" id="phone" name="numphone" value="<?=$kq->phone?>" rows="5">
										<span id = "phones" class="text-danger front-weight-bold"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="message"> Địa chỉ</label>
									<div class="col-md-9">
										<input class="form-control"   type="text" id="adress" name="address" value="<?=$kq->adress?>" rows="5">
										<span id = "adresss" class="text-danger front-weight-bold"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Ghi chú</label>
									<div class="col-md-9">
										<input class="form-control"   type="text" id="note" name="Note" value="<?=$kq->note?>" rows="5">
										<span id = "notes" class="text-danger front-weight-bold"></span>
									</div>
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" name="submit" class="btn btn-default btn-md pull-right">Xác nhận </button>
<!--										<a href="widgets.php" class="btn btn-primary btn-lg active"  aria-pressed="true">Quay lại</a>
-->									</div>
								</div>
							
						</form>
			</div>
				</div>
	</div>	<!--/.main-->
	   
<script type="text/javascript"> 
		function Validation() {
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var phone = document.getElementById('phone').value;
			var adress = document.getElementById('adress').value;
			var note = document.getElementById('note').value;
			//check the name

			if(name == "")
			{		
				document.getElementById('names').innerHTML = "Vui lòng nhập họ và tên";
				return false;
			}
			if((name.length < 5) || (user.length > 50))
			{
				document.getElementById('names').innerHTML = "Vui lòng nhập họ tên trên 5 và dưới 50 kí tự";
				return false;
			}
			if(!isNaN(name))
			{
				document.getElementById('names').innerHTML = "Vui lòng nhập kí tự";
				return false;

			}
			//check the email
			if(email == "")
			{
				document.getElementById('names').innerHTML = "";
				document.getElementById('emails').innerHTML = "Vui lòng nhập email";
				return false;

			}
			if(email.indexOf('@') <= 0 )
			{
				document.getElementById('emails').innerHTML = "Vui lòng nhập đúng định dạng example@email.com";
				return false;
			}
			if((email.charAt(email.length-4)!='.') &&(email.charAt(email.length-4)!='.'))
			{
				document.getElementById('emails').innerHTML = "Vui lòng điền email.com sau @";
				return false;
			}
			
			//check the phone number


			if(phone == "")
			{
				document.getElementById('names').innerHTML = "";
				document.getElementById('emails').innerHTML = "";
				document.getElementById('phones').innerHTML = "Vui lòng nhập số điện thoại";
				return false;
			}
			if(isNaN(phone))
			{
				document.getElementById('phones').innerHTML = "Vui lòng chỉ nhập số";
				return false;
			}	
			if(phone.length < 10)
			{
				document.getElementById('phones').innerHTML = "Số điện thoại phải đủ 10 số";
				return false;
			}	
			if(phone.length > 10) 
			{
				document.getElementById('phones').innerHTML = "Số điện thoại phải đủ 10 số";
				return false;
			}	
				
			//check the address

			if(adress == "")
			{
				document.getElementById('names').innerHTML = "";
				document.getElementById('emails').innerHTML = "";
				document.getElementById('phones').innerHTML = "";
				document.getElementById('adresss').innerHTML = "Vui lòng nhập địa chỉ";
				return false;
			}
			if((adress.length < 5) || (adress.length > 50))
			{
				document.getElementById('adresss').innerHTML = "Vui lòng nhập họ tên trên 5 và dưới 50 kí tự";
				return false;
			}
			if(!isNaN(adress))
			{
				document.getElementById('emails').innerHTML = "";

				document.getElementById('adresss').innerHTML = "Vui lòng nhập thêm kí tự về địa chỉ của bạn ";
				return false;
			}	
			// check the note

			if(note == "")
			{	
				document.getElementById('names').innerHTML = "";
				document.getElementById('phones').innerHTML = "";
				document.getElementById('emails').innerHTML = "";
				document.getElementById('adresss').innerHTML = "";
				document.getElementById('notes').innerHTML = "Vui lòng nhập mô tả về bạn";
				return false;
			}
			
		}
	</script>
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>