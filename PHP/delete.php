<?php
require 'connect.php';

// Récupérer les données
$id = $_REQUEST['id'];

// Requète pour supprimer
$delete = $conn->query("DELETE FROM books WHERE id= $id");

// Rediriger
echo "Bravo ! Le livre a été supprimé de la bibliothèque.";
header( "refresh:2; url=read.php" );
exit();

?>