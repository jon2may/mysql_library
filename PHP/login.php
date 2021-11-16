<?php
// On démarre la session
session_start();

// On définit la variable
if (isset($_POST["user_login"]) && !empty($_POST["user_login"])){
    $_SESSION["login"] = $_POST["user_login"];
    // On redirige vers la page d'accueil
    header ('location: read.php');
}
?>

<form action="login.php" method="post"> 
        <div>
            <label for="login">Votre identifiant :</label>
            <input type="text" id="login" name="user_login">
        </div>
        <button type="submit">Se connecter</button>
        <button class="button button2"><a href="read.php">Retour à la page d'accueil</a></button>
</form>

