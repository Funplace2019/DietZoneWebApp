<?php
session_start();
include "include/database.php";
if(!isset($_SESSION["ID"]))
{
	header("location:index.php");
}




$sql="delete from tax where id='$_GET[id]'";
$data=$db->query($sql);
if($data)
{
	
 header("location:tax.php");
 
}
 
 
 

else
{   header("location:taxdelete.php");
	echo "<p class='error'>Not delted</p>";
}
?>