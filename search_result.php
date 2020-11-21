<?php session_start();
	
	$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
	
	
	
	$search=$_GET['s'];
	$query="select *from book where b_nm like '%$search%'";
	
	$res=mysqli_query($link,$query) or die("Can't Execute Query...");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<style>
.center {
  margin: auto;
  width: 60%;
  
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>

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
							<center>
									<h1 class="col-md-12 cart">the search result for <?php echo $_GET['s'];?></h1>
									<div class="col-md-12">
				<div class="singel_book">
									
										
										<div class="d-flex justify-content-center">
											<?php
											$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
	
	
	
	$search=$_GET['s'];
	$query="select *from book where b_nm like '%$search%'";
	
	$res=mysqli_query($link,$query) or die("Can't Execute Query...");
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>
									
								</div>
								
							</div>
							</center>
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
