<?php
require 'config/connexion.php';
?>
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
    <!----------------- Début de la nav ----------------->
    <div id="nav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="assets/img/logo/leo-michael-logo.jpg">
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
              <a class="nav-link" href="#"
                > Accueil <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produits </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Prix</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled"> Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>