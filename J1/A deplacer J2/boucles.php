<?php

// Boucles pour répéter une action, lire un tableau, lire un objet 

// Répéter 50 fois la phrase suivante : Je suis sur un bateau 
/*
// Boucle while 
$i =0;
while($i <50) {
    echo $i." Je suis sur un bateau <br>";
    $i++;
};

// Boucle for 

for ($i = 0; $i <50; $i++){
    echo $i." Je suis au port <br>";
};

// incrémenter 2 par tour 
for ($i = 0; $i <50; $i+=2){
    echo $i." Je suis au port et je veux vite rentrer <br>";
};

// 100 décrémenter à 0 avec pas de -5

for ($i = 100; $i >= 0; $i-= 5){
    echo $i." J'ai faim <br>";
};
*/
// boucle foreach : Permet de lire un tableau ou un objet 

$clients = array("Valentin ","Gautier ", 31, true, " v.gautier91@gmail.com ", 92, 91);

echo "<ul>";
foreach ($clients as $data_client){
    echo "<li>".$data_client."</li>";
} 
echo "<br> 2 ème Tableau avec des clés : <br><br>";
$clients_assoc = array("prenom" => "Catherine","nom" => "Gautier","age" => 58,"client" => false,"email" => "Catherine_gautier@gmail.com", "Dep naissance" => 94, "Dep résidence" => 91,);

foreach ($clients_assoc as $key => $data){
    echo "<li>".$key." => ".$data."<br>";
}

echo "</ul>";
