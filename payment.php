<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
.button {
  padding: 15px 25px;
  font-size: 26px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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
	
			


			?>
			<center>	<h1 > Please select the payment Method </h1></center><br>
			<center>	<a class="button" href="cash.php?bookname=<?php echo $name;?>&price=<?php echo $price; ?>&mail=<?php echo $umail; ?>">Cash On Delivery</a></center><br>
			<br><center><h1>Or bkash</h1></center>
			<br><center><a href="wait.php?bookname=<?php echo $name;?>&price=<?php echo $price; ?>&mail=<?php echo $umail; ?>" > <img width="200" height="70" src="bkash-logo-4.png"> </a></center>

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