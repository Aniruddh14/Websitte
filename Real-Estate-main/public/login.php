<?php
session_start();
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "website";

$conn = mysqli_connect ($db_hostname, $db_username, $db_password, $db_name);
if (!$conn){
    echo "Connection failed".mysqli_connect_error();
    exit;
}
$check = 0;
$email = $_POST['email'];
$password = $_POST['password'];
$tenant = $_POST['tenant'];
if (strcmp($tenant,"ten")==0)
{
    $sql = "SELECT * FROM tenants WHERE email = '$email' AND password = '$password'";
}else{
    $sql = "SELECT * FROM owners WHERE email = '$email' AND password = '$password'";
    $check = 1;
}
$result = mysqli_query($conn,$sql);
if (!$result) {
    echo "Error:".mysqli_error ($conn);
    exit;
}
$row = mysqli_fetch_assoc($result);
if ($row && $check==0 ) {
    $_SESSION['User_id']=$row['name'];
    header("Location: tenantsignin.php");
    exit();
}elseif ($row && $check==1){
    $_SESSION['User_id']=$row['name'];
    header("Location: ownersignin.php");
    exit();
}
else{
    echo "Login Failed<br/>";
}
mysqli_close ($conn);
?>