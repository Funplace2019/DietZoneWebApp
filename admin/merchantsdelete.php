<?php
session_start();
include "include/database.php";
if(!isset($_SESSION["ID"]))
{
	header("location:index.php");
}




$sql="delete from merchants where ID='$_GET[id]'";
$data=$db->query($sql);
if($data)
{
	
 header("location:merchants_List.php");
 
}
 
 
 

else
{   header("location:merchantsdelete.php");
	echo "<p class='error'>Not delted</p>";
}
?>