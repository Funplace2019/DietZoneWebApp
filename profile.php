
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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






<!-------------profile------------>

<br>


<br>
<br>
<section>
<div class="container">
<h5 class="text-left">
Profile Settings
</h5>

</div>

</section>
<br>


  <section class="product-description">
  <div class="container">
   
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Acc Settings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Orders</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">My Stuff</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#review" role="tab" aria-controls="contact" aria-selected="false">Review</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
<br>
<br>
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal Info</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Manage Address</a>
         </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
	  
	  <div class="profile-personalinfo">
	  
	  
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="personalinfo" id="personalinfo">
	  <h4>Personal Info</h4>
	  
	  <?php
$sql="select * from signup where ID='{$_SESSION["ID"]}'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	$row=$res->fetch_assoc();
	
	echo "
	
	 <div class='form-group'>
    <label for='exampleInputPassword1'>Name</label>
    <input type='text' name='name' value='{$row["NAME"]}'   id='name'>
  </div>
  
  
  <div class='form-group'>
    <label for='exampleInputEmail1'>Email address</label>
    <input type='email'  id='email' name='email' value='{$row["EMAIL"]}' aria-describedby='emailHelp'>
    <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
  </div>
  <div class='form-group'>
    <label for='exampleInputPassword1'>Mobile Number</label>
    <input type='text' name='mobile'  value='{$row["MOBILE"]}' id='mobile' >
  </div>
  
  
  ";
	
	
}

else
{
	
	
	
}
	  
	  
	  ?>
	 
    
  
  

<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Update"></input>
  
    <h6 id="op" class="text-dark"></h6>
</form>
</div>
	  
	  
	  </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	  
	   <div class="profile-personalinfo">
	  
	  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="personalinfo1" id="personalinfo1">
	  <h4>Personal Info</h4>
	  
	  
	  

	  
	  <?php
$sql="select * from address where Session_ID='{$_SESSION["ID"]}'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	$row=$res->fetch_assoc();
	
	echo "
	
	 <div class='form-group'>
    <label for='exampleInputPassword1'>Flat no</label>
    <input type='text' name='flatno'  value='{$row["fn"]}' ></input>
  </div>
  
  
  <div class='form-group'>
    <label for='exampleInputEmail1'>St Name</label>
    <input type='text'   name='stname' value='{$row["stn"]}' aria-describedby='emailHelp'>
   
  </div>
  
  <div class='form-group'>
    <label for='exampleInputPassword1'>Land Mark</label>
    <input type='text' name='landmark'  value='{$row["lm"]}' >
  </div>
  
  <div class='form-group'>
    <label for='exampleInputPassword1'>City</label>
    <input type='text' name='city'  value='{$row["city"]}'  >
  </div>
  
  
    <div class='form-group'>
    <label for='exampleInputPassword1'>State</label>
    <input type='text' name='state'  value='{$row["state"]}'  >
  </div>
  
  
  <div class='form-group'>
    <label for='exampleInputPassword1'>Pincode</label>
    <input type='text' name='pincode'  value='{$row["pc"]}'  >
  </div>
  
  
  ";
	
	
}

else
{
	
	echo "Please Add Address";
	
}
	  
	  
	  ?>
	 
    
  
  

<input type="submit" class="btn btn-primary" id="submitaddress" name="submits" value="Update"></input>
  
    <h6 id="op1" class="text-dark"></h6>
</form>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add 
Address</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="personalinfoadd" id="personalinfoadd">
          
		  	 <div class='form-group'>
    <label for='exampleInputPassword1'>Flat no</label>
    <input type='text' name='flatno'   ></input>
  </div>
  
  
  <div class='form-group'>
    <label for='exampleInputEmail1'>St Name</label>
    <input type='text'   name='stname'  aria-describedby='emailHelp'>
   
  </div>
  
  <div class='form-group'>
    <label for='exampleInputPassword1'>Land Mark</label>
    <input type='text' name='landmark'   >
  </div>
  
  <div class='form-group'>
    <label for='exampleInputPassword1'>City</label>
    <input type='text' name='city'    >
  </div>
  
  
    <div class='form-group'>
    <label for='exampleInputPassword1'>State</label>
    <input type='text' name='state'   >
  </div>
  
  
  <div class='form-group'>
    <label for='exampleInputPassword1'>Pincode</label>
    <input type='text' name='pincode'   >
  </div>
		  
		  
		  <input type="submit" class="btn btn-primary" id="submitaddress1" name="submits" value="save"></input>
		     <h6 id="opadd" class="text-dark"></h6>
		  
        </form>
      </div>
     
    </div>
  </div>
