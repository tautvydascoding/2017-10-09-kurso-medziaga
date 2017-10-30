<?php

/**
 *  Zmogaus savybes
 */
class Zmogus
{
    private $vardas = "neturiu";
    public $aukstis = 0;
    public $svoris = 0;

    function __construct($vardas, $svoris=0, $aukstis=0)
    {
        $this->vardas = $vardas;
        $this->aukstis = $aukstis;
        $this->svoris = $svoris;
    }

    public function kalbeti() {
        echo $this->vardas . "<br />";
    }

    function getVardas() {
        return $this->vardas;
    }
}

$urvinis = new Zmogus("Urvinis", 165, 60);
$urvinis2 = new Zmogus("Urvinis", 200, 95);
$urvinis->kalbeti();

echo $urvinis->aukstis . "<br />";
echo $urvinis->getVardas() . "<br />";


class Moteris extends Zmogus{

}

/**
 *
 */
interface InterfaceName
{
    public function setVardas($x);
    public function getVardas();
    public function KMI();
}

/**
 *
 */
class Augintinis implements InterfaceName
{
    private $vardas="neturiu";
    public $ugis = 0.6;
    public $svoris = 10;
    public $kmi = 0;

    public function setVardas($x) {
        $this->vardas = $x;
    }
    public function getVardas() {
        echo $this->vardas;}

    public function KMI() {
        $this->kmi = $this->svoris/($this->ugis * $this->ugis);
    }

}

$suo = new Augintinis();
$suo->KMI();
echo $suo->kmi;
