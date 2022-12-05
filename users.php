<?php
require_once("db.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("global_components/header.php"); ?>

<body>
    <?php include_once("global_components/loginNavbar.php"); ?>
    <main class="p-5">
        <h1 class="font-bold text-2xl text-green-800 p-5">User List</h1>

        <table class="border-2 border-black">
            <tr class="border-2 border-black">
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
            </tr>
            <?php
            // Fetch users table
            $query = "SELECT * FROM register";
            $result = mysqli_query($db, $query);
            foreach ($result as $row) {
            ?>
                <tr>
                    <td class="p-5"><?php echo $row['username']; ?></td>
                    <td class="p-5"><?php echo $row['password']; ?></td>
                    <td class="p-5"><?php echo $row['email']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </main>
</body>

</html>