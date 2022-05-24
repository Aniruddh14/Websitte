<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "website";

$conn = mysqli_connect ($db_hostname, $db_username, $db_password, $db_name);
if (!$conn){
    echo "Connection failed".mysqli_connect_error();
    exit;
}
$name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['permanent_adress'];
$tenant = $_POST['tenant'];
if (strcmp($tenant,"ten")==0)
{
    $sql = "INSERT INTO tenants (name, phone, email, password, address) VALUES ('$name', '$phone', '$email', '$password', '$address') ";
}else{
    $sql = "INSERT INTO owners (name, phone, email, password, address) VALUES ('$name', '$phone', '$email', '$password', '$address') ";
}
$result = mysqli_query($conn,$sql);
if (!$result) {
    echo "Error:".mysqli_error ($conn);
    exit;
}
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
mysqli_close ($conn);
?>