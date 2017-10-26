<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>PHP</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <?php printf("<h1> Mokomes %s basics %s</h1>", "PHP", "2"); ?>

        <?php
            $name= "   Tim Tim  ";
            echo $name . "<br />";
            $trimmed = trim($name); // neliecia tarpu tarp zodziu
            echo $trimmed . "<br />";


            class MyClass {
                public $name = "Tim";
                private $password;
                function manoFunkcija() {

                }
            }

            // print_r($GLOBALS);

            function skaitliukas() {
                static $skaicius=0; //static paverte "skaiciu" globaliu
                $skaicius++;
                echo $skaicius . "<br />";
            }

            skaitliukas();


            class Gyvunas {
                public $aukstis= 160;
                private $svoris=65;
                public function printData() {
                    echo $this->aukstis;
                }

                public function getSvoris() {
                    echo $this->svoris . "<br />";
                }

                public function setSvoris($a) {
                    $this->svoris = $a;
                }
            }

            $banginis = new Gyvunas();
            echo $banginis->aukstis;
            // echo $banginis->svoris; negalima paimti private reiksmes
            $banginis->getSvoris();
            $banginis->setSvoris(100);
            $banginis->getSvoris();

         ?>

    </body>
</html>
