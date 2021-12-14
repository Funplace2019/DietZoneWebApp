
<?php
include "include/database.php";
session_start();
	







/*product - Add to cart*/
		
	
		
		 
		if(isset($_POST["addCart"])){
			
			  if(!isset($_SESSION["ID"]))
				  
				  {
					  header("location:login.php?mes=<p> <u></u><b>Please Login Here</b></u></p>");
				  }
				  else
				  {
					  
					  if(isset($_SESSION["cart"]))
				{
					$pid_array=array_column($_SESSION["cart"],"pid");
					if(!in_array($_GET["id"],$pid_array))
					{
						$index=count($_SESSION["cart"]);
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][$index]=$item;
							
							echo "<script>alert('Product Added..');</script>";
							//header("location:viewcart.php");
						//echo("<script>location.href = 'viewcart.php'; alert('Product Added..');</script>");
					}
					else
					{
						echo "<script>alert('Already Added Please Select other Product.');</script>";
					}
				}
				else
				{
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][0]=$item;
						
						echo "<script>alert('Product Added..');</script>";
						//header("location:viewcart.php");
						//echo("<script>location.href = 'viewcart.php'; alert('Product Added..');</script>");
						
				}
					  
					 
			}
		}
		  
		
	
		
		/*product - Add to cart End*/

?>

<html>
<head>
<title>Diet zone </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="lightslider.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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

<!----------------single product View ---------------->

		<section class="single-product">
		
		
		<div class="container">
		<div class="row">
		
		
		<div class="col-md-5 ">
		
		<?php
		

$sql="select * from specification_image where PID='{$_GET["id"]}'";

			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
		<center>
		<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

  <div class="carousel-inner">
  
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-item active">
      <img src="data:image/jpeg;base64,'.base64_encode($row['IMAGE1'] ).' " style="width:100%;max-width:300px" class="d-block" >
    </div>
    <div class="carousel-item">
      <img src="data:image/jpeg;base64,'.base64_encode($row['IMAGE2'] ).' "  style="width:100%;max-width:300px" class="d-block" >
    </div>
    <div class="carousel-item">
      <img src="data:image/jpeg;base64,'.base64_encode($row['IMAGE3'] ).' " style="width:100%;max-width:300px"  class="d-block">
    </div>
 

</div>



		
		
		</div>
		
		</center>
		
		';
				}
			}
		?>
		</div>
		

		
			<div class="col-md-7">
			
			<form>
			    
			    
			           <?php
		   $sql="select gendral_sku.ID ,gendral_sku.PRODUCT_NAME,gendral_sku.PRO_TYPE,gendral_sku.VARIATION_TITLE,gendral_sku.QTY  , specification_image.IMAGE1,stock_management.MRP,stock_management.SELLING_PRICE FROM gendral_sku INNER JOIN stock_management ON 	gendral_sku.ID=stock_management.PID_SKU	INNER JOIN specification_image ON gendral_sku.ID=specification_image.PID where gendral_sku.ID='{$_GET["id"]}'";
