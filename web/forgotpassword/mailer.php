<?php defined('BASEPATH');
    include "PHPMailer/src/PHPMailer.php";
	include "PHPMailer/src/Exception.php";
	include "PHPMailer/src/OAuth.php";
	include "PHPMailer/src/POP3.php";
	include "PHPMailer/src/SMTP.php";

require_once("mail_configuration.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);


$emailBody = "<div>" . $user["username"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "NauAn/web/forgotpassword/reset_password.php?name=" . $user["username"] . "'>" . PROJECT_HOME . "forgotpassword/reset_password.php?name=" . $user["username"] . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false, 
        'allow_self_signed' => true
    )
	);
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["email"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Xảy ra lỗi khi gửi tới email';
} else {
	$success_message = 'Vui lòng check email để reset mật khẩu!';
}

?>
