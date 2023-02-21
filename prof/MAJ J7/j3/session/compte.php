<?php
session_start();
if(!isset($_SESSION['key']))
{
    header('Location: connexion.php');
}

echo $_SESSION['nom'].' '.$_SESSION['prenom'];

?>

<a href="compte1.php">compte 1</a>
<a href="deconnexion.php">deconnexion</a>