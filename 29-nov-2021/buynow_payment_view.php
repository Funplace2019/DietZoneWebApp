
<?php
include "include/database.php";
session_start();
	



?>

<html>
<head>
<title>Diet zone </title>
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


  







<div class="container">


<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="personalinfo" id="personalinfo">
  
<div class='form-group'>

    <input type='hidden'  name='pid'   id='pid' value="<?php  echo "{$_GET["id"]}"; ?>"aria-describedby='emailHelp'>
    
  </div>
  
  
  <div class='form-group'>
    <label for='exampleInputEmail1'>Price</label>
    <input type='text'  name='sellprice' id='sellprice' readonly value="<?php  echo "{$_GET["sp"]}"; ?>"aria-describedby='emailHelp'>
    
  </div>
  
  <div class='form-group'>
    <label for='exampleInputPassword1'>Product Name</label>
    <input type='text' name='pn'   id='pn' readonly value="<?php  echo "{$_GET["pn"]}"; ?>"  >
  </div>
  

  
  <input type="button" name="btn" id="btn" class="btn btn-primary"  value="pay" onclick="pay_now()"></input>
  
</form>



 

</div>








<!------------Footer----------->
 
    
       <?php
include "include/footer.php";

			

?>
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    

    
   
   
   
  <script>
    function pay_now(){
     var pid=jQuery('#pid').val();
        var sellprice=jQuery('#sellprice').val();
        var pn=jQuery('#pn').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process_query',
               data:"pid="+pid+"&sellprice="+sellprice+"&pn="+pn,
               success:function(result){
                   var options = {
                        "key": "rzp_test_6X5Xxd6QTbgjQz", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Dietzone",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process_query',
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
    }
</script>
    
</body>
</html>







