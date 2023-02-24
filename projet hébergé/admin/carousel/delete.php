<?php
require '../../config/connexion.php';

$requete = $pdo->prepare('SELECT * FROM carousel WHERE id_slide = ?');
$requete->execute([$_GET['id_slide']]);
$slides = $requete->fetch(PDO::FETCH_ASSOC);

unlink('../../uploads/'.$slides['image']);


$pdo->prepare('DELETE FROM slides WHERE id_slide = ?')->execute([$_GET['id_slide']]);

header('Location: index.php');

?>