<?php
	if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "", "databaseaau");
		
		$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " username = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from account " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("mailer.php");
		} else {
			$error_message = 'Không tìm thấy được người dùng';
		}
	}
?>
<script>
function validate_forgot() {
	if((document.getElementById("user-login-name").value == "") && (document.getElementById("email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Vui lòng nhập thông tin!"
		return false;
	}
	return true
}
</script>
<!doctype html>
<html>
<head>
<title>Quên mật khẩu</title>
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
	<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
<h1>Quên mật khẩu?</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>
	
	<div class="field-group">
		
		<div><input type="text" placeholder="Vui lòng nhập email vào đây" name="user-email" id="user-email" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
	</div>	
</form>
</div>

</body>
</html>
