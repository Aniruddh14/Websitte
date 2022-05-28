<?php
session_start();
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "website";

$conn = mysqli_connect ($db_hostname, $db_username, $db_password, $db_name);
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['type']) && isset($_POST['phone'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $phone=$_POST['phone'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment1(name,housing_type,amt,payment_status,added_on,phone) values('$name','$type','$amt','$payment_status','$added_on','$phone')");
    $_SESSION['OID']=mysqli_insert_id($conn);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($conn,"update payment1 set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}




?>
