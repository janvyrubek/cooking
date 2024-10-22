<?php

$a = "Vitej  "; //promenna 
echo ($a); //vypise 

$cislicko = 25; //cislo

$seznamnajdutamconeznam = ["Jennie", "Rose", "Lisa"]; //seznam

$matematicka = 6 + 5 - ($cislicko * 3) / 5; //pocetni operace

$jmeno = "Adam";
$vek = 18;
$ahoj = "Ahoj, jak se máš " . $jmeno; //spojeni 
echo($ahoj); 

if ($vek >= 18) {  //vek check
    echo ' muzes jit';
}
else {
    echo ' nemuzes jit';
}

//vetveni (podminky)

$money = 666; //money check
if ($money > 500) {
    echo ' lovaty';
} else if ($money > 1000){
    echo ' lukas bartunek';
}     else if ($money < 500){
        echo ' broke boy';
    }

$phone = "Android"; //vkladani doprostred textu
$vyhra = " ,Cau pojd si vzit " . $phone .  " mas tri dny !!!";
echo ($vyhra);

for ($i = 2; $i <= 10; $i += 2) { //cyklus for, start, podmínka, postup
    echo $i . " ";
    }

$haf = 4;
$hafan = 3;   

// echo pow($haf, $hafan);


// mocninova kalkulacka
$haf = 5;
$hafan = 2;
$dogg = 1;

for ($i = 1; $i <= $hafan; $i++) {
   $dogg *= $haf;
    
}

echo "Vysledek $haf na $hafan je $dogg";

// secti do cisla kalkulacka 

$mnau = 10;
$mnauky = 0;

for ($i = 1; $i <= $mnau; $i++) {
   $mnauky += $i;
}

echo $mnauky;

// tabulky cyklus

$radky = 4;
$sloupce = 5;

for ($i = 1; $i <= $radky; $i++) {
    for ($j = 1; $j <= $sloupce; $j++) {
        echo "#";
    }
    echo "<br>";

}

$cislo = "12.845655"; 

$parsed_desetinne = floatval($cislo);

var_dump($parsed_desetinne);

$pole = [1, 12, 6];

$lidi = ["Petr", "Dan", "Alois", "Pepek"];

var_dump($lidi); //dumpne vse

print_r($pole); //vypise vse

echo $lidi[3]; //konktretni prvke v poli

$lidi[3] = "Namornik"; //zmena hodnot

$lidi[] = "Adolfik"; //pridat hodnotu


// cyklus na vypsani pole po jedne hodnote
$pole = [1, 12, 6];

$lidi = ["Petr", "Dan", "Alois", "Pepek"];

$delka = count($pole);

for ($i = 0; $i < $delka; $i++) {
    echo "Na pozici ($i): ". $pole[$i]. ", ";
}

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

$cotton = [3, 7, 18, 9, 2];

function razeni($pole) {
    $nejmensi = $pole[0];
    $index = 0;
    for ($i = 0; $i < count($pole); $i++) {
        $aktualni_prvek = $pole[$i];
        if ($aktualni_prvek < $nejmensi) {
            $nejmensi = $aktualni_prvek;
            $index = $i;
        }
    }

    array_splice($pole, $index, 1);

    return [$nejmensi, $pole];
}

function muj_sort($puvodni) {
    $serazeny = [];

    while (count($puvodni) > 0) {
        list($nejmensi, $puvodni) = razeni($puvodni);
        $serazeny[] = $nejmensi;
    }

    return $serazeny;
}

$serazene = muj_sort($cotton);
print_r($serazene);

?>