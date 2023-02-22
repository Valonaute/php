<?php
$nom = "mon \"nom\" est Gautier" ;

echo $nom ;
$prenom = "Brigitte" ;
$nom = "Macron" ;
if ($nom != "Macron") {
    echo "Vous n'êtes pas président" ; 
} else { 
    echo "Bienvenue à l'elysée Mr le président !" ;
}

// Mot clés conditions : AND = && / OR = ||

if ($nom == "Macron" && ($prenom == "Emmanuel" || $prenom == "Brigitte")) {
    echo "Vous êtes résident de l'élysée" ;
} else {
    echo "Vous n'avez rien à faire ici" ;
}
echo "<br>";

// -------------- La structure switch --------------

$note = 14;

switch ($note) {
    case 0:
        echo "Vous êtes très nul en maths !";
    break;

    case <=5:
        echo "Vous êtes mauvais en maths ...";
    break;

    case <7:
        echo "Vous êtes en dessous de la moyenne !";
    break;

    case <=10:
        echo "Vous avez juste la moyenne.";
    break;

    case <=12:
        echo "Tu as plus de la moyenne, pas mal";
    break;

    case <=16:
        echo "Tu te débrouille très bien";
    break;

    case <=20:
        echo "Excellent travail c'est parfait";
    break;

    default:
        echo "Désolé, je n'ai pas d'infos sur la note" ;
}
?>