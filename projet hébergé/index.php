<?php
require 'config/connexion.php';
// Require permet d'inclure un fichier 
require 'includes/header.php';

$requete = $pdo->query("SELECT * FROM products");
$products = $requete->fetchAll(PDO::FETCH_ASSOC);

$requete2 = $pdo->query("SELECT * FROM carousel");
$slides = $requete2->fetchAll(PDO::FETCH_ASSOC);

$requete3 = $pdo->query("SELECT * FROM blog");
$articles = $requete3->fetchAll(PDO::FETCH_ASSOC);

?>

<!------------------------Début du carrousselle ---------------------->
<br>
<div class="carrousselle">
    <div class="carrousselle-container">
        <?php foreach ($slides as $slide){ ?>
        <div class="carrousselle-item">
            <img src="/uploads/<?= $slide['image'] ?>" alt="<?= $slide['titre'] ?>">
            <p class="p-carrousselle"><?= $slide['description'] ?></p>
        </div> <?php } ?>
        <!-- <div class="carrousselle-item">
            <p class="p-carrousselle"> </p>
            <img src="assets/img/slider/slide2.jpg" alt="Image 2">
        </div> -->
    </div>
    <button class="carrousselle-prev">&#8249;</button>
    <button class="carrousselle-next">&#8250;</button>
</div>

<br>




<!------------------------ Fin du carrousselle ----------------------->
<!-- ------------- Début du bloc de catégorie en image ----------->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <img src="assets/img/3blocks/bner1.jpg" class="img-fluid" />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <br />
            <h2 class="d-flex justify-content-center pt-5">
                Hottest Collections
            </h2>
            <br />
            <p class="d-flex justify-content-center">
                Voici les images en block ! Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Odit eum maxime, cumque quae similique magni
                tempora. Quidem quam inventore, laudantium suscipit temporibus modi
                expedita aliquid, quo, error doloribus veritatis minus?
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <img src="assets/img/3blocks/bner2.jpg" class="img-fluid" />
        </div>
    </div>
</div>
<!-- ------------- Fin du bloc de catégorie en image ----------->
<!-- ------------- Début du bloc des produits populaires  ----------->
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <br />
            <h2 class="d-flex justify-content-center pt-5">Vous retrouvez ici nos produits populaires : </h2>
            <br />
            <p class="d-flex justify-content-center">
                Ce sont nos meilleurs ventes, nos coups de coeur qui pourraient également vous plaire !
            </p>
        </div>



        <?php
        foreach (array_slice($products, 0, 6) as $product) { ?>
            <div class="card col-12 col-sm-4 col-md-4 col-lg-4" style="width: 18rem">
                <img src="/uploads/<?= $product['image'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['name'] ?></h5>
                    <p class="card-text"><?= $product['description'] ?></p>
                    <a href="#" class="btn btn-primary">Mettre dans mon panier</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- ------------- Fin du bloc des produits populaires ----------->
<!-- ------------- Début du bloc Blog ---------------------------->
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="d-flex justify-content-center"> Notre Blog</h2>
            <p class="d-flex justify-content-center">Nos derniers articles du moment !</p>
        </div>
        <div class="card-group">
            <?php foreach (array_slice($articles, 0, 6) as $article) { ?>
                <div class="card">
                    <img src="<?= $root ?>uploads/<?= $article['image'] ?>" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $article['titre'] ?></h5>
                        <p class="card-text"><?= $article['description'] ?>
                        </p>
                        <p class="card-text">
                            <small class="text-muted"> Mis à jour le 23 Février 2023 </small>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- ------------- Fin du bloc blog------------------ ----------->


<?php
require 'includes/footer.php';
?>