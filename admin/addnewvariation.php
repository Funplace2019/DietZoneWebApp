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
							
							




							
						
							
							$sql="insert into variation (ID,CATEGORY_NAME,LOGS) values(null,'{$_POST["NAME"]}',now())";
							$db->query($sql);
							if($db)
							{							
				
						echo "<p class='text-success text-center'>Stored</p>";
						header("location:addnewvariation.php?mess=<p> <u></u><b>Register Parent Variation Successfully.</b></u></p>");
					
							}
							else
							{
								echo "<p class='text-danger text-center'>Faild</p>";
							}
							
						
						}
						
					
						
					
					
				
						
						if(isset($_POST["submiteed"]))
							
						{
							
							
							
							
							
							
						    
							
							$sql="insert into variation_value (SCID,CATEGORY_ID,SUBCATEGORY_NAME,LOGS) values(null,'{$_POST["cate_id"]}','{$_POST["NAME"]}',now())";
							$db->query($sql);
							if($db)
							{	
											
				echo "<p class='text-success text-center'>Stored</p>";
					header("location:addnewvariation.php?mess=<p> <u></u><b>Register  Child Variaion  Successfully.</b></u></p>");
			
						
							}
							else
							{
								echo "<p class='text-danger text-center'>Faild</p>";
							}
							
						
						}
						
						

?>


<!DOCTYPE html>
<html lang="en">

<head>

		

	<title>
		Online Store | Category

		</title>
		<?php

include "include/header.php";

					

?>



</head>

<body id="page-top" >


<?php

include "include/mat_nav.php";

					

?>
 
<br>
<br>

  
  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
          Variation Register
            </h3>
            <p class="subtitle-a">
              Wonder what your customer really wants? Ask. Don’t tell.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
	  </div>
	  
	  
	  

  
	
	<!--/ Section Services Star /-->
	
 <div class="col-md-4 well">
 <div class align="left">
					<a href="variation.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true">  Back </a></div>
					
					<br>
  <div class="text-center text-light bg-success">
  <?php
if(isset($_GET["mess"]))
{
	echo $_GET["mess"];
}
?>
</div>
</div>
<!--- Session Destroy Msg end--->  
	
	 <!--/ form/-->
  <div class="col-md-12 well">
  <div class="row">
 <div class="col-md-6 well">
 <div class="card">
  <h6 class="card-header">Add Variation Value</h6>
  <div class="card-body">
 
 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data">
 
 
 
  <div class="col-md-6">

						<div class="form-group">
						
							<label> Variation</label>
									
		
	
		
				<select class="form-control" name="cate_id" required autofocus>
					<option disabled hidden selected>Select Category</option>
				<?php 

					$sqli = "SELECT * FROM variation ORDER BY CATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo '<option value='.$row['CATEGORY_NAME'].'>'.$row['CATEGORY_NAME'].'</option>';
					 }	
 

					?>
				</select>
				
							
							
							
							</div>

</div>


 <div class="col-md-6">

						<div class="form-group">
						
								<label> Variation Name</label>
								<input type="text"  class="form-control" placeholder="Enter Your variation Name" name="NAME" autocomplete="off" required autofocus>
							</input></div>

</div>







 <div class="col-md-6">
<button type="submit" name="submiteed" class="btn btn-success center-block" style="width: 100px;">Save</button>
</div>

 </form>
 
 
  </div>
</div>
 </div>
 
  <div class="col-md-6 well">
 <div class="card">
  <h6 class="card-header">Add  Variation</h6>
  <div class="card-body">

   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data">
   <div class="col-md-6 well">

						<div class="form-group">
						
								<label> Variation Name</label>
								<input type="text"  class="form-control" placeholder="Enter Your Parent Category Name" name="NAME" autocomplete="off" required autofocus>
							</input>
							
							
							
							</div>
							
							
					

</div>




  <div class="col-md-6 ">
<button type="submit" name="submit" class="btn btn-success center-block"  style="width: 100px;">Save</button>
   </div>
   </form>
  </div>
</div>
 </div>
 
 
 </div>
 </div>
 
 
 
 
 <!--/ form end/-->
 


  </section>

<br>
<br>
<br>
<br>





  <!--/ Section Contact-Footer Star /-->
<?php

include "include/footer.php";

					

?>

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
