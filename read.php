<?php

// Pour connecter PHP à MySQL : https://www.w3schools.com/php/php_mysql_connect.asp OU https://www.youtube.com/watch?v=8iq8Z_b56yA&list=PLfdtiltiRHWEbLm0ErHe7HgEOVIO26R_o&index=3&ab_channel=Codecourse

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli ($servername, $username, $password, 'library');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ! <br> <br>";

//Perform query : https://www.youtube.com/watch?v=HQOS3V9nyEQ&ab_channel=Codecourse

if($result = $conn->query("SELECT books.*, authors.author, nationalities.nationality 
FROM books 
LEFT JOIN authors 
ON books.author_id = authors.id
LEFT JOIN nationalities
ON books.author_nationality_id = nationalities.id ")) {


  if($result->num_rows) {
    while ($row = $result->fetch_assoc()) {
      echo $row['tittle'], ' - ', $row['author'],' - ', $row['nationality'], ' - ' ,$row['release_date'],'<br>';
    }
    $result -> free_result();
  }
}
?>