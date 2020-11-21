<?php 
$mail=$_REQUEST["id"];
$link = mysqli_connect("localhost","root","","final_shop") or die("error");
$s = mysqli_query($link,"Delete from pending where username='$mail'");
header("location:pend.php");
?>