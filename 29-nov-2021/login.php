
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

<section>
<div class="container">
<h5 class="text-left">
CUSTOMER LOG-IN
</h5>

</div>

</section>





<section>
<div class="container-fluid">

<!-- Signup page ---->


<div id="login-box">

<!-- left Box page ---->


<div class="left-box">

<br>
<br>
<br>	
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


<h1>Log In</h1>
   <h6 id="op" class="text-dark "  align="center"></h6>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="form" id="frm">
<input type="text" name="username" placeholder="Email / Mobile Number"></input>
<input type="password" name="password" placeholder="password"></input>


<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Login"></input>  &nbsp;<p class="text-center"><a href="#">Forgot Password ? </a></p>




   

<p class="text-center"><a href="otpauth.php">New Register ? </a></p>


 </form>
</div>


<!-- right Box page ---->

<div class="right-box">
<span class="signinwith"> Sign in with <br/> Social Network</span>
<button class="social facebook"> Login with Facebook</button>
<button class="social google"> Login with Google</button>
<button class="social apple"> Login with Apple ID</button>
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
	$(document).ready(function(){
		
		
		
		$('#submit').click(function(e){
			
	
		  
		 $.ajax({
				url:'loginquery.php',
				type:'post',
				data:$('#frm').serialize(),
				success:function(result)
				{ 	
				
					if(result=='correct')
						{
					 window.location.href='index.php';
						}
						
						else
						{
							$('#op').html(result);
						}
				
					
				}
				  
			  });
			  	  

  e.preventDefault();
		});

		
	});

	    

</script>
    
    
    
    
    
    

    
    
    
    
    
   
    
</body>
</html>







