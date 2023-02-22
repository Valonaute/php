<style> 

body {
    text-align : center;    
}
</style>

<?php

$products =  ["images/img1.jpg", "images/img2.jpg","images/img3.jpg"];
$nom = [ "Huawei Mate 10 Pro", "Samsung Galaxy s 10", "Iphone 14"];
$prix = [300, 450, 600];
/*
foreach ($products as $infos){
    echo "<img src ='$infos' height='300px'><br>";
}
*/

for ($i=0 ; $i<3 ; $i++){
    echo "<img src ='$products[$i]' height='300px'><br>";
    echo " Le téléphone est un $nom[$i] <br>";
    echo " Le Prix est de $prix[$i] <br>";
}





