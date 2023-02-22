<?php
require '../../config/connexion.php';

if (!empty($_POST) AND !empty($_FILES)){

    $nom_du_fichier = $_FILES['fichier']['name'];
    $dossier_temporaire = $_FILES['fichier']['tmp_name'];
    $dossier_destination = '../../uploads/'.$nom_du_fichier;
    $extension = strrchr($nom_du_fichier, '.');
    $extensions_aurorisees = ['.jpg', '.png', 'JPG', 'PNG', 'JPEG', 'jpeg'];
    $errors = [];

    if(!in_array($extension, $extensions_aurorisees)){
        $errors = "Le fichier ne respecte pas les extensions autorisées (jpg et png)";
    }
    if (empty($_POST['nom']) AND empty($_POST['description']) AND empty($_POST['prix']) AND empty($_POST['category'])){
        $errors[] = "Tous les champs ne sont pas remplis !";
    }
    if (empty($nom_du_fichier)){
        $errors[] = "Vous devez uploader une image !";
    }
    if (!is_string($_POST['nom'])){
        $errors[] = 'Le nom doit être alphanumérique';
    }
    if (!is_string($_POST['description'])){
        $errors[] = 'La description doit être alphanumérique';
    }
    if (!is_string($nom_du_fichier)){
        $errors[] = "Le nom de l'image doit être alphanumérique";
    }
    // if (!is_float($_POST['prix'])){
    //     $errors[] = 'Le prix doit être numérique';
    // }
    // if (!is_int($_POST['category'])){
    //     $errors[] = 'La catégorie est invalide';
    // }

    if(count($errors) <1){
        // insert 
        $pdo->prepare("INSERT INTO products (id_product, name, description, price, image, id_category) VALUES (null, ?, ?, ?, ?, ?)")->execute([$_POST['nom'], $_POST['description'], $_POST['prix'], $nom_du_fichier, $_POST['category']]);
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
<?php 
$requete = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDO::FETCH_ASSOC); 

// var_dump($categories);
/*
if (!empty($_POST)) {
    $errors = [];
    if (empty($_POST['nom'])) {
        $errors[] = 'Le nom est vide';
    }
    if (!is_string($_POST['nom'])) {
        $errors[] = "Le nom de la catégorie n'est pas alphanumérique";
    }

    if (count($errors) < 1) {
        $pdo->prepare("INSERT INTO category(id_category, nom) VALUES (null, ?)")->execute([$_POST['nom']]);

        echo "<p class='btn-success'> La catégorie a bien été ajoutée </p>";
    } else {
        foreach ($errors as $error) {
            echo "<p class='btn-danger'> $error </p>";
        }
    }
}*/
?>

<div id="content" >
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="form" style="padding-left: 200px;">
        <fieldset>
            <legend> Création de Produit </legend>
            <br>
            <label for="nom"> Nom </label><br>
            <input type="text" name="nom" id="nom">
            <br>
            <label for="description"> Description </label><br>
            <textarea name="description" id="description"></textarea>
            <br>
            <label for="prix"> Prix </label><br>
            <input type="text" name="prix" id="prix">
            <br>
            <label for="image"> Image </label><br>
            <input type="file" name="fichier" id="image">
            <br>
            <label for="category"> Catégorie </label><br>
            <select name="category" id="category">
                <?php foreach ($categories as $category){ ?> 
                <option value="<?= $category['id_category']; ?>"> <?= $category['nom'];?></option> <?php } ?>
            </select>
            <br><br>
            <input type="submit" value="Créer">
            <br>
        </fieldset>
    </form>
</div>
<br><br>
<a class='btn btn-success center' href='index.php' style="margin-left: 200px;"> Voir les catégories </a>

<?php
require '../../includes/footer.php';
?>