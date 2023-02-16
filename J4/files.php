
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload fichiers</title>
</head>
<body>
    
<form action="#" method="post" enctype="multipart/form-data">
    <fieldset><legend> Formulaire d'upload : </legend>    
    <br>
    <label> Upload de fichier image</label>
    <br><br>
    <input type="file" name="file">
    <br><br>
    <input type="submit" value="Envoyer">
    <br><br>
    </fieldset>
</form>
<br>
<br>
<?php

if(!empty($_FILES))
    {$nom_du_fichier = $_FILES['file']['name'];
    echo $nom_du_fichier."<br>";

    $type_de_fichier = $_FILES['file']['type'];
    echo $type_de_fichier."<br>";

    $dossier_temporaire = $_FILES['file']['tmp_name'];
    echo $dossier_temporaire."<br>";

    $dossier_upload = "upload/".$nom_du_fichier;
    echo $dossier_upload."<br>";

    $extension_du_fichier = strrchr($nom_du_fichier,'.');
    echo $extension_du_fichier."<br>";

    $extensions_allowed = array(".jpg",".pdf", ".jpeg");

    if (in_array($extension_du_fichier, $extensions_allowed))
        {
                // Upload du fichier du dossier temporaire faire le dossier d'upload 
            if(move_uploaded_file($dossier_temporaire, $dossier_upload))
            {echo "Le fichier a bien été uploadé."."<br><br><br><br>";
            } else 
            {echo "Une erreur est survenue !";
            }
        }
    }

echo "<img src='$dossier_upload' style='display: block; margin: auto;'><br><br><br><br><p style='text-align:center;'>'Voici votre Tableau de vision' </p>";
?>

</body>
</html>