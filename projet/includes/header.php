<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= CSS_PATH ?>/bootstrap.css" />

    <title>accueil</title>
  </head>
  <body>
<?php
$requete = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);

?>



    <!----------------- Début de la nav ----------------->
    <div id="nav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="/projet/assets/img/logo/leo-michael-logo.jpg">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/php/projet/index.php"> Accueil</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/php/projet/admin/products/index.php">Produits </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/php/projet/admin/category/index.php">Categories</a>

              <?php foreach($categories as $category){ ?>
                <li class="nav-item">
                  <a class="nav-link" href="/php/projet/admin/category/index.php"><?= $category['nom']; ?> </a>
                </li>

              <?php } ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>