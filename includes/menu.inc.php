<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min-3.3.7.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/carousel-animate.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<link rel="stylesheet" href="style.css">
	<style>
	/* The popup form - hidden by default */

body {font-family: Arial, Helvetica, sans-serif;
font-color:white;
}
* {box-sizing: border-box;}
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color:black;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


	<!--top header start-->
	<div class="top_head">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h4>Online Book Shop Management System</h4>
				</div>
				<div class="col-md-offset-2 col-md-5">
					<div class="top_menu">
						<form class="form-inline" method="GET" action="search_result.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="s">
    <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
  </form>	
							<div class="form-group">
								<nav>
									<ul>
										<li><a href="viewcart.php" class="btn btn-primary"><i class="fas fa-cart-plus"></i>Cart</a></li>
										<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>LogOut</a></li>';
						
					}
					else {
						echo'<li><a href="login.php" class="btn btn-primary"  ><i class="fas fa-sign-in-alt"></i>Login</a></li>';
					}
					
			?>
										
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="form-popup" id="myForm">
 <form action="process_login.php" method="POST">
										<h2 style="color:white">LogIn</h2>
											<b style="color:white">Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b style="color:white">Password:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
											<button style="color:white" type="button" class="btn cancel" onclick="closeForm()">Close</button>
										</form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
	<header class="header_area">
		<div class="main_menu">	
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<div class="row">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h col-md-1 " href="index.php"><img src="img/logo.png" class="img-responsive" alt="logo"></a>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse w-100 flex-md-column col-md-offset-5 col-md-7" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto small mb-5 mb-md-3">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
								
								
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">Categories</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
										<?php
										$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
			
										
			
										$query="select * from category ";
			
										$res=mysqli_query($link,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($link);
								?>
									</ul>
								</li>
								
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">Publisher</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="bangla.php">Bangla Academi</a></li>
										<li class="nav-item"><a class="nav-link" href="som.php">Somyo Prokason</a></li>
									</ul>
								</li>
								
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">Writter</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="hu.php">Humayun Ahmed</a></li>
										<li class="nav-item"><a class="nav-link" href="jafar.php">Jafar Iqbal</a></li>
									</ul>
								</li>
								
								
								
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

</body>
</html>
