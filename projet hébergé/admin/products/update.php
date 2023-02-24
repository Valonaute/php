<?php
require '../../config/connexion.php';
require '../../includes/header.php';

$requete = $pdo->prepare("SELECT * FROM products WHERE id_product = ?");
$requete->execute([$_GET['id_product']]);
$product = $requete->fetch(PDO::FETCH_ASSOC);

$requete1 = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);

if(!empty($_POST)){
    $errors = [];
    if(empty($_POST['nom'])){
        $errors [] = 'Le nom ne doit pas être vide';
    } 

    if(empty($_POST['description'])){
        $errors [] = 'La description ne doit pas être vide';
    } 

    if(empty($_POST['price'])){
        $errors [] = 'Le Prix ne doit pas être vide';
    } 



    if (count($errors)<1){
        $pdo->prepare("UPDATE products SET name = ?, description = ?, price = ? WHERE id_product = ?")->execute([$_POST['nom'], $_POST['description'], $_POST['price'], $_GET['id_product']]);
        echo "<p class='alert-success'> La catégorie a bien été modifiée ! </p>";
    } else {
        foreach ($errors as $error){
            echo "<p class='btn-danger'>".$error."</p>";
        }
    }
}

?>

<div id="content" >
    <form action="<?= $_SERVER['PHP_SELF'].'?id_product='.$_GET['id_product']; ?>" method="post" enctype="multipart/form-data" class="form" style="padding-left: 200px;">
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
            <input type="submit" value="Modifier">
            <br>
        </fieldset>
    </form>
</div>
<br><br>
<a class='btn btn-success center' href='index.php' style="margin-left: 200px;"> Voir les produits </a>

<?php
require '../../includes/footer.php';
?>