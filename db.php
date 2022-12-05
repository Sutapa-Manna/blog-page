<?php
$db = mysqli_connect("localhost", "admin", "pass", "social_media");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
