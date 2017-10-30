 <?php


  /**
   *
   */
  class Gyvunas  {
      public $auktis  = 160;
      private $svoris = 65;
      public function printData() {
          echo $this->auktis;
      }
      public function getSvoris() {
          $y = $this->svoris;
          return $y;
      }
      public function setSvoris($x) {
          $this->svoris = $x;
      }
  }

  $banginis = new Gyvunas(); // sukuria mums objekta
  echo $banginis->auktis . "<br />";
  $x =  $banginis->getSvoris();
  echo "svoris: $x  <br />";

$banginis->setSvoris(1600);
$x =  $banginis->getSvoris();
echo "svoris: $x  <br />";



  ?>