</div>
	  </div>
	  
	  
	  
	  
	  </div>
          </div>
  </div>
</div>

  
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  
      <h6>Your Orders</h6>
	  
	 
	 
	 <?php
$sql="select * from payment where session_ID='{$_SESSION["ID"]}' order by ID DESC";

$res=$db->query($sql);
if($res->num_rows>0)
{
echo "<table class='table table-fluid' id= 'myTable1'>
<tbody>
    <thead class='text-light bg-dark'>
    <tr>
	<th>#</th>

	
	<th>Order ID</th>
	<th>Product Name</th>
	<th>Price & Qty</th>
	<th>Paymet status</th>



	<th>Product Add Date</th>
	<th>Delivary Status</th>





	</tr>
	
    </thead>
	";
	
  

	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
	echo "<tr>
	<td>{$i}</td>
	
		<td>{$row["order_id"]}</td>
		<td>{$row["name"]}</td>
	<td>({$row["qty"]} ) {$row["total"]} Rs</td>
	<td>{$row["payment_status"]}</td>

	
	<td>{$row["added_on"]}</td>
	<td>{$row["status"]}</td>
	
	</tr>
";
	}
}

else
{
	
	echo "<p class='bg-danger text-light'>No Orders Yet</p>";
}
	?>
    
    </tbody>
    </table>
	  
	  
	  
	  

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  
  
      <h6>Ingredient</h6>

  
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




  
  
  
  
    </div>
  
  
  </section>
  
  
<!-------------profile End------------>


 
 
 
 









<!------------Footer----------->
 
    
       <?php
include "include/footer.php";

			

?>
    
    
    
        <!--Pagination Css & JavaScript File -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  

<script>
    $(document).ready( function () {
    $('#myTable1').DataTable();
} );
    </script>
    
  
   <!-- JavaScript Libraries -->
  <script src="asset/lib/jquery/jquery.min.js"></script>
  
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		    $('#submit').click(function(e){
		
		
 $('#submit').val('Please Wait...');
	$('#submit').attr('disabled',true);
		  
		 $.ajax({
				url:'profileinfo_query.php',
				type:'post',
				data:$('#personalinfo').serialize(),
				success:function(result)
				{ 	
					location.reload();
					$( '#op' ).html( result );
					$('#personalinfo').get(0).reset();
					 $('#submit').val('submit');
					 $('#submit').attr('disabled',false);
					 location.reload(900000);
					 
					 
				
					
				}
				  
			  });
			  	  e.preventDefault();
		  });
		  
		  
		  
		  
		  		    $('#submitaddress').click(function(e){
		
		
 $('#submitaddress').val('Please Wait...');
	$('#submitaddress').attr('disabled',true);
		  
		 $.ajax({
				url:'profileinfo1_query.php',
				type:'post',
				data:$('#personalinfo1').serialize(),
				success:function(result)
				{ 	
					location.reload();
					$( '#op1' ).html( result );
					$('#personalinfo1').get(0).reset();
					 $('#submitaddress').val('submit');
					 $('#submitaddress').attr('disabled',false);
					 location.reload(900000);
					 
					 
				
					
				}
				  
			  });
			  	  e.preventDefault();
		  });
		  
		  
		  
		  		  		    $('#submitaddress1').click(function(e){
		
		
 $('#submitaddress1').val('Please Wait...');
	$('#submitaddress1').attr('disabled',true);
		  
		 $.ajax({
				url:'profileinfoadd_query.php',
				type:'post',
				data:$('#personalinfoadd').serialize(),
				success:function(result)
				{ 	
					
					$( '#opadd' ).html( result );
					$('#personalinfoadd').get(0).reset();
					 $('#submitaddress1').val('submit');
					 $('#submitaddress1').attr('disabled',false);
					
					 
					 
				
					
				}
				  
			  });
			  	  e.preventDefault();
		  });
		  
		  
		  
		  
		  
		   });
	  </script>
	  

	    


    
    
    
    
    
    

    
    
    
    
    
   
    
</body>
</html>







