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
    <form action="#" method="POST">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!isset($_POST["prenom"]) and !isset($_POST["nom"])) {
        header('Location: compte.php');
    } else {
        echo "Vous n'avez pas tout rempli !";
    }
    ?>
</body>

</html>