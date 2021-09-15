<?php

class Osoba{
    public $ime;
    public $prezime;

    public function __construct($ime, $prezime)
    {
    $this->ime = $ime;
    $this->prezime = $prezime;

    }
}


$osoba=new Osoba("marko","markovic");
