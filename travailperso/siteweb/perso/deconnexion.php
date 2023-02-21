<?php
session_start();
echo "vous êtes connectés";
session_destroy();
echo "Vous êtes déconnectés";
if(!isset($_SESSION["key"])){
    echo "La clé a été détruite";
} else {
    echo "La clé existe encore";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"> Retour à l'entrée </a>
</body>
</html>