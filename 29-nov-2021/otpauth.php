
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












<section>
<div class="container">
<h5 class="text-left">
CUSTOMER  -  Mobile Number Verification 
</h5>

</div>

</section>




<section>
<div class="container-fluid">

<!-- Signup page ---->


<div id="login-box">

<!-- left Box page ---->


<div class="left-box">


<h1>OTP Verification</h1>

 <form action="signup.php" method="post" id="myForm">
 
 		<label>Enter You  Contact Number <span>(+ Country code)</span></label>
			<input type="text" id="number" name="phone"  placeholder="+91 Enter Your Mobile Number" autocomplete="off" required autofocus />
							 <div id="recaptcha-container"></div>
							 <br>
							  <button type="button" class="btn btn-danger pull-center" onclick="phoneAuth();">Send OTP</button> 
							  <br>
							  <br>

				<label>Enter Your OTP </label>
    <input type="text" id="verificationCode" placeholder="Enter Your OTP" autocomplete="off" required autofocus />
	<button type="button" class="btn btn-danger pull-center" onclick="codeverify();">Verify OTP</button>
		
 </form>


</div>


<!-- right Box page ---->

<div class="right-box">
<span class="signinwith">KetoMart</span>

<span class="signinwith"> Sign in with <br/> Social Network</span>
<button class="social facebook"> Login with Facebook</button>
<button class="social google"> Login with Google</button>
<button class="social apple"> Login with Apple ID</button>


</div>








</div>



</div>

</section>








 
						
						<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
   const firebaseConfig = {
    apiKey: "AIzaSyB2HwLNxDD1RPBJAKs9lk6_SSyvuJpQ6_Y",
    authDomain: "ketomart-otpauth.firebaseapp.com",
    projectId: "ketomart-otpauth",
    storageBucket: "ketomart-otpauth.appspot.com",
    messagingSenderId: "1003268557717",
    appId: "1:1003268557717:web:728967eb4b736f8312849c",
    measurementId: "G-QVC8RKLTHV"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>

<!--/ OTP Auth Script /-->
<script src="NumberAuthentication.js" type="text/javascript"></script>
						
<!--/ LogIn Form /-->







 

 
 
 











<!------------Footer----------->
 
    
       <?php
include "include/footer.php";

			

?>
    
    
    
    
    
    
	

    
    

    
    
    

    
    
    
    
    
   
    
</body>
</html>







