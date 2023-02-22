<?php
session_start();
if (!isset($_SESSION["key"])) {
    echo "Vous êtes déja connects";
} else {
    echo "Vous êtes toujours Connecté !";
}

// if (!empty($_SESSION['key'])){
//     echo "Vous êtes connecté avec la clé".$_SESSIO['key'];}

if (!empty($_POST)) {
    // On vérifie que les champs ne sont pas vides
    $errors = [];

    if (empty($_POST['nom'])) {
        $errors[] = "Le nom est vide";
    }
    if (empty($_POST['prenom'])) {
        $errors[] = "Le Prénom est vide";
    }
    if (count($errors) < 1) {
        // On donne la clé 
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['key'] = uniqid(); // UniqID atribut une valeure alphanumérique unique 
        // Redirection vers l'espace privé avec header location 
        header('Location: compte.php');
    } else {
        foreach ($errors as $error){
            echo $error ;
        };
    }
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
    <form action="#" method="POST">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="submit" value="Envoyer">
    </form>
    <a href="compte.php">Compte</a>
    <a href="compte1.php">Compte 1</a>
    <?php
    if (!empty($_POST["prenom"]) and !empty($_POST["nom"])) {
        header('Location: compte.php');
    } else {
        echo "Vous n'avez pas tout rempli !";
    }
    ?>
</body>

</html>