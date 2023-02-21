<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 
 $ville ='Paris';
 var_dump($ville);

 $annee = 1984;
 var_dump($annee);

 $prix_promo = 9.99;
var_dump($prix_promo);


define('ECO_TAXE',8);
echo ECO_TAXE;

$prenoms = array('laurent','yves','thomas');
var_dump($prenoms);

echo'<pre>';
print_r($prenoms);
echo'</pre>';

echo $prenoms[4];

echo'<ul>';
foreach($prenoms as $prenom)
{
    echo '<li>'.$prenom.'</li>';
}
echo'</ul>';


$j = 0;
$elements = count($prenoms);

echo '<ul>';
while($j < $elements){
    echo '<li>'.$prenoms[$j].'</li>';
    $j++;
}
echo'</ul>';

$client = ['nom' => 'souki', 'prenom' => 'alain', 'age' => 50, 'pays' => 'france'];

foreach($client as $key => $data)
{
    echo $key.':'.$data.'<br>';
}








 

 ?>
    
</body>
</html>