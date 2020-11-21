<?php session_start();
	$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
			
	
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($link,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html >
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
		<?php
			include("includes/head.inc.php");
			
							
		?>
		<style type="text/css">
			#content {
  width: 300px ;
  margin-left: auto ;
  margin-right: 25px ;
}
		</style>
</head>

<body>
			<!-- start header -->
						
									<?php
										include("includes/menu.inc.php");
										if(isset($_SESSION['status']))
							{
								echo '<center><h2>Hello :  '.$_SESSION['unm'].'</h2></center>';
							}
									?>
							

						
			<!-- end header -->
		
			<!-- start page -->

				
						<!-- start content -->
							<div class="d-flex justify-content-center">
								
							<div class="col-md-8 text-center">	
							<center>		
									
										<?php
										$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
			
	
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($link,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr style="margin: 25px 0"> 
													
													<td width="15%" rowspan="3">
														<img class="img-responsive img-thumbnail" src="'.$row['b_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['b_nm'].'</td>
															</tr>

															
															<tr>
																<td align="right">ISBN</td>
																<td>: </td>
																<td align="left">'.$row['b_isbn'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row['b_publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row['b_edition'].'</td>
																
															</tr>
															
															<tr>
																<td align="right">  PAGES</td>
																<td>: </td>
																<td align="left">'.$row['b_page'].'</td>
															</tr>
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['b_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 
											 '.$row['b_desc'].'
																				

											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="10%" align="center">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'">
														 <i class="fas fa-cart-plus"></i>Add to Cart</a></li>
													</a></td>';
												}
												else
												{
													echo '<td> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
									
								</div>
							</div>
			
							
							</center>
	
						<!-- end content -->
							<!-- start sidebar -->
							
							<!-- end sidebar -->
								<div style="clear: both;">&nbsp;</div>
				
			 
			<!-- end page -->
						<!-- start footer -->
						<div class="d-flex justify-content-center">
									<?php
										include("includes/footer.inc.php");
									?>
						</div>
						<!-- end footer -->
</body>
</html>
