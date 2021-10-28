<h1>Ma bibliothèque</h1>

<?php
require 'connect.php';

//Perform query : https://www.youtube.com/watch?v=HQOS3V9nyEQ&ab_channel=Codecourse

if($result = $conn->query("SELECT books.*, authors.author, nationalities.nationality 
FROM books 
LEFT JOIN authors 
ON books.author_id = authors.id
LEFT JOIN nationalities
ON books.author_nationality_id = nationalities.id
ORDER BY release_date ")) {


  if($result->num_rows) {
    while ($row = $result->fetch_assoc()) {
      echo $row['tittle']. ' - '. $row['author'].' - '. $row['nationality']. ' - ' .$row['release_date'].'<br>';
    }
    $result -> free_result();
  }
}
?>