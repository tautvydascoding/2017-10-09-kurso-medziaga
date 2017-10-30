<?php

/**
 * zmogaus savybes
 */
class Zmogus
{
  public $aukstis = 0;
  public $svoris = 0;
  private $vardas = "neturiu";

  function __construct($auk=0, $sv=0)
  {
    $this->aukstis = $auk;
    $this->svoris = $sv;
  }
  public function kalbeti(){
    echo $this->vardas . "<br />";
    echo $this->aukstis . "<br />";
    echo $this->svoris . "<br /><br />";
  }
  public function getVardas(){
    return $this->vardas;
  }
  public function setVardas($x){
    $this->vardas = $x;
  }
}

$urvinis = new Zmogus(165,60); // objektas
$urvinis2 = new Zmogus(200,95); // du skirtingi objektai
$urvinis->kalbeti();
$urvinis2->kalbeti();

$y = $urvinis2->getVardas();

echo "urvinio2 vardas:" . $y . "<br />"; //kintamuju pasiekimas jei $ yra public


/**
 *
 */
class Moteris extends Zmogus
{
  protected $estrogenai = 0;// kaip private, bet galima paveldeti
  function __construct($x = 3000) {
    $this->estrogenai = $x;
  }
  public function gimdymas(){
    $this->estrogenai -= 500;
  }
  public function getEstrogenai(){
    return $this->estrogenai;
  }
  public function setEstrogenai($x){
    $this->estrogenai += $x;
  }
}
$urvine = new Moteris(4500);//objektas
echo "estrogenu skaicius: " . $urvine->getEstrogenai() . "<br />"; //pries gimdyma
$urvine-> gimdymas();
echo "estrogenu skaicius po gimdymo: " . $urvine->getEstrogenai() . "<br />"; // po gimdymo

// uzduotis2

$urvine->aukstis = 170;
echo "aukstis:" . $urvine->aukstis . "<br />";
$urvine->svoris = 65;
echo "svoris:" . $urvine->svoris  . "<br />";
$urvine->setVardas("Rozita");
echo "moters vardas:" . $urvine->getVardas("Rozita") . "<br />";


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
  private $vardas = "neturiu";
  public $kmi = 0;
  public $svoris = 9;
  public $aukstis = 0.5;
  public function setVardas($x){
    $this->vardas = $x;
  }
  public function getVardas(){
    return $this->vardas;
  }
  public function KMI(){
     $this->kmi = $this->svoris / ($this->aukstis * $this->aukstis);
     return $this->kmi;
  }
}
$suo = new Augintinis();
// $suo->aukstis = 120;
// $suo->svoris = 30;
echo "KMI: " . $suo->KMI() . "<br />";

$suo->setVardas("Sraigius");
echo "vardas:" . $suo->getVardas() . "<br />";









// uzduotis 1 funkcijos pagalba sumazinti estrogenus 500
// B susikurti ir atspausdinti estrogenu skaiciu
// C susikurti konstruktoriu, kuris nustato pradini estrogenu skaiciu
//C2 susikurti nauja moters obj
// isspausdinti moters objekto estrogenu skaiciu pries ir po
// uzduoris2
// objektui Moteris nustatyti auksti 170 ir svoris 65, vardas "Rozita"
// atspauzdinti moters dumenis
