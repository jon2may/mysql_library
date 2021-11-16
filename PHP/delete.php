<?php
session_start();

require 'connect.php';

if (isset($_SESSION["login"])){}
    else {
        echo "Vous devez vous identifier pour accéder à cette page !";
        header("refresh:3; login.php");
        exit();
    }

// Récupérer les données
$id = $_REQUEST['id'];

// Requète pour supprimer
$delete = $conn->query("DELETE FROM books WHERE id= $id");

// Rediriger
echo "Bravo ! Le livre a été supprimé de la bibliothèque.";
header( "refresh:2; url=read.php" );
exit();

?>