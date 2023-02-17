<?php
session_start();
session_destroy();
if (isset($_SESSION['key'])){
    echo "Vous êtes toujours connecté";
} else { 
    echo"Vous n'êtes plus connecté ";
}
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
<a href="connexion.php">Connexion</a>

<a href="index.php">Accueil</a>

<a href="compte1.php">compte 1</a>
</body>
</html>