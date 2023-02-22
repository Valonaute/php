<?php
session_start();

if(!empty($_POST)){

    // on vérifie que les champs ne sont pas vide
    $errors = [];

    if(empty($_POST['nom']))
    {
        $errors[] = "le nom est vide";
    }

    if(empty($_POST['prenom']))
    {
        $errors[] = 'le nom est vide';
    }

    if(count($errors) < 1)
    {
        // on donne la clé
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        //la méthode uniqid génère un identifiant unique.
        // je récupère la clé
        $_SESSION['key'] = uniqid();

        // redirection vers l"espace privée avec header(Location)
        header('Location: compte.php');

    }

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
    <form action="#" method="post">
        <fieldset>
            <legend>connexion</legend>
            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom">

            <label for="prenom">prenom</label>
            <input type="text" name="prenom" id="prenom">
            <input type="submit" value="valider">
        </fieldset>
    </form>
    
</body>
</html>