<?php
session_start();
if(!isset($_COOKIE['userid'])){
header("location: login1.php");
}

include '../class/database.php';
include '../class/nauan.php';
include '../class/pager.php';

$page = new pager();
$dk = new nauan();
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
<style>
#them{
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


them:hover, them:active {
    background-color: red;
}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang chủ</title>
	<link href="admin1/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin1/css/font-awesome.min.css" rel="stylesheet">
	<link href="admin1/css/datepicker3.css" rel="stylesheet">
	<link href="admin1/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Trang</span>Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php
            		echo $_COOKIE['userid'];
	   			?>	</div>
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
				<li class="active">Trang chủ</li>
				<
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang chủ</h1>
				<a align="middle" href="admin1/themclip.php" id="them">Thêm món</a>
				<br>

				<table class="search-form" cellpadding="10">
	<tr>
		<td style = "width :800px">
			<form action="" method="get" >
			<br>
			<div >
	<div>
	<input class="form-control" type="text" name="q" placeholder="Nhập từ khóa cần tìm">
				<br>
				<input style ="display:inline" class=" btn btn-success" type="submit" value="Tìm kiếm"/></div>
				
				
			</div>
			</form>
		</td>
	</tr>
	
</table>
<table class="list" border="1" cellpadding="10">
	<tr >
	<br>
		<th  style="text-align: center">ID</th>
		<th style="text-align: center">Ten Mon</th>
		<th style="text-align: center">Hình ảnh</th>
		<th style="text-align: center">Cách làm</th>
		<th style="text-align: center">Chỉnh sửa</th>
	</tr>
	<?php
$conn = mysqli_connect("localhost","root","","databaseaau") or die("fault");
mysqli_set_charset($conn, 'UTF8');
if(isset($_GET['q']) && !empty($_GET['q'])){
	$keyword = $_GET['q'];
	$sql = "SELECT * FROM nauan WHERE id LIKE '%$keyword%' 
	OR tenmon LIKE '%$keyword%'
	
	";
	
}
else 
{
	$sql ="SELECT * FROM nauan ";
}





$result = mysqli_query($conn,$sql);


if(!$result)
{
	die ("Sai");
}

?>
	<?php
	while($row = mysqli_fetch_assoc($result))
	{	
		
		$getID = $row["id"];
		$getImage ="admin1/".$row["hinhanh"];
	?>
	<tr >

		<td width ="30px" style="text-align: center"> <?php echo $row['id'];?> </td>
		<td width ="200px" style="text-align: center"> <?php echo $row['tenmon'];?> </td>
		
		<?php
		
		echo '<td style="text-align : center" ><img width="200px" height="200px" src="'.$getImage.'"/></td>';
		
		?>
		
		<!-- echo '<td><img src="admin1/avatar1/file_1545462368.jpg"/></td>'; -->
		<!-- <td width ="200px" style="text-align: center"><php echo $row['hinhanh'];?></td> -->
		<td style="width: 800px"><?php echo $row['cachlam'];?></td>

		<td style="width: 150px ; text-align : center" >
		<?php
		echo '<a href="admin1/suaclip.php?id='.$getID.'" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp; Sửa</a>';
		echo '&nbsp' ;
		echo '&nbsp' ;
        echo '<a href="admin1/xoaclip.php?id='.$getID.'" onclick="return confirm(\'sure to delete !\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp; Xóa</a>';
        ?>
        </td>
	</tr>

	<?php

	}

	?>

</table>
				<html>
    <head>
        <title>Demo Search Basic by freetuts.net</title>
    </head>
    <body>
      
        <?php
         
        // Phần code PHP xử lý tìm kiếm
         
        ?>
    </body>
</html>
			
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	    $('.search-box input[type="text"]').on("keyup input", function(){
	        /* Get input value on change */
	        var inputVal = $(this).val();
	        var resultDropdown = $(this).siblings(".result");
	        if(inputVal.length){
	            $.get("backend-search.php", {term: inputVal}).done(function(data){
	                // Display the returned data in browser
	                resultDropdown.html(data);
	            });
	        } else{
	            resultDropdown.empty();
	        }
	    });
	    
	    // Set search input value on click of result item
	    $(document).on("click", ".result p", function(){
	        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
	        $(this).parent(".result").empty();
	    });
	});
	</script>
	<script src="admin1/js/jquery-1.11.1.min.js"></script>
	<script src="admin1/js/bootstrap.min.js"></script>
	<script src="admin1/js/chart.min.js"></script>
	<script src="admin1/js/chart-data.js"></script>
	<script src="admin1/js/easypiechart.js"></script>
	<script src="admin1/js/easypiechart-data.js"></script>
	<script src="admin1/js/bootstrap-datepicker.js"></script>
	<script src="admin1/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>