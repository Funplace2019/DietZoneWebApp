<?php
include "include/database.php";



$sqli = "select * from variation_value where CATEGORY_ID='{$_POST["id"]}'";
					$result = mysqli_query($db, $sqli);
					echo "<option disabled hidden selected>Select SubCategory</option>";
					 while ($row = mysqli_fetch_array($result)) 
					 
					 {
					 	
					 	echo '<option value='.$row['SUBCATEGORY_NAME'].'>'.$row['SUBCATEGORY_NAME'].'</option>';
					 }
?>