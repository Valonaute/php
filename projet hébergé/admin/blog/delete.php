<?php
require '../../config/connexion.php';

$requete = $pdo->prepare('SELECT * FROM blog WHERE id_article = ?');
$requete->execute([$_GET['id_article']]);
$articles = $requete->fetch(PDO::FETCH_ASSOC);

unlink('../../uploads/'.$articles['image']);


$pdo->prepare('DELETE FROM blog WHERE id_article = ?')->execute([$_GET['id_article']]);

header('Location: index.php');

?>