<?php

// ------------------- Les conditions -------------------

/*
if (condition == true) {
    instructions 
}
*/

// if ($age < 18){
//     echo "Vous êtes mineur" ;
// }
// // IF ELSE 
// if ($age < 18) {
//     echo "Vous êtes mineur" ;
// } else {
//     echo "Vous êtes majeur" ;
// }

/*
?>
<form action="" method="post">
 <p>Quel est Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php
$age = (int)$_POST['age'] ;

// IF ELSE 
if ($age < 18) {
    echo "Vous êtes mineur" ;
} else {
    echo "Vous êtes majeur" ;
}
*/

$age = 27; 

if($age === "27"){
    echo "Vous avez 27 ans" ;
} else {
    echo "vous n'avez pas 27 ans" ;
}

echo "<br>"
// le signe = permet d'affecter une valeure 
// Le signe == permet de comparer deux valeurs (sans le type)
// Le signe === permet de comparer les valeurs et le type

// -------------------- La ternaire -------------------------
if ($age < 18){
    echo "Vous êtes mineur";
} else  {
    echo "Vous êtes majeur" ; 
}

echo "<br>"
// Cela équivaut à : (Condition)? run Si vrai  : run si faux  

echo($age < 18)? "Vous êtes mineur": "vous êtes majeur" ;
 
echo "<br>"

// --------------------- IF / ELSE / ELIF -----------------------------

