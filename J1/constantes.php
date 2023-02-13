<?php

const TVA = 0.20 ; 
$achat = 80;
$prix = $achat * (1+TVA);
echo $prix;
echo "<br>";

// Avec fonction define 

define("TX_TAXES", 0.21 );

$salaire = 1500;
$taxes = $salaire * TX_TAXES ;

$revenus = $salaire - $taxes ;

echo round($revenus,2) ;
 