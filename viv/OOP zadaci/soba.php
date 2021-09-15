<?php

/*Kreirati klasu Soba koja predstavlja hotelsku sobu. Bitni podaci za hotelsku sobu su 
broj sobe, 
broj kreveta, 
cena,
da li je soba zauzeta ili ne. 

Kreirati klasu Hotel koja omogućava dodavanje  soba  u  hotelu.
U klasi Hotel definisati metod pronadji($n) koja proverava da li u hotelu postoji soba u koju se može smestiti $n osoba, 
pa ako postoji, kao rezultat daje broj najjeftinije sobe u koju taj broj osoba može da se smesti. Ako ima više takvih soba, 
rezultat treba da bude broj sobe koja ima najmanji broj kreveta, a ako i takvih ima više, onda od njih vratiti najmanji broj sobe. 
Ukoliko takva soba ne postoji, rezultat je  –1. 
Napisati i metod zarada($n) koji izračunava kolika je ukupna zarada od zauzetih soba sa $n kreveta. 
Ako je $n === 0, onda se računaju sve sobe, bez obzira na broj kreveta.*/

class Soba {
    public $brojSobe;
    public $brojKreveta;
    public $cena;
    public $raspolozivost;

    public function __construct () {
        $this->brojSobe = $brojSobe;
        $this->brojKreveta = $brojKreveta; 
        $this->cena = $cena;
        $this->raspolozivost = $raspolozivost;
    }


}

class Hotel {
    public $sobe = [4,5];

    public function dodajSobu(Soba $soba) {
        $this->sobe[] = $soba;
    }

    public function pronadjiN ($n) { foreach ($sobe as $soba) {
        if (Soba[1] === $n) {
            return 'bla';
        }
    }
         
    }


}

$hotel = new Hotel();
$hotel->pronadjiN('2');


?>