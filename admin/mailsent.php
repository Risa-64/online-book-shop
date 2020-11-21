<?php 
require 'phpmailer/PHPMailerAutoload.php';
$mail=$_REQUEST["id"];
$link = mysqli_connect("localhost","root","","final_shop") or die("error");
        $r = mysqli_query($link,"select * from pending where username='$mail' ");
        $data=mysqli_fetch_assoc($r);
        $email=$data["mail"];
$s = mysqli_query($link,"Delete from pending where username='$mail'");
$mail = new PHPMailer();
$mail->Host = "smtp.gmail.com";
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->Username = "your@gmail.com";
$mail->Password = "mail password";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Subject = "Payment Confirmation";
$mail->isHTML(true);
$mail->Body ="Thanks For Your Payment";
$mail->setFrom('yourmail@gmail.com','yourname',0);
$mail->addAddress($email);
if($mail->send())
{
	echo "Mail is sent";
	
	header("location:pend.php");
}
else 
	echo $mail->ErrorInfo;
?>