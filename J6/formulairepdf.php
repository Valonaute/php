<?php
$pdo = new PDO('mysql:host=localhost;dbname=projetphp', 'root', '');
?>

<?php


$pdf = $_FILES['file']['name'];
$ext_pdf = strrchr($pdf, '.');
$extensionsautorisees = [".pdf", ".PDF"];
$pdf_size = $_FILES['file']['size'];
$dossiertemporaire = $_FILES["file"]['tmp_name'];
$dossierdestination = "upload/" . $pdf;



// $errors = [];
// if ($pdf_size > 2000000) {
//     $errors[] = "Le fichier est trop volumineux, ne pas dépasser 2 MO.";
// }
// if (!in_array($ext_pdf, $extensionsautorisees)) {
//     $errors[] = "Vous pouvez uploader uniquement des fichiers PDF";
// }

// if ($errors < 1) {
//     // on déplace le fichier ! 
$pdo->prepare("INSERT INTO pdf (id_pdf, nom) VALUES (null, ?)")->execute([$pdf]);
move_uploaded_file($dossiertemporaire, $dossierdestination);
echo "Le fichier a bien été uploadé ! Merci";
// } else {
//     foreach ($errors as $error) {
//         echo "<p style='color:red;'>.$error.</p>";
//     }
// }

$requete = $pdo->query("SELECT * FROM pdf");
$pdfs = $requete->fetchall(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Validation</title>
</head>

<body>
    <h3>Bravo vous avez réussi à vous inscrire vous pouvez télécharger un PDF !</h3>
    <br>
    <h5> Attention : Taille maximal 2 Mo.</h5>
    <br>
    <br>
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend> Upload PDF : </legend>
            <br>
            <label> Upload de fichier PDF </label>
            <br><br>
            <input type="file" name="file">
            <br><br>
            <input type="submit" value="Envoyer">
            <br><br>
        </fieldset>
    </form>
    <br><br><br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">fichier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pdfs as $pdf) { ?>
                <tr>
                    <th scope="row"><?php echo $pdf['id_pdf']; ?></th>
                    <td><a href="upload/<?php echo $pdf['nom'] ?>"> <img src="upload/pdf.png" height="100px"> </a></td>
                    <th scope="row">
                        <a href="" class="btn btn-warning"> Supprimer </a>
                    </th>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>