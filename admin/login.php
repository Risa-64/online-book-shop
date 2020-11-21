<?php
session_start();
$conn = mysqli_connect("localhost","root","","final_shop") or die("error");
if(isset($_REQUEST["submit"]))
{
	$userid=$_REQUEST["id"];
	$pass=$_REQUEST["pass"];
	$query=mysqli_query($conn,"select * from user where u_unm='$userid' && u_pwd='$pass'");
	$rowcount=mysqli_num_rows($query);
	if($rowcount==true)
	{
		$_SESSION["id"]=$userid;
		
		header('location:includes/header.php');
	}
	else
	{
		
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>The Combination of User Id & Password is Incorrect !</h3></center>";
    }
		
		
	

}

?>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>

<form method="post">

<table border="10" align="center">
<tr>
<td>User Id</td>
<td><input type="text" name="id"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"></td>

</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Login" name="submit" class="button"></td>


</tr>

</table>
</form>
</body>
</html>