<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "website";
$id=$_SESSION['id'];
$conn = mysqli_connect ($db_hostname, $db_username, $db_password, $db_name);
if (!$conn){
    echo "Connection failed".mysqli_connect_error();
    exit;
}
$name=$_POST['name'];
$phone=$_POST['number'];
$housing=$_POST['housing'];
$house_no=$_POST['house_no'];

$sql = "INSERT INTO housing (name, phone, housing, housing_no) VALUES ('$name', '$phone', '$housing', '$house_no') ";
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