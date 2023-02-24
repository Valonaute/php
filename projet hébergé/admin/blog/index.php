<?php
require '../../config/connexion.php';
require '../../includes/header.php';
?>
<?php
$requete = $pdo->query("SELECT * FROM blog");
$articles = $requete->fetchAll(PDO::FETCH_ASSOC);
//var_dump($articles)
?>
<?php if (count($articles) > 0) { ?>
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
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) { ?>
                <tr>
                    <th scope="row"><?= $article['id_article']; ?></th>
                    <td><?= $article['titre']; ?></td>
                    <td><?= $article['description']; ?></td>
                    <td><img src="../../uploads/<?= $article['image']; ?>" class="image-zoom" width="150px" height="100px" onclick="agrandir()"></td>

                    <td><a href="update.php?id_article=<?= $article['id_article']; ?>" class="btn btn-warning">Modifier l'article</a></td>
                    <td><a href="delete.php?id_article=<?= $article['id_article']; ?>" class="btn btn-danger">Supprimer l'article</a></td>
                </tr>
        <?php }
        } else {
            echo "<h3 class='alert-danger' style='text-align:center;'>Il n'y a pas de articles pour l'instant </h3>";
        } ?>
        </tbody>
    </table>
    <br><br>
    <a href="create.php" class="btn btn-primary" style='padding: 150 px; margin-left:300px'> Créer un article </a>
    <a href="../connected.php" class="btn btn-success" style='padding: 150 px; margin-left:600px'> Menu Admin </a>
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