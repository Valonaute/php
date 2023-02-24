<!-- 1 -->
<?php require '../../config/connexion.php';
require '../../includes/header.php'; ?>
<!-- 2 -->
<?php $requete = $pdo->query("SELECT * FROM products");
$products = $requete->fetchAll();

$requete2 = $pdo->query("SELECT * FROM category");
$category = $requete2->fetchAll();

?>';
<!-- 3 -->
<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <br>
      <h2 class="d-flex justify-content-center pt-5">Vous retrouvez ici nos produits de la catégorie : <?= $category[1]['nom'] ?></h2>
      <br>
      <p class="d-flex justify-content-center">
        Nous esperons que vous allez les aimer ! Vous pourrez bientot les acheter !</p>
    </div>
    <!-- 4 -->
    <?php foreach ($products as $product) {
      if ($product[5] == $category[1][0]) { ?>
        <!-- 5 -->
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
    <!-- 7 -->
    </tbody>
    </table><br><br>
  </div>
</div>
    <?php require "../../includes/footer.php"; ?>