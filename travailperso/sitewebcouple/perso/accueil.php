<?php
    session_start();
    // if($_SESSION["key"] !== $_GET["mdp"]){
    //     session_destroy();
    //     header('Location: index.php');
    // } else {
    //     echo "C'est ok la clé est enregistrée, le mot de passe est le bon";
    // }
    
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

<body style=background-color:black;>
    <?php include 'includes/header.php' ?>


    <p style=color:green;>Bravo tu as gagné tu es connecté !</p>


    <img src="upload/nouvelan.jpg" height="350px">


    <?php include 'includes/footer.php' ?>
</body>

</html>