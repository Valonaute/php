<?php 

$nom = 'Gautier ' ;
$prenom = 'Valentin ' ;
$age = 31 ; 
$adresse = " 115 route de saint vrain, 91760 ITTEVILLE. ";

echo "Je m'appelle " . $prenom . $nom . ", j'ai " . $age . " ans. J'habite au" . $adresse ;
// Concaténation par un "."

/* Exemples de création de variable incorrect / A ne pas faire !

une variable ne peux commencer par un nombre / Chiffre 
$11 = "Gautier"

Une variable ne peux avoir des espaces 
$mon nom = "Gautier"

une variable ne peux pas avoir de tiret du 6 - (car = au signe moins)
$mon-nom = "Gautier"

Création de variable correct 

Snake case pour les noms composés 
$mon_nom = "Gautier"

Pour les noms de plusieurs mots / Mots composés
$monNom = "Gautier"

Une variable peut contenir des nombres mais ne doit pas commencer par des nombres 
$monNom1 = "Gautier"
*/
echo "<br> Je vais déménager à une nouvelle adresse. <br>";
$adresse = "26 Rue Martin Luther King, 91700 Fleury Merogis. ";
echo "Ma nouvelle adresse est le " . $adresse . "<br> Vous voulez venir visiter ? <br> ";
echo "<script language=javascript>
   alert('Oui ou non ?');
</script> ";

// ------------------------ Les types de données -------------------------

// Le type de la variable prénom est string 
$sexe = "Masculin";

// Le type de la variable prix est float 
 $prix = 8.25 ;

// Le type de la variable quantité est integer 
$quantite = 50;

// Le type de la variable catégorie est de type booléen (Vrai ou faux) 
$categorie = false ;

// Le type de la variable product est de type objet 
// $product = new Product();
$active = null;

