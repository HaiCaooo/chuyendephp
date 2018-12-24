<?php

if(isset($_COOKIE['userid'])){
header("location: trangchu.php");

}

?>
<!doctype html>
<html>
<head>
<title>Đăng nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hifi Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
<!-- /font files  -->
<!-- css files -->
<link href="csslogin/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<h1>Đăng nhập</h1>
<div class="content-w3ls">
	<form action="phplogin.php" method="post" onsubmit="return Validation()">
		<div class="form-group1-agile">
			
			<input type="text" name="userid" id="username" placeholder="Nhập tên đăng nhập">
			<span id = "usernameid" class="text-danger front-weight-bold"></span>
		</div>
		<div class="form-group2-agile">
			
			<input type="password" name="psw" id="pass" placeholder="Nhập mật khẩu">
			<span id = "passwords" class="text-danger front-weight-bold" ></span>
		</div>
		<label class="chkbox"><input type="checkbox" name="check" id="Sign-in" value="Sign-in"><p>Ghi nhớ</p></label>

		<input type="submit" value="Đăng nhập">
		<a href="forgotpassword/index.php" class="pwdlost">Quên mật khẩu</a>
	</form>	
</div>
<script type="text/javascript"> 
		function Validation() {
			var user = document.getElementById('username').value;
			var password = document.getElementById('pass').value;


			//check the user name

			if(user == "")
			{
				document.getElementById('usernameid').innerHTML = "Vui lòng nhập username";
				return false;
			}
			if(!isNaN(user))
			{
				document.getElementById('usernameid').innerHTML = "Vui lòng nhập kí tự";
				return false;

			}
			if(password == "")
			{
				document.getElementById('passwords').innerHTML = "Please enter your password";
				document.getElementById('usernameid').innerHTML = "";
				return false;
			}
			if((password.length < 5) || (password.length > 20))
			{
				document.getElementById('passwords').innerHTML = "Please enter your password between 5 and 20 characters";
				return false;
			}
	
		}
	</script>
</body>
</html>