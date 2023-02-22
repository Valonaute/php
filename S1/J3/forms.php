<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires !</title>
</head>
<body>
 <!--
<form action="validation.php" method="post">
<p>Quel est Votre prénom : <input type="text" name="firstname" /></p>
<p>Quel est Votre nom : <input type="text" name="name" /></p>
<p>Quel est Votre âge : <input type="text" name="age" /></p>
<p>Quel est Votre email : <input type="text" name="mail" /></p>
<p><input type="submit" value="OK"></p>
</form>

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
<br><br><br>

-->


<form action="validation.php" method="post">
    <fieldset>
        <legend> Inscription test </legend>
        <br><br>
        <label for="prenom"> Prénom </label>
            <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom">
        <br><br><br>
        <label for="test2"> Nom </label>
            <input type="text" name="nom" id="nom" placeholder="Votre nom">
            <br><br><br>
        <label for="email"> email </label>
            <input type="email" name="email" id="email" placeholder="votre email">
        <br><br><br>
        <input type="submit" value="valider test">
    </fieldset>
</form>

<!-- -------------- Différence entre méthode POST et méthode GET ----------------

GET => Elements du formulaire dans l'URL 
POST => INFOS dans le code du formulaire. Plus sécurisée

-->

</body>
</html>




