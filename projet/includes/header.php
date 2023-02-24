<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="<?= CSS_PATH ?>/bootstrap.css" />

  <style>
    .carrousselle {
      position: relative;
      width: 100%;
      height: 650px;
      overflow: hidden;
    }

    .carrousselle-container {
      display: flex;
      width: 300%;
      height: 100%;
      transition: transform 0.8s ease-in-out;
    }

    .carrousselle-item {
      display: flex;
      margin: auto;
      align-items: center;
      width: 33.33%;
      padding-left: 150px;
      padding-right: 150px;
      flex-shrink: 0;
    }

    .carrousselle-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .carrousselle-prev,
    .carrousselle-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: white;
      border: none;
      outline: none;
      font-size: 4rem;
      color: black;
      cursor: pointer;
    }

    .carrousselle-prev {
      left: 30px;
    }

    .carrousselle-next {
      right: 30px;
    }

    .p-carrousselle {
      text-align: center;
      font-size: larger;

    }
  </style>
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
      <a href="<?= $root ?>index.php"><img src="<?= IMG_PATH ?>logo/leo-michael-logo.jpg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= $root ?>index.php"> Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?= $root ?>admin/admin.php" role="button" data-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
          </li>

            <?php foreach ($categories as $category) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= $root ?>admin/category/<?= $category['nom'].'.php' ?>"><?= $category['nom']; ?> </a>
          </li>

        <?php } ?>
        </li>

        </ul>
      </div>
    </nav>
  </div>