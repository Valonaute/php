<?php
require '../../config/connexion.php';
require '../../includes/header.php';

$requete = $pdo->prepare("SELECT * FROM category WHERE id_category = ?");
$requete->execute([$_GET['id_category']]);
$category = $requete->fetch(PDO::FETCH_ASSOC);

if(!empty($_POST)){
    $errors = [];
    if(empty($_POST['nom'])){
        $errors [] = 'Le nom ne doit pas être vide';
    } 

    if(!is_string($_POST['nom'])){
        $errors[] = 'Le nom doit être une chaine de caractères';
    }

    if (count($errors)<1){
        $pdo->prepare("UPDATE category SET nom = ? WHERE id_category = ?")->execute([$_POST['nom'], $_GET['id_category']]);
        echo "<p class='alert-success'> La catégorie a bien été modifiée ! </p>";
    } else {
        foreach ($errors as $error){
            echo "<p class='btn-danger'>".$error."</p>";
        }
    }
}

?>
<div id="content">
    <form action="<?= $_SERVER['PHP_SELF'].'?id_category='.$_GET['id_category']; ?>" method="post">
        <fieldset>
            <legend> Modification de catégorie </legend>
            <label for="nom"> Nom </label>
            <input type="text" name="nom" id="nom" value="<?= $category['nom'] ?>">
            <input type="submit" value="valider">
        </fieldset>
    </form>
</div>

<a class='btn btn-success' href='index.php'> Voir les catégories </a>

<?php
require '../../includes/footer.php';
?>