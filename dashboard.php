<?php
require_once("content_blog.php");

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("global_components/header.php"); ?>

<body>
    <!-- Navbar -->
    <?php include_once("global_components/loginNavbar.php"); ?>

    <main class="p-5">

        <h1 class=" md:text-5xl text-center text-green-800 font-bold">Welcome <?php echo $_SESSION["username"]; ?></h1>

        <section class="grid grid-cols-1 gap-5">
            <h2 class="text-lg md:text-2xl mt-5 mb-2 md:mb-5 border-b-2 border-gray-300 md:border-b-4 md:border-gray-400 text-blue-900 font-bold">
                Create a New Post
            </h2>

            <form action="content_blog_action.php" method="POST" class="grid grid-cols-1 gap-5 justify-items-center">
                <label for="title" class="font-bold text-xl">Title</label>
                <input type="text" name="title" id="title" class="border border-gray-300 p-2 rounded-md w-1/2 bg-green-50">

                <label for="content" class="font-bold text-xl">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="border border-gray-300 p-2 rounded-md w-1/2 bg-green-50"></textarea>

                <button type="submit" name="create_blog" class="bg-blue-500 text-white p-2 rounded-md hover:bg-green-600">Create</button>
            </form>
        </section>

    </main>
</body>

</html>