
<style>
/* unvisited link */
a:link {
    color: red;
}

/* visited link */
a:visited {
    color: green;
}

/* mouse over link */
a:hover {
    color: hotpink;
}

/* selected link */
a:active {
    color: blue;
}
</style>
<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "databaseaau");
		$sql = "UPDATE `databaseaau`.`account` SET `password` = '" .($_POST["password"]). "' WHERE `account`.`username` = '" . $_GET["name"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password đổi thành công.";
		
	}
?>

<script>
function validate_password_reset() {
	if((document.getElementById("password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Xin mời nhập pass mới !"
		return false;
	}
	if(document.getElementById("password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Mật khẩu không khớp !"
		return false;
	}
	
	return true;
}
</script>
<!doctype html>
<html>
<head>
<title>Reset Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hifi Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
<!-- /font files  -->
<!-- css files -->
<link href="../csslogin/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>

<div class="content-w3ls">
	<form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
<h1>Reset Password</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<div class="field-group">	
		<input type="password" placeholder="Nhập mật khẩu mới"  name="password" id="password" class="input-field">
	</div>	
	<div class="field-group">	
		<input type="password" placeholder="Nhập lại mật khẩu mới" name="confirm_password" id="confirm_password" class="input-field">
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="reset-password" id="reset-password" value="Reset Password" class="form-submit-button"></div>
		<div><a href="../login1.php" target="_blank" style="font-size: 25px">Quay về trang đăng nhập</a></div>
	</div>	
</form>
</div>

</body>
</html>

				