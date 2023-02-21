<?php
$pdo = new PDO('mysql:host=localhost;dbname=projetphp', 'root', '');
?>
<?php
// Traitement des erreurs

if(!empty($_FILES)){

var_dump($_FILES);

$pdf = $_FILES['pdf']['name'];
$extpdf = strrchr($pdf, ".");
$pdfsize = $_FILES['pdf']['size'];
$dossiertemporaire = $_FILES['pdf']['tmp_name'];
$dossierfinal = "upload/".$pdf;

if ($pdfsize > 2000000){
    echo "Le fichier est trop volumineux, réessayez !";
} elseif ($extpdf !== ".pdf" AND $extpdf !== ".PDF"){
    echo "Le fichier n'est pas un fichier PDF !";
} else {
    $pdo->prepare("INSERT INTO pdf (id_pdf, nom) VALUES(null, ?)")->execute([$pdf]);
    move_uploaded_file($dossiertemporaire,$dossierfinal);
    echo"Le fichier a bien été uploadé! Merci ";
}
} else {
    echo " Vous n'avez pas choisi de fichiers !";
}

$requete = $pdo->query('SELECT * FROM pdf');
$mes_pdfs = $requete->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend> Upload de fichier PDF </legend>
            <br>
            <label for="pdf"> Mettre un PDF : </label>
            <br><br>
            <input type="file" name="pdf">
            <br><br>
            <input type="submit" value="Envoyer le fichier">
            <br><br>
        </fieldset>
    </form>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($mes_pdfs as $pdf) { ?>
    <tr>
      <th scope="row"><?php echo $pdf['id_pdf']; ?></th>
      <td><a href="upload/<?php echo $pdf['nom']; ?>"><img src="mpdf.png" width="100" heigth="100"></a></td>
      <th scope="row">
        <a href="deletepdf.php?id_pdf=<?php echo $pdf['id_pdf']; ?>" class="btn btn-warning" >supprimer</a>
      </th>
    </tr>
    <?php } ?>    
  </tbody>
</table>



</body>
</html>