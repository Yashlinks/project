<?php

$server = "localhost";
$username = "root";
$pass = "";
$database = "photographer_booking";

$conn = mysqli_connect($server, $username, $pass, $database);

if (!$conn) {
    die ("<script>alert('Connection Failed.')</script>");
}

?>