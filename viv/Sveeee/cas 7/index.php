<?php
$color = [ 'white', 'green', 'red'];
$broj = 0;
foreach($color as $broj){
    echo $broj . ',';
    $broj++;
}

echo '<br>';

$meseci = ['januar','februar','mart','april','maj','jun','jul','avgust','septembar','oktobar','novembar','decembar'];
foreach($meseci as $i){
    echo $i;
    echo '<br>';
}

$capitals = [
    "Italy"      => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium"    => "Brussels",
    "Denmark"    => "Copenhagen",
    "Finland"    => "Helsinki",
];
foreach($capitals as $kljuc=>$i){
    echo "The kapitsssal of ". $kljuc ." is ". $i;
    echo '<br>';
}
$string = "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]." carpet, the ".$color[1]. " lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo $string;
echo '<br>';
$prirodniBrojevi = array();

for($i = 0;$i<100;$i++){
    $prirodniBrojevi[$i] = $i;
}

for($i = 0; $i<100;$i++){
    echo $prirodniBrojevi[$i];
    echo '<br>';
}

$meseci = ["januar" => 31 , "februar" => 28, "mart" => 31, "april" => 30 , "maj" => 31 , "jun" =>30 , "jul" => 31 , "avgust" => 31 ,"septembar" => 30 ,"oktobar" => 31,"novembar" =>30 , "decembar" =>31];
foreach($meseci as $key => $i){
    $brojac = 0;
    for($j = 0; $j < $i+1 ;$j++){
        echo "today is : ". $key . " ".$brojac;
        $brojac++;
        echo '<br>';
    }
}
$prazanNiz1 = array();
$parniBr=0;
$prazanNiz2 = array();
$neparniBr=0;

for($i = 0; $i < 100;$i++){
    if($i %2 == 0){
        $prazanNiz1[$parniBr] = $i;
        $parniBr++;
    }
    else{
        $prazanNiz2[$neparniBr] = $i;
        $neparniBr++;
    }
}
echo "parni brojevi:";
echo '<br>';
for($i=0;$i<$parniBr;$i++){
    echo $prazanNiz1[$i];
    echo '<br>';
}

echo "neparni brojevi:";
echo '<br>';

for($i=0;$i<$neparniBr;$i++){
    echo $prazanNiz2[$i];
    echo '<br>';
}

$string1 = ["Di su hedovi","daj vamo"];
$string2 = ["Di je dzokavac"];
if(count($string1) > count($string2)){
    for($i =0;$i<count($string1);$i++){
        echo $string1[$i];
        echo '<br>';
    }
    
}
else{
    for($i =0;$i<count($string2);$i++){
        echo $string2[$i];
    }
    echo '<br>';
}

$string11 = ["a", "b", "c" , "d"];
$string22 = ["e", "f", "g"];
$brojac2 = count($string11) + 1; 
for($i=count($string22);$i>=0;$i--){
    array_push($string11,$string22[$i]);
    
}
for($i=0;$i<count($string11);$i++){
    echo $string11[$i];
    echo'<br>';
}
$niz1 = [1,2,3,4,5];
$niz2 = [6,7,3,2,1,8];
$nizC = array();
if(count($niz1) < count($niz2)){
    for($i=0;$i<count($niz1);$i++){
        for($j=0;$j<count($niz2);$j++){
            if($niz1[$i] == $niz2[$j]){
                array_push($nizC,$niz1[$i]);
            }
        }
    }
}
else{
    for($i=0;$i<count($niz2);$i++){
        for($j=0;$j<count($niz1);$j++){
            if($niz2[$i] == $niz1[$j]){
                array_push($nizC,$niz1[$j]);
            }
        }
    }
}
for($i=0;$i<count($nizC);$i++){
    echo $nizC[$i];
    echo '<br>';
}


?>


