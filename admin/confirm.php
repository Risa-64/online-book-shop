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
		
<style type="text/css" media="screen">
.myMainContent{
    padding:20px 5px;
}

</style>


<center>
    <h3>order Information</h3><hr ><br />
    <table border="1px" width="70%">
        <tr>
            <th>Customer name</th>
            <th>product name</th>
			<th>product price</th>
			

            
            
        </tr>
        <?php
       $link = mysqli_connect("localhost","root","","final_shop") or die("error");
        $r = mysqli_query($link,"select * from ord");
        while($data=mysqli_fetch_assoc($r)){
        ?>
        <tr>
		<tr id="<?php echo "row".$data['name'];?>">
          
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['product'];?></td>
			<td><?php echo $data['total'];?></td>
			
            
            
        </tr>
        <?php } ?>
    </table>
    <br >
    <br >
    
    
</center>


</div>


</body>
</html>
