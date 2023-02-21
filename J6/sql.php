<?php
$pdo = new PDO('mysql:host=localhost;dbname=projetphp', 'root', '');

if (!empty($_POST)) {
    // vérifier si les champs sont vides.
    $errors = [];

    if (empty($_POST['adresse1'])) {
        $errors[] = 'Le champ adresse 1 ne doit pas être vide';
    }

    if (empty($_POST['adresse2'])) {
        $errors[] = 'Le champ adresse 2 ne doit pas être vide';
    }

    if (empty($_POST['codepostal'])) {
        $errors[] = 'Le champ code postal ne doit pas être vide';
    }

    if (empty($_POST['ville'])) {
        $errors[] = 'Le champ ville ne doit pas être vide';
    }

    if (!is_string($_POST['adresse1'])) {
        $errors[] = "l'adresse 1 n'est alphanumérique";
    }

    if (!is_string($_POST['adresse2'])) {
        $errors[] = "l'adresse 2 n'est alphanumérique";
    }

    if (!ctype_digit($_POST['codepostal'])) {
        $errors[] = "le code postal doit contenir des nombres";
    }

    if (strlen($_POST['codepostal']) > 5) {
        $errors[] = "le code postal ne doit pas dépasser 5 caractères";
    }


    if (!ctype_alpha($_POST['ville'])) {
        $errors[] = 'le champ ville  doit être alphabetique';
    }


    if (count($errors) < 1) {
        // insérer dans la base de données.
        // Utilisation de PDO

        $pdo->prepare("INSERT INTO adresse (id_adresse, adresse1, adresse2, codepostal, ville) VALUES (?,?, ?, ?, ?)")->execute([null, $_POST['adresse1'], $_POST['adresse2'], $_POST['codepostal'], $_POST['ville']]);
    } else {
        echo $errors[0];
    }
}

// On fait un SELECT 

$requete = $pdo->query("SELECT * FROM adresse");
$adresses = $requete->fetchall(PDO::FETCH_ASSOC);

foreach ($adresses as $adresse) {
    foreach ($adresse as $info) {

        echo $info . "<br><br>";
    }
}

// PDO::FETCH_ASSOC associe les index et les noms de catégories
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Formulaire BDD</title>
</head>

<body>
    <form action="#" method="POST">
        <fieldset>
            <br>
            <legend> Super-Formulaire : </legend>
            <br>
            <label for="adresse1"> Adresse </label>
            <br><br>
            <input type="text" name="adresse1" id="adresse1" placeholder="13 Avenue Matignon...">
            <br><br>
            <label for="adresse2"> Complément d'adresse </label>
            <br><br>
            <input type="textarea" name="adresse2" id="adresse2" placeholder="3e étage 2eme porte à droite...">
            <br><br>
            <label for="codepostal"> Code Postal </label>
            <br><br>
            <input pattern="[0-9]{5}" type="text" name="codepostal" placeholder="ex : 37000" />

            <br><br>
            <label for="ville"> Ville </label>
            <br><br>
            <input type="text" name="ville" id="ville" placeholder="Paris Plage">
            <br><br>
            <input type="submit" value="Envoyer">
            <br><br>
        </fieldset>

    </form>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"># Adresse</th>
                <th scope="col">Adresse 1</th>
                <th scope="col">Adresse 2</th>
                <th scope="col">Code Postale </th>
                <th scope="col">Ville </th>
                <th scope="col">Actions </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adresses as $adresse) { ?>
                <tr>
                    <th scope="row"><?php echo $adresse['id_adresse']; ?></th>
                    <td><?php echo $adresse['adresse1']; ?></td>
                    <td><?php echo $adresse['adresse2']; ?></td>
                    <td><?php echo $adresse['codepostal']; ?></td>
                    <td><?php echo $adresse['ville']; ?></td>
                    <td><a href="delete.php?id_adresse=<?php echo $adresse['id_adresse']; ?>" class="btn btn-danger"> Supprimer </a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>