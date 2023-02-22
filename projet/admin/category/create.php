<?php
require '../../config/connexion.php';

if(!empty($_POST)){
    $errors = [];
    if(empty($_POST['nom'])){
        $errors[] = 'Le nom est vide';
    }
    if(!ctype_alpha($_POST['nom'])){
        $errors[] = "Le nom de la catégorie n'est pas alphanumérique";
    }

    if(count($errors) <1){
        $pdo->prepare("INSERT INTO category(id_category, nom) VALUES (null, ?)")->execute([$_POST['nom']]);

        echo "<p class='btn-success'> La catégorie a bien été ajoutée </p>";
        
    } else {
        foreach ($errors as $error){
            echo "<p class='btn-danger'> $error </p>";
        }
    }
}

require '../../includes/header.php';
?>

<div id="content">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend> Création de catégorie </legend>
            <label for="nom"> Nom </label>
            <input type="text" name="nom" id="nom">
            <input type="submit" value="valider">
        </fieldset>
    </form>
</div>

<a class='btn btn-success' href='index.php'> Voir les catégories </a>

<?php
require '../../includes/footer.php';
?>