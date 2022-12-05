<?php
include_once("db.php");

$username = $_POST["user"];
$password = md5($_POST["pass"]);

$result = mysqli_query($db, "select * from register where username='$username' AND password='$password'");

$row_count = mysqli_num_rows($result);
if ($row_count == 1) {
    session_start();
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
} else {
    echo "login failed";
}
