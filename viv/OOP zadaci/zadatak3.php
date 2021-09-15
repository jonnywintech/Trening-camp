<?php


interface MogucnostPostavljanjaPravilaOblacenja {
    public function setPravilaOblacenja($pravila);
}
interface MogucnostZakazivanjaSastanaka {
    public function zakaziSastanak($sastanak); 
}
interface MogucnostDefinisanjaStriktnogRadnogVremena {
    public function postaviRadnoVreme($od, $do);
}



class Fabrika implements MogucnostDefinisanjaStriktnogRadnogVremena {
    private $pocetakRadnogVremena;
    private $krajRadnogVremena;
    public function __construct() {
        $this->pocetakRadnogVremena = '08:00';
        $this->krajRadnogVremena = '16:00';
    }
    public function postaviRadnoVreme($od, $do) {
        $this->pocetakRadnogVremena = $od;
        $this->krajRadnogVremena = $do;
    }

}

class ProdajnoMesto  implements MogucnostPostavljanjaPravilaOblacenja, MogucnostDefinisanjaStriktnogRadnogVremena {
    private $radnoVreme = [];
    public function setPravilaOblacenja($pravila) {
    }
    public function postaviRadnoVreme($od, $do) {
        $this->radnoVreme['pocetak'] = $od;
        $this->radnoVreme['kraj'] = $do;
    }
}

class OdsekZaNabavke  implements MogucnostZakazivanjaSastanaka {
    public function zakaziSastanak($sastanak) {
        echo 'Zakazujem sastanak ' . $sastanak;
    }
}

class OdsekZaMarketing  implements MogucnostPostavljanjaPravilaOblacenja, MogucnostZakazivanjaSastanaka {
    public function setPravilaOblacenja($pravila) {
        $this->pravila=$pravila;
        echo 'kulturno oblacenje.';
    }
    public function zakaziSastanak($sastanak) {
        echo 'Zakazujem sastanak ' . $sastanak;
    }
}


$marketing = new OdsekZaMarketing();
//var_dump ($marketing);
$marketing->zakaziSastanak('10.12.2020.');




?>