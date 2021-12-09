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
            Add New Product
            </h3>
			 <div class="line-mf"></div>
			
									
           

<div class align="left">
					<a href="product.php" class="btn btn-dark  btn-sm active" role="button" aria-pressed="true">  Back </a></div>
					
					<br>



          </div>
		  
		 
		
		  
		     <h6 class="text-dark" align="center"><u>Gendral</u></h6>
 <hr>
		  
		  		<!--/Form Start/-->
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="form"   id="frm" >
   <div class="col-md-12 ">
  <div class="row">
  

  
   <div class="col-md-3">
<div class="form-group">
<label>Product Name</label>
<input type="text"  class="form-control" placeholder="Enter Your Product Name" name="PNAME" id="PNAME" autocomplete="off" required autofocus>
</input></div></div>


   <div class="col-md-3">
<div class="form-group">
<label>Brand Name</label>
<input type="text"  class="form-control" placeholder="Enter Your Brand Name" name="BNAME" id="BNAME"autocomplete="off" required autofocus>
</input></div></div>

   <div class="col-md-3">
<div class="form-group">
<label>Product Id</label>
<input type="text"  class="form-control" placeholder="Enter Your Product Id" name="PID" id="PID" autocomplete="off" required autofocus>
</input></div></div>

   <div class="col-md-3">
<div class="form-group">
<label>HSN</label>
<input type="text"  class="form-control" placeholder="Enter Your HSN" name="HSN" id="HSN" autocomplete="off" required autofocus>
</input></div></div>


   <div class="col-md-3">
<div class="form-group">
<label>Parent Category</label>
<select  class="form-control" name="parentcategory" id="parentcategory" >
<option disabled hidden selected>Select Category</option>
	<?php 

					$sqli = "SELECT * FROM category ORDER BY CATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo "<option value=".$row["CATEGORY_NAME"].">".$row["CATEGORY_NAME"]."</option>";
					 }	
 

					?>
</select>
</div></div>

   <div class="col-md-3">
<div class="form-group">
<label>Child Category</label>
<select  class="form-control" name="childcategory" id="childcategory" >
<option disabled hidden selected>Select Variation Value</option>
</select>
</div></div>

   <div class="col-md-3">
<div class="form-group">
<label> Product TAG</label>
<input type="text"  class="form-control" placeholder="Enter Your Product Tag" name="TAG" id="TAG" autocomplete="off" required autofocus>
</input></div></div>

   <div class="col-md-3">
<div class="form-group">
<label>Product TAX</label>
<select  class="form-control" name="TAX" id="TAX"><option></option ><option value="0">NO</option><?php $sqli = "SELECT tax_rat FROM tax";$result = mysqli_query($db, $sqli);while ($row = mysqli_fetch_array($result)) {echo '<option>'.$row['tax_rat'].'</option>';}?></select>
</div></div>




 
 

</div>
 </div>
 <!--/Gendral part End/-->
 
 <hr>
 <h6 class="text-dark" align="center" ><u>SKU & Specification</u></h6>
 
 
 
 
 

     <div class="card" id="tbl">
  <div class="card-body" id="rmove">
  <div class="row">
  
 <div class="col-md-3">
<div class="form-group">
<label> SKU</label>
<input type="text"  class="form-control" value= <?php echo "DZ-".rand(1,99999);?> name="sku[]" id="sku" readonly autocomplete="off" required autofocus>
</input></div></div>


 <div class="col-md-3">
<div class="form-group">
<label> Variation Title</label>
<input type="text"  class="form-control" placeholder="Enter Your Variation Title" name="variation_title[]" id="variation_title" autocomplete="off" required autofocus>
</input></div></div>



 <div class="col-md-3">
<div class="form-group">
<label> Short Description</label>
<textarea  class="form-control" placeholder="Enter Your Short Description" name="short_description[]" id="short_description" autocomplete="off" required autofocus>
</textarea ></div></div>
 
 
  <div class="col-md-3">
