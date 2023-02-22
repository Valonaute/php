<?php
require '../../config/connexion.php';
require '../../includes/header.php';

$requete = $pdo->prepare("SELECT * FROM products WHERE id_product = ?");
$requete->execute([$_GET['id_product']]);
$product = $requete->fetch(PDO::FETCH_ASSOC);

$requete1 = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<div id="content" >
    <form action="" method="post" enctype="multipart/form-data" class="form" style="padding-left: 200px;">
        <fieldset>
            <legend> Création de Produit </legend>
            <br>
            <label for="nom"> Nom </label><br>
            <input type="text" name="nom" id="nom" value="<?= $product['name']?>">
            <br>
            <label for="description"> Description </label><br>
            <textarea name="description" id="description" > <?= $product['description']?></textarea>
            <br>
            <label for="price"> price </label><br>
            <input type="text" name="price" id="price" value="<?= $product['price']?>">
            <br>
            <label for="image"> Image </label><br>
            <img src="../../uploads/<?= $product['image']; ?>" class="image-zoom" width="250px" height="200px">
            <br>
            <label for="category"> Catégorie </label><br>
            <select name="category" id="category" value="test">
            <?php //foreach($categories as $category) { echo $category['id_category'];
                // if($category['id_category'] == $product['id_category']){ echo "selected";}
                ?>
                <option value="test"></option> 
                <?php //} ?>
            </select>
            <br>
            <input type="submit" value="Créer">
            <br>
        </fieldset>
    </form>
</div>
<br><br>
<a class='btn btn-success center' href='index.php' style="margin-left: 200px;"> Voir les produits </a>

<?php
require '../../includes/footer.php';
?>