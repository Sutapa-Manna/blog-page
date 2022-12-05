<?php
require_once("db.php");
function get_blog()
{
    global $db;
    $sql = "SELECT * FROM web_blog";
    $result = mysqli_query($db, $sql);
    $blog = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $blog;
}

function create_new_blog($title, $content)
{
    global $db;
    $now = date("Y-m-d H:i:s");
    $sql = "INSERT INTO web_blog (title, content, created_time) VALUES ('$title', '$content', '$now')";
    $result = mysqli_query($db, $sql);
    return $result;
}
