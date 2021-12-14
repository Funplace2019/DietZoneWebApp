<?php
sleep(3);
include "include/database.php";




$n=count($_POST['sku']);
if($n>=1)
{
	for($i=0;$i<$n;$i++)
	{
	
	if(trim($_POST['sku'][$i])!="")
		{
			$PNAME=$_POST['PNAME'];
			$BNAME=$_POST['BNAME'];
			$ptype=$_POST['ptype'];
			$PID=$_POST['PID'];
			$HSN=$_POST['HSN'];
			$parentcategory=$_POST['parentcategory'];
			$childcategory=$_POST['childcategory'];
			$TAG=$_POST['TAG'];
			$TAX=$_POST['TAX'];
			$sku=$_POST['sku'][$i];
			$variation_title=$_POST['variation_title'][$i];
			$short_description=$_POST['short_description'][$i];
			$qty=$_POST['qty'][$i];
			$var_name1=$_POST['var_name1'][$i];
			$var_value1=$_POST['var_value1'][$i];
			$var_name2=$_POST['var_name2'][$i];
			$var_value2=$_POST['var_value2'][$i];
			$var_name3=$_POST['var_name3'][$i];
			$var_value3=$_POST['var_value3'][$i];
			$var_value5=$_POST['var_value5'][$i];
			$range=$_POST['range'][$i];
			$Enabled=$_POST['Enabled'][$i];
			
		
		
		$sql="INSERT INTO gendral_sku(ID,PRODUCT_NAME,BRAND_NAME,PRO_TYPE,PRADUCT_ID,HSN,PARENT_CATEGORY,CHILD_CATEGORY,TAG,TAX,SKU,VARIATION_TITLE,SHORT_DESCRIPTION,QTY,VARIATION_NAME1,VARIATION_VALUE1,VARIATION_NAME2,VARIATION_VALUE2,VARIATION_NAME3,VARIATION_VALUE3,WEIGHT_VALUE,WEIGHT_RANGE,ENABLED,LOGS,LAST_LOGS)
			VALUES(null,
			'$PNAME',
			'$BNAME',
			'$ptype',
			'$PID',
			'$HSN',
			'$parentcategory',
			'$childcategory',
			'$TAG',
			'$TAX',
			'$sku',
			'$variation_title',
			'$short_description',
			'$qty',
			'$var_name1',
			'$var_value1',
			'$var_name2',
			'$var_value2',
			'$var_name3',
			'$var_value3',
			'$var_value5',
			'$range',
			'$Enabled',
			 now(),
			now()
			
	
		);";
		$stmt=$db->prepare($sql);
		$stmt->execute();
		{		
		
	echo "success";
		
		}



}}}



?>




