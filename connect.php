<?php

// Pour connecter PHP à MySQL : https://www.w3schools.com/php/php_mysql_connect.asp OU https://www.youtube.com/watch?v=8iq8Z_b56yA&list=PLfdtiltiRHWEbLm0ErHe7HgEOVIO26R_o&index=3&ab_channel=Codecourse

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully ! <br> <br>";

?>