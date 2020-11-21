
<?php
include("includes/head.inc.php");
include("includes/header.php");
?>
<style type="text/css" media="screen">
.myMainContent{
    padding:20px 20px;
}

</style>
<div class="myMainContent">
<center>
	<div class="d-flex justify-content-around">
    <h3>Edit Book Information</h3><hr ><br />
    
<form action="update_eve.php" method="post">
 <?php
 $id = $_GET['id'];
 $link = mysqli_connect("localhost","root","","final_shop") or die("error");
 $r = mysqli_query($link,"SELECT * FROM book WHERE b_id='$id' LIMIT 0,1");
        while($data=mysqli_fetch_assoc($r)){
        ?>

<br>Book Id:<br>
 &emsp; <input type="text" value="<?php echo $data['b_id'];?>" readonly name="id" ><br><br>
<br>Book name:<br>
 &emsp; <input type="text" value="<?php echo $data['b_nm'];?>"  name="customer_name" ><br><br>

Category Id :<br>
 &emsp; <input type="text" value="<?php echo $data['b_subcat'];?>"  name="customer_id" ><br><br>
Publisher :<br>
 &emsp; <input type="text" value="<?php echo $data['b_publisher'];?>" name="account_no" ><br><br>
 
Writer :<br>
 &emsp; <input type="text" value="<?php echo $data['writer'];?>" name="customer_email" ><br><br>
Price :<br>
 &emsp; <input type="text" value="<?php echo $data['b_price'];?>" name="customer_address" ><br><br>

 

<input type="submit" value="Update"><br><br><br>
<?php } ?>
</form> 
   
</center>

</div>
</div>
</div>
