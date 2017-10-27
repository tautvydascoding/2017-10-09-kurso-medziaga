<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mokomes PHP</title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
</head>
    <body>
    
    <?php
        //sukuriam klase, klase gali tureti ir funkcija;
        class gyvunas {
            public $ugis = 160;
            private $svoris = 65;
            
            public function printData() { //cia funkcija; kad paimtumem intamaji reikia naudoti $this->
                echo $this->ugis;
                
                
                
            //bandom paimt private per public funkcija:
            public function getSvoris() {
                //$y = $this->svoris; return $y;
                return $this->svoris;
            }
            public function setSvoris($x) {
                $this->svoris = $x;
            }
        }
        
        $banginis = new Gyvunas(); //sukuria objekta
        echo $banginis->ugis . "<br/>";
        
        //kaip pasiekti privacia reiksme? sukurti public funkcija kuri ja paims;
        //kad iskviestumem funkcija reikia nurodyti objekta, nes funkcija yra pbjekto viduje;
        $x = $banginis->getSvoris(1600);
        echo "svoris: $x <br/>";
        
        
        $x = $banginis->setSvoris($x);
        }
    ?>
    
    
    
    
    </body>
</html>