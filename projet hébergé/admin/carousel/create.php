<?php
require '../../config/connexion.php';

if (!empty($_POST) AND !empty($_FILES)){

    $titre_du_fichier = $_FILES['fichier']['name'];
    $dossier_temporaire = $_FILES['fichier']['tmp_name'];
    $dossier_destination = '../../uploads/'.$titre_du_fichier;
    $extension = strrchr($titre_du_fichier, '.');
    $extensions_aurorisees = ['.jpg', '.png', 'JPG', 'PNG', 'JPEG', 'jpeg'];
    $errors = [];

    if(!in_array($extension, $extensions_aurorisees)){
        $errors = "Le fichier ne respecte pas les extensions autorisées (jpg et png)";
    }
    if (empty($_POST['titre']) AND empty($_POST['description'])){
        $errors[] = "Tous les champs ne sont pas remplis !";
    }
    if (empty($titre_du_fichier)){
        $errors[] = "Vous devez uploader une image !";
    }
    if (!is_string($_POST['titre'])){
        $errors[] = 'Le titre doit être alphanumérique';
    }
    if (!is_string($_POST['description'])){
        $errors[] = 'La description doit être alphanumérique';
    }
    if (!is_string($titre_du_fichier)){
        $errors[] = "Le titre de l'image doit être alphanumérique";
    }
    

    if(count($errors) <1){
        // insert 
        $pdo->prepare("INSERT INTO carousel (id_slide, titre, description, image ) VALUES (null, ?, ?, ?)")->execute([$_POST['titre'], $_POST['description'], $titre_du_fichier]);
        // Upload image 
        move_uploaded_file($dossier_temporaire, $dossier_destination);
        header('Location:index.php');
    } else {
        // Afficher erreurs 
        foreach ($errors as $error){
            echo "<p class='alert-danger'>".$error."</p>";
        } 
    }
}

require '../../includes/header.php';
?>

<div id="content" >
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="form" style="padding-left: 200px;">
        <fieldset>
            <legend> Création de slide </legend>
            <br>
            <label for="titre"> Titre </label><br>
            <input type="text" name="titre" id="titre">
            <br>
            <label for="description"> Description </label><br>
            <textarea name="description" id="description"></textarea>
            <br>
            <label for="image"> Image </label><br>
            <input type="file" name="fichier" id="image">
            <br><br>
            <input type="submit" value="Créer une Slide">
            <br>
        </fieldset>
    </form>
</div>
<br><br>
<a class='btn btn-success center' href='index.php' style="margin-left: 200px;"> Voir les Slides </a>

<?php
require '../../includes/footer.php';
?>