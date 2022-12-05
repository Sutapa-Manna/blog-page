<?php
include_once("content_blog.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once("global_components/header.php"); ?>

<body>
    <h1>BLog Page</h1>
    <main>

        <?php
        $blogs = get_blog();

        // Foreach loop to display all the blogs
        foreach ($blogs as $blog) {
        ?>
            <h2>
                <?php echo $blog['title']; ?> - <small><?php echo $blog['created_time']; ?></small>
            </h2>
            <p>
                <?php echo $blog['content']; ?>
            </p>
            <hr />
        <?php
        }
        ?>


    </main>

</body>

</html>