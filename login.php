<?php
			include("includes/head.inc.php");
		?>
<?php 
include("includes/menu.inc.php");
						?>
						<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Sahil Kumar">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Tab Style Login & Register</title>
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
        <style type="text/css">	
        	*{
        		margin: 0;
        		padding: 0;
        		-webkit-box-sizing: border-box;
        		-moz-box-sizing: border-box;
        		box-sizing: border-box;
        		font-family: 'Cabin';
        	}
        	body{
        		background-color: #009688;
        	}
        	#main{
        		width: 35%;
        		margin: 50px auto;
        	}
        	#tab-btn{
        		display: -webkit-flex;
        		display: -moz-flex;
        		display: -ms-flex;
        		display: -o-flex;
        		display: flex;
        		width: 100%;
        		justify-content: center;
        	}
        	.login,.register{
        		text-decoration: none;
        		display: block;
        		width: 100%;
        		background-color: #37474f;
        		text-align: center;
        		color: #fff;
        		font-size: 25px;
        		padding: 10px;
        	}
        	.active{
        		background-color: #eee;
        		color: #000;
        	}
        	.content,.other{
        		width: 100%;
        		background-color: #eee;
        		padding: 20px 30px 30px 30px;
        		box-shadow: 2px 2px 5px #333;
        	}
        	.other{
        		display: none;
        	}
        	.inp{
        		width: 100%;
        		padding: 12px;
        		margin-bottom: 15px;
        		font-size: 20px;
        		border: 2px solid #888;
        		border-bottom: 5px solid #888;
        		background-color: #fff;
        		color: #666;
        	}
        	.inp:focus{
        		outline: none;
        		border: 2px solid #555;
        		border-bottom: 5px solid #555;
        	}
        	#sub-btn{
        		width: 100%;
        		padding: 12px;
        		border: none;
        		font-size: 20px;
        		font-weight: bold;
        		background-color: #f44336;
        		color: #fff;
        		cursor: pointer;
        		border-bottom: 5px solid #444;
        	}
        	#sub-btn:focus{
        		outline: none;
        	}
        	#sub-btn:active{
        		border: none;
        		margin-top: 5px;
        	}
        	#forgot{
        		font-size: 20px;
        		color: #444;
        		display: block;
        	}
        	h2{
        		text-align: center;
        		padding-bottom: 15px;
        		color: #333;
        		font-size: 30px;
        		font-variant: small-caps;
        	}
        </style>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script></script>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$(".register").click(function(){
        			$(".other").show();
        			$(".content").hide();
        			$(".register").addClass('active');
        			$(".login").removeClass('active');
        		});
        		$(".login").click(function(){
        			$(".content").show();
        			$(".other").hide();
        			$(".login").addClass('active');
        			$(".register").removeClass('active');
        		});
        	});
        </script>
	</head>
<body>
	<div id="main">
		<div id="tab-btn">
			<a href="#" class="login active">Sign In</a>
			<a href="#" class="register">Sign Up</a>
		</div>
		<div class="content">
			<h2>Get Started!</h2>
			<form action="process_login.php" method="post" id="login-box">
				<input type="text" name="usernm" placeholder="Username" class="inp" required autofocus><br>
				<input type="password" name="pwd" placeholder="Password" class="inp" required><br>
				<a href="#" id="forgot">Forgot Password?</a><br>
				<input type="submit" name="submit" value="SIGN IN" id="sub-btn">
			</form>
		</div>
		<div class="other">
			<h2>Register With Us!</h2>
			<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
			<form action="process_register.php" method="post" id="reg-box">
				<input type="text" name="fnm" placeholder="Enter Fullname" class="inp" required autofocus><br>
				<input type="text" name="unm" placeholder="Enter Username" class="inp" required autofocus><br>
				
				<input type="password" name="pwd" placeholder="Enter Password" class="inp" required><br>
				<input type="password" name="cpwd" placeholder="Confirm Password" class="inp" required><br>
				<input type="email" name="mail" placeholder="Enter Email" class="inp" required><br>
				<input type="text" name="contact" placeholder="Enter Contact Number" class="inp" required><br>
				<b>City:</b>&nbsp;&nbsp;<select style="width: 195px;" name="city">
														
															<option>Dhaka
															<option>Gazipur
															<option>Savar
															<option>Chattogram
															<option>Khulna
															<option>Cumilla
															<option>Rajshahi
															<option>Barishal
															<option>Sylhet
															<option>Rangpur
															<option>Noakhali
															<option>B.Baria
															<option>Narayangonj
															
														
													</select>
				<input type="submit" name="submit" value="SIGN UP" id="sub-btn">
			</form>
		</div>
	</div>
	<?php
							include("includes/footer.inc.php");
						?>
</body>
</html>