
   <?php
include "include/database.php";
session_start();
		

if(!isset($_SESSION["ID"]))
				  
				  {
					  header("location:login.php?mes=<p> <u></u><b>Please Login Here</b></u></p>");
				  }
		

?>

<html>
<head>
<title>Diet zone </title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="lightslider.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });
    
	
}); // jquery end
</script>



<style type="text/css">
	@media all and (min-width: 992px) {
		.navbar{ padding-top: 0; padding-bottom: 0; }
		.navbar .has-megamenu{position:static!important;}
		.navbar .megamenu{left:0; right:0; width:100%; padding:20px;  }
		.navbar .nav-link{ padding-top:1rem; padding-bottom:1rem;  }
		.navbar .fa{
		display:block;}
		
	}
	

		
	
</style>


	
	
	</head>
<body>

<div class="top-nav-bar">

   <?php
include "include/navbar.php";

			

?>
</div>



<br>
<br>
<br>


<div class="container">
  <div class="row">

		
			
				<?php 
				if(isset($_GET["del"]))
				{
					foreach($_SESSION["cart"] as $keys=>$values)
					{
							if($values["pid"]==$_GET["del"])
							{
								unset($_SESSION["cart"][$keys]);
							}
					}
				}
					if(!empty($_SESSION["cart"]))
					{
						echo "
						
						
			<h3>Cart Items</h3>
			<hr>
			<br>
						<table class='table'>	
				<tr>
					<th>Item Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Total</th>
					<th>Remove</th>
				</tr>
				";
							$total=0;
							foreach($_SESSION["cart"] as $keys=>$values)
							{
								$amt=$values["qty"]*$values["price"];
								
								
									$total+=$amt;
									
									echo "
											<tr>
												
												<td>{$values["pname"]}</td>
												<td>{$values["qty"]}</td>
												
												<td >{$values["price"]}</td>
												<td>{$amt}</td>
												<td><a href='viewCart.php?del={$values["pid"]}'>Remove</a></td>
											</tr>
									";
									
							}	
								echo "
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td>Total</td>
												<td>{$total}</td>
												
											</tr>
											<tr>
											<td></td>
												<td></td>
												<td></td>
												<td></td>
											<td><h6 class='text-right'><a  class='text-danger' href='#'>Check Out</a></h6></td>
											</tr>
											
											
											
												</table>";							
							
					}
					else{

					echo "
				
				<div class='col-md-12'>
					<h6 class=' text-light bg-danger text-center'>No Product Added In The Cart</h6>
					</div>";
					}
					
				
				
				?>
		
			
				
  </div>

<br>
				<h6 class="text-left"><a  class="text-danger"href="index.php">keep shopping</a></h6>
				
				
		
			
</div>






<br>
<br>
<br>

<br>
<br>
<br>




<!------------Footer----------->
 
    
       <?php
include "include/footer.php";

			

?>
    
    
    
    
    
    
	
	
    
    
    
    
    

    
    
    
    
    
   
    
</body>
</html>







