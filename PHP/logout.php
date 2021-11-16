<?php
// On démarre la session
session_start();

// On vide les variables
session_unset();

// On détruit la session
session_destroy();

// On redirige vers la page de login
header ('location: read.php');
?>