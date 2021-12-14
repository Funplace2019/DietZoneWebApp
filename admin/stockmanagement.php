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
		DietZone | Admin Panel | Stock Management

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
<!-- ck editorJavaScript File -->
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
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
                            <p class align="center"><b>Add Product Stock</b></p>
                        </div>	  
                        


<div class align="left">
					<a href="product.php" class="btn btn-success  btn-sm active" role="button" aria-pressed="true"> <- Back</a></div>
					<br>





                                


   <!--/Form Start/-->
   <form action="<?php echo $_SERVER["PHP_SELF"];?>"  name="form"  method="post" id="frm"  enctype="multipart/form-data">
   <div class="col-md-12 ">
  <div class="row">
  
  
   <div class="col-md-3">
<div class="form-group">
<label>Invoice Number</label>
<input type="text"  class="form-control" placeholder="Enter Your Invoice Number" name="invoicenumber" id="invoicenumber" autocomplete="off" required autofocus>
</input></div></div>


   <div class="col-md-3">
<div class="form-group">
<label>Invoice Date</label>
<input type="date"  class="form-control"  name="date" id="date" autocomplete="off" required autofocus>
</input></div></div>

   


   <div class="col-md-3">
<div class="form-group">
<label> Merchants</label>
<select  class="form-control" name="merchants" id="merchants" ><option>-Select Merchants-</option><?php $sqli = "SELECT * FROM merchants";$result = mysqli_query($db, $sqli);while ($row = mysqli_fetch_array($result)) {echo '<option value="'.$row['CODE'].'-'.$row['NAME'].'">'.$row['CODE'].'-'.$row['NAME'].'</option>';}?></select>
</div></div>





 
 

</div>
 </div>
 <!--/Gendral part End/-->
 
<hr>
 <h6 class="text-dark" align="center" ><u>Product & SKU</u></h6>
 


	




<div class="col-md-12 ">
     <div class="card" id="tbl">
  <div class="card-body" id="rmove">
  <div class="row">
  
 <div class="col-md-12">
<div class="form-group">
<label> Select Product & SKU</label>
<select  class="form-control" name="product_sku" id="product_sku" ><option>-Select SKU-</option><?php $sqli = "SELECT * FROM gendral_sku ";$result = mysqli_query($db, $sqli);while ($row = mysqli_fetch_array($result)) {echo '<option value="'.$row['ID'].'">'.$row['PRODUCT_NAME'].'/'.$row['VARIATION_TITLE'].'/'.$row['SKU'].'</option>';}?></select>

</div></div>








 
 <!--/ batch Card/-->
<div class="col-md-12 ">
     <div class="card" >
	   <h6 class="card-header">Batch</h6>
  <div class="card-body" >
  <div class="row">



<div class="col-md-2">
 
<div class="form-group">
<label> Batch Number</label>
<input type="text"  class="form-control" placeholder="Batch Number" name="batchno" id="batchno" autocomplete="off" >
</input>
</div></div>

   <div class="col-md-2">
   
<div class="form-group">
<label> MFD </label>
<input type="date"  class="form-control "   name="mfd" id="mfd" autocomplete="off" >
</input>
</div></div>




   <div class="col-md-2">
   
<div class="form-group">
<label>Exp. Date</label>
<select class="form-control" name="Exp_Date" id="Exp_Date" ><option>-Select-</option>
<option value="Date">Date</option>
<option value="Day">Day</option>
<option value="Month">Month</option>


</select><!----><!----><!---->
<input type="date"  class="form-control"  name="expmfd" id="expmfd" >	
</div></div>



   <div class="col-md-1">
   
<div class="form-group">
<label> QTY </label>
<input type="text"  class="form-control"  placeholder=" QTY" name="qty" id="qty" autocomplete="off">
</input>
</div></div>


   <div class="col-md-1">
   
<div class="form-group">
<label> MRP </label>
<input type="text"  class="form-control" placeholder="MRP" name="mrp" id="mrp" autocomplete="off" >
</input>
</div></div>


   <div class="col-md-1">
   
