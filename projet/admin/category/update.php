<?php
require '../../config/connexion.php';

$pdo->prepare('UPDATE FROM category WHERE id_category = ?')->execute([$_GET['id_category']]);

header('Location: index.php');

?>