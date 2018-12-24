<?php
session_start();
include 'connection.php';
include 'login1.php';
$thongbao= '';
$userid = $_POST['userid'];
$psw = md5($_POST['psw']);
if(isset($_POST['userid'],$_POST['psw'])&&$_POST['userid']&&$_POST['psw'] )
{
	$sql="select * from account where username=? and password=?";
	$pdostatement = $db->prepare($sql);
	$giatri = array($_POST['userid'],$_POST['psw']);
	$pdostatement->execute($giatri);
	$kq2  = $pdostatement->fetch(PDO::FETCH_OBJ);
	if($kq2)
	{
		$_SESSION['userid'] = $_POST['userid'];
		if(isset($_POST['check']) != null)
		{
			setcookie('userid', $userid, time() + 1*24*60*60);
            setcookie('psw', $psw, time() + 1*24*60*60);
		} else {
            //destroy any previously set cookie
            setcookie('userid', $userid);
            setcookie('psw', $psw);
        }
		header('location: trangchu.php');
	}
	else
	{
		$thongbao = '<div class="alert alert-fail">Đăng nhập thất bại</div>';
	}
	
}
?>