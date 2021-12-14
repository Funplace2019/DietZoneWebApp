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
		Online Store | Admin Panel | 

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
<br>
<br>
<br>

<!--/ Section Services Star /-->
  <section id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
            Product
            </h3>
			 <div class="line-mf"></div>
			
									
           

<div class align="right">
					<a href="addnewproduct.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true">+ Add New</a>
					<a href="productedit.php" class="btn btn-dark  btn-sm " role="button" aria-pressed="true">+ Add Img & Spec</a>
					
					
					</div>
					
					<br>




<?php
$sql="select * from gendral_sku order by ID DESC";

$res=$db->query($sql);
if($res->num_rows>0)
{
echo "<table class='table table-fluid' id= 'myTable'>
    <thead class='text-light bg-dark'>
    <tr>
	<th>#</th>

	
	<th>SKU</th>
	<th>Product Id</th>
	<th>Variation Title</th>
	<th>Qty</th>
	<th>Product Add Date</th>
	<th>Edit</th>
	<th>View</th>

	<th>Delete</th>


	</tr>
	
    </thead>
	";
	
  

	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
	echo "<tr>
	<td>{$i}</td>
	
	<td>{$row["SKU"]}</td>
	<td>{$row["PRADUCT_ID"]}</td>
	<td>{$row["VARIATION_TITLE"]}</td>
	<td>{$row["QTY"]}</td>
	<td>{$row["LOGS"]}</td>
	<td><a href=productedit.php?id=".$row['ID']." ><i class='fa fa-pencil-square fa-lg'></i></a></td>
	<td><a href=productview.php?id=".$row['ID']."><i class='fa fa-eye fa-lg'></i></a></td>
	
		<td><a href=productdelete.php?id=".$row['ID']."><i class='fa fa-trash-o fa-lg'></i></a></td>
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
  
  
    <!--Pagination Css & JavaScript File -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  
  <!-- Template Main Javascript File -->
  <script src="asset/js/main.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

</body>

</html>
