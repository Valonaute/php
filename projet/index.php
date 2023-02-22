<?php
require 'config/connexion.php';
// Require permet d'inclure un fichier 
require 'includes/header.php';

$requete = $pdo->query("SELECT * FROM products");
$products = $requete->fetchAll(PDO::FETCH_ASSOC);


?>

<!------------------------Début du Carousel ---------------------->
<div id="carousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="color: black ;">
            <div class="carousel-item active">
                <img src="assets/img/slider/slide2.jpg" height="900px" width="500px" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block" style="color: black ;">
                    <h5>First slide label</h5>
                    <p>
                        Some representative placeholder content for the first slide.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider/slide1.jpg" height="900px" width="500px" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block" style="color: black ;">
                    <h5>Second slide label</h5>
                    <p>
                        Some representative placeholder content for the second slide.
                    </p>
                </div>
            </div>
            <!-- <div class="carousel-item">
            <img src="assets/img/produits/sunglasses.jpg" height="500px" width="500px"class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev" style="color: black ;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next" style="color: black ;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>
<!------------------------ Fin du carousel ----------------------->
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
            <img src="uploads/<?= $product['image'] ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $product['name']?></h5>
                <p class="card-text"><?= $product['description']?></p>
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
            <div class="card">
                <img src="assets/img/blog/blog1.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit
                        longer.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="assets/img/blog/blog2.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        This card has supporting text below as a natural lead-in to
                        additional content.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="assets/img/blog/blog3.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This card has even longer content
                        than the first to show that equal height action.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ------------- Fin du bloc blog------------------ ----------->


<?php
require 'includes/footer.php';
?>