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
			
			<?php
			$link = mysqli_connect("localhost","root","","final_shop") or die("error");
			$name=$_REQUEST["bookname"];
	$price=$_REQUEST["price"];
	  $username=$_SESSION["unm"];
	  $umail=$_REQUEST["mail"];
	
			$sql="insert into ord(name,product,total)
			values('$username','$name','$price')";
			$result=mysqli_query($link,$sql);
			$Date = date('Y-m-d');


			?>
			<center>	<h1> Dear <?php echo $username ; ?>   </h1></center>
			<center>	<h1> Please have the amount <?php echo $price; ?> Taka Ready on  </h1></center>
			<center>	<h2 >  the delivery day <?php echo date('Y-m-d', strtotime($Date. ' + 2 days')); ?> </h2></center>
			<br><br><br><br><br>
			<div class="container">
		<div class="col-md-12 cart">
			<h2>New Book</h2>
			<div class="col-md-3">
				<div class="singel_book">
					<img src="img/book1.jpg" alt="book image">
					<p>Writter Name: Humayan Ahmed</p>
					<p>Publisher: Farzana Nila</p>
					<a href="#" class="btn btn-primary ct" >Add to Cart</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="singel_book">
					<img src="img/book2.jpg"  alt="book image">
					<p>Writter Name: Humayan Ahmed</p>
					<p>Publisher:Farzana Nila</p>
					<a href="#" class="btn btn-primary ct">Add to Cart</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="singel_book">
					<img src="img/book3.jpg"  alt="book image">
					<p>Writter Name: Humayan</p>
					<p>Publisher:Farzana Nila</p>
					<a href="#" class="btn btn-primary ct">Add to Cart</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="singel_book">
					<img src="img/book3.jpg"  alt="book image">
					<p>Writter Name: Humayan</p>
					<p>Publisher:Farzana Nila</p>
					<a href="#" class="btn btn-primary ct">Add to Cart</a>
				</div>
			</div>
		</div>
	</div>
	
				
				<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			<!-- end footer -->
</body>
</html>