<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
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
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
#rcorners2 {
  border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px; 
  width: 200px;
  height: 150px;  
}
</style>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
			<!-- end header -->
			<!-- start page -->

				
					<!-- start content -->
					
						
						
					<center><h1 class="title">Viewcart</h1></center>		
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						<div class="d-flex justify-content-center">
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0" id="customers">
								<tr >
									<td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
								$link = mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
									$tot = 0;
									$i = 1;
									$nm=$_SESSION["unm"];
									$query="select u_email from user where u_unm='$nm' ";
									$res=mysqli_query($link,$query);
									$row=mysqli_fetch_assoc($res);
									$usermail=$row["u_email"];

									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.(int)$x['qty']*(int)$x['rate'].'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ((int)$x['qty']*(int)$x['rate']);
										$total=$tot;
										$i++;
									}
									$name=$x['nm'];
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " >
							</center>
							</form>
							</div>
							
						</div>
					<center>	<a href="payment.php?bookname=<?php echo $name;?>&price=<?php echo $tot; ?>&mail=<?php echo $usermail; ?>" class="button">Order</a></center>
						
					</div>
					<!-- end content -->
					<!-- start sidebar -->
					</div>
					<!-- end sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end page -->
			
			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
							if(isset($_SESSION['status']))
							{
							$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										
											
											
											$z=$x['nm'];
											
											$y= $x['qty'];
											
											
										
										
										
										$tot = $tot +((int)$x['qty']*(int)$x['rate']) ;
										$i++;
									}
									}
									$link = mysqli_connect("localhost","root","","final_shop") or die("error");
									$name=$z;
									$id =$y;
									$account= $tot;
									



$add     = $_SESSION['unm'];

$query   = "INSERT into ord (name,product,qty,total) VALUES('" . $add . "','" . $name . "','" . $id . "','" . $account . "')";
$success = $link->query($query);
}
						?>
			</div>
			<!-- end footer -->
</body>
</html>
