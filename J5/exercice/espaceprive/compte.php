<?php
session_start();
$_SESSION['key'] = 17032023;
if (isset($_SESSION['key'])){
    echo "Vous êtes connecté";}
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
    <a href="compte1.php">Compte 1</a>
    <a href="deconnexion.php"> Deconnexion</a>
</body>
</html>