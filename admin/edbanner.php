<?php
session_start();
include "include/database.php";


$s="update main_banner set action ='Enabled' where ID='{$_GET["id"]}'";
	$db->query($s);
	if($db)
	{
		header("location:banner.php?enmess=<p> <u></u><b>Enabled</b></u></p>");
	}
else
{
	echo "failed";
}




?>




<?php
session_start();
include "include/database.php";


$s="update main_banner set action ='Disabled' where ID='{$_GET["idd"]}'";
	$db->query($s);
	if($db)
	{
		header("location:banner.php?dmess=<p> <u></u><b>Disabled</b></u></p>");
	}
else
{
	echo "failed";
}




?>



<?php
session_start();
include "include/database.php";


$sql="delete from main_banner where ID='$_GET[idel]'";
	$db->query($sql);
	if($db)
	{
		header("location:banner.php?delmess=<p> <u></u><b>Deleted</b></u></p>");
	}
else
{
	echo "failed";
}




?>