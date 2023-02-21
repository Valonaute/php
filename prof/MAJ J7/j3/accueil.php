<?php
$categories = ['ordinateurs','radio','chaussures','tables','chaises'];
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

<ul class="nav">
    <?php foreach($categories as $categorie) { ?>
  <li class="nav-item">
    <a class="nav-link active" href="#"><?php echo $categorie; ?></a>
  </li>
  <?php } ?>
  
</ul>

    
</body>
</html>