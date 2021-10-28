<?php
require 'connect.php';

if (isset($_POST["save"])) {

    // Récupérer les données
    $tittle = $_REQUEST['tittle'];
    $author_id = $_REQUEST['author'];
    $author_nationality_id = $_REQUEST['nationality'];
    $release_date = $_REQUEST['release_date'];

    // Insérer les données dans la table 'books'
    $sql = "INSERT INTO books (tittle, author_id, author_nationality_id, release_date) VALUES ('$tittle', 
        '$author_id','$author_nationality_id','$release_date')";

    // Message d'information
    if(mysqli_query($conn, $sql)){
                echo "Super ! Le livre \" $tittle \" a été ajouté à la bibliothèque.";
                header( "refresh:2; url=read.php" );
                exit();

            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
}

// Requète des auteurs
$result_auth = $conn->query("SELECT * FROM authors");

// Requète des nationalités
$result_nat = $conn->query("SELECT * FROM nationalities");
  
// Close connection
mysqli_close($conn);
?>

<h1>Ajouter un nouveau livre</h1>

<form method="post">

    <label for="tittle">Titre du livre :</label>
    <input type="text" name="tittle" size="50" autofocus required>

    <label for="author">Auteur :</label>
    <select name="author">
        <?php while ($rows_auth = $result_auth->fetch_assoc()) { ?>
            <option value="<?php echo $rows_auth['id']; ?>"> <?php echo $rows_auth['author'];?> </option>
                  <?php
                  }
                  ?>
    </select>

    <label for="nationality">Nationalité de l'auteur :</label>
    <select name="nationality">
        <?php while ($rows_nat = $result_nat->fetch_assoc()) { ?>
            <option value="<?php echo $rows_nat['id']; ?>"> <?php echo $rows_nat['nationality'];?> </option>
                  <?php
                  }
                  ?>
    </select>

    <label for="release_date">Année de publication :</label>
    <input type="number" name="release_date" maxlength="4" required>

    <input name="save" type="submit" value="Ajouter à la bibliothèque" />

</form>