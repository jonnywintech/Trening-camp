<?php
/*

 1.Napisati PHP funkciju koja oduzima dva broja. Ulazni parametri su brojevi $a i $b. 
 Funkcija vraća rezultat operacije oduzimanja. Pozvati funkciju sa proizvoljnim 
 vrednostima i ispisati rezultat koji vraća funkcija.

*/

/*function oduzimanjeDvaBroja ($a, $b) {
    return $a - $b;
}

echo oduzimanjeDvaBroja (10, 8);



/*

6.Napisati PHP funkciju koja računa proizvod svih vrednosti elemenata proizvoljnog 
niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati 
funkciju sa proizvoljnim vrednostima i ispisati proizvod elemenata niza koji 
vraća funkcija.

*/

/*function mnozenjeNiza ($array) {

        if (!empty($array)){
            $a = 1;
        foreach ($array as $element ) {
            $a *= $element;
        } return $a;
    }
    }


$array = [1, 2, 5, 8]; 
echo mnozenjeNiza($array);

/*

7.Napisati PHP funkciju koja računa srednju vrednost elemenata proizvoljnog niza koji je ulazni parametar funkcije. 
Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati vrednost koju vraća funkcija.

*/

/*function srednjaVrednost ($array) {

    if (!empty($array)){
        $a = 0;
    foreach ($array as $element ) {
        $a += $element;
    } return $a / count($array);
    } 
}

$array = [10, 12, 8]; 
echo srednjaVrednost($array);

Napisati PHP funkciju koja proverava da li su svi elementi datog niza u datom opsegu. 
Ulazni parametri funkcije su niz, donja granica i gornja granica.*/
/*
function opseg ($array, $min, $max) {
    foreach ($array as $element) {
        if ($element>$min || $element<$max) {
            
            echo 'Elementi nisu u datom opsegu';
        }echo 'Svi elementi su u datom opsegu.';
    }
}

$array = [10, 5, 7];
echo opseg ($array, 2, 15);*/

function isArrayInScope($array, $a, $b)
{
    foreach ($array as $val) {
        if ($a > $val || $b < $val) {
           return false;
        }
    }

    return true;
}

$array = [3,4,5,6,7,12];
$scope = isArrayInScope($array, 2, 15);

var_dump($scope);


















?>