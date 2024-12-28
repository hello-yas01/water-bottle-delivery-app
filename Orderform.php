<?php
    // Database connection parameters
    if(isset($_POST['name'])) {        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "aquaease";

        try {
            // Create connection
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare data for insertion
            $name = $_POST['name'];
            $address = $_POST['address'];
            $contactNumber = $_POST['contact_number']; // Corrected variable name
            $quantity = $_POST['quantity'];
            
            // Prepare SQL statement for insertion
            $sql = "INSERT INTO `orders` (`name`, `address`, `contact_number`, `quantity`, `order_date`) 
                    VALUES (:name, :address, :contactNumber, :quantity, current_timestamp())";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':contactNumber', $contactNumber);
            $stmt->bindParam(':quantity', $quantity);
            
            // Execute the statement
            $stmt->execute();

            echo "New record created successfully";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Close database connection
        $conn = null;
    }
?>



<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charseet="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <!--LOGO LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--TAILWIND CSS-->
    <link rel="stylesheet" href="src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            /*max-width: 600px;*/
            margin: 90px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0, 0.1);
            transition-duration: 1s;
        }

        .container:hover{
            filter: drop-shadow(0px 0px 15px Aqua);
            transition-duration: 1s all ease;
        }

        h2 {
            text-align: center;
            font-weight:bold;
            font-size: larger;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <!--Alegreya Font-->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        
        /*START DROPDOWN CSS*/

#btn1{
    position: relative;
    border:none;
    transition: .3s ease-in;
    z-index: 1;
}

#btn1::before,
#btn1::after{
    position: absolute;
    content: "";
    z-index: -1;
}

.door-effect:hover {
    box-shadow: inset -10.5em 0 0 0 #1100fa, inset 10.5em 0 0 0 #0400f7;
}

.dropbtn {
    color: #333333; /* Text color */ /* Text size */
    border: none; /* Removing default button border */
    cursor: pointer;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff; /* Background color of the dropdown */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Shadow effect */
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: #333333; /* Text color */
    padding: 12px 16px; /* Spacing around the text */
    text-decoration: none; /* Removing default underline */
    display: block; /* Display links as block elements */
  }
  
  /* Change color of links on hover */
  .dropdown-content a:hover {
    background-color: #f9f9f9; /* Background color on hover */
  }
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  /* Change color of the button text on hover */
  .dropdown:hover .dropbtn {
    color: #000000; /* Text color on hover */
  }

  /*START DROPDOWN CSS*/
    </style>
</head>

<body>




<!--NAVBAR-->

<nav class="flex md:justify-between flex-col md:flex-row 
                font-semibold min-h-10
                items-center bg-aquaBlue">
        <div class="text-white  px-4 h-12  font-serif logo  py-2 md:mx-0  hover:cursor-none text-2xl rounded-r-lg ml-4">
            Aqua Ease
        </div>
        <ul class=" px-28 py-4 flex space-x-14 justify-center md:justify-normal">
            <li class=""> <a href="./index.php" class="text-white text-lg font-bold hover:text-pink-600 cursor-pointer">Home</a>
            </li>
            
            <li class=""> <a href="./index.php#About" class="text-white text-lg font-bold hover:text-pink-600">About</a> </li>
            <li class=""> <a href="./contact.php" class="text-white text-lg font-bold hover:text-pink-600">Contact Us</a> </li>
            <li> <a href="./Orderform.php" class="text-white text-lg font-bold hover:text-pink-600">Order</a> </li>

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
    

    <div class="container">
        <h2>Order Form</h2>
        <form class="form" id="orderForm" action="Orderform.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="tel" id="contact_number" name="contact_number" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity of Water Bottles</label>
                <input type="number" id="quantity" name="quantity" placeholder="Enter the Quantity" required>
            </div>


            <button type="submit"> submit </button>

        </form>
    </div>


    <!--FOOTER SECTION-->

    <footer>
        <footer class="bg-gray-800 text-white py-8">
            <div class="mx-auto flex flex-col lg:flex-row items-center justify-between px-4">
                <!-- Logo or Brand Name -->
                <div class="mb-4 lg:mb-0">
                    <h3 class="text-2xl font-bold">Aqua Ease</h3>
                    <p class="text-sm">Stay Hydrated, Stay Healthy</p>
                </div>

                <!-- Navigation Links -->
                <nav class="mb-4 lg:mb-0">
                    <ul class="flex flex-col lg:flex-row">
                        <li class="mb-2 lg:mb-0 lg:mr-4">
                            <a href="/index.php" class="text-sm hover:text-blue-400">Home</a>
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
        
    <script src="Orderform.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>

</html>