<?php


/**
 *
 */
class Gyvunas {

  public $aukstis = 100;
  private $svoris = 65;
  public function printData() {
    echo $this->aukstis;
  }
  public function getSvoris(){

    return $this->svoris;
  }
  public function setSvoris($x){
    $this->svoris = $x;
  }
}
$banginis = new Gyvunas(); // sukuria mums objekta
echo $banginis->aukstis . "<br />";
$x = $banginis->getSvoris();
echo "Svoris: $x <br />";

$banginis->setSvoris(1600);
$x = $banginis->getSvoris();
echo "Svoris: $x <br />";









 ?>
