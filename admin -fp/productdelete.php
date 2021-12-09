<?php
session_start();
include "include/database.php";
if(!isset($_SESSION["ID"]))
{
	header("location:index.php");
}




$sql="delete from gendral_sku where ID='$_GET[id]'";
$data=$db->query($sql);
if($data)
{
	
$sql="delete from specification_image where PID='$_GET[id]'";
$data=$db->query($sql);
if($data)
{
	
 header("location:Product.php");
 
}
 
 
 

else
{   header("location:productdelete.php");
	echo "<p class='error'>Not delted</p>";
}
 
}
 
 
 

else
{   header("location:productdelete.php");
	echo "<p class='error'>Not delted</p>";
}
?>