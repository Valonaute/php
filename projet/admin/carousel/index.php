<?php
require '../../config/connexion.php';
require '../../includes/header.php';
?>
<?php
$requete = $pdo->query("SELECT * FROM products");
$products = $requete->fetchAll(PDO::FETCH_ASSOC);
//var_dump($products)
?>
<?php if (count($products) > 0) { ?>
    <style>
        .image-zoom {
            width: 300px;
            height: 200px;
            position: relative;
        }

        .zoomed-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 900px;
            height: 600px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            z-index: 9999;
        }
    </style>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <th scope="row"><?= $product['id_product']; ?></th>
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['description']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><img src="../../uploads/<?= $product['image']; ?>" class="image-zoom" width="150px" height="100px" onclick="agrandir()"></td>

                    <td><a href="update.php?id_product=<?= $product['id_product']; ?>" class="btn btn-warning">Modifier</a></td>
                    <td><a href="delete.php?id_product=<?= $product['id_product']; ?>" class="btn btn-danger">Supprimer</a></td>
                </tr>
        <?php }
        } else {
            echo "<h3 class='alert-danger' style='text-align:center;'>Il n'y a pas de catégorie pour l'instant </h3>";
        } ?>
        </tbody>
    </table>
    <br><br>
    <a href="create.php" class="btn btn-primary" style='padding: 150 px; margin-left:300px'> Créer un Produit </a>
    <br><br>
    <?php
    require '../../includes/footer.php';
    ?>

    <script>
        var images = document.getElementsByClassName("image-zoom");

        for (var i = 0; i < images.length; i++) {
            images[i].addEventListener("click", function() {
                zoomImage(this);
            });
        }

        function zoomImage(image) {
            var zoomed = document.createElement("div");
            zoomed.classList.add("zoomed-image");
            zoomed.style.backgroundImage = "url('" + image.src + "')";
            document.body.appendChild(zoomed);

            var rect = image.getBoundingClientRect();
            zoomed.style.top = rect.top + "px";
            zoomed.style.left = rect.left + "px";
        }

        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("zoomed-image")) {
                event.target.parentNode.removeChild(event.target);
            }
        });
    </script>