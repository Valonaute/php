<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=sitesvalentin', 'root', '');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Galerie</title>
</head>

<body style=background-color:black;>
    <?php include 'includes/header.php' ?>


    <p style=color:green;> tu peux maintenant partager des images !</p>

    <img src="upload/nouvelan.jpg" height="350px">
    <br>

    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend> Upload d'images </legend>
            <br>
            <label for="img"> Mettre une image : </label>
            <br><br>
            <input type="file" name="img">
            <br><br>
            <input type="submit" value="Envoyer le fichier">
            <br><br>
        </fieldset>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mes_images as $img) { ?>
                <tr>
                    <th scope="row"><?php echo $img['id_pdf']; ?></th>
                    <td><a href="upload/<?php echo $img['nom']; ?>"><img src="upload/$img" width="100" heigth="100"></a></td>
                    <th scope="row">
                        <a href="deletepdf.php?id_pdf=<?php echo $img['id_img']; ?>" class="btn btn-warning">supprimer</a>
                    </th>
                </tr>
            <?php } ?>
        </tbody>
    </table>

        <?php include 'includes/footer.php' ?>
</body>

</html>