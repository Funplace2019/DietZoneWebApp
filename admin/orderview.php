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
                            <p class align="center"><b> Orderd Products View</b></p>
                        </div>	  
                        


<div class align="left">
					<a href="order.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true"><-Back</a></div>
					<br>

  <div class="col-md-12 ">
  <div class="row">
  

  <div class="col-md-4 ">
  

   

  
	  <?php
			



$sql="select * from payment where id='{$_GET["idd"]}'";

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
								<td> Order Date </td><td>: </td><td>'. $row['added_on'].'</td>
								</tr>
								<tr>
								<td>  Order ID</td><td>: </td><td>'. $row['order_id'].'</td>
								</tr>
								<tr>
								<td>  Payment Mode</td><td>: </td><td>Online</td>
								</tr>
								
								<tr>
								<td>  Payment Status</td><td>: </td><td>'. $row['payment_status'].'</td>
								</tr>
								
								<tr>
								<td>  Razer ID</td><td>: </td><td>'. $row['payment_id'].'</td>
								</tr>
					
					

</table>
      </div>
    </div>
	
	<br>
	
	

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
			



$sql="select * from address where Session_ID='{$_GET["id"]}'";


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
								
								<center><p class="text-light bg-dark">Shipping Address</p></center>
								<div class="line-mf"></div>
								
							<tr>
								<td> Address</td><td>: </td><td>'. $row['fn'].' , '. $row['stn'].'  , '. $row['lm'].' , '. $row['city'].'
								, '. $row['state'].', '. $row['pc'].'</td>
								</tr>
								
							

</table>
      </div>
    </div>

	<br>

    </div>

					';
			}}
  ?>
  </div>




  
  
  <div class="col-md-4 ">
  
   
	  <?php
			



$sql="select * from payment where id='{$_GET["idd"]}'";

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
								
								<center><p class="text-light bg-dark">Orderd Product Details</p></center>
								<div class="line-mf"></div>
								
	<tr>
								<td> Product Name </td><td>: </td><td>'. $row['name'].'</td>
								</tr>
									<tr>
								<td> Product Category </td><td>: </td><td>'. $row['getcc'].'</td>
								</tr>
								<tr>
								<td> Price</td><td>: </td><td>'. $row['amount'].' Rs</td>
								</tr>
								
								
								<tr>
								<td> Qty</td><td>: </td><td>'. $row['qty'].' Nos</td>
								</tr>
								
								<tr>
								<td>  Total</td><td>: </td><td>'. $row['total'].' Rs</td>
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
			



$sql="select * from signup where ID='{$_GET["id"]}'";

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
								
								<center><p class="text-light bg-dark">User Details</p></center>
								<div class="line-mf"></div>
								
	<tr>
								<td>  Name </td><td>: </td><td>'. $row['NAME'].'</td>
								</tr>
									<tr>
								<td> Mobile  </td><td>: </td><td>'. $row['MOBILE'].'</td>
								</tr>
								<tr>
								<td> Email</td><td>: </td><td>'. $row['EMAIL'].' Rs</td>
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

</section>

 <!--/ body page End/-->




<section id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
          Status
            </h3>
			 <div class="line-mf"></div>
			
									
           

					
					<br>




<?php
$sql="select * from payment where session_ID='{$_GET["id"]}' order by id DESC";
//$sql="select signup.ID,signup.NAME,signup.MOBILE,signup.EMAIL,payment.id,payment.session_ID,payment.order_id,payment.getid,payment.name,payment.qty,payment.total,payment.added_on,payment.payment_status from signup  INNER JOIN payment on signup.ID=payment.session_ID order by signup.ID DESC";




$res=$db->query($sql);
if($res->num_rows>0)
{
echo "<table class='table table-fluid' id= 'myTable'>
    <thead class='text-light bg-dark'>
    <tr>
	<th>#</th>

	
	<th>Ordered ID</th>
	<th>Product Name</th>
	<th>Qty & Price</th>
	<th>Order Status</th>


	<th>Ordered Date</th>
	<th>status</th>



	</tr>
	
    </thead>
	";
	
  

	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
	echo "<tr>
	<td>{$i}</td>
	
	<td>{$row["order_id"]}</td>
	<td>{$row["name"]}</td>
	<td>({$row["qty"]} ) {$row["total"]} Rs</td>
	<td>{$row["payment_status"]}</td>
	
	
	
	<td>{$row["added_on"]}</td>
	<td><a class='bg-light text-danger' href=orderchangestatus.php?id=".$row['id'].">{$row["status"]}</a></td>
	


	
	
	 
	
	
	</tr>
";
	}
}

else
{
	
	echo "<p class='bg-danger text-light'>No Product Yet</p>";
}
	?>
    
    </tbody>
    </table>

          </div>
        </div>
      </div>

    </div>
	
	
	
  </section>







   


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
