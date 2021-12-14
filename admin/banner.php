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
	Right Choice 16

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
   <!--/ body page start/-->
<section id="service" class="services-mf route">
  <div class="container-fluid">
  

 
<?php  

 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO main_banner(ID,NAME,LINK,ACTION,LOGS) VALUES (null,'$file','{$_POST["link"]}','{$_POST["disabled"]}',now())";  
      if(mysqli_query($db, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?> 
 
 
  <h6 class="text-center">Banner Image Settings</h6>
  <p class="text-center">1152px * 708px</p>
  <div class="line-mf "></div>
 
  




  
  
  <div class="container" style="width:500px;">  
                
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" multiple />  
					  <br>
					  <br>
					  <label>Link</label>
					 <input type="text"  class="form-control"  name="link" autocomplete="off" required autofocus></input>
					
					 <input type="hidden"  class="form-control" value="Disabled" name="disabled" autocomplete="off" required autofocus></input>
                     <br />  
					 
					 <br>
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                          <th>Enable</th>  
                          <th>Disabled</th>  
                          <th>Delete</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM main_banner ORDER BY ID DESC";  
                $result = mysqli_query($db, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['NAME'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
							     
                                   <td ><a class=" btn btn-success text-light" href=edbanner.php?id='.$row["ID"].'>'.$row["ACTION"].'</a></td>
                                   <td><a class=" btn btn-info text-light" href=edbanner.php?idd='.$row["ID"].'>'.$row["ACTION"].'</a></td>
                                   <td ><a class=" btn btn-danger text-light" href=edbanner.php?idel='.$row["ID"].'>Delete</a></td>
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
				
				
				
				
			 
           </div>  
  
  <br>








	
	
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

   <!-- ck editor --> 
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
                        CKEDITOR.replace( 'editor1' );
                        CKEDITOR.replace( 'editor2' );
                        CKEDITOR.replace( 'editor3' );
                        CKEDITOR.replace( 'editor4' );
                        CKEDITOR.replace( 'editor5' );
                        CKEDITOR.replace( 'editor6' );
                </script>
				
				
				<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
				
				
				
		  
		  
		  

	

	
</body>

</html>
