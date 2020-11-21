<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min-3.3.7.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- start header -->

		<?php
			include("includes/header.php");
		?>
	

<!-- end header -->
<!-- start page -->
<center>
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"> Book</h1>
			
				<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Book Name:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b>Category:</b><br>
						<select style="width: 200px;" name="cat">
								<?php
									
										$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
			
											
			
											$query="select * from category ";
			
											$res=mysqli_query($link,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['cat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysqli_query($link,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
													echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
									
													
												}
												
											}
											mysqli_close($link);
								?>
						</select>
						<br><br>
						
						<b>Description:</b><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
						
						<b>Publisher:</b><br>
						<input type='text' name='publisher' size='40'>
						<br><br>
						<b>Writer:</b><br>
						<input type='text' name='writer' size='40'>
						<br><br>
						
						
						<b>Edition:</b><br>
						<input type='text' name='edition' size='40'>
						<br><br>
						
						<b>ISBN:</b><br>
						<input type='text' name='isbn' size='40'>
						<br><br>
						
						<b>PAGES:</b><br>
						<input type='text' name='pages' size='40'>
						<br><br>
						
						<b>PRICE:</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						<b>E-Book:</b><br>
						<input type='file' name='ebook'  size='35'>
						<br><br>
						
						<input  type='submit'  value='   OK   '  >
				</form>
				</center>
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

<!-- end footer -->
</body>
</html>
