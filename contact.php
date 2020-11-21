<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
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
					
					
			
			<!-- start page -->

					<div class="d-flex justify-content-center">
						<!-- start content -->
							
								<div class="post">
									<h1 class="title">Request New Book to Us</h1>
									
									<div class="entry" >
									
										<form action="process_contact.php" method="POST">
												

											<br>Book Name :<br>
												<input type='text' name='nm' size=35>
												<br><br><br>
												
												Writer Name:<br>
												<input type='text' name='email' size=35>
												<br><br><br>
												
												Edition:<br>
												<input type='text' name='query' >
												<br><br><br>
												Quantity:<br>
												<input type='text' name='quantity' ></input>
												<br><br><br>

												<input  type='submit' name='btn' value='   OK   '  >

												
										</form>
									
									</div>
									
								</div>
								
							</div>
						<!-- end content -->
						
						<!-- start sidebar -->
						
						<!-- end sidebar -->
						
						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
