<?php
require 'connect.php';

$id = $_REQUEST['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");

$row = $result->fetch_assoc();
?>

<h1>Modifier le livre</h1>

<form method="post">

    <label for="tittle">Titre du livre :</label>
    <input type="text" name="tittle" value="<?php echo $row['tittle'];?>">

    <label for="author">Auteur :</label>
    <input type="text" name="author" value="<?php echo $row['id'];?>">

    <label for="nationality">Nationalité :</label>
    <input type="text" name="nationality" value="<?php echo $row['id'];?>">

    <label for="date">Date de publication :</label>
    <input type="text" name="date" value="<?php echo $row['release_date'];?>">

    <input name="save" type="submit" value="Modifier le livre" />

</form>