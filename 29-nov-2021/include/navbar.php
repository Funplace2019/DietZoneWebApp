
<div class="search-box">
  <button class="navbar-toggler" type="button"   data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
   <span > <i class="fa fa-bars" ></i></span>
	
  </button>
  
  
  
    
<a href="index.php"><img src="images/orange-logo.png" class="logo"></a>


<input type="text" class="form-control" >
<span class="input-group-text"><i class="fa fa-search"></i></span>



</div> 
<div class="menu-bar">
<ul>


 



<?php
	  if(!isset($_SESSION["ID"]))
		  
	  
	  {
		  
		   echo '
		  <li><a href="login.php">Login</a></li>     
			<li><a href="otpauth.php">Signup</a></li> 
		  
		  ';
		   
	  }
	  else
	  {
		 if(!isset($_SESSION["cart"]))
		 {
			 echo '
			 <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="viewcart.php"><i class="fa fa-shopping-basket">&nbsp;<span class="badge badge-dark">
			  
			0
			 
			  </span> </i></a>  </li>
	 
		  <li><a href="destroy.php">Logout </a></li>
		  <li><a href="profile.php"> Hi '.$_SESSION["NAME"].' </a> </li>
		  ';
		 }
		 else{
			 
			 echo '
				<li><a href="#"><i class="fa fa-heart"></i></a></li>
		      <li><a href="viewcart.php"><i class="fa fa-shopping-basket">&nbsp;<span class="badge badge-dark">
			  
			 '.count($_SESSION["cart"]).'
			 
			  </span></i> </a></li>
	 
		  <li><a href="destroy.php"><i class="fa fa-sign-out"></i>Logout  </a></li>
		  <li><a href="profile.php"> Hi '.$_SESSION["NAME"].' </a> </li>
		  
		  
		  	 
		  ';
		  
			 
		 }
		

		 
	  }
        
		
		?>



</ul>   
</div> 


<div class="mega-menu" id="mega-menu">
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <div class="collapse navbar-collapse" id="main_nav">

<ul class="navbar-nav">
	
	<li class="nav-item"><a class="nav-link" href="#"> About </a></li>
	<li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega menu  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="col-megamenu">
                            	<h6 class="title">Title Menu One</h6>
	                            <ul class="list-unstyled">
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						<div class="col-md-2">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
						
						
						
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	
	
	
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega menu  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-megamenu">
                            	<h6 class="title">Title Menu One</h6>
	                            <ul class="list-unstyled">
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	
	
	
	
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega menu  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-megamenu">
                            	<h6 class="title">Title Menu One</h6>
	                            <ul class="list-unstyled">
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	
	
	
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega menu  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-megamenu">
                            	<h6 class="title">Title Menu One</h6>
	                            <ul class="list-unstyled">
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	
	
	
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega menu  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-megamenu">
                            	<h6 class="title">Title Menu One</h6>
	                            <ul class="list-unstyled">
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	
	
	
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega menu  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-megamenu">
                            	<h6 class="title">Title Menu One</h6>
	                            <ul class="list-unstyled">
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                                <li><a href="#">Custom Menu</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	
	
	   <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Dropdown </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
          <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
        </ul>
    </li>

	
</ul>


<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook-official"></i> </a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"></i> </a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-instagram"></i> </a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-youtube"></i> </a></li>
    
 
</ul>

  </div> <!-- navbar-collapse.// -->

</nav>


</div>

</div>

