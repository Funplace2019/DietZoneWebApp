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





if(isset($_POST["submit"]))
{


		$gid=$_POST["id"];
	
	$date=$_POST["enabled"];


$sql="update payment set status='$date' where id='{$gid}'";
$res=$db->query($sql);
if($res)
{
	 header("location:order.php");
 
}
else
{
	echo "fail";
}

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
                            <p class align="center"><b> Order Status </b></p>
                        </div>	  
                        



		

  <div class="col-md-12 ">
  <div class="row">
  

  
  
      <div style="width:300px; margin-left: auto; margin-right: auto; display: block;">
	
	


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
							
 
							<div class="space-20"></div>
							<input type="hidden" class="form-control"  name="id" value="<?php echo $_GET['id']; ?>" autocomplete="off" required>
						
							<div class="form-group">
								<label for="exampleInputEmail1" class="label1">Change Status</label>
								<select class="form-control" name="enabled" id="enabled" required >
							<option value="">Select Status</option>
								<option value="Disabled">Disabled</option>
								<option value="Acknowledged">Acknowledged</option>
								<option value="Processing The order">Processing The order</option>
								<option value="Ready for Pickup">Ready for Pickup</option>
								<option value="Out for Delivery">Out for Delivery</option>
								<option value="Reject">Reject</option>
								<option value="Delivery">Delivery</option>
								<option value="Ready to shipped">Ready to shipped</option>
								<option value="Accept Cancel Request">Accept Cancel Request</option>
								<option value="Request For Return">Request For Return</option>
								<option value="Accept Return Request ">Accept Return Request  </option>
								<option value="Reject Return Request ">Reject Return Request  </option>
								<option value="Request for replace  "> Request for replace  </option>
								</select>
		</div>
							
								
							<center>
							<div class="space-20"></div>
							<button type="submit" id="bt1" name="submit" class="btn btn-primary center-block" style="width: 150px;">Save </button>
						
						
							</center>
						
							
						</form>
						</div>
  
  
  



 
	
			
			</div>
			</div>
			
			
			
			<br>
			<br>

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
