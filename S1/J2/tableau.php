<?php

// Comment créer un tableau en PHP ?
// Un tableau permet d stocker des données 

$clients = array("Valentin ","Gautier ", 31, true, " v.gautier91@gmail.com ", 92, 91);
$clients1 = ["Patrick ", "Gautier ", 65, false, " capajuva@sfr.fr ", 75, 91];

$clients_assoc = array("prenom" => "Catherine","nom" => "Gautier","age" => 58,"client" => false,"email" => "Catherine_gautier@gmail.com", "Dep naissance" => 94, "Dep résidence" => 91,);

echo $clients[1].$clients[0] ;

echo "<br>";

// Le var dump affiche la structure du tableau 
var_dump($clients);

// Le print_r affiche aussi le tableau 
echo "<pre>";
// print_r($clients1);
print_r($clients_assoc);
echo "</pre>";

echo $clients_assoc['prenom']
// Boucle for pour lire les tableaux 
for ($i=0; $i<=6; $i++){
    echo $clients[$i];
}
