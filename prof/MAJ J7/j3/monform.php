<?php
$pdo = new PDO('mysql:host=localhost;dbname=projetphp', 'root', '');
if(!empty($_POST)){
// vérifier si les champs sont vides.
$errors = [];

if(empty($_POST['adresse1']))
{
    $errors[] = 'Le champ adresse 1 ne doit pas être vide';
}

if(empty($_POST['adresse2']))
{
    $errors[] = 'Le champ adresse 2 ne doit pas être vide';
}

if(empty($_POST['codepostal']))
{
    $errors[] = 'Le champ code postal ne doit pas être vide';
}

if(empty($_POST['ville']))
{
    $errors[] = 'Le champ ville ne doit pas être vide';
}

if(!is_string($_POST['adresse1']))
{
    $errors[] = "l'adresse 1 n'est alphanumérique";
}

if(!is_string($_POST['adresse2']))
{
    $errors[] = "l'adresse 2 n'est alphanumérique";
}

if(!ctype_digit($_POST['codepostal']))
{
    $errors[] = "le code postal doit contenir des nombres";
}

if(strlen($_POST['codepostal']) > 5)
{
    $errors[] = "le code postal ne doit pas dépasser 5 caractères";
}


if(!ctype_alpha($_POST['ville']))
{
    $errors[] = 'le champ ville  doit être alphabetique';
}


if(count($errors) <1)
{
    // insérer dans la base de données.
    // utilisation de pdo

    $pdo->prepare("INSERT INTO adresse (id_adresse, adresse1, adresse2, codepostal, ville) VALUES (null,?,?,?,?)")->execute([$_POST['adresse1'], $_POST['adresse2'], $_POST['codepostal'], $_POST['ville']]);
 
}

}
// on fait un select 
$requete = $pdo->query("SELECT * FROM adresse");
$adresses = $requete->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend>adresse</legend>

            <label for="adresse1">adresse1</label>
            <input type="text" name="adresse1" id="adresse1">

            <label for="adresse2">adresse2</label>
            <input type="text" name="adresse2" id="adresse2">

            <label for="codepostal">code postal</label>
            <input type="number" name="codepostal" id="codepostal">

            <label for="ville">ville</label>
            <input type="text" name="ville" id="ville">

            <input type="submit" value="valider">
        </fieldset>
    </form>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">adresse 1</th>
      <th scope="col">adresse 2</th>
      <th scope="col">code postal</th>
      <th scope="col">ville</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($adresses as $adresse) { ?>
    <tr>
      <th scope="row"><?php echo $adresse['id_adresse']; ?></th>
      <td><?php echo $adresse['adresse1']; ?></td>
      <td><?php echo $adresse['adresse2']; ?></td>
      <td><?php echo $adresse['codepostal']; ?></td>
      <td><?php echo $adresse['ville']; ?></td>
      <td><a href="delete.php?id_adresse=<?php echo $adresse['id_adresse']; ?>" class="btn btn-danger">supprimer</a></td>
    </tr>

    <?php } ?>
   
  </tbody>
</table>





    
    
</body>
</html>