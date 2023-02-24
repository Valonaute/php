<?php
require '../../config/connexion.php';

if (!empty($_POST)) {

    $errors = [];

if (empty($_POST['nom']) and empty($_POST['email']) and empty($_POST['password']) and empty($_POST['category'])) {
    $errors[] = "Tous les champs ne sont pas remplis !";
}
if (!is_string($_POST['nom'])) {
    $errors[] = 'Le nom doit être alphanumérique';
}
if (!is_string($_POST['email'])) {
    $errors[] = 'La email doit être alphanumérique';
}
if (!is_string($_POST['password'])) {
    $errors[] = 'Le mot de passe doit être alphanumérique';
}
$requete_mail = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$requete_mail ->execute([$_POST['email']]);
$user_mail = $requete_mail->fetch(PDO::FETCH_ASSOC); 

if ($user_mail == true){
    $errors[] = 'Cet email existe déja !';
}

if (count($errors) < 1) {
    // insert 
    $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $pdo->prepare("INSERT INTO users (id_user, prenom, nom, email, password) VALUES (null, ?, ?, ?, ?)")->execute([$_POST['prenom'], $_POST['nom'], $_POST['email'], $password_hash]);
    header('Location:index.php');
} 
else {
    // Afficher erreurs 
    foreach ($errors as $error) {
        echo "<p class='alert-danger'>" . $error . "</p>";
    }
}
}

require '../../includes/header.php';
?>
<?php
$requete = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="content">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="form" style="padding-left: 200px;">
        <fieldset>
            <legend> Création d'utilisateurs : </legend>
            <br>
            <label for="prenom"> prenom </label><br>
            <input type="text" name="prenom" id="prenom">
            <br>
            <label for="nom"> Nom </label><br>
            <input type="text" name="nom" id="nom">
            <br>
            <label for="email"> email </label><br>
            <input type="email" name="email" id="email">
            <br>
            <label for="password"> password </label><br>
            <input type="password" name="password" id="password">
            <br><br>
            <input type="submit" value="Créer">
            <br>
        </fieldset>
    </form>
</div>
<br><br>
<a class='btn btn-success center' href='index.php' style="margin-left: 200px;"> Voir les Utilisateurs </a>

<a href="create.php" class="btn btn-primary" style='padding: 150 px; margin-left:300px'> Créer un Utilisateur </a>

<a href="../connected.php" class="btn btn-success" style='padding: 150 px; margin-left:600px'> Menu Admin </a><br><br>

<?php
require '../../includes/footer.php';
?>