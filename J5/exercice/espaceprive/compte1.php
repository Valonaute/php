<?php
session_start();
if (!isset($_SESSION["key"])) {
    header('Location: connexion.php');
}

echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'];

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
    <a href="compte2.php">Compte 2</a>
</body>

</html>