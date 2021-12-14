


<?php
include "include/database.php";
session_start();


	
	
	/*$pname=$_POST['pname'];
	$qty=$_POST['qty'];
    $price=$_POST['price'];

    $total=$_POST['total'];
	$getid=$_POST['getid'];
    $getcc=$_POST['getcc'];*/
	
  $orid="ODRDZ-".rand(1,99999);
    
    if(isset($_POST['pname']) && isset($_POST['price'])){
        $SID=$_SESSION["ID"];
    $amt=$_POST['price'];
    $name=$_POST['pname'];
    $qty=$_POST['qty'];
    $total=$_POST['total'];
    $getid=$_POST['getid'];
     $getcc=$_POST['getcc'];
    $payment_status="pending";
    $status="disabled";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($db,"insert into payment(session_ID,order_id,name,amount,qty,total,getid,getcc,payment_status,added_on,status) values('$SID','$orid','$name','$amt','$qty','$total','$getid','$getcc','$payment_status','$added_on','$status')");
    $_SESSION['OID']=mysqli_insert_id($db);
}

    

	
	/*$sql="INSERT INTO payment(id, name, price, qty, total, pid, pcc, payment_status, payment_id, added_on) values
	(null,'$pname','$price','$qty','$total',' $getid', '$getcc','$payment_status','$added_on');";
	$db->query($sql);
							if($db)
	
		{		
$_SESSION['OID']=mysqli_insert_id($db);
	echo "successfully Register ' $getid', '$getcc'";
		
}*/
    
	







if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($db,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
?>