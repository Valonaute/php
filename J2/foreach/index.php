<?php

$produits = [
    [
        'nom' => 'Tableau 1',
        'description' => 'Voici des images de mes tableaux de visualisation',
        'prix' => 52.57,
        'categorie' => 'téléphone',
        'image' => 'images/vision.jpg'
    ],
    [
        'nom' => 'Tableau 2',
        'description' => 'Cela me permet de savoir ce que je veux',
        'prix' => 49.57,
        'categorie' => 'téléphone',
        'image' => 'images/vision2.jpg'
    ],
    [
        'nom' => 'Tableau 3',
        'description' => 'J\'adore cette idée',
        'prix' => 78.57,
        'categorie' => 'téléphone',
        'image' => 'images/vision3.jpg'
    ],
    [
        'nom' => 'Tableau 4',
        'description' => 'Donc je vous conseille d\'essayer chez vous !',
        'prix' => 100.99,
        'categorie' => 'téléphone',
        'image' => 'images/vision4.jpg'
    ]
];

?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="CSS/style.css" >
    <meta charset="utf-8">
    <title> Page d'accueil </title>
    </head>
    <body>
    <header>
        <h2>  header </h2>
    </header>

    <div class="container">
        <div class="row">
            <?php foreach ($produits as $produit){ ?>
                    <div class='card' style='width: 18rem;'>
                    <img src=<?=$produit['image']?> class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'> <?=$produit['nom']?></h5>
                        <p class="card-text"><?=$produit['description']?></p>
                        <a href="#" class="btn btn-primary"><?=$produit['prix']." €"?></a>
                    </div>
                </div>
                <?php } ?>

<!--
    <section class="products"> 
        <h3> Voici mes téléphones préférés : </h3>
        <ul>
        

// ouverture PHP 
        foreach ($produits as $produit){
            foreach ($produit as $categorie => $infos){
                if ($categorie == "image"){
                    echo "<br><br><img src='$infos' height='200px' class='img'> <br><br>";
                } else {
                echo "<li>".$categorie." : ".$infos."<br></li>";
            }
        }
    }
*/
        ?>
        </ul>
</section>

    <footer>
        <h4> vous êtes dans la partie footer de la page </h4>
    </footer>
    </body>
</html>

