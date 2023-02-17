<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color : black; 
            color : black;
            font-size : larger; 
            margin : 50px;
        }
        p {
            margin-left: 50px;
            margin-right: 50px;
        }
        #nav {
            padding-right: 95px;
        }
        #z {
            text-align : center;
            text-decoration: underline;
            font-weight: bold;
            color : white;
            margin-left: 50px;
            margin-right: 50px;
        }
        #a {
            text-align : left; 
            background-color: rgb(56, 52, 52);
            color : white;
            margin-left: 50px;
            margin-right: 50px;
        }
        #b {
            text-align : center; 
            background-color: rgb(104, 96, 96);
            color : white;
            margin-left: 150px;
            margin-right: 150px;
        }
        #c {
            text-align : right; 
            background-color : rgb(146, 139, 139);
            margin-left: 250px;
            margin-right: 250px;
        }
        #d {
            text-align : center; 
            background-color : rgb(196, 186, 186);
            margin-left: 50px;
            margin-right: 50px;
        }
        ul {
 margin-right: 50px;
 list-style-type:none;
 }
li {
 margin-left:70px;
 float:right; /*pour IE*/
 }
ul li a {
 display:block;
 float : auto; 
 width:200px;
 background-color:gray;
 color:black;
 text-decoration:none;
 text-align:center;
 padding:10px;
 border:4px solid;
 /*pour avoir un effet "outset" avec IE :*/
 border-color:#DCDCDC #696969 #696969 #DCDCDC;
 }
ul li a:hover {
 background-color: red;
 border-color:#696969 #DCDCDC #DCDCDC #696969;
 } 
    </style>
    <title>Exercie J3</title>
</head>
<body>
    <?php
// Exos récap de ce qu'on a vu J1 J2 
echo "<br><div id=z>";
echo "<p>";
echo "Voici ma réponse de l'Exercice du 15 Février 2023 : ";
echo "<br>";echo "<br>";
echo "</p>";
echo "</div>";
// --------- 1 ---------
echo "<br><div id=a>";
echo "<p>";
echo "<br>";echo "<br>";
$ville = "Paris";
var_dump($ville);

echo "<br>";
$année = 1982;
var_dump($année);
echo "<br>";
$prix_promo = 9.99;
var_dump($prix_promo);
echo "<br>";
echo "</p>";
echo "<br></div>";
// --------- 2 ---------
echo "<br><div id=b>";
echo "<p>";
echo "<br>";
const ECO_TAXE = 8;
echo "<br>";
echo ECO_TAXE;
echo "<br>";
$prenoms = ["Laurent", "Yves", "Thomas", "Yousri", "Christophe"];
echo "<br>";
echo $prenoms[4];
echo "<br>";
echo "</p>";
echo "<br></div>";
// --------- 3 ---------
echo "<br><div id=c>";

echo "<br>";
echo "<ul>"; 
foreach ($prenoms as $prenom){
    echo "<li>".$prenom."</li><br>";
}
echo "</ul>";
echo "<br>";
$nb = count($prenoms);
echo "<ul>";

while ($nb > 0){
    echo "<li>".$prenoms[$nb-1]."</li><br>";
    $nb--;
}
echo "</ul>";
echo "<p>";
echo "<br>";
$client = ["nom" => "Souki", "prenom" => "Alain", "age" => 50, "pays" => "France"];

foreach ($client as $categorie => $info){
    echo $categorie." : ".$info."<br>";
}
echo "<br>";
echo "</p>";
echo "<br></div>";
// --------- 4 ---------
echo "<br><div id=d>";
echo "<p>";
echo "<br>";
$categorie = ["chaussures", "ordinateurs", "radio", "chaises", "tables"];

echo"<ul id=nav>";
 
foreach ($categorie as $value){
echo "<li><a href=\"#\">".$value."</a>"."</li>";
}
echo "</ul>";

echo "<br>";
echo "<br>";
echo "<br>";

echo 'J\'aime le code. L\'<span style=text-decoration:underline;font-weight:bold;>essentiel</span> est de <span style=color:red;text-decoration:underline;font-weight:bold;>progresser</span>';

echo "<br>";
echo "</p>";
echo "<br></div>";
?>

   
</body>
</html>