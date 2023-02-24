<?php
require '../../config/connexion.php';

$requete = $pdo->prepare('SELECT * FROM products WHERE id_product = ?');
$requete->execute([$_GET['id_product']]);
$product = $requete->fetch(PDO::FETCH_ASSOC);

unlink('../../uploads/'.$products['image']);


$pdo->prepare('DELETE FROM products WHERE id_product = ?')->execute([$_GET['id_product']]);

header('Location: index.php');

?>