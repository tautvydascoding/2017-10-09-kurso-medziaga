<?php

/**
 *
 */
class Gyvunas
{
    public $aukstis = 160;
    private $svoris = 65;
    public function printData(){
        echo $this -> aukstis;
    }

    function getSvoris() {
        return $this -> svoris;
    }

    function setSvoris($x){
        $this ->svoris = $x;
    }
}

$banginis = new Gyvunas();
echo $banginis -> aukstis . "<br>";
echo $banginis -> getSvoris();
echo "<br />";

$banginis->setSvoris(1600);
$x = $banginis->getSvoris();
echo "svoris: $x <br>";

 ?>
