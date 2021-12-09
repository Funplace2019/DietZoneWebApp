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


<!--/Time Script /-->
<script>
var d = new Date(<?php echo time() * 1000 ?>);
                                    function updateClock() {
                                    // Increment the date
                                    d.setTime(d.getTime() + 1000);
                                    // Translate time to pieces
                                    var currentHours = d.getHours();
                                    var currentMinutes = d.getMinutes();
                                    var currentSeconds = d.getSeconds();
                                    // Add the beginning zero to minutes and seconds if needed
                                    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
                                    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
                                    // Determine the meridian
                                    var meridian = (currentHours < 12) ? "am" : "pm";
                                    // Convert the hours out of 24-hour time
                                    currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
                                    currentHours = (currentHours == 0) ? 12 : currentHours;
                                    // Generate the display string
                                    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + meridian;
                                    // Update the time
                                    document.getElementById("clock").firstChild.nodeValue = currentTimeString;
                                    }
                                    window.onload = function() {
                                    updateClock();
                                    setInterval('updateClock()', 1000);
                                    }
                                    </script>



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
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
             Dashboard
            </h3>
			 <div class="line-mf"></div>
       <!--/ time  /-->   
  <div id="clock"  class="text-right text-lite ">  		
	<p class="text-right"> Welcome &nbsp;<b><?php echo $_SESSION["UNAME"]; ?></b></p>    
	
	</div>								
		 					
									
           

<!--- Register Msg --->
  <div class="text-center text-primary">
  <?php
if(isset($_GET["mess"]))
{
	echo $_GET["mess"];
}
?>
</div>
<!--- Register Msg end--->


          </div>
        </div>
      </div>
      <div class="row">
 
		
		
		
		
		 <div class="col-md-3">
          <div class="service-box" id="profileborder">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-eye"></i>

</span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> Total Customer</h2>
               <h1 class="s-description text-center">
					<!--<?php  echo countRecord("select * from  admin_login",$db);?> --></h1>
            </div>
          </div>
        </div>
	
	
			 <div class="col-md-3">
          <div class="service-box" id="profileborder">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-eye"></i>

</span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> Total Orders</h2>
                <h1 class="s-description text-center">
					<!--<?php  echo countRecord("select * from  admin_login",$db);?> -->  </h1>
            </div>
          </div>
        </div>
		
				 <div class="col-md-3">
          <div class="service-box" id="profileborder">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-eye"></i>

</span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> Total Products</h2>
              <h1 class="s-description text-center">
					<?php  echo countRecord("select * from  gendral_sku",$db);?></h1>
            </div>
          </div>
        </div>
		
		
		
				 <div class="col-md-3">
          <div class="service-box" id="profileborder">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-eye"></i>

</span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> Total Sale</h2>
                <h1 class="s-description text-center">
					<!--<?php  echo countRecord("select * from  admin_login",$db);?> --></h1>
            </div>
          </div>
        </div>
		
		 <div class="col-md-3">
          <div class="service-box" id="profileborder">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-eye"></i>

</span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> Low Qty Products</h2>
                <h1 class="s-description text-center">
					<?php  echo countRecord("select * from  gendral_sku where QTY <=2",$db);?> /	<?php  echo countRecord("select * from  gendral_sku",$db);?></h1>
					<p class="text-center">Min 2 </p>
            </div>
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

</body>

</html>
