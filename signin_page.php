<!DOCTYPE html>
<html lang="en">
<?php include_once("global_components/header.php"); ?>

<body>
    <?php
    include "global_components/nav.php";
    ?>
    <div class="overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://picsum.photos/400/300');
    height: full;">
        <section class="">
            <div class="px-4 h-full text-gray-800">
                <div class="flex justify-center justify-around items-center h-full g-2">
                    <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                        <div class="flex flex-row items-center justify-center lg:justify-start">
                            <p class="text-5xl font-bold uppercase py-5 text-white">LOGIN</p>
                        </div>

                        <form action="login.php" method="POST">
                            <!-- Email input -->
                            <div class="mb-6">
                                <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none bg-green-100" name="user" placeholder="Email address" />
                            </div>

                            <!-- Password input -->
                            <div class="mb-6">
                                <input type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none bg-green-100" name="pass" placeholder="Password" />
                            </div>

                            <div class="flex justify-between items-center mb-6">

                                <a href="#!" class="text-white font-bold">Forgot password?</a>
                            </div>

                            <div class="text-center lg:text-left">
                                <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-green-900 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Login
                                </button>
                                <p class="text-sm font-semibold mt-2 pt-1 mb-0 font-bold text-white text-2xl mb-8">
                                    Don't have an account?
                                    <a href="register.php" class="text-green-900 font-bold text-xl hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Register</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    include "global_components/footer.php";
    ?>
</body>

</html>