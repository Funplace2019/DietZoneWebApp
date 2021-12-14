
   <?php
include "include/database.php";
session_start();
			
if(!isset($_POST['phone']))
	
{
	
		header("location:otpauth.php");


}
else
{
$pid=$_POST['phone'];
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




<section>
<div class="container">
<h5 class="text-left">
CUSTOMER SIGN-UP
</h5>

</div>

</section>





<section>
<div class="container-fluid">

<!-- Signup page ---->


<div id="login-box">

<!-- left Box page ---->


<div class="left-box">


<h1>Sign up</h1>
   <h6 id="op" class="text-dark "  align="center"></h6>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="form" id="frm">
<input type="text" name="name" placeholder="Name"></input>
<input type="text" value="<?php echo "$pid";  ?>" readonly name="mobile" placeholder="Contact number"></input>
<input type="email" name="email" placeholder="Email"></input>
<input type="password" name="password" placeholder="password"></input>
<input type="password" name="password2" placeholder="Confrom password"></input>

<label>New Letter Notification</label>
								<select name="enabled" id="enabled" required>
							    <option value="">Select Value</option>
								<option value="YES">YES</option>
								<option value="NO">NO</option>
									
								
								</select>

<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit"></input>




   
<p class="text-center"><a href="login.php">Already Register ? </a></p>


 </form>
 
 
 
 
</div>


<!-- right Box page ---->

<div class="right-box">
<span class="signinwith"> Sign in with <br/> Social Network</span>
<button class="social facebook"> Login with Facebook</button>
<button class="social google"> Login with Google</button>
<!----<button class="social apple"> Login with Apple ID</button>--->
</div>




<div class="or">OR</div>



</div>



</div>

</section>


 
 
 











<!------------Footer----------->
 
    
       <?php
include "include/footer.php";

			

?>
    
    
    
    
    
       <!-- JavaScript Libraries -->
  <script src="asset/lib/jquery/jquery.min.js"></script>
	

    
    
	<script type="text/javascript">

	    $('#submit').click(function(e){
			
	
							$('#submit').val('Please Wait...');
						  $('#submit').attr('disabled',true);
		  
		 $.ajax({
				url:'signupquery.php',
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







