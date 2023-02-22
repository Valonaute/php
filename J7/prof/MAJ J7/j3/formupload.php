<?php

if(!empty($_FILES))
{
    // nom du fichier
    $nom_du_fichier = $_FILES['fichier']['name'];
    // dossier temporaire
    $dossier_temporaire = $_FILES['fichier']['tmp_name'];
    // dossier final
    $dossier_final = 'upload/'.$nom_du_fichier;
    //la taille du fichier
    $size = $_FILES['fichier']['size'];

    $extension = strrchr($nom_du_fichier, '.');
    $extensions_autorisees = array(".pdf",".PDF");

    $errors = [];

    if(!in_array($extension,$extensions_autorisees ))
    {
        $errors[] = "Vous pouvez uploader uniquement des fichiers PDF";
    }

  
    if($size > 20000000)
    {
        $errors[] = "Le fichier ne peut depasser 2 MO";
    }

  
    
    if(count($errors) < 1)
    {

        // on déplace le fichier du dossier temporaire vers 
        // le dossier final
        move_uploaded_file($dossier_temporaire, $dossier_final);
        echo '<p style="color: white; background-color: green"> fichier uploadé avec success</p>';
    }else{

        foreach($errors as $error)
        {
            echo '<p style="color: white; background-color: red">'.$error.'</p>';
        }
        
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend> Upload de fichier PDF </legend>
            <br>
            <label for="pdf"> Mettre un PDF : </label>
            <br><br>
            <input type="file" name="fichier">
            <br><br>
            <input type="submit" value="Envoyer le fichier">
            <br><br>
        </fieldset>
    </form>
<?php