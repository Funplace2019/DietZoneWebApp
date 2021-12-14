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
                            <p class align="center"><b>Edit Products</b></p>
                        </div>	  
                        


<div class align="left">
					<a href="product.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true"><-Back</a></div>
					<br>
 	



<?php

if(isset($_POST['submit']))
	
{
	$description=addslashes($_POST['description']);
	$description1=addslashes($_POST['description1']);
	$description2=addslashes($_POST['description2']);
	$file = addslashes(file_get_contents($_FILES["file1"]["tmp_name"])); 
	$efile = addslashes(file_get_contents($_FILES["file2"]["tmp_name"])); 
	$eefile = addslashes(file_get_contents($_FILES["file3"]["tmp_name"])); 
	$sql="INSERT INTO specification_image(ID,PID,SPECIFICATION,SPECIFICATION1,SPECIFICATION2,IMAGE1,IMAGE2,IMAGE3,LOGS) VALUES (null,'{$_POST["idvalue"]}','$description','$description1','$description2','$file','$efile','$eefile',now())";
	$db->query($sql);
		if($db)
      {  
           echo '<script>alert("Image & Spec  Inserted into Database")</script>';  
      }
else
{
	echo '<script>alert("Failed")</script>';  
}	
}

?>
	
  
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data">	

  <div class="col-md-12 ">
  <div class="row">	
<div class="col-md-3">
<div class="form-group">
<label>Please Select ID value </label>
<select  class="form-control" name="idvalue"   id="idvalue"  required ><option></option><?php $sqli = "SELECT * FROM gendral_sku order by ID DESC";$result = mysqli_query($db, $sqli);while ($row = mysqli_fetch_array($result)) {echo '<option value='.$row['ID'].'>'.$row['ID'].' - '.$row['SKU'].'- '.$row['VARIATION_TITLE'].' </option>';}?></select>
</div></div>

<div class="col-md-3">
<div class="form-group">
<label>Product Image 1</label>
<input type="file" class=" form-control" name="file1"  required autocomplete="off"  >
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>Product Image 2</label>
<input type="file" class=" form-control" name="file2" required autocomplete="off"  >
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>Product Image 3</label>
<input type="file" class="form-control" name="file3"  required autocomplete="off"  >
</div>
</div>





	<div class="col-md-12">
<div class="form-group">
<label>Paste Specification Here </label>
	   <textarea class="form-control" name="description"  required  id="editor1"   ></textarea>
	   </div>
	   </div>
	   
	   	<div class="col-md-12">
<div class="form-group">
<label>Paste About Product Here </label>
	   <textarea class="form-control" name="description1"  required  id="editor2"   ></textarea>
	   </div>
	   </div>
	   
	   
	   
	   	<div class="col-md-12">
<div class="form-group">
<label>Paste Ingredients Here </label>
	   <textarea class="form-control" name="description2"  required id="editor3"   ></textarea>
	   </div>
	   </div>
	   
	   
	   
	   

	  
	  	
	<div class="col-md-6">
<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary">
 </div>
	   </div>
	
	
	</form>
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
  
   <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'editor1' );
  CKEDITOR.replace( 'editor2' );
  CKEDITOR.replace( 'editor3' );
 
</script>
</body>

</html>
