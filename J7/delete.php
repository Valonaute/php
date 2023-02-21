<?php
$pdo = new PDO('mysql:host=localhost;dbname=projetphp', 'root', '');

$pdo->prepare('DELETE FROM adresse WHERE id_adresse = ?')->execute([$_GET['id_adresse']]);

header('Location: sql.php');
?>