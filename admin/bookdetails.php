<?php
include("includes/head.inc.php");
include("includes/header.php");
?>
<style type="text/css" media="screen">
.myMainContent{
    padding:20px 5px;
}

</style>
<style type="text/css">
    .a_hide{
      display: none !important;
    }
    
    @media print
      {     
          .no-print, .no-print *
          {
              display: none !important;
          }
          .tblh td{
              border-top:none;
          }
          .print_en{
            text-align: center;
            display: block !important;
          }
          .tbl{
            width: 70%;
          }
          table{
            width:100% !important;
          }
      }

    </style>
<script language="javascript">
    function printrow(printpage)
    {
    var headstr = "<html><head><title>Report</title></head><body>";
	var com     = "<br><center></center><br>";
    var com2     = "<center></center><br>";
    var com1     = "<center><h1>Book Information</h1></center><br>";
    var footstr = "<br /><br /><center><p>Copyright &copy; Farzana Nila/p></center> </body>";
	var newstr = "<center><h3>Single Report </h3></center><br /><br /> <table border='1px' width='80%'> <tr>            <th>  Book name </th><th>Category Id</th><th>  Writer </th><th>  Publisher </th><th>  Price </th>        </tr>";
     newstr += document.all.item(printpage).innerHTML;
	 newstr += "</table>";
     var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+com+com2+com1+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return ;
    }
  </script>
  <script language="javascript">
    function printdiv(printpage)
    {
    var headstr = "<html><head><title>Report</title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return ;
    }
  </script>
<div class="myMainContent"  id="div_print">

<center><a href="addbook.php" class="btn btn-primary" style="color: white;">Add Book</a></center>
 

<center>
    <h3>Book Information</h3><hr ><br />
    <table border="1px" width="70%">
        <tr>
            <th>Serial No</th>
            <th>Book name</th>
            <th>Category Id</th>
            <th>Publisher </th>
			
            <th>Writer</th>
            <th>Price</th>
            <th class="no-print">Action</th>
            
            
        </tr>
        <?php
       $link = mysqli_connect("localhost","root","","final_shop") or die("error");
        $r = mysqli_query($link,"select * from book");
        while($data=mysqli_fetch_assoc($r)){
        ?>
        <tr>
		<tr id="<?php echo "row".$data['b_id'];?>">
          
            <td><?php echo $data['b_id'];?></td>
            <td><?php echo $data['b_nm'];?></td>
            <td><?php echo $data['b_subcat'];?></td>
			
            <td><?php echo $data['b_publisher'];?></td>
            <td><?php echo $data['writer'];?></td>
            <td><?php echo $data['b_price'];?></td>
             <td  class="no-print">
                <a href="eve_edit.php?id=<?php echo $data['b_id'];?>">Edit</a>
                <a style="color:red;" href="eve_delete.php?id=<?php echo $data['b_id'];?>" onclick="return confirm('Are you sure to delete?')">Delete</a>  
            </td>
           
            
        </tr>
        <?php } ?>
    </table>
    <br >
    <br >
	
    <?php
    if(isset($_GET['us'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Book Information Successfully Updated!</h3></center>";
    }

    if(isset($_GET['ds'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Book Information Successfully Deleted!</h3></center>";
    }
    ?>
   
    
</center>



</div>