<div class="form-group">
<label> QTY</label>
<input type="text"  class="form-control" placeholder="Enter Your QTY" name="qty[]" id="qty" autocomplete="off" required autofocus>
</input></div></div>
 
 <!--/ Variation Card/-->
<div class="col-md-6 ">
     <div class="card" >
	   <h6 class="card-header">Variation</h6>
  <div class="card-body" >
  <div class="row">



<div class="col-md-6">
 
<div class="form-group">
<label> Variation </label>

<select  class="form-control"  name="var_name1[]" id="var_name1" >
<option disabled hidden selected>Select Variation</option>
				<?php 

					$sqli = "SELECT * FROM variation ORDER BY CATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo "<option value=".$row["CATEGORY_NAME"].">".$row["CATEGORY_NAME"]."</option>";
					 }	
 

					?>
</select>
</input>
</div></div>

   <div class="col-md-6">
   
<div class="form-group">
<label> Variation Value </label>
<select  class="form-control" name="var_value1[]" id="var_value1" >
<option disabled hidden selected>Select Variation Value</option>
<?php 

					$sqli = "SELECT DISTINCT  SUBCATEGORY_NAME FROM variation_value ORDER BY SUBCATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo "<option value=".$row["SUBCATEGORY_NAME"].">".$row["SUBCATEGORY_NAME"]."</option>";
					 }	
 

					?>

				
</select>

</div></div>


<div class="col-md-6">
 
<div class="form-group">
<label> Variation </label>

<select  class="form-control"  name="var_name2[]" id="var_name2" >
<option disabled hidden selected>Select Variation</option>
				<?php 

					$sqli = "SELECT * FROM variation ORDER BY CATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo "<option value=".$row["CATEGORY_NAME"].">".$row["CATEGORY_NAME"]."</option>";
					 }	
 

					?>
</select>
</input>
</div></div>

   <div class="col-md-6">
   
<div class="form-group">
<label> Variation Value </label>
<select  class="form-control" name="var_value2[]" id="var_value2" >
<option disabled hidden selected>Select Variation Value</option>
<?php 

					$sqli = "SELECT DISTINCT  SUBCATEGORY_NAME FROM variation_value ORDER BY SUBCATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo "<option value=".$row["SUBCATEGORY_NAME"].">".$row["SUBCATEGORY_NAME"]."</option>";
					 }	
 

					?>

				
</select>

</div></div>



<div class="col-md-6">
 
<div class="form-group">
<label> Variation </label>

<select  class="form-control"  name="var_name3[]" id="var_name3" >
<option disabled hidden selected>Select Variation</option>
				<?php 

					$sqli = "SELECT * FROM variation ORDER BY CATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo "<option value=".$row["CATEGORY_NAME"].">".$row["CATEGORY_NAME"]."</option>";
					 }	
 

					?>
</select>
</input>
</div></div>

   <div class="col-md-6">
   
<div class="form-group">
<label> Variation Value </label>
<select  class="form-control" name="var_value3[]" id="var_value3" >
<option disabled hidden selected>Select Variation Value</option>
<?php 

					$sqli = "SELECT DISTINCT  SUBCATEGORY_NAME FROM variation_value ORDER BY SUBCATEGORY_NAME";
					$result = mysqli_query($db, $sqli);
					 while ($row = mysqli_fetch_array($result)) {
					 	
					 	echo "<option value=".$row["SUBCATEGORY_NAME"].">".$row["SUBCATEGORY_NAME"]."</option>";
					 }	
 

					?>

				
</select>

</div></div>



<div class="col-md-6">
 
<div class="form-group">
<label> Variation Weight </label>
<input type="text"  class="form-control" value="Weight" Readonly  name="var_name4[]" id="var_name4" >
</div></div>

   <div class="col-md-3">
   
<div class="form-group">
<label> Variation Weight Value</label>
<input type="text" class="form-control" name="var_value5[]"  id="weightrange" Placeholder="Enter Weight"></input> 

