<?php

/* $numbers = 20;
while ( $numbers < 30 ) {
    $numbers ++;
    echo "<pre>";
    echo " Ovo je manje od $numbers  ";
    echo "<pre>";
} 

$broj = 0;
$brojNeparinh = 0;

while ($brojNeparnih < 10) {
    $broj++;
    if ($broj % 2 === 1) {
        $brojNeparnih++;
        echo "$brojNeparnih Neparan broj: $broj <br>";

    }
}  


$broj = 15;
while ( $broj > 0) {
    $broj--;
    echo "<pre>";
    echo "ovo je $broj";
} 


for ($i= 0; $i < 5; $i++) {
    echo "broj $i";
    echo "<br>";
}  

for ($i=0; $i<10; $i+=2) {
    echo "broj $i";
    echo "<br>";
    
}  



$broj = 0;

for ($i=0; $i <= 100; $i++) {
    echo " $broj + $i = ";
    $broj = $broj + $i;
    echo "$broj <br> ";
    
}  


$broj = 0;
$brojDeljivih = 0;
$zbir = 0;

while ($brojDeljivih < 20) {
    if ($broj % 2 === 0) {
        echo "$zbir + $broj = ";
        $brojDeljivih++;
        $zbir = $zbir + $broj;
        echo $zbir. "<br>" ;
    }

    $broj++;
}  */


$kockica = rand(1,6);
$brojBacanja = 0;


while ($kockica !=6) {
    $kockica = rand (1, 6);
    $brojBacanja++;
    echo "Bacio sam broj $kockica <br>";

}

echo "Dobio sam 6 iz $brojBacanja bacanja";