<div class="form-group">
<label>Selling Price </label>
<input type="text"  class="form-control"   name="sellprice" id="sellprice"  autocomplete="off">
</input>
</div></div>


   <div class="col-md-1">
   
<div class="form-group">
<label> Offset </label>
<input type="text"  class="form-control"  placeholder=" flat " name="flat" id="flat" autocomplete="off">
</input>
<input type="text"  class="form-control"  placeholder=" % "    name="percentage" id="percentage" autocomplete="off">
</input>



</div></div>





   <div class="col-md-1">
   
<div class="form-group">
<label> Weight </label>
<input type="text"  class="form-control"  placeholder=" Weight" name="weight" id="weight" autocomplete="off" >
</input>
<select class="form-control" name="weightval" id="weightval" ><option>-Select-</option>
<option value="KG">KG</option>
<option value="Gram">Gram</option>
</select>
</div></div>


   <div class="col-md-1">
   
<div class="form-group">
<label> Dimensions (L/B/H) (Cm) </label>
<input type="text"  class="form-control"  placeholder="Length" name="l" id="l" autocomplete="off" >
</input>
<input type="text"  class="form-control"  placeholder="Bredth" name="b" id="b" autocomplete="off" >
</input>
<input type="text"  class="form-control"  placeholder="Height" name="h" id="h" autocomplete="off" >
</input>
</div></div>


</div>
</div>
</div>
</div>
 <!--/ Batch Card End/-->
 





	




</div>
</div>
</div>
</div>

<!--
<div class="col-md-3">
<div class="form-group">

<button class="btn btn-warning" align="right"type="button" id="add">Add New Product Stock</button>
</div></div>	
-->

 <center>
  <button type="submit" class="btn btn-primary"id="submit" name="submit">Submit</button></center>
<!--/Form End/-->


 <!--/ body page End/-->


</form>
</div>
</section>







   


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
  CKEDITOR.replace( 'editor1' );
