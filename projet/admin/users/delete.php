<?php
require '../../config/connexion.php';

$requete = $pdo->prepare('SELECT * FROM users WHERE id_user = ?');
$requete->execute([$_GET['id_user']]);
$user = $requete->fetch(PDO::FETCH_ASSOC);

$pdo->prepare('DELETE FROM users WHERE id_user = ?')->execute([$_GET['id_user']]);

header('Location: index.php');

?>