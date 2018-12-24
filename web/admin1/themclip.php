<?php
include '../connection.php';
include '../../class/database.php';
include '../../class/nauan.php';
if(!isset($_COOKIE['userid'])){
header("location: login1.php");
}
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
	$hinh = myupload($_FILES['hinh'],'avatar1');
$data = new nauan();
if(isset($_POST['Submit'])){
		/*$hinhanh = $_REQUEST['imageid'];*/
		$data->them(array($_POST['tenmon'],$hinh,$_POST['huongdan']));
	    echo "<script>alert('Thêm thành công')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm hướng dẫn</title>
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
				<li class="active"> Thêm clip ướng dẫn</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm clip</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="panel panel-default">
					<div class="panel-heading">
				
							
								
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post" onSubmit="return Validation()"  enctype="multipart/form-data">
							<fieldset>
								<!--<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tên tài khoản</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Nhập mật khẩu" class="form-control" >
									</div>
								</div>-->
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tên món</label>
									<div class="col-md-9">
										<input id="tenmonid" name="tenmon" type="text" placeholder="Tên món ăn" class="form-control">
										<span id = "tenmonids" class="text-danger front-weight-bold"></span>
									</div>
								
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hình ảnh</label>
									<div class="col-md-9">
										<div >
            								<input type="file" id="file-input" name="hinh" class="form-control-file">
            			
										</div>
										<span id = "fileinputs" class="text-danger front-weight-bold"></span>
									</div>
									
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Hướng dẫn</label>
									<div class="col-md-9">
										<input class="form-control"   type="text" id="huongdanid" name="huongdan" placeholder="Nhập hướng dẫn" rows="5">
										<span id = "huongdanids" class="text-danger front-weight-bold"></span>
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
		function Validation() {
			var tenmonid = document.getElementById('tenmonid').value;
			var hinhanh = document.getElementById('file-input');
			var huongdanid = document.getElementById('huongdanid').value;


			//check the user name

			if(tenmonid == "")
			{		
				document.getElementById('tenmonids').innerHTML = "Vui lòng nhập tên món";
				return false;
			}
			
			if(!isNaN(tenmonid))
			{
				document.getElementById('tenmonids').innerHTML = "Vui lòng nhập tên món";
				return false;

			}
			
			if(hinhanh.value.length < 4) {
				document.getElementById('fileinputs').innerHTML = "Vui lòng chọn ảnh đại diện";
				document.getElementById('tenmonids').innerHTML = "";
    			
    			hinhanh.focus();
    		return false;
				
    		}
			
			
			if(huongdanid == "")
			{
				document.getElementById('huongdanids').innerHTML = "Vui lòng nhập hướng dẫn";
				document.getElementById('tenmonids').innerHTML = "";
				document.getElementById('fileinputs').innerHTML = "";
				
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