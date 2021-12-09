
<?php
session_start();
include "include/database.php";

					

?>

<!DOCTYPE html>
<html lang="en">

<head>


	<title>
		Keto Mart | Admin Panel | Login

		</title>
		
		<?php

include "include/header.php";

					

?>

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-reduce navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
    
       <a class="navbar-brand js-scroll" href="#page-top"><img src="asset/images/logo.png" style="float:left; width:150px; height:40px; background-color:#fff;" style="float:left;"></img></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
     
	  
	  <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php">Home</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll" href=""> Go website</a>
          </li>
        
	
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->
  
  
  <br>
  
  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Admin LogIn Here
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

  <div class="text-center text-danger">
  <?php
if(isset($_GET["mes"]))
{
	echo $_GET["mes"];
}
?>
</div>
<!--- Session Destroy Msg end--->


 

<!--/ LogIn Form /-->
		<div class="space-50"></div>
  
		<?php
if(isset($_POST["submit"]))
{
	$pass=$_POST["pass"];
	$epass=md5($pass);
$sql="select * from admin_login where UNAME='{$_POST["name"]}' AND UPASS='$epass' AND ACTION='Enabled'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	$row=$res->fetch_assoc();
		$_SESSION["ID"]=$row["ID"];
		
		$_SESSION["UNAME"]=$row["UNAME"];
	

						
	
	Header("location:admin_index.php");

}
else
{
	echo "<h6 class='text-danger text-center'><b>Invalid User Details  Or Your Account Is Blocked </b></h6>";
}
}

?>
  
    <div style="width:300px; margin-left: auto; margin-right: auto; display: block;">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
							
 
							<div class="space-20"></div>
							<div class="form-group">
								<label for="exampleInputEmail1" class="label1">User Name</label>
								<input type="text" id="inputEmail" class="form-control" placeholder="Enter You User Name" name="name" autocomplete="off" required autofocus>
							</div>
							<div class="space-20"></div>
							<div class="form-group">
								<label for="exampleInputPassword1" class="label1"> Password</label>
								<input type="password" class="form-control" placeholder="Enter Your Password"  name="pass"  autocomplete="off" required>
							</div>
							<center>
							<div class="space-20"></div>
							<button type="submit" id="bt1" name="submit" class="btn btn-primary center-block" style="width: 100px;">Login</button>
						
							</center>
						
							
						</form>
						</div>
<!--/ LogIn Form /-->

  </section>









<br>
<br>
<br>
<br>
<br>
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


</body>


</html>
