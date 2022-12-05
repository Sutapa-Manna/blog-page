<!DOCTYPE html>
<html lang="en">
<?php include_once("global_components/header.php"); ?>

<body>
    <?php
    include "global_components/nav.php";
    ?>
    <div>
        <div class="overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://picsum.photos/400/300');
    height: full;">
            <section class="">
                <div class="px-4 text-gray-800">
                    <div class="flex justify-center justify-around items-center g-2">
                        <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                            <div class="flex flex-row items-center justify-center lg:justify-start">
                                <p class="text-5xl uppercase font-bold py-5 text-white">Register</p>
                            </div>

                            <form action="register_acc.php" method="POST">
                                <!-- Name input -->
                                <div class="mb-6">
                                    <input type="text" name="name" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Username" required />
                                </div>
                                <!-- Email input -->
                                <div class="mb-6">
                                    <input type="email" name="email" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address" required />
                                </div>

                                <!-- Password input -->
                                <div class="mb-6">
                                    <input type="password" name="pass" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password" required />
                                </div>
                                <!-- confirm Password -->
                                <div class="mb-6">
                                    <input type="password" name="cpass" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Confirm Password" required />
                                </div>


                                <div class="text-center lg:text-left">
                                    <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mb-8">
                                        Register
                                    </button>
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