<?php
                // Database connection parameters
        if(isset($_POST['name'])){        
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aquaease";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                
                    // Prepare data for insertion
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                    // SQL query to insert data into contact_form table
                    $sql = "INSERT INTO `aquaease`.`contact_form` (`name`, `email`, `message`,`submission_date`) VALUES ('$name', '$email', '$message', current_timestamp())";
                    // echo $sql;

                    if($conn->query($sql) == TRUE){
                        echo "";
                    }
                    else{
                        echo "ERROR: $sql <br> $conn->error";
                    }

                // Close database connection
                $conn->close();
        }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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


<section class="bg-gray-100" id="contact">
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
                <h2 class="text-xl font-bold mb-4">Contact Us</h2>
                <form id="contactForm" class="space-y-4" action="contact.php" method="post">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input id="name" name="name" type="text" required
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" name="email" type="email" required
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="3" required
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
</section>



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

    <script>
      document.getElementById('contactForm').addEventListener('submit', function(event) {
         // Prevent form submission
        alert("Sent Successful!"); // Show success popup
         // Clear form fields
        // You can add additional logic here such as submitting the form data to a server
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>