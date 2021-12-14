<?php
session_start();
include "include/database.php";
function countrecord($sql,$db)
{
	$res=$db->query($sql);
	return $res->num_rows;
}
if(!isset($_SESSION["ID"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

	<title>
		Online Store | Admin Panel | Catalog

		</title>
		<meta name="Description" content="Dietzone, adminpanel"/>

		<meta name="Keywords" content="Dietzone"/>
  <!-- Favicons -->
  <link href="asset/images/favicon.png" rel="icon">
  <link href="asset/images/apple-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="asset/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="asset/lib/animate/animate.min.css" rel="stylesheet">
  <link href="asset/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="asset/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="asset/css/style.css" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
}



/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: #111;
  font-size: 35px;
  cursor: pointer;
}
</style>

</head>

<body id="page-top" >


  <!--/ Navbar/-->
<?php
include "include/mat_nav.php";
?>
    <!--/ body page start/-->

 <section id="service" class="services-mf route">
  <div class="container-fluid">
  



      
  <div class="header">
						<br>
                            <p class align="center"><b> Products View</b></p>
                        </div>	  
                        


<div class align="left">
					<a href="product.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true"><-Back</a></div>
					<br>

  <div class="col-md-12 ">
  <div class="row">
  

  <div class="col-md-4 ">
  
  <div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>
   	  <?php
			



$sql="select * from specification_image where PID='{$_GET["id"]}'";

			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
					
					
					
	    <div class="col-sm-12">
	  <div class="card">
      <div class="card-body">
       <table id="table_field" class="table ">
								
								<center><p class="text-light bg-dark">Product Images</p></center>
								<div class="line-mf"></div>
								
								<tr>
								<td><img id="myImg" src="data:image/jpeg;base64,'.base64_encode($row['IMAGE1'] ).'"  style="width:100%;max-width:300px"  onclick="myFunction(this);" />  </td>
		
		<td><img id="myImg1" src="data:image/jpeg;base64,'.base64_encode($row['IMAGE2'] ).'"  style="width:100%;max-width:300px" onclick="myFunction(this);"></td>
		</tr>				
								

</table>
      </div>
    </div>
    </div>

					';
			}}
  ?>
  <br>
  
	  <?php
			



$sql="select * from gendral_sku where ID='{$_GET["id"]}'";

			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
					
					
					
	    <div class="col-sm-12">
		
		
		<div class="card">
      <div class="card-body">
       <table id="table_field" class="table ">
								
								<center><p class="text-light bg-dark">Log Details</p></center>
								<div class="line-mf"></div>
								
								<tr>
								<td> Uploaded Date </td><td>: </td><td>'. $row['LOGS'].'</td>
								</tr>
								<tr>
								<td>  Updated Date</td><td>: </td><td>'. $row['LAST_LOGS'].'</td>
								</tr>
					

</table>
      </div>
    </div>
	
	<br>
	
	
	  <div class="card">
      <div class="card-body">
       <table id="table_field" class="table ">
								
								<center><p class="text-light bg-dark">Gendral Details</p></center>
								<div class="line-mf"></div>
								
								<tr>
								<td> Product Name </td><td>: </td><td>'. $row['PRODUCT_NAME'].'</td>
								</tr>
								<tr>
								<td>  Brand Name</td><td>: </td><td>'. $row['BRAND_NAME'].'</td>
								</tr>
								<tr>
								<td> Product Id </td><td>: </td><td>'. $row['PRADUCT_ID'].'</td>
								</tr>
								<tr>
								<td> HSN</td><td>: </td><td>'. $row['HSN'].'</td>
								</tr>
								<tr>
								<td>Parent_Category</td><td>: </td><td>'. $row['PARENT_CATEGORY'].'</td>
								</tr>
								</tr>
								<tr>
								<td>Child_Category</td><td>: </td><td>'. $row['CHILD_CATEGORY'].'</td>
								</tr>
								<tr>
								<td> Product Tags</td><td>: </td><td>'. $row['TAG'].'</td>
								</tr>
								<tr>
								<td> Product Taxable</td><td>: </td><td>'. $row['TAX'].'</td>
								</tr>
								

</table>
      </div>
    </div>
    </div>

					';
				}
					
					else
					{
						echo "please Insert Image";
					}
			}
  ?>
  </div>
  
  
  
  <div class="col-md-4 ">
  
   
	  <?php
			



$sql="select * from gendral_sku where ID='{$_GET["id"]}'";


			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
					
					
					
	    <div class="col-sm-12">
	  <div class="card">
      <div class="card-body">
       <table id="table_field" class="table ">
								
								<center><p class="text-light bg-dark">SKU</p></center>
								<div class="line-mf"></div>
								
							<tr>
								<td> SKU</td><td>: </td><td>'. $row['SKU'].'</td>
								</tr>
								
							<tr>
								<td> Variation Title</td><td>: </td><td>'. $row['VARIATION_TITLE'].'</td>
								</tr>
								
								<tr>
								<td> QTY</td><td>: </td><td>'. $row['QTY'].'</td>
								</tr>
								<tr>
								<td> Short_Description</td><td>: </td><td>'. $row['SHORT_DESCRIPTION'].'</td>
								</tr>

