<?php

// priklad 1
$cisla = [2, 4, 5, 8, 6]; // Pole čísel
$soucet = 0;

for ($i = 0; $i < count($cisla); $i++) { 
    $soucet += $cisla[$i]; 
}

$prumer = $soucet / count($cisla); 

echo "Průměr je: " . $prumer; 

echo "<br>";

// priklad 2
for ($i = 1; $i <= 4; $i++) { 
    for ($j = 1; $j <= 4; $j++) { 
        echo $i * $j . " "; 
    }
    echo "<br>"; 
}


// priklad 3
$cisla = [2, 4, 5, 8, 6];
$nejvetsi = $cisla[0]; 
for ($index = 0; $index < count($cisla); $index++) { 
   $aktualniPrvek = $cisla[$index];
   if ($aktualniPrvek > $nejvetsi) {
     $nejvetsi = $aktualniPrvek;
   }
}
echo $nejvetsi;

echo "<br>";

// priklad 4
$znakPixelu = '#';
$vyska = 4;
for ($radky = 0; $radky < $vyska; $radky++) {
    $kolikZnakuNaRadek = $vyska - $radky;
    for ($linka = 0; $linka < $kolikZnakuNaRadek; $linka++) {
        echo $znakPixelu . " ";
    }

    echo '<br>';
}

// priklad 5
$spoluzaci = [
    [ 
        'jméno' => "Jan Doležal",
        'pohlaví' => 'muz',
        'průměr' => 5
    ],
    [ 
        'jméno' => "Anna Brávůrská",
        'pohlaví' => 'zena',
        'průměr' => 3
    ],
    [ 
        'jméno' => "Radek Pálka",
        'pohlaví' => 'muz',
        'průměr' => 1
    ],
    [ 
        'jméno' => "Marie Jasná",
        'pohlaví' => 'zena',
        'průměr' => 2
    ],
];
function hledatSpoluzaka($pohlaví, $průměrnaZnamka) {

    global $spoluzaci;

    foreach ($spoluzaci as $zak) { 
       if ($zak['pohlaví'] == $pohlaví && $zak['průměr'] == $průměrnaZnamka) {
            return $zak;
       }
    }
    return false;
}

$nalezen = hledatSpoluzaka('muz', 1);
if($nalezen) {
    echo("Našli jsme podle vaších kritérii: <br>");
    print_r($nalezen);
} else {
    echo("Nebyl nalezen žádný záznam!");
}

echo("<br>");

// priklad 6
$znakPixelu = '*';
$vyska = 10;
for ($radky = 0; $radky < $vyska; $radky++) {
    $kolikZnakuNaRadek = $vyska - $radky - 1;

    for ($linka = 0; $linka < $kolikZnakuNaRadek; $linka++) {
        echo $znakPixelu;
    }

    echo '<br>';
}


?>