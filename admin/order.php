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
          Order Details
            </h3>
			 <div class="line-mf"></div>
			
									
           

					
					<br>




<?php
//$sql="select * from gendral_sku order by ID DESC";
$sql="select signup.ID,signup.NAME,signup.MOBILE,signup.EMAIL,payment.id,payment.session_ID,payment.order_id,payment.getid,payment.name,payment.qty,payment.total,payment.added_on,payment.payment_status,payment.status from signup  INNER JOIN payment on signup.ID=payment.session_ID order by payment.id DESC";




$res=$db->query($sql);
if($res->num_rows>0)
{
echo "<table class='table table-fluid' id= 'myTable'>
    <thead class='text-light bg-dark'>
    <tr>
	<th>#</th>

	
	<th>Ordered ID</th>
	<th>Qty & Price</th>
	<th>Order Status</th>
	<th>User Name</th>
	<th>Contact</th>

	<th>Ordered Date</th>
	<th>Status</th>
	<th>View</th>



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
	<td>({$row["qty"]} ) {$row["total"]} Rs</td>
	<td>{$row["payment_status"]}</td>
	<td>{$row["NAME"]}</td>
	<td>{$row["MOBILE"]}</td>
	
	
	<td>{$row["added_on"]}</td>
	
		<td>{$row["status"]}</td>
	

<td><a href=orderview.php?id=".$row['ID']."&idd=".$row['id']."&gid=".$row['getid']."><i class='fa fa-eye fa-lg'></i></a></td>
	
	
	 
	
	
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
