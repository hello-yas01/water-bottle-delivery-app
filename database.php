<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aquaease";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Something went wrong;");
}

?>