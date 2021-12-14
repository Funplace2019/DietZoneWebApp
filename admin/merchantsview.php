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
		DietZone | Admin Panel | Merchants

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

</head>

<body id="page-top" >

 <!--/ Navbar/-->
<?php
include "include/mat_nav.php";
?>
  
    <!--/ body page start/-->

 <section id="service" class="services-mf route">
  <div class="container-fluid">
  

                   
      

 
  <div class="col-md-12 well">
 <div class="card">
  <h6 class="card-header">Selected  Merchant -(
  
   <?php
$sql="select DISTINCT MERCHANT from stock_management where MERCHANT='$_GET[id]'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	

	while($row=$res->fetch_assoc())
	{

		echo $row['MERCHANT'];
		
		
	}
	
	
}
else
{
	echo "<div class='text-center text-danger'> <p><b>No Merchants Found</b></p></div>";
}
?>
  )</h6>
  <div class="card-body">
			

					
						<?php
$sql="select * from stock_management where MERCHANT='$_GET[id]'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	echo "<table class='table table-fluid' >
	<tr class='bg-dark text-light'>
							<th>SNO</th>
							<th>Product</th>
							<th>invoice Number</th>
							<th>Invoice Date</th>
							
							<th>Batch Number</th>
							<th>QTY</th>
							<th>MRP</th>
							<th>Offset(%)</th>
							<th>Selling Price</th>
							<th>Log </th>
	
	
	</tr>
	
	
	";
	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
		echo "<tr >";
		echo "<td>{$i}</td>";
	
	
		//echo "<td><a data-toggle='modal' data-target='#exampleModalCenter'?id=".$row['PID_SKU'].">". $row['PID_SKU']."</a></td>";
		echo "<td>
		".$row['PID_SKU']."
		<a href=merchant_invoice_product_view.php?id=".$row['PID_SKU']." ><i class='fa fa-eye fa-lg'></i></a>
		</td>";
		echo "<td>". $row['INVOICE_NO']."</td>";
		echo "<td>". $row['INVOICE_DATE']."</td>";
		
		echo "<td>". $row['BATCH_NO']."</td>";
		echo "<td>". $row['QTY']."</td>";
		echo "<td>". $row['MRP']." Rs</td>";
		echo "<td>". $row['OFFSET']."  </td>";
		echo "<td>". $row['SELLING_PRICE']." Rs</td>";
		echo "<td>". $row['LOGS']."</td>";
		
		
		echo "</tr>";
	}
	
	echo "</table>";
}
else
{
	echo "<div class='text-center text-danger'> <p><b>No Merchants Found</b></p></div>";
}
?>
						
						
							



  </div>
</div>
 </div>
 

 

 
 <!--/ form end/-->















 <!--/ body page End/-->
</div>
</section>









   


<!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" >
    <div class="overlay-mf"></div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">	  
            <div class="copyright-box">
			
			
			         

              <p class="copyright">&copy; Copyright <strong>Dietzone</strong>. All Rights Reserved</p>
              <div class="credits">
              
                Designed by <a href="www.dietzone.shop/index.html">Funplace Enterprice Pvt Ltd</a>
				
				
              </div>
			  
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  
  
  
  

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
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="asset/js/main.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  
  

</body>

</html>
