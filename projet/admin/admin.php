<?php
require '../config/connexion.php';
require '../includes/header.php';

if (!empty($_POST)){
    if ($_POST['pwd'] === 'dwwm33'){
        header('Location:connected.php');
    } else {
        echo "<p style='color: red; text-align: center;'> Le mot de passe est incorrect, réessayez ! !</p>";
    }
}
?>

<div style="text-align:center;">
    <br><br><h2> Vous êtes sur la page Admin : </h2>
    <br><h4> Quel est le mot de passe : </h4>
    <br>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="pwd" id="pwd">
        <br><br>
        <input type="submit" value="C'est Parti!">
        <br>
    </form>
</div>
<?php
require '../includes/footer.php';
?>