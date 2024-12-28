<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="./src/output.css">
    <!--Montserrat Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
    <!--Poppins-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--Lato Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--Logo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">        

    <!--TAILWIND CSS-->
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

<nav class="flex md:justify-between flex-col md:flex-row 
                font-semibold min-h-10s
                items-center bg-aquaBlue">
        <div class="text-white  px-4 h-12  font-serif logo  py-2 md:mx-0  hover:cursor-none text-2xl rounded-r-lg ml-4">
            Aqua Ease
        </div>
        <ul class=" px-28 py-4 flex space-x-14 justify-center md:justify-normal">
            <li class=""> <a href="#" id="Homenav" class="text-white hover:text-pink-600 text-lg font-bold cursor-pointer">Home</a>
            </li>
            
            <li class=""> <a href="#About" class="text-white hover:text-pink-600 text-lg font-bold ">About</a> </li>
            <li class=""> <a href="#" class="text-white hover:text-pink-600 text-lg font-bold ">Contact Us</a> </li>
            <li> <a href="Orderform.php" class="text-white hover:text-pink-600 text-lg font-bold ">Order</a> </li>
          
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
    <!--HEADING-->
    <!--<h4 class="text-pink-700 text-4xl font-semibold font-lato">About Us</h4> -->
    <div class="font-lato mt-4 mb-4 px-5">
        <h4 class="text-4xl text-gray-500">About Us</h2>
    </div>

    <!-- Horizontal line -->

    <div class="flex justify-center">
        <hr class="" style="border-top: 2px solid rgb(242, 46, 128); width: 90%;">
    </div>




</body>

</html>