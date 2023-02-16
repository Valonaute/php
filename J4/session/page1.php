<?php
// Je démarre la session 
session_start();

// J'affiche les variable session 
echo $_SESSION['prenom'].'<br>';
echo $_SESSION['nom'].'<br>';

?>

<a href='index.php'> index </a><br>
<a href='page2.php'> Page 2  </a>