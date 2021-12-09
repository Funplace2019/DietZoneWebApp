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
  <br>
  
<section id="service" class="services-mf route">
<div class="container-fluid">
<div class="col-md-12 ">
 <h4 class="text-center">Show Category</h4>
	
<div class align="right">
					<a href="addnewcategory.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true">+ Add New</a></div>
					
					<br>


<!---  Msg end--->
   
   <br>
   
 <!--/ form/-->
  <div class="col-md-12 ">
  <div class="row">
  
  
   
 <div class="col-md-4">

<?php
if(isset($_GET["mess"]))
{
	echo $_GET["mess"];
	
}
?>
	<?php
	
//$sql="SELECT  category.ID, category.CATEGORY_NAME, sub_category.SCID, sub_category.CATEGORY_ID,sub_category.SUBCATEGORY_NAME FROM category INNER JOIN sub_category ON category.CATEGORY_NAME=sub_category.CATEGORY_ID ";
$sql="select * from category";
$res=$db->query($sql);
if($res->num_rows>0)
{
echo "<table class='table table-fluid' id= 'myTable'>
    <thead class='text-light bg-dark'>
    <tr>
	<th>#</th>
	
	<th>Category</th>
	<th>Category Delete</th>




	
	


	</tr>
	
    </thead>
	";
	
  

	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
	echo "<tr>
	<td>{$i}</td>
	<td>{$row["CATEGORY_NAME"]}</td>
  <td><a href=delcategory.php?id=".$row['ID'].">Delete</a></td>

	 
	 
	 

	
	
	
	</tr>
	
	  
";
	}
}
else
{
	
	echo "<p class='text-center bg-danger text-light'>No Category Yet </p>";
}
	?>
    
  </tbody>
    </table>
	  
	  
						
</div>



 <div class="col-md-4">

<?php
if(isset($_GET["messs"]))
{
	echo $_GET["messs"];
	
}
?>
	<?php
	
//$sql="SELECT  category.ID, category.CATEGORY_NAME, sub_category.SCID, sub_category.CATEGORY_ID,sub_category.SUBCATEGORY_NAME FROM category INNER JOIN sub_category ON category.CATEGORY_NAME=sub_category.CATEGORY_ID ";
$sql="select * from sub_category ";

$res=$db->query($sql);
if($res->num_rows>0)
{
echo "<table class='table table-fluid' id= 'myTable1'>
    <thead class='text-light bg-dark'>
    <tr>
	<th>#</th>
	
	
	<th>Sub Category</th>
	<th>Sub Category Delete</th>



	
	


	</tr>
	
    </thead>
	";
	
  

	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
	echo "<tr>
	<td>{$i}</td>

	<td>{$row["SUBCATEGORY_NAME"]}</td>
	 <td><a href=deletesubcategory.php?id=".$row['SCID'].">Delete</a></td>
	 
	 
	 

	
	
	
	</tr>
	
	  
";
	}
}
else
{
	
	echo "<p class='text-center bg-danger text-light'>No Category Yet </p>";
}
	?>
    
  </tbody>
    </table>
	  
	  
						
</div>



 <div class="col-md-4 ">
 <div class="card">
  <h6 class="card-header">List Categories</h6>
  <div class="card-body">
 
 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data">
 
 <div class="col-md-6">

						<div class="form-group">
						
								<label>Category Name</label>
								
			<select class="form-control" name="category" id="category"  required autofocus>
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
							
							
							<div class="form-group">
						
							<label>Sub Category</label>
									
		
	
		
				<select class="form-control" name="subcategory" id="subcategory" >
					<option disabled hidden selected>Select SubCategory</option>
				
				</select>
				
							
							
							
							</div>


</div>




 </form>
 
 
  </div>
</div>
 </div>


 
 
 </div>
 </div>
 
 
 
 
 <!--/ form end/-->
 
   
 
   


	


</div>
</div>

</section>
 
	
	
<br>
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
  
  
     <!-- Table --> 
   
   <!--Pagination Css & JavaScript File -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    $('#myTable1').DataTable();
} );
    </script>
	
	
  
 <script>
 $("#category").change(function(){
	 
	 cid=$(this).val();
	 $.post("subcateogry_query.php",{id:cid},function(data){
		 
		 $("#subcategory").html(data);
	 });
	 
 });
 </script>
				


</body>

</html>
