<?php
session_start();
$_SESSION["key"] = "041222";
if($_SESSION["key"] == $_GET["mdp"]){
    header('Location: accueil.php');
} else {
    header('Location: index.php');
}
?>