$res=$db->query($sql);
			if($res->num_rows>0)
			{
			    
			    
			    
			    
				while($row=$res->fetch_assoc())
				{
				    if($row['QTY'] <= '2')
					{
						
						echo  '
		
		<p class="new-arrival text-center">On Sale</p>
		<h4 >'. $row['VARIATION_TITLE'] .'</h4><p class="new-arrival text-center"> '. $row['PRO_TYPE'] .'</p>
	
		<p class="price">₹'. number_format($row['SELLING_PRICE'],2).' &nbsp;<del>₹'. number_format($row['MRP'],2).' </del></p>
		<p> <b>Availability :</b> <b class="text-danger">&nbsp;Out Of Stock </b></p>
		
		
		<br>
		<br>
		<p><input type="hidden"  name="pname" id="pname" value="'. $row['VARIATION_TITLE'] .'" class="form-control"/></p>
		
		<p><input type="hidden"  name="price" id="price" value="'. number_format($row['SELLING_PRICE'],2) .'" class="form-control"/></p>
		
		<input type="hidden" name="getid" id="getid" value="'.$_GET['id'].'"></input>
		<input type="hidden" name="getcc" id="getcc" value="'.$_GET['cc'].'"></input>
		
		';
						
					}
						
					else
					{
						echo  '
		
		<p class="new-arrival text-center">On Sale</p>
		<h4 >'. $row['VARIATION_TITLE'] .'</h4><p class="new-arrival text-center"> '. $row['PRO_TYPE'] .'</p>
	
		<p class="price">₹'. number_format($row['SELLING_PRICE'],2).' &nbsp;<del>₹'. number_format($row['MRP'],2).' </del></p>
		<p> <b>Availability :</b> &nbsp;In Stock <b>'. $row['QTY'] .'</b></p>
		<label>Quantity:</label>
		<input type="number" class="qty" id="qty" name="qty" min="1" max="'. $row['QTY'] .'" value="1" autocomplete="off"></input>
		<br>
		<br>
		<p><input type="hidden"  name="pname" id="pname" value="'. $row['VARIATION_TITLE'] .'" class="form-control"/></p>
		
		<p><input type="hidden"  name="price" id="price" value="'. number_format($row['SELLING_PRICE'],2) .'" class="form-control"/></p>
		<button  type="submit" name="addCart" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
		
		 <input type="button" class="btn btn-primary" id="submit" name="submit" value="Buy Now"></input>
		<input type="hidden" name="getid" id="getid" value="'.$_GET['id'].'"></input>
		<input type="hidden" name="getcc" id="getcc" value="'.$_GET['cc'].'"></input>
		
		';
					}
				    
	 
			    
				}
			}
			?>
		

		<br>
		<br>
		
		
		 
<script>

		  $('#submit').click(function(){
			  
			  var pname=$('#pname').val();
			  var price=$('#price').val();
			  var qty=$('#qty').val();
			  var total=qty*price;
			  var getid=$('#getid').val();
			  var getcc=$('#getcc').val();
			 
			  
			  //alert(price+pname+qty+getid+getcc );
			
			
			
			   jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"pname="+pname+"&qty="+qty+"&price="+price+"&total="+total+"&getid="+getid+"&getcc="+getcc,
			   success:function(result){
                   var options = {
                        "key": "rzp_test_6X5Xxd6QTbgjQz", 
                        "amount": total*100, 
                        "currency": "INR",
                        "name": "DietZone",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
								  
                               }
                           });
                        }
                    };
					
					
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
			  
		  });
		

	
	</script>
    
	
	   
	
		<!---Other Variation---->
		
   <div class="container">
    
    <h6>Variation</h6>
	<hr>
  
    <div class="row">
	
	
		
		<?php
//$sql="select gendral_sku.ID ,gendral_sku.PRODUCT_NAME,gendral_sku.VARIATION_TITLE , specification_image.IMAGE1,stock_management.MRP,stock_management.SELLING_PRICE FROM gendral_sku INNER JOIN stock_management ON 	gendral_sku.ID=stock_management.PID_SKU	INNER JOIN specification_image ON gendral_sku.ID=specification_image.PID where  gendral_sku.ID!='{$_GET["id"]}' AND gendral_sku.PRODUCT_NAME='{$_GET["cc"]}'";
$sql="select * from gendral_sku where ID!='{$_GET["id"]}' AND PRODUCT_NAME='{$_GET["cc"]}'";
$res=$db->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '	
		
	  
       <div class="col-md-4">
    
	 <a  class="btn btn-light" href="product_view.php?id='. $row['ID'] . '&cc='. $row['PRODUCT_NAME'] .'" >
      '. $row['VARIATION_TITLE'] .'
	  
	  </a> 
	
               
  
     
        
 
    </div>

 <br>
			
		
		
		';
				}
			}
			
			else
			{
				echo "<p class=' text-danger'><b>No Varation Found</b></p>";
				
			}
				
				?>
		<br>
	
		</div>
		</div>
		<!--other variation End---->
		
		
	</form>
		</div>
		
		
		
		
		 
		
		
		</div>
		</div>
		
			</section>
			


