<?php

$produits = [
    [
        'nom' => 'samsung Galaxy A01',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id sagittis nisl. In lorem lectus, dignissim ac lorem convallis, dictum pellentesque turpis',
        'prix' => 52.57,
        'categorie' => 'téléphone',
        'image' => 'images/img1.jpg'
    ],
    [
        'nom' => 'samsung Galaxy A25',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id sagittis nisl. In lorem lectus, dignissim ac lorem convallis, dictum pellentesque turpis',
        'prix' => 49.57,
        'categorie' => 'téléphone',
        'image' => 'images/img2.jpg'
    ],
    [
        'nom' => 'samsung Galaxy A56',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id sagittis nisl. In lorem lectus, dignissim ac lorem convallis, dictum pellentesque turpis',
        'prix' => 78.57,
        'categorie' => 'téléphone',
        'image' => 'images/img3.jpg'
    ]
];

?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="CSS/style.css" >
    <script src="script/bootstrap.js"></script>
    <meta charset="utf-8">
    <title> Page d'accueil </title>
    </head>
    <body>
    <header>
        <h2> Vous êtes dans la partie header de mon site </h2>
    </header>
    <section class="products"> 
        <h3> Voici mes téléphones préférés : </h3>
        <ul>
        <?php

        foreach ($produits as $produit){
            foreach ($produit as $categorie => $infos){
                if ($categorie == "image"){
                    echo "<br><br><img src='$infos' height='200px' class='img'> <br><br>";
                } else {
                echo "<li>".$categorie." : ".$infos."<br></li>";
            }
        }
    }

        ?>
        </ul>
</section>

    <footer>
        <h4> vous êtes dans la partie footer de la page </h4>
    </footer>
    </body>
</html>

