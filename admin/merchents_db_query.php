<?php
include "include/database.php";


		$sql="insert into merchants (ID,NAME,CODE,ADDRESS,CITY,STATE,COUNTRY,PICODE,METHOD,LOG,LASTLOG) values
		(null,'{$_POST["mname"]}','{$_POST["mcode"]}','{$_POST["maddress"]}','{$_POST["mc1"]}','{$_POST["mc2"]}','{$_POST["mmail"]}','{$_POST["mgst"]}','{$_POST["method"]}',now(),now());";
						
		$db->query($sql);
		if($db)
		{		
		echo "success";
		
		}

else
{
	echo "failed";
}






?>