<br>
<br>
<br>

 <!----------------Description ---------------->
 
 






  <section class="product-description">
  <div class="container">
   
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">About Item</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ingredient</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#review" role="tab" aria-controls="contact" aria-selected="false">Review</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
  
      <h6>Description</h6>
  <?php
		

$sql="select * from specification_image where PID='{$_GET["id"]}'";

			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
					<p>'. $row['SPECIFICATION'] .'</p>
					
					';
					
				}
			}
			?>
  
  
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  
      <h6>About Item</h6>
  <?php
		

$sql="select * from specification_image where PID='{$_GET["id"]}'";

			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
					<p>'. $row['SPECIFICATION1'] .'</p>
					
					';
					
				}
			}
			?>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  
  
      <h6>Ingredient</h6>
  <?php
		

$sql="select * from specification_image where PID='{$_GET["id"]}'";

			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{

					echo '
					<p>'. $row['SPECIFICATION2'] .'</p>
					
					';
					
				}
			}
			?>
  
  </div>
  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="contact-tab">Review
  
  
  
  
  
  <div class="media">
  <img class="mr-3" src="images/review.svg" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

    <div class="media mt-3">
      <a class="pr-3" href="#">
        <img src="images/review.svg" alt="Generic placeholder image">
      </a>
      <div class="media-body">
        <h5 class="mt-0">Media heading</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
	
	
	  <div class="media mt-3">
      <a class="pr-3" href="#">
        <img src="images/review.svg" alt="Generic placeholder image">
      </a>
      <div class="media-body">
        <h5 class="mt-0">Media heading</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
	
	
	
	  <div class="media mt-3">
      <a class="pr-3" href="#">
        <img src="images/review.svg" alt="Generic placeholder image">
      </a>
      <div class="media-body">
        <h5 class="mt-0">Media heading</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
	
	
  </div>
</div>


</div>
</div>




  
  
  
  
  <h6>Important Note</h6>
  <p>
Product information provided by the seller on the Website is not exhaustive, please read the label on the physical product carefully for complete information provided by the manufacturer. For additional information, please contact the manufacturer.</p>
  </div>
  
  
  </section>
  
  
  
  
  
  <!--------------New Products----------------->    
<section class="new-products">
   <div class="container">
    <div class="title-box">
    <h2>Similar</h2>
    </div>
    <div class="row">
    
        
    
        
	 <?php
		   $sql="select gendral_sku.ID ,gendral_sku.PRODUCT_NAME , specification_image.IMAGE1,stock_management.MRP,stock_management.SELLING_PRICE FROM gendral_sku INNER JOIN stock_management ON 	gendral_sku.ID=stock_management.PID_SKU	INNER JOIN specification_image ON gendral_sku.ID=specification_image.PID where  gendral_sku.ID!='{$_GET["id"]}' AND gendral_sku.PRODUCT_NAME='{$_GET["cc"]}'";
$res=$db->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '
	  
       <div class="col-md-3">
    <div class="product-top">
	 <a href="product_view.php?id='. $row['ID'] . '&cc='. $row['PRODUCT_NAME'] .'" target="_black"">
       <img src="data:image/jpeg;base64,'.base64_encode($row['IMAGE1'] ).' "    ></a>
               
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
		<a href="product_view.php?id='. $row['ID'] .'"> <button type="button" class="btn btn-secondary" title="Quick shop">
                       
           <i class="fa fa-eye"></i> </a>
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star-half-o"></i>  
        <h3>'. $row['PRODUCT_NAME'] .'</h3>
      <h5>₹'. number_format($row['SELLING_PRICE'],2).' &nbsp;<del>₹'. number_format($row['MRP'],2).' </del></h5>
                    
    </div>
    </div>
				';
				}
			}
				else
			{
			    echo "<p class=' text-danger text-center'><b>No Similar Product Found</b></p>";
			}
				
				?>

 
    
      
   
    
    </div>
</div>
</section>  
 






















<!------------Footer----------->
 
    
       <?php
include "include/footer.php";

			

?>
    
    
    
  
    
    
    
    
    
 
    
    
    
    
   
    
</body>
</html>







