<?php
session_start();
include "include/database.php";
if(isset($_POST['pid']) && isset($_POST['sellprice']) && isset($_POST['pn']) ){
	
	
    $pid=$_POST['pid'];
    $sellprice=$_POST['sellprice'];
    $pn=$_POST['pn'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($db,"insert into payment(name,user_id,pid,amount,payment_status,added_on) values('$pn','{$_SESSION["ID"]}','$pid','$sellprice','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($db);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($db,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
?>