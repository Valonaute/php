<?php
// Je démarre la session 
session_start();

if(!isset($_SESSION['key'])){
    header('Location: connexion.php');
}
// Je créer une variable session 
$_SESSION['prenom'] = 'Valentin';
$_SESSION['nom'] = 'Gautier';

?>

<a href='page1.php'> Page 1 </a>
<a href='connexion.php'> connexion </a>
<a href='deconnexion.php'> Déconnexion </a>