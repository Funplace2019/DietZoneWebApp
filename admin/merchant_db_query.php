<?php
include "include/database.php";

$sql="INSERT INTO stock_management(ID,INVOICE_NO,INVOICE_DATE,MERCHANT,PID_SKU,BATCH_NO,MFD,EX_VALUE,EX_DATE,QTY,MRP,OFFSET,SELLING_PRICE,WEIGHT,WEIGHT_VALUE,LENGTH,BREDTH,HEIGHT,LOGS)
VALUES(null,
			'{$_POST["invoicenumber"]}',
			'{$_POST["date"]}',
			'{$_POST["merchants"]}',
			'{$_POST["product_sku"]}',
			'{$_POST["batchno"]}',
			'{$_POST["mfd"]}',
			'{$_POST["Exp_Date"]}',
			'{$_POST["expmfd"]}',
			'{$_POST["qty"]}',
			'{$_POST["mrp"]}',
			'{$_POST["flat"]} {$_POST["percentage"]}',
			'{$_POST["sellprice"]}',
			'{$_POST["weight"]}',
			'{$_POST["weightval"]}',
			'{$_POST["l"]}',
			'{$_POST["b"]}',
			'{$_POST["h"]}',
			now()
		)";
		$stmt=$db->prepare($sql);
		$stmt->execute();
		{		
		
	echo "success";
		
		}







?>