</table>
      </div>
    </div>

	<br>

	<div class="card">
      <div class="card-body">
       <table id="table_field" class="table ">
								
								<center><p class="text-light bg-dark">Variation Specification </p></center>
								<div class="line-mf"></div>
								
								
								<tr>
								<th> Variaton Name</th><th> Variation Value</th>
								
								</tr>
								
				
		
								
							<tr>
								<td> '. $row['VARIATION_NAME1'].'</td><td>'. $row['VARIATION_VALUE1'].'</td>
								</tr>
								<tr>
								<td> '. $row['VARIATION_NAME2'].'</td><td>'. $row['VARIATION_VALUE2'].'</td>
								</tr>
								<tr>
								<td> '. $row['VARIATION_NAME3'].'</td><td>'. $row['VARIATION_VALUE3'].'</td>
								</tr>
								<tr>
								<td> Weight</td><td>'. $row['WEIGHT_VALUE'].' '. $row['WEIGHT_RANGE'].' </td>
								</tr>
								
								
								

</table>
      </div>
    </div>
    </div>

					';
			}}
  ?>
  </div>




  
  
  <div class="col-md-4 ">
  
   
	  <?php
			



$sql="select * from specification_image where PID='{$_GET["id"]}'";

			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
					
					
					
	    <div class="col-sm-12">
	  <div class="card">
      <div class="card-body">
       <table id="table_field" class="table ">
								
								<center><p class="text-light bg-dark">SPECIFICATION</p></center>
								<div class="line-mf"></div>
								
							<tr>
		
<td>'. $row['SPECIFICATION'].'</td>		
	
		</tr>

</table>




      </div>
    </div>


    </div>

					';
			}}
  ?>
  </div>


	
			
			</div>
			</div>
			
			
			
			<br>
			<br>
			<div class="col-md-12 ">
  <div class="row">
  
  
  
  <div class="col-md-12 ">
  <div class="card">
      <div class="card-body">
   <center><p class="text-dark ">Stock Management</p></center>
								<div class="line-mf"></div>
								<br>
   <?php
$sql="select * from stock_management where PID_SKU='{$_GET["id"]}'";
$res=$db->query($sql);
if($res->num_rows>0)
{
		echo "<table class='table table-striped table-hover border'>
	<tr class='bg-dark text-light'>
	<th>SNO</th>
	<th>invoice Number</th>
							<th>Invoice Date</th>
							<th>Merchants</th>
							<th>Batch Number</th>
							<th>MFD</th>
							<th>Exp. Date</th>
							<th>QTY</th>
							<th>MRP</th>
							<th>Offset(%)</th>
							<th>Selling Price</th>
							<th>Weight</th>
							<th>Dimensions (L/B/H) </th>
								<th>Log </th>
	</tr>
	
	
	";
	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
		echo "<tr>";
		echo "<td>{$i}</td>";
		echo "<td>". $row['INVOICE_NO']."</td>";
		echo "<td>". $row['INVOICE_DATE']."</td>";
		echo "<td>". $row['MERCHANT']."</td>";
		echo "<td>". $row['BATCH_NO']."</td>";
		echo "<td>". $row['MFD']."</td>";
		echo "<td>". $row['EX_DATE']."</td>";
		echo "<td>". $row['QTY']."</td>";
		echo "<td>". $row['MRP']." Rs</td>";
		//echo "<td>". $row['FLAT']." Flat  <hr> ". $row['PRESENTAGE']." % </td>";
		echo "<td>". $row['OFFSET']."  </td>";
		echo "<td>". $row['SELLING_PRICE']." Rs</td>";
		echo "<td>". $row['WEIGHT']." ". $row['WEIGHT_VALUE']." </td>";
		echo "<td>". $row['LENGTH']."/". $row['BREDTH']."/". $row['HEIGHT']." CM</td>";
		echo "<td>". $row['LOGS']."</td>";
		echo "</tr>";
	}
	
	echo "</table>";
}
else
{
	echo "<p class='bg-danger text-light text-center'>No Stock Records Found</p>";
}
?>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  </div>
  </div>

  
  
			</div>
			</div>
			
			
			
			
			
			</div>
</section>

 <!--/ body page End/-->











   


<!--/ Section Contact-Footer Star /-->
<?php
include "include/footer.php";
?>
  
  
  
  

  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>






 

  <!-- JavaScript Libraries -->
  <script src="asset/lib/jquery/jquery.min.js"></script>
  <script src="asset/lib/jquery/jquery-migrate.min.js"></script>
  <script src="asset/lib/popper/popper.min.js"></script>
  <script src="asset/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/lib/easing/easing.min.js"></script>
  <script src="asset/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="asset/lib/counterup/jquery.counterup.js"></script>
  <script src="asset/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="asset/lib/lightbox/js/lightbox.min.js"></script>
  <script src="asset/lib/typed/typed.min.js"></script>

  
  <!--Pagination Css & JavaScript File -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  
  <!-- Template Main Javascript File -->
  <script src="asset/js/main.js"></script>
<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>


</body>

</html>
