<?php
// Réaliser des opération répété par une function 

function sum ($nb1, $nb2){
    $sum = $nb1 + $nb2;
    return $sum;
}

echo sum(10,30);

echo "<br>";


// Réaliser une calculatrice 

function calc ($op, $n1, $n2){
    if ($op=="+") {
        return $n1+$n2;
    } elseif ($op=="-") {
        return $n1-$n2;
    } elseif ($op=="*") {
        return $n1*$n2;
    } else {
        return $n1/$n2;
    }
}
echo calc("/",20,30)
?>
