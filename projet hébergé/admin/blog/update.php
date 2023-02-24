<?php
require '../../config/connexion.php';
require '../../includes/header.php';

$requete = $pdo->prepare("SELECT * FROM blog WHERE id_article = ?");
$requete->execute([$_GET['id_article']]);
$article = $requete->fetch(PDO::FETCH_ASSOC);


if(!empty($_POST)){
    $errors = [];
    if(empty($_POST['titre'])){
        $errors [] = 'Le titre ne doit pas être vide';
    } 

    if(empty($_POST['description'])){
        $errors [] = 'La description ne doit pas être vide';
    } 

    if (count($errors)<1){
        $pdo->prepare("UPDATE blog SET titre = ?, description = ? WHERE id_article = ?")->execute([$_POST['titre'], $_POST['description'], $_GET['id_article']]);
        echo "<p class='alert-success'> La catégorie a bien été modifiée ! </p>";
    } else {
        foreach ($errors as $error){
            echo "<p class='btn-danger'>".$error."</p>";
        }
    }
}

?>



<div id="content" >
    <form action="<?= $_SERVER['PHP_SELF'].'?id_article='.$_GET['id_article']; ?>" method="post" enctype="multipart/form-data" class="form" style="padding-left: 200px;">
        <fieldset>
            <legend> Modification d'articles </legend>
            <br>
            <label for="titre"> Titre </label><br>
            <input type="text" name="titre" id="titre" value="<?= $article['titre']?>">
            <br>
            <label for="description"> Description </label><br>
            <textarea name="description" id="description" > <?= $article['description']?></textarea>
            <br>
            <br>
            <label for="image"> Image </label><br>
            <img src="../../uploads/<?= $article['image']; ?>" class="image-zoom" width="250px" height="200px">
            <br>
            <br>
            <input type="submit" value="Modifier">
            <br>
        </fieldset>
    </form>
</div>
<br><br>
<a class='btn btn-success center' href='index.php' style="margin-left: 200px;"> Voir les Articles </a>

<?php
require '../../includes/footer.php';
?>