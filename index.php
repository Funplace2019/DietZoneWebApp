
   <?php
include "include/database.php";
session_start();
			

?>

<html>
<head>
<title>Diet Zone </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="lightslider.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <!---owl-carousel---->
	 <link href="asset/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="asset/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="asset/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">


    

    
     <script src="asset/plugins/owl-carousel/owl.carousel.js"></script>
	   <script src="asset/js/carousel.js"></script>


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

<!----Slider---->
    
<section class="header">




<div class="slider">


 <!-- <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100">
    </div>
      <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100">
    </div>
  </div>
  
      <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div> --->


      <div class="main-banner-section">
        <div class="main-banner-slider">
		
		
			
		<?php 
			
	$sql="select * from main_banner where ACTION='Enabled' order by ID desc";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '
          <div class="item">
           
			  <a href="'.$row["LINK"].'">
			 <img src="data:image/jpeg;base64,'.base64_encode($row['NAME'] ).'" class="width-full d-block w-100"/></a>
          </div>
		  
		  ';
		  
		  
			}}
			?>
      

	
	
        </div>  
		
	
      </div>
	  
				

 
</div>    

</section>
    
<!---------------featured-categories---------------->
    
<section class="featured-categories"> 
<div class="container">
 <div class="title-box">
    <h2>Categories</h2>
    </div>
 <div class="row">
     <div class="col-md-2">
     <img src="images/cat/1.png">
	  <div class="product-bottom text-center">
 
              <h5>Butter & Margarine</h5>           
 </div>
    </div>
	
	
	  <div class="col-md-2">
     <img src="images/cat/2.png">
	  <div class="product-bottom text-center">
 
              <h5>flour</h5>           
 </div>
    </div>
	  <div class="col-md-2">
     <img src="images/cat/3.png">
	  <div class="product-bottom text-center">
 
              <h5>others</h5>           
 </div>
    </div>
	  <div class="col-md-2">
     <img src="images/cat/4.png">
	  <div class="product-bottom text-center">
 
              <h5>nuts and seeds</h5>           
 </div>
    </div>
	  <div class="col-md-2">
     <img src="images/cat/5.png">
	  <div class="product-bottom text-center">
 
              <h5>beverages</h5>           
 </div>
    </div>
	  <div class="col-md-2">
     <img src="images/cat/6.png">
	  <div class="product-bottom text-center">
 
              <h5>Oils</h5>           
 </div>
    </div>

	

</div>   
</div>   
</section>



<!---------------ADS-1---------------->
    
<section class="ads1"> 
<div class="container">

  <div class="title-box">
    <h2>Offers</h2>
    </div>

 <div class="row">
     <div class="col-md-6">
     <img src="images/feature product/1.png">
	  <div class="product-bottom text-center">
 
                      
 </div>
    </div>
	

	  <div class="col-md-6">
     <img src="images/feature product/2.png">
	  <div class="product-bottom text-center">
 
                  
 </div>
    </div>
	 

	

</div>   
</div>   
</section>




<!-----------------On Sale product------------------>
<section class="on-sale">
<div class="container">
    <div class="title-box">
    <h2>On Sale</h2>
    </div>
    <div class="row">
	
	   <?php
		   $sql="select gendral_sku.ID ,gendral_sku.PRODUCT_NAME , specification_image.IMAGE1,stock_management.MRP,stock_management.SELLING_PRICE FROM gendral_sku INNER JOIN stock_management ON 	gendral_sku.ID=stock_management.PID_SKU	INNER JOIN specification_image ON gendral_sku.ID=specification_image.PID";
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
				
				?>
				
				
   
        
    
    
    </div>
</div>  
</section>


<!---------------ADS-2---------------->
    
<section class="ads1"> 
<div class="container">

  <div class="title-box">
    <h2>Today Offers</h2>
    </div>

 <div class="row">
     <div class="col-md-4">
     <img src="images/offer/1.png">
	  <div class="product-bottom text-center">
 
                      
 </div>
    </div>
	

	  <div class="col-md-4">
     <img src="images/offer/2.png">
	  <div class="product-bottom text-center">
 
                  
 </div>
    </div>
	 

		  <div class="col-md-4">
     <img src="images/offer/2.png">
	  <div class="product-bottom text-center">
 
                  
 </div>
    </div>
	 

</div>   
</div>   
</section>




    
<!--------------New Products----------------->    
<section class="new-products">
   <div class="container">
    <div class="title-box">
    <h2>New Arrivals</h2>
    </div>
    <div class="row">
    
        
    
        
	 <?php
		   $sql="select gendral_sku.ID ,gendral_sku.PRODUCT_NAME , specification_image.IMAGE1,stock_management.MRP,stock_management.SELLING_PRICE FROM gendral_sku INNER JOIN stock_management ON 	gendral_sku.ID=stock_management.PID_SKU	INNER JOIN specification_image ON gendral_sku.ID=specification_image.PID";
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
				
				?>

 
    
      
   
    
    </div>
</div>
</section>  



  

<!----------------high lights ---------------->




<section class="featured-categories">


    <div class="container">
	
		
	




        <div class="row">

			
			
			
            <div class="col-md-12">
                <img src="images/highlights.png">

            </div>
			
		
			
			
			
			
			
        </div>
    </div>




</section>


    





    
<!----------------Website features----------------->

<section class="website-features">
<div class="container">
<div class="row">
<div class="col-md-3 feature-box">
<img src="images/feature-1.png"> 
<div class="feature-text">
<p><b>100% Original items </b>are available at company</p>    
</div>
</div>  
<div class="col-md-3 feature-box">
<img src="images/feature-2.png"> 
<div class="feature-text">
<p><b>Return within 30 days </b> of receiving your order.</p>    
</div>
</div> 
<div class="col-md-3 feature-box">
<img src="images/feature-3.png"> 
<div class="feature-text">
<p><b>Get free delivery for every</b> order on more than price.</p>    
</div>
</div>
<div class="col-md-3 feature-box">
<img src="images/feature-4.png"> 
<div class="feature-text">
<p><b>Pay Online through multiple </b>options (card/Net banking)</p>    
</div>
</div> 
</div>    
</div>    
</section>
  
<!------------Footer----------->
 
    
       <?php
include "include/footer.php";

			

?>
    
    
    
    
    
    
    
    
    
    


    
</body>
</html>










