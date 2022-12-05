<?php
include_once("content_blog.php");

if (isset($_POST["create_blog"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    if (create_new_blog($title, $content)) {
        header("Location: dashboard.php");
    } else {
        echo "Failed to create blog";
    }
}
