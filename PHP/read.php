<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Bibliothèque</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
<h1>Liste des livres de la bibliothèque</h1>

<?php
require 'connect.php';

//Perform query : https://www.youtube.com/watch?v=HQOS3V9nyEQ&ab_channel=Codecourse

if($result = $conn->query("SELECT books.*, authors.author, nationalities.nationality 
FROM books 
LEFT JOIN authors 
ON books.author_id = authors.id
LEFT JOIN nationalities
ON books.author_nationality_id = nationalities.id
ORDER BY release_date")) { ?>

<table>
  <thead>
    <tr>
      <th>Titre</th>
      <th>Auteur</th>
      <th>Nationalité</th>
      <th>Année de publication</th>
    </tr>
  </thead>

  <?php while ($row = $result->fetch_assoc()) {?>

  <tbody>
    <tr>
      <td><?php echo $row['tittle']; ?></td>
      <td><?php echo $row['author']; ?></td>
      <td><?php echo $row['nationality']; ?></td>
      <td><?php echo $row['release_date']; ?></td>
      <td><a href="delete.php?id=<?php echo $row['id']; ?>">Supprimer ce livre</a></td>
      <td><a href="update.php?id=<?php echo $row['id']; ?>">Modifier ce livre</a></br></td>

    </tr>
  </tbody>
</table>

<?php }
    $result -> free_result();
  }
?>

<form action="create.php" method="get" target="_blank">
  <button type="submit">Ajouter un livre à la bibliothèque</button>
</form>

</body>
</html>