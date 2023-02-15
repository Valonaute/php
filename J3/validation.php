<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
    <title>Document</title>
</head>
<body>

<?php

    if (ctype_alpha($_POST["prenom"]) AND ctype_alpha($_POST["nom"]) AND filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) == true)
    {
        echo "<p style='background-color : black; text-align : center; padding: 200px; color: gray;'> Super C'est Parfait ! <br><br><br> Bien joué Mon Gars!</p>";
    } else {
        echo "<p style='background-color : black; text-align : center; padding: 150px; color: red; font-size:larger;'> Les Champs ne sont pas tous remplis ! <br><br><br> Recommence ! </p>";
    }



?>

    
</body>
</html>