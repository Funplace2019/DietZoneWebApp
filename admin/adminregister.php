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
	header("location:login.php");
}




if(isset($_POST["submit"]))
{
	
	$op=$_POST["pass"];
	$np=$_POST["cpass"];
	$eop=md5($op);
	$enp=md5($np);
	
	if($eop==$enp)
	{



$sql="insert into admin_login(ID,UNAME,UPASS,ACTION,LOGS)values(null,
'{$_POST["name"]}',
'$eop',
'{$_POST["action"]}',
now())";
$res=$db->query($sql);
if($res)
{
	
	header("location:adminregister.php?mes=<p> <u></u><b> Success.</b></u></p>");
}
else
{
	header("location:feedback.php?mess=<p> <u></u><b>Failed To Register .</b></u></p>");
}
	}
	else{
			header("location:adminregister.php?messs=<p> <u></u><b> Password miss match</b></u></p>");
		
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

		

	<title>
		Bottunthori | Change Password

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
           Admin Register
            </h3>
            <p class="subtitle-a">
              Find Your Perfect Partner With Us
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
	  </div>
  
	
<!--- Register success Msg --->
    <div style="width:300px; margin-left: auto; margin-right: auto; display: block;">
  <div class="text-center bg-success text-light">
  <?php
if(isset($_GET["mes"]))
{
	echo $_GET["mes"];
}
?>
</div>
</div>
<!--- Register Msg end--->



<!--- Register faild  Msg --->
    <div style="width:300px; margin-left: auto; margin-right: auto; display: block;">
  <div class="text-center bg-danger text-light">
  <?php
if(isset($_GET["mess"]))
{
	echo $_GET["mess"];
}
?>
</div>
</div>
<!--- Register Msg end--->


<!--- Register faild  Msg --->
    <div style="width:300px; margin-left: auto; margin-right: auto; display: block;">
  <div class="text-center bg-danger text-light">
  <?php
if(isset($_GET["messs"]))
{
	echo $_GET["messs"];
}
?>
</div>
</div>
<!--- Register Msg end--->

 

<!--/ LogIn Form /-->
		<div class="space-50"></div>
  
		
  
    <div style="width:300px; margin-left: auto; margin-right: auto; display: block;">
	
	


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
							
 
							<div class="space-20"></div>
							<div class="form-group">
								<label for="exampleInputEmail1" class="label1">Name</label>
								<input type="password" id="inputEmail" class="form-control" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
							</div>
							<div class="space-20"></div>
							<div class="form-group">
								<label for="exampleInputPassword1" class="label1"> Password</label>
								<input type="password" class="form-control" placeholder="Enter  Password"  name="pass"  autocomplete="off" required>
							</div>
								<div class="form-group">
								<label for="exampleInputPassword1" class="label1"> Confirm Password</label>
								<input type="password" class="form-control" placeholder="Enter Confirm Password"  name="cpass"  autocomplete="off" required>
								<input type="hidden" class="form-control"value="Enabled"  name="action"  autocomplete="off" required>
							</div>
							<center>
							<div class="space-20"></div>
							<button type="submit" id="bt1" name="submit" class="btn btn-primary center-block" style="width: 150px;">Save </button>
						
						
							</center>
						
							
						</form>
						</div>
<!--/ LogIn Form /-->

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
