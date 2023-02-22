<?php
require '../../config/connexion.php';

$pdo->prepare('DELETE FROM category WHERE id_category = ?')->execute([$_GET['id_category']]);

header('Location: index.php');

?>