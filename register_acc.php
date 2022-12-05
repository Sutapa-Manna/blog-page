<?php
include_once("db.php");

$name = $_POST["name"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$cpass = $_POST["cpass"];

if ($pass != $cpass) {
    echo "password doesn't match";
    exit(0);
}

# hash the password
$pass = md5($pass);

$sql = "insert into register(username,password,email) values('$name','$pass','$email')";
$result = mysqli_query($db, $sql);
if ($result) {
    header("LOCATION: signin_page.php");
} else {
    echo "register failed";
}
