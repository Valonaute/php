 
<?php
// Reprise de J2
$famille = [
    ["Valentin ", "Gautier", 31, " Opticien ", " Français" ],
    ["Patrick ", "Gautier", 65, " Electricien ", " Français" ],
    ["Catherine ", "Gautier", 58, " Informaticienne ", " Française" ],
    ["Justine ", "Gautier", 34, " Diététicienne ", " Française" ]
];

foreach ($famille as $membre){
    echo "Je m'appelle $membre[0] $membre[1], j'ai $membre[2], je suis $membre[3] et $membre[4].<br>";
}
?>