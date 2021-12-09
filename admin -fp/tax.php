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
                            <p class align="center"><b>TAX</b></p>
                        </div>	  
                        

<!--/ form/-->
  <div class="col-md-12 well">
  <div class="row">
 <div class="col-md-6 well">
 <div class="card">
  <h6 class="card-header">Add TAX</h6>
  <div class="card-body">
  <?php
  if(isset($_POST["submit"]))
							
						{
							
						
							
							$sql="insert into tax (id,display_name,tax_rat,enabled) values(null,'{$_POST["dname"]}','{$_POST["taxrate"]}','{$_POST["method"]}')";
							$db->query($sql);
							if($db)
							{							
				
						
							}
							
						
						}
						
						
					
						?>
 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data">
 
 <div class="col-md-6">

						<div class="form-group">
						<label>Display Name</label>
						<input type="text" class="form-control" id="form-control" name="dname" autocomplete="off" required class="form-control">
                                                       
						</div>

</div>
 <div class="col-md-6">

						<div class="form-group">
						
							<label>TAX rate</label>
							<input type="text" class="form-control" name="taxrate" autocomplete="off" required class="form-control">
                                                       
							
							</div>

</div>


 <div class="col-md-6">

						<div class="form-group">
						
							<label>Enabled</label>
								
								 <select  class="form-control" name="method"><option value=""></option><option value="YES">YES</option><option value="NO">NO</option></select><!----><!----><!---->
   
								
								</div>

</div>

 <div class="col-md-6">
<button type="submit" name="submit" class="btn btn-danger center-block" style="width: 100px;">Save</button>
					</div>

 </form>
 
 
  </div>
</div>
 </div>
 
  <div class="col-md-6 well">
 <div class="card">
  <h6 class="card-header">Added Tax</h6>
  <div class="card-body">
				
						
   


					
						<?php
$sql="select * from tax";
$res=$db->query($sql);
if($res->num_rows>0)
{
	echo "<table class='table table-striped table-hover'>
	<tr>
	<th>SNO</th>

	<th>Display Name</th>
	<th>Tax Rate</th>
	<th>Enabled</th>
	<th>Action</th>
	
	
	</tr>
	
	
	";
	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
		echo "<tr>";
		echo "<td>{$i}</td>";
	
	
		echo "<td>{$row["display_name"]}</td>";
		echo "<td>{$row["tax_rat"]}</td>";
		echo "<td>{$row["enabled"]}</td>";
	
	
		echo "<td><a href=taxdelete.php?id=".$row['id'].">Delete</a></td>";
		echo "</tr>";
	}
	
	echo "</table>";
}
else
{
	echo "<div class='text-center text-danger'> <p><b>No TAX   Found</b></p></div>";
}
?>
						
						
							



  </div>
</div>
 </div>
 
 
 </div>
 </div>
 
 
 
 
 <!--/ form end/-->














</div>
</div>

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
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="asset/js/main.js"></script>

</body>

</html>
