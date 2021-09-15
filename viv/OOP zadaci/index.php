<?php
// Doktor može da zakaže laboratorijski pregled za pacijenta.
class Osoba {
    private $ime, $prezime;
    public function __construct($ime, $prezime) {
        $this->ime = $ime;
        $this->prezime = $prezime;
    }
}
class Doktor extends Osoba {
    private $specijalnost;
    private $pacijenti = [];
    public function __construct($ime, $prezime, $specijalnost) {
        parent::__construct($ime, $prezime);
        $this->specijalnost = $specijalnost;
    }
    public function dodajPacijenta(Pacijent $pacijent) {
        $this->pacijenti[] = $pacijent;
    }
    public function zakaziPregled(LaboratorijskiPregled $pregled) {
        $pregled->setDoktor($this);
    }
}
class Pacijent extends Osoba {
    private $jmbg;
    private $brojKartona;
    private $doktor = null;
    public function __construct($ime, $prezime, $jmbg, $brojKartona) {
        parent::__construct($ime, $prezime);
        $this->jmbg = $jmbg;
        $this->brojKartona = $brojKartona;
    }
    public function izaberiDoktora(Doktor $doktor) {
        $this->doktor = $doktor;
        $this->doktor->dodajPacijenta($this);
    }
}
abstract class LaboratorijskiPregled {
    private $datumVrijeme;
    private $pacijent;
    private $doktor;
    public function __construct($datumVrijeme, $pacijent) {
        $this->datumVrijeme = $datumVrijeme;
        $this->pacijent = $pacijent;
    }
    public function setDoktor($doktor) {
        $this->doktor = $doktor;
    }
    public abstract function obaviPregled();
}
class PregledKrvnogPritiska extends LaboratorijskiPregled {
    private $gornjaVrijednost, $donjaVrijednost, $puls;
    public function obaviPregled() {
        $this->gornjaVrijednost = random_int(50, 250); // $this->doktor->izmjerPritisak($pacijent);
        $this->donjaVrijednost = random_int(50, 150);
        $this->puls = random_int(50, 150);
    }
}
class PregledNivoaSecera extends LaboratorijskiPregled {
    private $vrijemePosljednjegObroka, $vrijednost;
    public function obaviPregled() {
    }
}
class PregledHolesterola extends LaboratorijskiPregled {
    private $vrijemePosljednjegObroka, $vrijednost;
    public function obaviPregled() {
    }
}
echo '<pre>';
$doca = new Doktor('Milan', 'qwer', 'asdfsef');
$pacijent = new Pacijent('Dragan', 'qwer', '234568972345', '234534');
$pacijent->izaberiDoktora($doca);
var_dump($doca);
var_dump($pacijent);
$pregledKrvnogPritiska = new PregledKrvnogPritiska('2019-03-20 12:12:12', $pacijent);
var_dump($pregledKrvnogPritiska);
$pregledHolesterola = new PregledHolesterola('2019-03-20 12:42:12', $pacijent);
var_dump($pregledHolesterola);
$doca->zakaziPregled($pregledKrvnogPritiska);
$pregledKrvnogPritiska->obaviPregled();
var_dump($pregledKrvnogPritiska);
echo '</pre>';

//e sad ja ne mogu da se setim sta smo rekli, znam od nazad. 
//sutra UC 6-8 posle Soje, pa onda ode Soje kod babe :) a ja UC , pa rucak Sojetu, pa Zoca. 
//UC 6-8   UC 10.30-11.30  UC 12.30-13.30   UC 17-19 *sutraUkupno 6