<?php
include("includes/head.inc.php");
include("includes/header.php");
$link = mysqli_connect("localhost","root","","final_shop") or die("error");
$id=$_GET['id'];

$r = mysqli_query($link,"Delete from book where b_id='$id'");

if($r){
	header("location:bookdetails.php?ds=ok");
}else{
	echo "<h3 style='color:red;padding:50px 0px;text-align:center;'>An Error Occured!!!!</h3>";	
}


?>