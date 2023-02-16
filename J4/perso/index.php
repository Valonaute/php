<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" >
    <title>Law&Valo</title>
</head>

<body>
<?php include 'includes/header.php'?>
<br><br>
<form action="accueil.php" method="get">
<fieldset>
    <legend> Le Mot de Passe SVP : </legend>
    <label for="mdp">Vas-y ! </label>
    <input type="text" name="mdp" id="mdp" placeholder="Caputdraconis">
    <button type="submit" name="mdp"> Essayons ! </button>
</fieldset>
</form>

<br>
<br><br>

<?php include 'includes/footer.php'?>
</body>

</html>