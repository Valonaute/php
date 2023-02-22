<?php
session_start();
session_destroy();
header('Location: connexion.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <br>
    <a href="connexion.php">Connexion</a>
    <br>
    <a href="deconnexion.php">DeConnexion</a>
    <br>
    <a href="index.php">Accueil</a>
    <br>
    <a href="compte1.php">compte 1</a>
    <br>
</body>

</html>