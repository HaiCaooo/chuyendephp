<?php
session_start();
if(!isset($_COOKIE['userid'])){
header("location: ../login1.php");
}
include '../../class/database.php';
include '../../class/userdangky.php';
include '../../class/pager.php';

$page = new pager();
$dk = new taikhoandangki();
$tongtin = $dk->total();
$sotintrentrang = 10;
$tongtrang = $page->tim_tong_so_trang($tongtin,$sotintrentrang);
$vitri = $page->tim_vi_tri_bat_dau($sotintrentrang);
$kq2 = $dk->listproduct($vitri,$sotintrentrang);
$dk->disconnect();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Charts</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_COOKIE['userid'];?></div>
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
			<li class="active"><a href="../trangchu.php"><em class="fa fa-dashboard">&nbsp;</em> Trang chủ</a></li>
			<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Quản lí đăng ký</a></li>
			<li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Đổi mật khẩu</a></li>
			<li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"> Đổi mật khẩu</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đổi mật khẩu</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="panel panel-default">
					<div class="panel-heading">
						Đổi mật khẩu
							
								
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post" onsubmit = "return Validation()">
							<fieldset>
								<!--<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tên tài khoản</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Nhập mật khẩu" class="form-control" >
									</div>
								</div>-->
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Mật khẩu hiện tại</label>
									<div class="col-md-9">
										<input id="oldpass" name="oldpass" type="password" placeholder="Nhập mật khẩu" class="form-control">
										<span id = "oldpassid" class="text-danger front-weight-bold"></span>
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Mật khẩu mới</label>
									<div class="col-md-9">
										<input id="newpass" name="newpass" type="password" placeholder="Nhập mật khẩu" class="form-control">
										<span id = "newpassid" class="text-danger front-weight-bold"></span>
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Nhập lại mật khẩu mới</label>
									<div class="col-md-9">
										<input class="form-control"   type="password" id="repass" name="repass" placeholder="Nhập mật khẩu" rows="5">
										<span id = "repassid" class="text-danger front-weight-bold"></span>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" name="Submit" class="btn btn-default btn-md pull-right">Xác nhận </button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
		</div><!--/.row-->
		
		</div><!--/.row-->
	</div>	<!--/.main-->
	  
<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
	<script type="text/javascript"> 
		function Validation() {
			var oldpass = document.getElementById('oldpass').value;
			var newpass = document.getElementById('newpass').value;
			var repass = document.getElementById('repass').value;
			


			//check the user name

			if(oldpass == "")
			{
				document.getElementById('oldpassid').innerHTML = "Vui lòng nhập mật khẩu hiện tại";
				return false;
			}

			if(newpass == "")
			{
				document.getElementById('oldpassid').innerHTML = "";
				document.getElementById('newpassid').innerHTML = "Vui lòng nhập mật khẩu mới";
				return false;
			}
			
			if(newpass == oldpass)
			{
				document.getElementById('oldpassid').innerHTML = "";
				document.getElementById('newpassid').innerHTML = "Mật khẩu mới trùng mới mật khẩu cũ";	
				return false;
			}

			if(repass == "")
			{
				document.getElementById('oldpassid').innerHTML = "";
				document.getElementById('newpassid').innerHTML = "";
				document.getElementById('repassid').innerHTML = "Vui lòng xác nhận mật khẩu mới";
				return false;
			}
			
			if(repass != newpass)
			{
				document.getElementById('oldpassid').innerHTML = "";
				document.getElementById('newpassid').innerHTML = "";
				document.getElementById('repassid').innerHTML = "Mật khẩu mới phải trùng mới mật khẩu cũ";	
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
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>	
		
		<?php
	
	$_SESSION["id"] = "1";
	$conn = mysqli_connect("localhost", "root", "", "databaseaau") or die("Connection Error: " . mysqli_error($conn));

	if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from account WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["oldpass"] == $row["password"]) {
        mysqli_query($conn, "UPDATE account set password='" . $_POST["newpass"] . "' WHERE id='" . $_SESSION["id"] . "'");
		echo "<script>alert('Đổi mật khẩu thành công')</script>";
	} 
	else 
	{
		echo "<script>alert('Mật khẩu hiện tại không đúng')</script>";
	}
	}
	?>	
</body>
</html>
