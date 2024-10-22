<?php

// priklad 1
$zaklad = 7; 
$max = 30; 
for ($i = 1; $i * $zaklad <= $max; $i++) {
    echo $i * $zaklad.", " ;
}

echo "<br>" ;

// priklad 2
$max2 = 10;
$soucet = 0;

for ($i = 1; $i <= $max2; $i++) {
    $soucet += $i; 
}

echo("Výsledek: ". $soucet); 

echo "<br>";

// priklad 3
$vstup = 18;

for ($i = 1; $i <= 10; $i++) {
    if ($vstup % $i == 0) {
        echo "$vstup je dělitelné $i<br>";
    } else {
        echo "$vstup není dělitelné $i<br>";
    }
}

echo "<br>";

// priklad 4
for ($pocitadlo = 10; $pocitadlo >= 0; $pocitadlo -= 1) {
    echo $pocitadlo . " "; 
}

echo "<br>";

// priklad 5
$vstup = 5;
$vysledek = 1;
for ($i = 1; $i <= 5; $i++) { 
    $vysledek *= $i;
}
echo("$vstup! = ". $vysledek);

echo "<br>";

// priklad 6
$soucetLich = 0;
$soucetSud = 0;
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        $soucetLich += $i;
    }else {
        $soucetSud += $i;
    }
}
echo("<br> Součet lichých čísel je: " . $soucetLich);
echo("<br> Součet sudých čísel je: " . $soucetSud);


?>