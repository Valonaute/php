<?php
require '../config/connexion.php';
require '../includes/header.php';

?>

<div style="text-align:center; ">
    <h2> Vous êtes bien connecté à la page Administrateur. </h2>
    <h4> Que voulez vous voir ou modifier : </h4>
    <br><br>
    <a class='btn btn-success center' href="/php/projet/admin/carousel/index.php"> Carousel </a> <br><br>
    <a class='btn btn-success center' href="/php/projet/admin/blog/index.php"> Blog </a>
    <br><br>
    <a class='btn btn-success center' href="/php/projet/admin/products/index.php">Produits</a> <br><br>
    <a class='btn btn-success center' href="/php/projet/admin/category/index.php">Catégories</a> <br><br>
    <a class='btn btn-success center' href="/php/projet/admin/users/index.php">Utilisateurs</a> <br><br>
</div>
<?php
require '../includes/footer.php';
?>