</div></div>
   <div class="col-md-2">
   
<div class="form-group">
<label>Weight Range</label>
<select class="form-control" name="range[]" id="range" ><option></option>
<option value="Mille Liter">Mille Liter</option>
<option value="Kilo Gram">Kilo Gram</option>
<option value="Liter">Liter</option>
<option value="Gram">Gram</option>

</select>
	
</div></div>







</div>
</div>
</div>
</div>
 <!--/ Variation Card End/-->
 


 <div class="col-md-3">

						<div class="form-group">
						
							<label>Enabled</label>
								<select class="form-control" name="Enabled[]" id="enabled" ><option></option><option value="YES">YES</option></option><option value="NO">NO</option></select><!----><!----><!---->
	
								
								
								</div>

</div>	

 


	




</div>
</div>
</div>



<br>
<br>
<div class="col-md-3">
<div class="form-group">

<button class="btn btn-success" align="right"type="button" id="add">Add SKU</button>
</div></div>	

 <center>
<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit"></input>
  
  </center>
  
    <h6 id="op" class="text-dark" align="center"></h6>

 

 </form>
		
		  
		  
		  
		  
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
  
  
  <script>
 $("#parentcategory").change(function(){
	 
	 cid=$(this).val();
	 $.post("subcateogry_query.php",{id:cid},function(data){
		 
		 $("#childcategory").html(data);
	 });
	 
 });
 </script>
 
 
 

 
 
 
  
  <script>
	  $(document).ready(function(){
		  
		  $("#add").click(function(){
			  $("#tbl").append('<div class="card" id="tbl"> <div class="card-body" id="rmove">   <div class="row"> <div class="col-md-12"><div class="form-group"><button class="btn btn-danger"type="button" id="del">Remove SKU</button></div></div>  <div class="col-md-3"> <div class="form-group"> <label> SKU</label> <input type="text"  class="form-control" value= <?php echo "DZ-".rand(1,99999);?> name="sku[]" id="sku" readonly autocomplete="off" required autofocus> </input></div></div>  <div class="col-md-3"> <div class="form-group"> <label> Variation Title</label> <input type="text"  class="form-control" placeholder="Enter Your Variation Title" name="variation_title[]" id="variation_title" autocomplete="off" required autofocus> </input></div></div>  <div class="col-md-3"> <div class="form-group"> <label> Short Description</label> <textarea  class="form-control" placeholder="Enter Your Short Description" name="short_description[]" id="short_description" autocomplete="off" required autofocus> </textarea ></div></div>   <div class="col-md-3"> <div class="form-group"> <label> QTY</label> <input type="text"  class="form-control" placeholder="Enter Your QTY" name="qty[]" id="qty" autocomplete="off" required autofocus> </input></div></div> <div class="col-md-6 ">      <div class="card" > 	   <h6 class="card-header">Variation</h6>   <div class="card-body" >   <div class="row"> <div class="col-md-6"> <div class="form-group"> <label> Variation </label> <select  class="form-control"  name="var_name1[]" id="var_name1" > <option disabled hidden selected>Select Variation</option> 				<?php 					$sqli = "SELECT * FROM variation ORDER BY CATEGORY_NAME"; 					$result = mysqli_query($db, $sqli); 					 while ($row = mysqli_fetch_array($result)) { 					 	echo "<option value=".$row["CATEGORY_NAME"].">".$row["CATEGORY_NAME"]."</option>"; 					 } 					?> </select> </input> </div></div>    <div class="col-md-6"> <div class="form-group"> <label> Variation Value </label> <select  class="form-control" name="var_value1[]" id="var_value1" > <option disabled hidden selected>Select Variation Value</option> <?php 					$sqli = "SELECT DISTINCT  SUBCATEGORY_NAME FROM variation_value ORDER BY SUBCATEGORY_NAME"; 					$result = mysqli_query($db, $sqli); 					 while ($row = mysqli_fetch_array($result)) { 					 	echo "<option value=".$row["SUBCATEGORY_NAME"].">".$row["SUBCATEGORY_NAME"]."</option>"; 					 } 					?> </select> </div></div> <div class="col-md-6"> <div class="form-group"> <label> Variation </label> <select  class="form-control"  name="var_name2[]" id="var_name2" > <option disabled hidden selected>Select Variation</option> 				<?php 					$sqli = "SELECT * FROM variation ORDER BY CATEGORY_NAME"; 					$result = mysqli_query($db, $sqli); 					 while ($row = mysqli_fetch_array($result)) { 					 	echo "<option value=".$row["CATEGORY_NAME"].">".$row["CATEGORY_NAME"]."</option>"; 					 } 					?> </select> </input> </div></div>    <div class="col-md-6"> <div class="form-group"> <label> Variation Value </label> <select  class="form-control" name="var_value2[]" id="var_value2" > <option disabled hidden selected>Select Variation Value</option> <?php 					$sqli = "SELECT DISTINCT  SUBCATEGORY_NAME FROM variation_value ORDER BY SUBCATEGORY_NAME"; 					$result = mysqli_query($db, $sqli); 					 while ($row = mysqli_fetch_array($result)) { 					 	echo "<option value=".$row["SUBCATEGORY_NAME"].">".$row["SUBCATEGORY_NAME"]."</option>"; 					 } 					?> </select> </div></div> <div class="col-md-6"> <div class="form-group"> <label> Variation </label> <select  class="form-control"  name="var_name3[]" id="var_name3" > <option disabled hidden selected>Select Variation</option> 				<?php 					$sqli = "SELECT * FROM variation ORDER BY CATEGORY_NAME"; 					$result = mysqli_query($db, $sqli); 					 while ($row = mysqli_fetch_array($result)) { 					 	echo "<option value=".$row["CATEGORY_NAME"].">".$row["CATEGORY_NAME"]."</option>"; 					 } 					?> </select> </input> </div></div>    <div class="col-md-6"> <div class="form-group"> <label> Variation Value </label> <select  class="form-control" name="var_value3[]" id="var_value3" > <option disabled hidden selected>Select Variation Value</option> <?php 					$sqli = "SELECT DISTINCT  SUBCATEGORY_NAME FROM variation_value ORDER BY SUBCATEGORY_NAME"; 					$result = mysqli_query($db, $sqli); 					 while ($row = mysqli_fetch_array($result)) { 					 	echo "<option value=".$row["SUBCATEGORY_NAME"].">".$row["SUBCATEGORY_NAME"]."</option>"; 					 } 					?> </select> </div></div> <div class="col-md-6"> <div class="form-group"> <label> Variation Weight </label> <input type="text"  class="form-control" value="Weight" Readonly  name="var_name4[]" id="var_name4" > </div></div>    <div class="col-md-3"> <div class="form-group"> <label> Variation Weight Value</label> <input type="text" class="form-control" name="var_value5[]"  id="weightrange" Placeholder="Enter Weight"></input> </div></div>    <div class="col-md-2"> <div class="form-group"> <label>Weight Range</label> <select class="form-control" name="range[]" id="range" ><option></option> <option value="Mille Liter">Mille Liter</option> <option value="Kilo Gram">Kilo Gram</option> <option value="Liter">Liter</option> <option value="Gram">Gram</option> </select> </div></div> </div> </div> </div> </div>  <div class="col-md-3"> 						<div class="form-group"> 							<label>Enabled</label> 								<select class="form-control" name="Enabled[]" id="enabled" ><option></option><option value="YES">YES</option></option><option value="NO">NO</option></select> 								</div> </div> </div> </div> </div>   ');
			  });
			  $(document).on('click','#del',function(){
			  $(this).closest("#rmove").remove();
		  });
		  
		
		  
		  
		
		  
		  
	    });
	 
	  </script>
	  
	  <script>
	    $('#submit').click(function(e){
			    
			  var pname=$("#PNAME").val();
			 
			  var bname=$("#BNAME").val();
			  var pid=$("#PID").val();
			  var hsn=$("#HSN").val();
			  var parentcategory=$("#parentcategory").val();
			  var childcategory=$("#childcategory").val();
			  var tag=$("#TAG").val();
			  var tax=$("#TAX").val();
		  
			 
			  var sku=$("#sku").val();
			  var variation_title=$("#variation_title").val();
			  var short_description=$("#short_description").val();
			  var qty=$("#qty").val();
			  	  
		  var var_value1=$("#var_value1").val();
			  
				var weight=$("#weightrange").val();
				var range=$("#range").val();
			  
			  var specification=$("#specification").val();
			  var enabled=$("#enabled").val();
			  
		  
		  
		  
		   if(pname==""){
			  alert("Please Enter Product Name");
			  document.form.PNAME.focus();
			  return false;
		  }
		   
		  
		
		 if(bname==""){
			  alert("Please Enter Brand Name");
			  document.form.BNAME.focus();
			  return false;
		  }
		
		if(pid==""){
			  alert("Please Enter Product Id");
			  document.form.PID.focus();
			  return false;
		  }
		   if(hsn==""){
			  alert("Please Enter HSN");
			  document.form.HSN.focus();
			  return false;
		  }
		  if(parentcategory==""){
			  alert("Please Enter Parent Category");
			  document.form.parentcategory.focus();
			  return false;
		  }
		  if(childcategory==""){
			  alert("Please Enter Child Category");
			  document.form.childcategory.focus();
			  return false;
		  }
		  
		   if(tag==""){
			  alert("Please Enter TAG");
			  document.form.TAG.focus();
			  return false;
		  }
		  
		  if(tax==""){
			  alert("Please Enter TAX");
			  document.form.TAX.focus();
			  return false;
		  }
		  
		 if(sku==""){
			  alert("Please Enter SKU");
			  document.form.sku.focus();
			  return false;
		  }
		  
		  	 if(variation_title==""){
			  alert("Please Enter Variation Title");
			  document.form.variation_title.focus();
			  return false;
		  }
		  
		  
		 if(short_description==""){
			  alert("Please Enter Short Description");
			  document.form.short_description.focus();
			  return false;
		  }
		  
		   if(qty==""){
			  alert("Please Enter QTY");
			  document.form.qty.focus();
			  return false;
		  }
		  
	
		  
		     if(isNaN(qty)){
			  alert("Please Enter Correct Qty");
			  document.form.qty.focus();
			  return false;
		  }
		  
		     if(var_value1==""){
			  alert("Please Select a Flavour");
			  document.form.var_value1.focus();
			  return false;
		  }
		  
		
		  if(weight==""){
			  alert("Please Enter Weight");
			  document.form.weightrange.focus();
			  return false;
		  }
		  
		  if(isNaN(weight)){
			  alert("Please Enter a Correct Weight");
			  document.form.weightrange.focus();
			  return false;
		  }
		  
		  if(range==""){
			  alert("Please Select a Weight Range");
			  document.form.range.focus();
			  return false;
		  }
		  
		   
		  
		    if(specification==""){
			  alert("Please Enter specification");
			  document.form.specification.focus();
			  return false;
		  }
		   
		  		    if(enabled==""){
			  alert("Please Select a Enabled or Disable");
			  document.form.enabled.focus();
			  return false;
		  }
		   
		  	   $('#submit').val('Please Wait...');
						  $('#submit').attr('disabled',true);
		  
		 $.ajax({
				url:'productadd_query.php',
				type:'post',
				data:$('#frm').serialize(),
				success:function(result)
				{ 	
				
						$( '#op' ).html( result );
					$('#frm').get(0).reset();
					 $('#submit').val('submit');
					 $('#submit').attr('disabled',false);
				
					
				}
				  
			  });
			  	  e.preventDefault();
		  });
	  </script>
	  
	  
	  
	  

</body>

</html>
