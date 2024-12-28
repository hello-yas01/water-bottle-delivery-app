<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquaease</title>
    <!--Logo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Alegreya Font-->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap" rel="stylesheet">
    <!--TAILWIND CSS-->
    <link rel="stylesheet" href="src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!--MY EXTERNAL CSS FILE-->
    <link rel="stylesheet" href="index.css">
</head>

<body class="bg-indigo-800" id="home">
    <!--BODY BG-->

    <!--NAVBAR-->


    
    <nav class="flex md:justify-between flex-col md:flex-row 
                font-semibold min-h-10s
                items-center bg-aquaBlue">
        <div class="text-white  px-4 h-12  font-serif logo  py-2 md:mx-0  hover:cursor-none text-2xl rounded-r-lg ml-4">
            Aqua Ease
        </div>
        <ul class=" px-28 py-4 flex space-x-14 justify-center md:justify-normal">
            <li class=""> <a href="./index.php" id="Homenav" class="text-white hover:text-pink-600 text-lg font-bold cursor-pointer">Home</a>
            </li>
            
            <li class=""> <a href="./index.php#About" class="text-white hover:text-pink-600 text-lg font-bold ">About</a> </li>
            <li class=""> <a href="./contact.php" class="text-white hover:text-pink-600 text-lg font-bold ">Contact Us</a> </li>
            <li> <a href="./Orderform.php" class="text-white hover:text-pink-600 text-lg font-bold ">Order</a> </li>
          
              <!-- Login Dropdown with PNG icon -->
              <li class="dropdown">
              <img src="./image/user.png" alt="login img" class="dropbtn h-7">
              <ul class="dropdown-content">
              <a href="./login.php" class="text-lg text-gray-600 hover:text-pink-600 cursor-pointer">Login</a>
              <a href="./logout.php" class="text-lg text-gray-600 hover:text-pink-600 cursor-pointer">Logout</a>
            </ul>
          </li>
        <!-- End of Login Dropdown -->

        </ul>

    </nav>



    <main class="main bg-beige">
        <!--IMAGE SECTION-->

        <div class="mainimg">
            <section class=" flex justify-start items-center"
                style=" background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(./image/bottle2.jpg); background-size: cover; background-position: center; height:750px;">

                <div class=" text-white px-32 max-w-screen-xl ">
                    <h2 class="font-alegreya text-5xl font-bold">Stay hydrated</h2>
                    <h2 class="font-alegreya text-4xl font-bold">on a budget</h2>
                    <h4 class="text-4xl font-bold mt-6 px-2">- Just ₹40</h4>
                </div>
            </section>
        </div>

        <!---->


        <!-- Horizontal line -->
        <div class="" style="display: flex; justify-content: center;">
            <hr class="mt-4 px-7 py-2" style="border-top: 2.5px solid #333333; width: 90%;">
        </div>



        <!--ABOUT US SECTION-->

        <!--IMG Section-->
        <section class="flex mt-1 mb-9 bg-gradient-to-b bg-white" id="About">
            <div class="flex justify-center items-center w-6/12 pl-10 mb-20">
                <div class="grid grid-cols-2 gap-3 px-10">
                    <div class="bg-white p-3 mt-16 drop-shadow-lg mr-1">
                        <img src="./image/glassimg.avif" alt="Image 1" class="w-full h-auto">
                    </div>
                </div>
            </div>

            <!--Right-Section-->
            <div class="mt-14 w-6/12 pr-24">
                <h1 class="text-gray-700 text-xl font-semibold">About Us</h1>
                <h2 class="text-6xl font-alegreya">Welcome to Aqua Ease</h2>
                <p class="mt-3 text-xl font-semibold">
                    We're dedicated to providing quality water bottle delivery service to our customers.
                    At AquaEase, we ensure timely delivery to your doorstep within 24 hours. Also we provide you with
                    convenience and peace of mind allowing you to stay hydrated without any hassle
                    Our goal is to provide convenience and reliability
                    Choose AquaEase for hassle-free hydration!"
                </p>

                <button id="btn1" class=" button door-effect button-effect mt-5 font-medium bg-blue-600 text-white text-lg py-3 px-3 rounded-sm">Learn
                    more</button>
            </div>

        </section>


        <!--Container Name-->
        <div class="bg-transparent container mt-2 mb-9">
            <h3 class="text-xl font-semibold text-gray-700 flex justify-center font-poppins">
                How it works
            </h3>

            <h5 class="flex justify-center mt-2.5 text-gray-700 font-montserrat">
                Order - Get Deliverd
            </h5>
        </div>

        <!--CARDS-->


        <section id="Order" class=" p-8 pb-14 bg-white">
            <div class="mt-9">
                <h2 class="text-center font-serif text-5xl">Order Now</h2>

                <!-- Horizontal line -->
                <div class="" style="display: flex; justify-content: center;">
                    <hr class="mt-4 px-7 py-2" style="border-top: 2.5px solid #333333; width: 90%;">
                </div>

                <div class="flex flex-wrap mt-16">

                    <!--CARD-->
                    <!--<div class="max-w-sm mx-4 my-4 bg-white rounded-xl shadow-md overflow-hidden justify-evenly">
                        <img class="w-full h-44 object-cover object-center" src="./image/bottle.jpg" alt="Card image">
                        <div class="p-4">
                            <h2 class="text-2xl font-semibold mb-3 font-serif">Register Now</h2>
                            <p class="text-gray-700 text-lg">Discover the convenience of having fresh water bottles
                                deliverd to your doorstep with just a few clicks.</p>
                            <button
                                class="mt-4 bg-blue-700 hover:bg-aquaBlue text-white font-bold py-3 px-6 text-lg rounded-3xl transition duration-300">Order</button>
                        </div>
                    </div> -->

                    <!--Second card-->

                    <div class="max-w-sm mx-4 my-4 bg-white rounded-xl shadow-md overflow-hidden">
                        <img class="w-full h-44 object-cover object-center" src="./image/bottle.jpg" alt="Card image">
                        <div class="p-4">
                            <h2 class="text-2xl font-semibold mb-3 font-serif">Purchase Now</h2>
                            <p class="text-gray-700 text-lg">Discover the convenience of having fresh water bottles
                                deliverd to your doorstep with just a few clicks.</p>
                            <button
                                class="mt-4 bg-blue-500 hover:bg-blue-800 text-white font-bold py-3 px-6 text-lg rounded-2xl transition duration-300">Learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--FOOTER-->

    <footer>
        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4">
                <!-- Logo or Brand Name -->
                <div class="mb-4 lg:mb-0">
                    <h3 class="text-2xl font-bold">Aqua Ease</h3>
                    <p class="text-sm">Stay Hydrated, Stay Healthy</p>
                </div>

                <!-- Navigation Links -->
                <nav class="mb-4 lg:mb-0">
                    <ul class="flex flex-col lg:flex-row">
                        <li class="mb-2 lg:mb-0 lg:mr-4">
                            <a href="./index.php" class="text-sm hover:text-blue-400">Home</a>
                        </li>
                        <li class="mb-2 lg:mb-0 lg:mr-4">
                            <a href="./index.php#About" class="text-sm hover:text-blue-400">About Us</a>
                        </li>
                        <li class="mb-2 lg:mb-0 lg:mr-4">
                            <a href="./contact.php" class="text-sm hover:text-blue-400">Contact Us</a>
                        </li>
                    </ul>
                </nav>

                <!-- Contact Information -->
                <div>
                    <p class="text-sm mb-2">Contact Us:</p>
                    <p class="text-sm">012 Street, city</p>
                    <p class="text-sm">Phone: 1234567890</p>
                    <p class="text-sm">AquaEase@gmail.com</p>
                </div>
            </div>
        </footer>


    </footer>

    <script src="index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>