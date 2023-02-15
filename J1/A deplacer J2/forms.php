<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires !</title>
</head>
<body>
 
<form action="validation.php" method="post">
<p>Quel est Votre prénom : <input type="text" name="firstname" /></p>
<p>Quel est Votre nom : <input type="text" name="name" /></p>
<p>Quel est Votre âge : <input type="text" name="age" /></p>
<p>Quel est Votre email : <input type="text" name="mail" /></p>
<p><input type="submit" value="OK"></p>
</form>

<?php
if($_POST){
    echo "Merci d'avoir rempli le formulaire";
}
?>


<form method="POST" action="">

<p> Votre prénom : </p>
<input type="text" name="firstname" placeholder="Votre Prénom">
<br>
<p> Votre nom : </p>
<input type="text" name="name" placeholder="Votre Nom">
<br>
<p> Votre Email : </p>
<input type="email" name="email" placeholder="Votre email">
<br>
<p> Choisissez un pseudo : </p>
<input type="text" name="pseudo" placeholder="Votre Pseudo">
<br>
<p> Choisissez un mot de passe : </p>
<input type="password" name="password" placeholder="Mot de passe">
<br><br>
<button type="submit" name="validate"> S'inscrire </button>
<br>
</form>  

<form>
    <fieldset>
        <legend> Inscription test </legend>

        <label> Test </label>
            <input type="text" name="test">
            <input type="submit" value="valider test">
    </fieldset>
</form>
   
</body>
</html>



