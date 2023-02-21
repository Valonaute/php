<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercie J5</title>
</head>

<body>
    <?php
    // --------------- Exos récap de ce qu'on a vu J3 J4 ---------------
    echo "<br><div id=z>";
    echo "<p>";
    echo "Voici ma réponse de l'Exercice du 17 Février 2023 : ";
    echo "<br>";
    echo "<br>";
    echo "</p>";
    echo "</div>";

    // --------------------------- 1 -------------------------

    echo "<br><div id=a>";
    echo "<p>";
    echo "<br>";
    echo "<br>";
    $code_postal = 77380;
    var_dump($code_postal);
    echo "<br>";
    $pays = "France";
    var_dump($pays);
    echo "<br>";
    $taille = 1.80;
    var_dump($taille);
    echo "<br>";
    echo "</p>";
    echo "<br></div>";
    // ---------------------------- 2 ---------------------------------------
    echo "<br><div id=b>";
    echo "<p>";
    echo "<br>";
    const TAXE_PLUS = 25;
    echo "<br>";
    echo TAXE_PLUS;
    echo "<br>";
    //------------------------- Boucles compter --------------
    /* for ($i = 1; $i <= 1000; $i++) {
        echo "J'ai compté jusquà $i"."<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $j = 10;
    while ($j <= 300) {
        echo $j."<br>";
        $j++;
    } */
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "</p>";
    echo "<br></div>";
    // ------------------------ 3 et 4------------------------
    echo "<br><div id=c>";
    for ($k = 10; $k <= 800; $k += 10) {
        echo $k."<br>";
    }
    for ($l = 1; $l <= 50; $l++) {
        echo "J'avance lentement mais surement !"."<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $pays = ["Italie", "France", "Allemagne", "Russie", "Hollande"];
    echo "<br>";
    echo $pays[3];
    echo "<br>";
    echo $pays[1];
    echo "<br>";
    echo $pays[0];
    echo "<br>";
    echo $pays[4];
    echo "<br>";
    echo "<ul>";
    foreach ($pays as $pays_ind) {
        echo "<li>" . $pays_ind . "</li><br>";
    }
    echo "</ul>";
    echo "<br>";
    $nb_pays = count($pays);

    while ($nb_pays > 0) {
        echo $pays[$nb_pays - 1] . "<br>";
        $nb_pays--;
    }
    echo "<p>";
    echo "<br>";

    // ------------------------ 5 ------------------------
    echo "<br><div id=e>";
    $age = 12;
    if ($age > 12) {
        echo "Je suis plus agé";
    } else {
        echo "Je suis moins agé";
    }
    echo "<br>";
    echo "<br>";

    // Ternaire 

    echo ($age > 12) ? "Je suis plus agé" : "Je suis moins agé";

    echo "<br>";
    echo "<br>";

    // -----------

    if ($age == 12) {
        echo "J'ai 12 ans'";
    } else {
        echo "Je n'ai pas 12 ans";
    }
    echo "<br>";
    echo "<br>";

    if ($age === "12") {
        echo "J'ai 12 ans'";
    } else {
        echo "Je n'ai pas 12 ans";
    }
    echo "<br>";
    echo "<br>";

    // Ternaire strict 

    echo ($age === "12") ? "Je suis plus agé" : "Je suis moins agé";

    echo "<br>";
    echo "<br></div>";
    // Fin ternaire strict

    // ------------------------ 6 ------------------------
    echo "<br><div id=f>";
    ?>
    <form action="validation.php" method="POST">
        <fieldset>
            <br>
            <legend> Super-Formulaire : </legend>
            <br>
            <label for="adresse1"> Adresse </label>
            <br>
            <input type="text" name="adresse1" id="adresse1" placeholder="13 Avenue Matignon...">
            <br>
            <label for="adresse2"> Complément d'adresse </label>
            <br>
            <input type="textarea" name="adresse2" id="adresse2" placeholder="3e étage 2eme porte à droite...">
            <br>
            <label for="code_postal"> Code Postal </label>
            <br>
            <input pattern="[0-9]{5}" type="text"  name="code_postal" placeholder="ex : 37000"/>

            <br>
            <label for="ville"> Ville </label>
            <br>
            <input type="text" name="ville" id="ville" placeholder="Paris Plage">
            <br>
            <input type="submit" value="Envoyer">
            <br>
            <button type="submit"> Envoyer encore </button>
            <br>
        </fieldset>

    </form>
</body>

</html>