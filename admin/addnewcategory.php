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
							
							




							
						
							$file = addslashes(file_get_contents($_FILES["cimage"]["tmp_name"]));  
							$sql="insert into category (ID,CATEGORY_NAME,IMAGE,LOGS) values(null,'{$_POST["NAME"]}','$file',now())";
							$db->query($sql);
							if($db)
							{							
				
						echo "<p class='text-success text-center'>Stored</p>";
						header("location:addnewcategory.php?mess=<p> <u></u><b>Register Parent Category Successfully.</b></u></p>");
					
							}
							else
							{
								echo "<p class='text-danger text-center'>Faild</p>";
							}
							
						
						}
						
					
						
					
					
				
						
						if(isset($_POST["submiteed"]))
							
						{
							
							
							
							
							
							
						    
							$file = addslashes(file_get_contents($_FILES["scimage"]["tmp_name"]));  
							$sql="insert into sub_category (SCID,CATEGORY_ID,SUBCATEGORY_NAME,IMAGE,LOGS) values(null,'{$_POST["cate_id"]}','{$_POST["NAME"]}','$file',now())";
							$db->query($sql);
							if($db)
							{	
											
				echo "<p class='text-success text-center'>Stored</p>";
					header("location:addnewcategory.php?mess=<p> <u></u><b>Register  Category Successfully.</b></u></p>");
			
						
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
           Category Register
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
					<a href="viewcategory.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true">  Back </a></div>
					
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
  <h6 class="card-header">Add Sub Categories</h6>
  <div class="card-body">
 
 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data">
 

 <div class="col-md-6">

						<div class="form-group">
						
							<label> Category</label>
									
		
	
		
				<select class="form-control" name="cate_id" required autofocus>
					<option disabled hidden selected>Select Category</option>
				<?php 

					$sqli = "SELECT * FROM category ORDER BY CATEGORY_NAME";
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
						
								<label>Sub Category Name</label>
								<input type="text"  class="form-control" placeholder="Enter Your Category Name" name="NAME" autocomplete="off" required autofocus>
							</input></div>

</div>


   <div class="col-md-6 well">

						<div class="form-group">
						
								<label> Sub Category Image</label>
								<input type="file"  class="form-control"  name="scimage" id="scimage" autocomplete="off" required >
							</input>
							
							
							
							</div>
							
							
					

</div>




 <div class="col-md-6">
<button type="submit" name="submiteed" class="btn btn-success center-block" id="insertsc"  style="width: 100px;">Save</button>
</div>

 </form>
 
 
  </div>
</div>
 </div>
 
  <div class="col-md-6 well">
 <div class="card">
  <h6 class="card-header">Add  Categories</h6>
  <div class="card-body">

   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data">
   <div class="col-md-6 well">

						<div class="form-group">
						
								<label> Category Name</label>
								<input type="text"  class="form-control" placeholder="Enter Your Parent Category Name" name="NAME" autocomplete="off" required autofocus>
							</input>
							
							
							
							</div>
							
							
					

</div>

   <div class="col-md-6 well">

						<div class="form-group">
						
								<label> Category Image</label>
								<input type="file"  class="form-control"  name="cimage" id="image" autocomplete="off" required >
							</input>
							
							
							
							</div>
							
							
					

</div>
  <div class="col-md-6 ">
<button type="submit" name="submit" class="btn btn-success center-block" id="insert"  style="width: 100px;">Save</button>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['svg']) == -1)  
                {  
                     alert('Invalid Image File, Please Select SVG Image');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
	  
	  $('#insertsc').click(function(){  
           var image_name = $('#scimage').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#scimage').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['svg']) == -1)  
                {  
                     alert('Invalid Image File, Please Select SVG Image');  
                     $('#scimage').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  

</body>

</html>
