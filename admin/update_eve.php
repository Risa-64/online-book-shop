<?php
include("includes/head.inc.php");
include("includes/header.php");
$link = mysqli_connect("localhost","root","","final_shop") or die("error");
$customer_name=$_POST['customer_name'];
$customer_id=$_POST['customer_id'];
$account_no=$_POST['account_no'];
$id=$_POST['id'];
$customer_email=$_POST['customer_email'];
$customer_address=$_POST['customer_address'];


$r = mysqli_query($link,"UPDATE book SET b_nm='$customer_name',b_publisher='$account_no',writer='$customer_email',b_price='$customer_address',b_subcat='$customer_id'where b_id='$id' ");
if($r){
	header("location:bookdetails.php?us=ok");
}else{
	echo "<h3 style='color:red;padding:50px 0px;text-align:center;'>An Error Occured!!!!</h3>";	
}


?>