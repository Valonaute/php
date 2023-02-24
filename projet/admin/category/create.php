<?php
require '../../config/connexion.php';

function creer_page($nom_page, $contenu_page)
{    // Ouvrir le fichier de la nouvelle page en écriture
    $nouvelle_page = fopen($nom_page, 'w');
    // Écrire le contenu de la nouvelle page dans le fichier
    fwrite($nouvelle_page, $contenu_page);
    // Fermer le fichier
    fclose($nouvelle_page);
    // Afficher un message pour informer que la page a été créée
    echo 'La page ' . $nom_page . ' a été créée avec succès.';
}

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
        
        // --------------------- Début tentative création page --------------------->

        $nom_page = $_POST['nom'] . ".php";
        
        $z0 = "<?php require '../../config/connexion.php';
require '../../includes/header.php'; ?>
";
$z1 = '<?php $requete = $pdo->query("SELECT * FROM products");
$products = $requete->fetchAll();

$requete2 = $pdo->query("SELECT * FROM category");
$category = $requete2->fetchAll();

?>
';
$z2 = '<div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <br>
          <h2 class="d-flex justify-content-center pt-5">Vous retrouvez ici nos produits de la catégorie : <?= $category[1]["nom"] ?></h2>
          <br>
          <p class="d-flex justify-content-center">
            Nous esperons que vous allez les aimer ! Vous pourrez bientot les acheter !</p>
        </div>
        ';
         $z3 = '<?php foreach ($products as $product) {
  if ($product[5] == $category[1][0]) { ?>
    ';
    $z4 = '
        <div class="card col-12 col-sm-4 col-md-4 col-lg-4" style="width: 18rem">
          <img src="<?= UPLOAD_PATH ?><?= $product[4] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $product[1] ?></h5>
            <p class="card-text"><?= $product[2] ?></p>
            <a href="<?= $root ?>panier.php" class="btn btn-primary">Prix : <?= $product[3] ?> €</a>
          </div>
        </div>
    <?php }
} ?>
';
$z5 = '</tbody>
    </table><br><br>
    <?php require "../../includes/footer.php"; ?>
    ';

        $contenu_page = $z0 . $z1 . $z2 . $z3 . $z4 . $z5 ;

        creer_page($nom_page, $contenu_page);

        // --------------------Fin tentative création page --------------
        echo "<p class='btn-success'> La catégorie a bien été ajoutée </p>";
    } else {
        foreach ($errors as $error) {
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