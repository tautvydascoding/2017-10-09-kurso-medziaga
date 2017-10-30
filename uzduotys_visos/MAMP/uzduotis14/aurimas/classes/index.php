<?php

/**
 * zmogaus savybes
 */
class Zmogus
{
    public $aukstis = 0;
    public $svoris = 0;
    private $vardas = "neturiu";

    function __construct($auk, $sv)
    {
        $this -> aukstis = $auk;
        $this -> svoris = $sv;
    }

    function kalbeti(){
        echo $this -> vardas . "<br />";
        echo $this -> aukstis . "<br />";
    }

    function getSvoris(){
        return $this -> svoris;
    }

    function getVardas(){
        return $this -> vardas;
    }
    function setVardas($vardas){
        $this -> vardas = $vardas;
    }
}

class Moteris extends Zmogus{
    protected $estrogenai;

    function __construct($estr)
    {
        $this -> estrogenai = $estr;
    }

    function getEstrogenai(){
        return $this -> estrogenai;
    }

    function setEstrogenai($x){
        $this -> estrogenai += $x;
    }
}



$kamile = new Moteris(1000);
$kamile -> getEstrogenai();
$kamile -> setEstrogenai(5000);
$kamile -> getEstrogenai();
$kamile -> setVardas("Kamile");
$kamile -> svoris = 60;
$kamile -> aukstis = 160;
printf("Moters vardas yra %s, svoris yra %s, aukstis yra %s", $kamile -> getVardas(), $kamile -> svoris, $kamile -> aukstis);
echo "<br><br>";

/**
 *
 */
interface InterfaceName
{
    function setVardas($x);
    function getVardas();
    function KMI($ug, $sv);
}

/**
 *
 */
class Augintinis implements InterfaceName
{
    private $vardas = "neturiu";
    function setVardas($x){
        $this -> vardas = $x;
    }

    function getVardas(){
        return $this -> vardas;
    }

    function KMI($ug, $sv){
        $ugis = $ug;
        $svoris = $sv;
        $kmi = $svoris/($ugis * $ugis);
        return $kmi;
    }
}

$suo = new Augintinis();
$suo -> setVardas("Reksas");
$sunsVardas = $suo -> getVardas();
$sunsKMI = $suo -> KMI(1.86, 81);
printf("Suns vardas yra %s, o KMI yra %s", $sunsVardas, $sunsKMI);



 ?>
