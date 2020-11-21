<?php session_start();

	
	$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
	
	
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	
	$totalres=mysqli_query($link,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	
	$page_per_page=6;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
	
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/2000/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
.center {
  margin: auto;
  width: 100%;
  
  
  padding: 60px;
}
.table {
  border-collapse: separate;
  border-spacing: 50px 0px;
}

td {
  padding: 10px 0;
  height: 15px;
 
}


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
				
				
			<!-- end header -->
			
			<!-- start page -->

				
					<!-- start content -->
					
				<div class="d-flex justify-content-around">
		<div class="col-md-5 text-center">
			<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
			
									 
									<div class="singel_book">
										<table  class="table" >
										
											<br><br>
											<center>
											<?php
												
												$k=($page_current_page-1)*$page_per_page;
												$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");
											
												$query="select *from book where b_subcat='$cat' LIMIT ".$k .",".$page_per_page;
	
												$res=mysqli_query($link,$query) or die("Can't Execute Query...");
	
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
												
													if($count==0)
													{
														echo '<tr>';
													}	
													
														?>
														<div class="row">
														<div class="col-md-3">
													<td  vartical-align="top" width="40%" float="center" height="20%">
														<a font-family:Arial; href="detail.php?id= <?php echo $row['b_id'];  ?>">
														<img class="img-responsive img-thumbnail" src=" <?php echo $row['b_img'];  ?>" width="10" height="10%">
														<br>
										Tk <?php echo $row['b_price']; ?> </a>
														
														
													</td>
													<?php
													$count++;
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
													?>		
																
													</center>
										</div>		</div>
													</div>
													</div>
													
												</table>
											</div>
											</div>
											</div>
											
										
										
										
										
										<br>
										</center>
										<?php
											
											if($page_total_page>$page_current_page)
											{
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Next</a>';
											}
											
											for($i=1;$i<=$page_total_page;$i++)
											{
												echo '&nbsp;&nbsp;<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
											}
											
											if($page_current_page>1)
											{	
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Previous</a>';
											}
											
										?>
										</center>
									</div>
									
								</div>
								
							</div>
							</div>
					<!-- end content -->
					
					<!-- start sidebar -->
							
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
				<center>
					
				
			<!-- start footer -->
				<div id="footer" >
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
				</center>
			<!-- end footer -->
</body>
</html>
