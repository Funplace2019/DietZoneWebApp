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
		DietZone | Admin Panel | Merchants

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
                            <p class align="center"><b>Merchants </b></p>
                        </div>	  
						






<!--/ form/-->
  <div class="col-md-12 well">
  <div class="row">
 <div class="col-md-3 well">
 <div class="card">
  <h6 class="card-header">Add Merchants</h6>
  <div class="card-body">
  
 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="frm" enctype="multipart/form-data">
 
 <div class="col-md-12">

						<div class="form-group">
						<label>Merchants Name</label>
						<input type="text" class="form-control" name="mname"  id="mname" autocomplete="off" required class="form-control">
                                                       
						</div>

</div>
 <div class="col-md-12">

						<div class="form-group">
						
							<label>Merchants Code</label>
							<input type="text" class="form-control" name="mcode" id="mcode" autocomplete="off" required class="form-control">
                                                       
							
							</div>

</div>

<div class="col-md-12">

						<div class="form-group">
						
							<label>Merchants Address</label>
							<textarea  class="form-control" placeholder="Enter Your Address"  name="maddress" id="maddress" autocomplete="off" required autofocus>
</textarea >
                                                       
						
							</div>

</div>

<div class="col-md-12">

						<div class="form-group">
						
							<label>Merchants Contact Numbers -1</label>
							<input type="text" class="form-control" name="mc1" id="mc1" autocomplete="off" required class="form-control">
                                                       
							
							</div>

</div>

<div class="col-md-12">

						<div class="form-group">
						
							<label>Merchants Contact Numbers -2</label>
							<input type="text" class="form-control" name="mc2"  id="mc2" autocomplete="off" required  class="form-control">
                                                       
							
							</div>

</div>


<div class="col-md-12">

						<div class="form-group">
						
							<label>Merchants Email</label>
							<input type="Email" class="form-control" name="mmail" id="mmail" autocomplete="off" required class="form-control">
                                                       
							
							</div>

</div>

<div class="col-md-12">

						<div class="form-group">
						
							<label>Merchants GST Number</label>
							<input type="text" class="form-control" name="mgst"  id="mgst" autocomplete="off" required class="form-control">
                                                       
							
							</div>

</div>





 <div class="col-md-12">

						<div class="form-group">
						
							<label>Enabled</label>
								
								 <select  class="form-control" name="method" id="method" ><option value=""></option><option value="YES">YES</option><option value="NO">NO</option></select><!----><!----><!---->
   
								
								</div>

</div>

 <div class="col-md-6">
<button type="submit" name="submit" id="submit" class="btn btn-danger center-block" style="width: 100px;">Save</button>
					</div>

 </form>
 
 
  </div>
</div>
 </div>
 
  <div class="col-md-9 well">
 <div class="card">
  <h6 class="card-header">Added Merchants</h6>
  <div class="card-body">
				
						
   


					
						<?php
$sql="select * from merchants";
$res=$db->query($sql);
if($res->num_rows>0)
{
	echo "<table class='table table-striped table-hover border' >
	<tr class='bg-dark text-light'>
	<th>SNO</th>

	<th> Name</th>
	<th>Code</th>
	<th>Address</th>
	<th>Contact</th>
	<th>Email</th>
	<th>GST</th>
	<th>Enabled</th>
	
	<th>Action</th>
	<th>View</th>
	
	
	</tr>
	
	
	";
	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
		echo "<tr >";
		echo "<td>{$i}</td>";
	
	
		echo "<td>{$row["NAME"]}</td>";
		echo "<td>{$row["CODE"]}</td>";
		echo "<td>{$row["ADDRESS"]}</td>";
		echo "<td>{$row["CITY"]},{$row["STATE"]}</td>";
		echo "<td>{$row["COUNTRY"]}</td>";
		echo "<td>{$row["PICODE"]}</td>";
			echo "<td>{$row["METHOD"]}</td>";
	
		echo "<td>
		<a href=merchantsdelete.php?id=".$row['ID']."><i class='fa fa-trash-o fa-lg'></i></a> &nbsp;&nbsp;
		</td>";
		
		
			echo "<td><a href=merchantsview.php?id=".$row['CODE']."-".$row['NAME']."><i class='fa fa-eye fa-lg'></i></a></td>";
		
		
		
		echo "</tr>";
	}
	
	echo "</table>";
}
else
{
	echo "<div class='text-center text-danger'> <p><b>No Merchants Found</b></p></div>";
}
?>
						
						
							



  </div>
</div>
 </div>
 
 
 </div>
 </div>
 
 

 
 <!--/ form end/-->
<br>
<br>
<br>
<br>











</div>
</div>

 <!--/ body page End/-->











   


<!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" >
    <div class="overlay-mf"></div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">	  
            <div class="copyright-box">
			
			
			         

              <p class="copyright">&copy; Copyright <strong>Dietzone</strong>. All Rights Reserved</p>
              <div class="credits">
              
                Designed by <a href="www.dietzone.shop/index.html">Funplace Enterprice Pvt Ltd</a>
				
				
              </div>
			  
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  
  
  
  

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

<script>
$("document").ready(function(){

 $("#submit").click(function(){
	   var mname=$("#mname").val();
	   var mcode=$("#mcode").val();
	   var maddress=$("#maddress").val();
	   var mc1=$("#mc1").val();
	   var mc2=$("#mc2").val();
	   var mmail=$("#mmail").val();
	   var mgst=$("#mgst").val();
	   var method=$("#method").val();
	   
		   if(mname==""){
			  alert("Please Enter Merchants Name");
			  document.form.mname.focus();
			  return false;
		  }
		  
		  
		  if(mcode==""){
			  alert("Please Enter Merchants Code");
			  document.form.mcode.focus();
			  return false;
		  }
		  
		  if(maddress==""){
			  alert("Please Enter Merchants Address");
			  document.form.maddress.focus();
			  return false;
		  }
		  
		  if(mc1==""){
			  alert("Please Enter Merchants Contact number");
			  document.form.mc1.focus();
			  return false;
		  }
		  
		  if(isNaN(mc1)){
			  alert("Please Enter Correct Mobile Number");
			  document.form.mc1.focus();
			  return false;
		  }
		  
		  if(mc2==""){
			  alert("Please Enter Contact number");
			  document.form.mc2.focus();
			  return false;
		  }
		  
		   if(isNaN(mc2)){
			  alert("Please Enter Correct Mobile Number");
			  document.form.mc2.focus();
			  return false;
		  }
		  
		  if(mmail==""){
			  alert("Please Enter Merchants Email");
			  document.form.mmail.focus();
			  return false;
		  }
		  
		  
		  if(mgst==""){
			  alert("Please Enter Merchants GST ID");
			  document.form.mgst.focus();
			  return false;
		  }
		  
		  
		  
		  
		  
		  if(method==""){
			  alert("Please Select Enabled or Disable ");
			  document.form.method.focus();
			  return false;
		  }
		  
		   
	   $.ajax({
				 url:"merchents_db_query.php",
				type:"post",
				data:$("#frm").serialize(),
				success:function(data)
				{
					alert(data);
					$("#frm")[0].reset();
					
				}
				  
			  });
 });
});
</script>



</body>

</html>
