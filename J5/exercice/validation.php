<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <?php

    $pdf = $_FILES['file']['name'];
    $ext_pdf = strrchr($pdf, '.');
    $pdf_size = $_FILES['file']['size'];
   
    // Vérification et traitement des erreurs
    
    //$empty = "Vous n'avez rien envoyer";
    //if (!isset($_POST['Envoyer'])) {
    //     $empty;}
    
    if (empty($_FILES)) {
        echo "Vous n'avez pas choisi de fichier ...";
    } elseif ($pdf_size > 2000000) {
        echo "Le fichier est trop volumineux...";
    } elseif ($ext_pdf !== '.pdf') {
        echo "Le fichier n'est pas un PDF ! ";
    } else {
        echo "<br><br>Le fichier a bien été uploadé. Merci" . "<br><br>";
    };

    ?>

</body>

</html>