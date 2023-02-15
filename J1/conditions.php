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


?>
<style>
    form {
        color : gray; 
        background-color : black; 
        text-align : center; 
        padding : 100px;
    }
    body  {
        text-align : center;
    }
</style>
<form action="" method="post">
 <p>Quel est Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php


// IF ELSE

if($_POST){
    $age = (int)$_POST['age'] ;
    switch($age){
        case 7:
            echo "Vous êtes mineur et pouvez regarder des dessins animés.";
        break;

        case 12:
            echo "Vous êtes mineur et pouvez regarder des Thrillers -12A.";
        break; 

        case 16:
            echo "Vous êtes mineur et pouvez conduire aux USA.";
        break; 

        case 18: 
            echo "Vous êtes majeur"; 
        break; 

        case 21:
            echo "Vous pouvez allez jouer au casino";
        break;

        case 65:
            echo "Vous pouvez prendre votre retraite !";
        break;

        default:
            echo "Rien ne se passe pour vous cette année";


    }
}


// // $age = 27; 

// if($age === "27"){
//     echo "Vous avez 27 ans" ;
// } else {
//     echo "vous n'avez pas 27 ans" ;
// }

echo "<br>";
// le signe = permet d'affecter une valeure 
// Le signe == permet de comparer deux valeurs (sans le type)
// Le signe === permet de comparer les valeurs et le type

// -------------------- La ternaire -------------------------
/*
if ($age < 18){
    echo "Vous êtes mineur";
} else  {
    echo "Vous êtes majeur" ; 
}

echo "<br>";
// Cela équivaut à : (Condition)? run Si vrai  : run si faux  

echo($age < 18)? "Vous êtes mineur": "vous êtes majeur" ;
 
echo "<br>";
*/
// --------------------- IF / ELSE / ELIF -----------------------------

