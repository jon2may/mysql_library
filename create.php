<?php
require 'connect.php';

if (isset($_POST["save"])) {
    //echo "Votre livre a été ajouté";
}

// Requète des auteurs
$result_auth = $conn->query("SELECT * FROM authors");

// Requète des nationalités
$result_nat = $conn->query("SELECT * FROM nationalities");

// Récupérer les données
$tittle =  $_REQUEST['tittle'];
$author_id = $_REQUEST['author'];
$author_nationality_id = $_REQUEST['nationality'];
$release_date =  $_REQUEST['release_date'];
  
// Insérer les données dans la table 'books'
$sql = "INSERT INTO books (tittle, author_id, release_date, author_nationality_id) VALUES ('$tittle', 
    '$author_id','$author_nationality_id','$release_date')";


            /*if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 

                echo nl2br("\n$tittle\n $author_id\n "
                    . "$author_nationality_id\n $release_date\n");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }*/
  
// Close connection
mysqli_close($conn);
?>


<h1>Ajouter un nouveau livre</h1>

<form method="post">

    <label for="tittle">Titre du livre :</label>
    <input type="text" name="tittle" size="50" autofocus>

    <label for="author">Auteur :</label>
    <select name="author">
        <?php while ($rows_auth = $result_auth->fetch_assoc()) { ?>
            <option value="<?php echo $rows_auth['author']; ?>"> <?php echo $rows_auth['author'];?> </option>
                  <?php
                  }
                  ?>

    <label for="nationality">Nationalité de l'auteur :</label>
    <select name="nationality">
        <?php while ($rows_nat = $result_nat->fetch_assoc()) { ?>
            <option value="<?php echo $rows_nat['nationality']; ?>"> <?php echo $rows_nat['nationality'];?> </option>
                  <?php
                  }
                  ?>
    
    <label for="release_date">Année de publication :</label>
    <input type="number" name="release_date" maxlength="4">

    <input name="save" type="submit" value="Ajouter à la bibliothèque" />

</form>