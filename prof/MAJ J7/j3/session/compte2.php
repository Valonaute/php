<?php
session_start();
if(!isset($_SESSION['key']))
{
    header('Location: connexion.php');
}

echo $_SESSION['nom'].' '.$_SESSION['prenom'];

?>

<a href="compte.php">compte </a>