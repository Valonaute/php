<?php
require '../../config/connexion.php';
require '../../includes/header.php';
?>

<?php
$requete = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (count($categories) > 0) { ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"># Category</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($categories as $category) { ?>
                <tr>
                    <th scope="row"><?php echo $category['id_category']; ?></th>
                    <td><?php echo $category['nom']; ?></td>
                    <td>
                        <a href="update.php?id_category=<?= $category['id_category']; ?>" class="btn btn-warning">Modifier</a>
                    </td>
                    <td>
                        <a href="delete.php?id_category=<?= $category['id_category']; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

        <?php }
        } else {
            echo "<p style='text-align:center;'>Il n'y a pas de catégorie pour l'instant </p>";
        } ?>
        </tbody>
    </table>

    <a href="create.php" class="btn btn-primary" style='padding: 150 px; margin-left:300px'> Créer une catégorie </a>
    <a href="../connected.php" class="btn btn-success" style='padding: 150 px; margin-left:600px'> Menu Admin </a><br><br>

    <?php
    require '../../includes/footer.php';
    ?>