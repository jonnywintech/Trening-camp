<?php

/*Class Macka {
    public $ime;
    public $majka; 
    public $otac;

    public function __construct ($ime, $majka='nepoznata', $otac='nepoznat'){
        $this->ime=$ime;
        $this->majka=$majka;
        $this->otac=$otac;
    }

    public function mjau () {
        echo $this->ime . "kaze: Mjau";
    }
}

$cvrle = new Macka ('Cvrle');
$cvrle -> mjau; 

var_dump ($cvrle);*/


/*Class Pravougaonik {
    private $a;
    private $b; 
    private $d; 

    public function __construct ($a, $b, $d) {
        function getA () {
            $this->a=$a;
        }
        function getB () {
            $this->b=$b;
        }
        function getD () {
            $this->d=sqrt($a * $a + $b * $b);
    }

    function setA () {
            $this->a=$a;
        }
        function setB () {
            $this->b=$b;
        }
        function setD () {
            $this->d=sqrt($a * $a + $b * $b);
    }
}

}

$kvadrat = new Pravougaonik (10, 10);
var_dump ($kvadrat);

function setBanka ($banka) {
            $this->banka=$novaBanka;
        }
        function setVlasnik ($vlasnik) {
            $this->vlasnik=$bankaVlasnik;
        }
        function setStanje ($stanje) {
            $this->stanje=$novoStanje;
        }

function setBanka ($novaBanka) {
            $this->banka=$novaBanka;
        }

*/

/*3.Modelirati jednostavan sistem bankarstva:
a.Napraviti klasu Racun koja sadrži atribute brojRacuna, banka, vlasnik i stanje. 
Broj racuna je public, ostali atributi su private.
b.Konstruktor klase Racun prima četiri argumenta, koji odgovaraju gorepomenutim atributima, i setuje ih.
c.Napraviti klasu Banka koja sadrži atribute ime (public) i niz racuni (private). 
d.U klasi Banka dodati metodu dodajRacun, 
koja kao argumente prima ime vlasnika, pocetno stanje i broj racuna, 
pravi novi objekat klase Racun, ubacuje ga u svoj niz racuni i vraća novostvoreni račun.*/

/*class Racun {
    public $brojRacuna; 
    private $banka; 
    private $imeVlasnik;
    private $stanje; 

    public function __construct ($brojRacuna, $banka, $imeVlasnik, $stanje) {
        $this->brojRacuna=$brojRacuna;
        $this->banka=$banka;
        $this->imeVlasnik=$imeVlasnik;
        $this->stanje=$stanje;
      
}
}

class Banka {
    public $ime; 
    private $racuni = [];

    public function __construct ($ime) {
        $this->ime=$ime;
    }

    public function dodajRacun ($imeVlasnika, $banka, $stanje, $brojRacuna) {

        $noviRacun = new Racun($brojRacuna, $this->ime,  $stanje, $brojRacuna);
        array_push ($racuni, $noviRacun); //$this->racuni[]=$noviRacun; *i u razlicitim jezicima
        return $racuni;     
    
    }
}

$otp = new Banka ("OTP");
$otp -> dodajRacun ('Marko MArkovic', 0, 10000);

echo '<pre>'; var_dump ($otp); echo '</pre>';*/

/*4.Modelirati jednostavnu mobilnu mrežu:
a.Napraviti klasu SimKartica koja sadrži jedan atribut, brojTelefona (private), koji se setuje prilikom instanciranja objekta.
b.Napraviti klasu MobilnaMreza koja sadrzi ime (public, postavlja se prilikom kreiranja), i niz sim kartica sa nazivom sveSimKartice (private). 
Napisati metodu novaSimKartica koja kreira objekat klase SimKartica i dodaje je u niz sveSimKartice.
c.U klasu SimKartica dodati novi private atribut mreza, i novu public metodu postaviMrezu koja prima parametar novaMreza i postavlja ga u atribut mreza
d.Proširiti metodu novaSimKartica da nakon kreiranja objekta postavlja i mrežu pozivom metode  nad novokreiranim objektom. 
Mreža je u tom slučaju ceo objekat klase MobilnaMreza, ne samo ime mreže.*/

/*class SimKartica {
    private $brojTelefona; 
    private $mreza;

    public function __construct ($brojTelefona, $mreza) {
        $this->brojTelefona=$brojTelefona;
        $this->mreza=$mreza;
    }

    public function postaviMrezu ($novaMreza) {
        $this->novaMreza = $mreza;
    }

    
}

class MobilnaMreza {
    public $ime; 
    private $sveSimKartice = [];

    public function __construct ($ime) {
        $this->ime=$ime;
    }

    public function novaSimKartica () {
        $novaSimKartica = new SimKartica();
        array_push ($sveSimKartice, $novaSimKartica); 
        return $sveSimKartice;
    }

}*/












?>