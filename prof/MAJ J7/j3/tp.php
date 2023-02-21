<?php
$code_postal= 77380;
var_dump($code_postal);
$pays= "France";
var_dump($pays);
$taille= 1.80;
var_dump($taille);
//Page2
define('TAXE_PLUS',"25");
echo TAXE_PLUS;

for ($i=1;$i<=1000;$i++){
    echo $i .'<br>';
}
$i=10;
while($i<=300){
    echo$i++ .'<br>';
}
for($i=10;$i<=800;$i=$i+10){
    echo $i.'<br>';
}
$_z = 1;
while($_z<=50){
    echo 'j\'avance doucement mais surment'.$_z.'<br>';
    $_z++;
}

$pays = array ('italie', 'france', 'allemagne', 'russie', 'hollande');
echo'<ul>';
foreach ($pays as $data){
    echo '<li>'. $data . '</li>';
}
echo '</ul>';

echo $pays[3];
echo $pays[1];
echo $pays[0];
echo $pays[4];

echo'<br>';
$count = count($pays);
$u = 0;
while($u < $count){
    echo'pays numeros'.$pays[$u].'<br>';
    $u++;
}
echo'<br>';

$age=12;

if($age>12){
    echo 'je suis plus agé';
}else{
    echo 'je suis moins agé';
}
echo'<br>';
echo ($age<12)?'je suis plus agé':'je suis moins agé';
echo'<br>';
if($age==='12'){
    echo 'j\'ai 12 ans';
}else {
    echo 'je n\'ai pas 12 ans';
}

echo ($age==='12')?'j\'ai 12 ans':'je n\'ai pas 12 ans';