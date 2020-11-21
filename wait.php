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
			<center>	<h1 > Please pay the amount in bkash number 01521218416 </h1></center>
			<center>	<h2 > after the payment you will recieve a confirmation message at your mail </h2></center>
			<?php
			$link = mysqli_connect("localhost","root","","final_shop") or die("error");
			$name=$_REQUEST["bookname"];
	$price=$_REQUEST["price"];
	  $username=$_SESSION["unm"];
	  $umail=$_REQUEST["mail"];
	
			$sql="insert into pending(username,bookname,price,mail)
			values('$username','$name','$price','$umail')";
			$result=mysqli_query($link,$sql);


			?>
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