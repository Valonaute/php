<?php
$pdo = new PDO('mysql:host=localhost;dbname=projetphp', 'root', '');
// On récupère le nom du PDF à supprimer dans Upload 

// en 1er on supprime le PDF et en 2eme on supprime les données 
// On commence par une requete SELECT pour lié l'ID et le nom à supprimer :

$requete = $pdo->prepare("SELECT * FROM pdf WHERE id_pdf = ?");
$requete->execute([$_GET['id_pdf']]);
$pdf = $requete->fetch(PDO::FETCH_ASSOC);
// fetch() pour 0 et 1 résultat
// fetchAll() retourne entre 0 et l'infini résultats

var_dump($pdf);

// On supprime les données 
// La méthode ulnlink supprime un fichier 
unlink('upload/'.$pdf['nom']);

$pdo->prepare("DELETE FROM pdf WHERE id_pdf = ?")->execute([$_GET['id_pdf']]);

header('Location: formulairepdf.php')

?>