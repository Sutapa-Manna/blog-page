<!DOCTYPE html>
<html lang="en">
<?php
include_once("global_components/header.php");
?>

<body>
    <!-- Navbar -->
    <?php
    include_once("global_components/nav.php");
    ?>
    <header>
        <!-- Background image -->
        <div class="overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://picsum.photos/400/300');
    height: 350px;
  ">
            <div class="w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75)">
                <div class="flex justify-center items-center h-full">
                    <div class="text-center text-white px-10 md:px-12 grid grid-cols-1 gap-5">
                        <h1 class="text-5xl font-bold">Heading</h1>
                        <div class="flex flex-col gap-5">
                            <button type="button" class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-green-600 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                Get started
                            </button>
                            <button type="button" class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-green-600 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                <a href="signin_page.php">Sign In</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <?php
    include_once("global_components/footer.php");
    ?>
</body>

</html>