</script>

 <script>
	  $("document").ready(function(){
		  
		 // $("#add").click(function(){
			//  $("#tbl").append('<div class="card" id="tbl"><div class="card-body" id="rmove"><div class="row"> <div class="col-md-12"><div class="form-group"><button class="btn btn-danger btn-center" type="button" id="del">Remove</button></div></div><div class="card-body" id="rmove"> <div class="row"> <div class="col-md-12"> <div class="form-group"> <label> Select Product & SKU</label> <select  class="form-control" name="product_sku[]" id="product_sku" ><option></option><?php $sqli = "SELECT * FROM gendral_sku ";$result = mysqli_query($db, $sqli);while ($row = mysqli_fetch_array($result)) {echo '<option value="'.$row['ID'].'">'.$row['PRODUCT_NAME'].'/'.$row['VARIATION_TITLE'].'/'.$row['SKU'].'</option>';}?></select> </div></div> <div class="col-md-12 "> <div class="card" > <h6 class="card-header">Batch</h6> <div class="card-body" > <div class="row"> <div class="col-md-2"> <div class="form-group"> <label> Batch Number</label> <input type="text"  class="form-control"  name="batchno[]" id="batchno" > </input> </div></div><div class="col-md-2"> <div class="form-group"> <label> MFD </label> <input type="date"  class="form-control"  name="mfd[]" id="mfd" > </input> </div></div>    <div class="col-md-2"> <div class="form-group"> <label>Exp. Date</label> <select class="form-control" name="Exp_Date[]" id="Exp_Date" ><option></option> <option value="Date">Date</option> <option value="Day">Day</option> <option value="Month">Month</option> </select> <input type="date"  class="form-control"  name="expmfd[]" id="expmfd" > </div></div><div class="col-md-1"> <div class="form-group"> <label> QTY </label> <input type="text"  class="form-control"  name="qty[]" id="qty" > </input> </div></div>    <div class="col-md-1"> <div class="form-group"> <label> MRP </label> <input type="text"  class="form-control"  name="mrp[]" id="mrp" > </input> </div></div><div class="col-md-1"> <div class="form-group"> <label> Offset </label> <input type="text"  class="form-control"  placeholder=" flat " name="flat[]" id="flat" > </input> <input type="text"  class="form-control"  placeholder=" % " name="percentage[]" id="percentage" > </input> </div></div><div class="col-md-1"> <div class="form-group"> <label>Selling Price </label> <input type="text"  class="form-control"  name="sellprice[]" id="sellprice"  > </input> </div></div><div class="col-md-1"> <div class="form-group"> <label> Weight </label> <input type="text"  class="form-control"  name="weight[]" id="weight" > </input> <select class="form-control" name="weightval[]" id="weightval" ><option></option> <option value="KG">KG</option> <option value="Gram">Gram</option> </select> </div></div>    <div class="col-md-1"> <div class="form-group"> <label> Dimensions (L/B/H) (Cm) </label> <input type="text"  class="form-control"  placeholder="Length" name="l[]" id="l" > </input> <input type="text"  class="form-control"  placeholder="Bredth" name="b[]" id="b" > </input> <input type="text"  class="form-control"  placeholder="Height" name="h[]" id="h" > </input> </div></div> </div> </div> </div> </div> </div> </div> </div>');
			 // });
		  
		  //$(document).on('click','#del',function(){
			 // $(this).closest("#rmove").remove();
		 // });
		 // $("#submit").click(function(){
			  $("#submit").click(function(){  
		  
		   var invoicenumber=$("#invoicenumber").val();
		   var date=$("#date").val();
		   var merchants=$("#merchants").val();
		   var product_sku=$("#product_sku").val();
		   var batchno=$("#batchno").val();
		   var mfd=$("#mfd").val();
		   var Exp_Date=$("#Exp_Date").val();
		   var expmfd=$("#expmfd").val();
		   var qty=$("#qty").val();
		   var mrp=$("#mrp").val();
		   var sellprice=$("#sellprice").val();
		   var weight=$("#weight").val();
		   var weightval=$("#weightval").val();
		   var l=$("#l").val();
		   var b=$("#b").val();
		   var h=$("#h").val();
			
			  
		  if(invoicenumber==""){
			  alert("Please Enter Invoice Number ");
			  document.form.invoicenumber.focus();
			  return false;
		  }
		  
		   if(isNaN(invoicenumber)){
			  alert("Please Enter Correct Invoice Number");
			  document.form.invoicenumber.focus();
			  return false;
		  }
		  
		  
		   if(date==""){
			  alert("Please Select Invoice Date ");
			  document.form.date.focus();
			  return false;
		  }
		  
		  
		  if(merchants==""){
			  alert("Please Select Merchants  ");
			  document.form.merchants.focus();
			  return false;
		  }
		  
		  
		  
		  
		  if(product_sku==""){
			  alert("Please Select product_sku  ");
			  document.form.product_sku.focus();
			  return false;
		  }
		   
		   
		   
		    if(batchno==""){
			  alert("Please Enter Batch Number  ");
			  document.form.batchno.focus();
			  return false;
		  }
		  
		  
		   
		   if(isNaN(batchno)){
			  alert("Please Enter Correct Batch Number");
			  document.form.batchno.focus();
			  return false;
		  }
		   
		   
		    if(mfd==""){
			  alert("Please Select MFD");
			  document.form.mfd.focus();
			  return false;
		  }
		  
		  
		  
		  
		   if(Exp_Date==""){
			  alert("Please Select Exp D|M|Day");
			  document.form.Exp_Date.focus();
			  return false;
		  }
		   
		   if(expmfd==""){
			  alert("Please Select EX-MFD  ");
			  document.form.expmfd.focus();
			  return false;
		  }
		   
		   
		   if(qty==""){
			  alert("Please Enter QTY  ");
			  document.form.qty.focus();
			  return false;
		  }
		   
		   
		   if(isNaN(qty)){
			  alert("Please Enter Correct QTY");
			  document.form.qty.focus();
			  return false;
		  }
		  
		  
		  if(mrp==""){
			  alert("Please Enter MRP  ");
			  document.form. mrp.focus();
			  return false;
		  }
		  
		  if(isNaN(mrp)){
			  alert("Please Enter Correct MRP");
			  document.form.mrp.focus();
			  return false;
		  }
		   
		   
		   if(sellprice==""){
			  alert("Please Enter sellprice  ");
			  document.form. sellprice.focus();
			  return false;
		  }
		  
		  
		  
		   // if(isNaN(sellprice)){
			 // alert("Please Enter Correct sell price");
			//  document.form.sellprice.focus();
			 // return false;
		//  }
		  
		  
		  
		   if(weight==""){
			  alert("Please Enter weight  ");
			  document.form. weight.focus();
			  return false;
		  }
		  
		  
		  if(isNaN(weight)){
			  alert("Please Enter Correct weight");
			  document.form.weight.focus();
			  return false;
		  }
		  
		   if(weightval==""){
			  alert("Please Select weight value ");
			  document.form. weightval.focus();
			  return false;
		  }
		  
		  
		   if(l==""){
			  alert("Please Enter Length  ");
			  document.form. l.focus();
			  return false;
		  }
		  
		  
		  if(isNaN(l)){
			  alert("Please Enter Correct Length");
			  document.form.l.focus();
			  return false;
		  }
		  
		  
		  if(b==""){
			  alert("Please Enter Bredth  ");
			  document.form. b.focus();
			  return false;
		  }
		  
		  
		  if(isNaN(b)){
			  alert("Please Enter Correct Bredth");
			  document.form.b.focus();
			  return false;
		  }
		  
		  
		  
		  if(h==""){
			  alert("Please Enter Height  ");
			  document.form. h.focus();
			  return false;
		  }
		  
		  
		  if(isNaN(h)){
			  alert("Please Enter Correct Height");
			  document.form.h.focus();
			  return false;
		  }
		 $.ajax({
				 url:"merchant_db_query.php",
				type:"post",
				data:$("#frm").serialize(),
				success:function(result)
				{
					alert(result);
					$("#frm")[0].reset();
					
				}
				  
			  });
		  });
	  });
	 
	  </script>
	  
	  
	  <script>
	  $(document).ready(function(){
		  
		 $("#flat").click(function(){
			 
			 //$("#percentage").attr("disabled",true);
			 $("#percentage").attr("hidden",true);
			 $('#percentage').val('');
			// alert("You Are Entering Flat Value  ");
			 
		 });  
		 
		 
		 $("#percentage").click(function(){
			 
			 //$("#flat").attr("disabled",true);
			 $("#flat").attr("hidden",true);
			
			$('#flat').val('');
			 //alert("You Are Entering % Value ");
			 
		 });  
		 
		 $("#mrp").click(function(){
			 
			 $("#flat").removeAttr("hidden");
			 $("#percentage").removeAttr("hidden");
			
			 
		 });  
		  
		  
	  });
	  </script>
	  
	  

			
			
	 <script>
		$(document).ready(function(){
    	// Get value on keyup funtion
	
		
    	$("#mrp, #flat").keyup(function(){

    	var total=0;    	
    	var x = Number($("#mrp").val());
    	var y = Number($("#flat").val());
    	var total=x-y;  

    	$('#sellprice').val(total);

    });
	
	$("#mrp, #percentage").keyup(function(){
		
    	var total=0;    	
    	var x = Number($("#mrp").val());
    	var y = Number($("#percentage").val());
    	var percentage=(y/100)*x;
		var total=x-percentage;
		

    	$('#sellprice').val(total);

    });
		
});
</script>





  <!-- Reverse Calculation  -->
<script>
		$(document).ready(function(){
    	// Get value on keyup funtion
	
		
    	$("#mrp, #sellprice").keyup(function(){

    	var total=0;    	
    	var x = Number($("#mrp").val());
    	var y = Number($("#sellprice").val());
    	var total=x-y;  

    	$('#flat').val(total);

    });
	
	$("#mrp, #sellprice").keyup(function(){
		
    	var total=0;    	
    	var x = Number($("#mrp").val());
    	var y = Number($("#sellprice").val());
    	//var percentage=(y/100)*x;
		//var total=x-percentage;
		var z=x-y;
		var z1=z/x;
		var z2=z1*100;
		
		

    	$('#percentage').val(z2);

    });
		
});
</script>

</body>

</html>
