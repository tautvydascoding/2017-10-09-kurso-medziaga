<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        printf("<h1> Mokomes %s basics  %s </h1>", "PHP", "2");

        $name = "   Tim Petrovolas ";
        echo $name  .  "<br />";
        $istaisytasVandas = trim($name);
        echo $istaisytasVandas .  "<br />";

        // print_r($GLOBALS);
        // static kintamieji


        function skaitliukas() {
            static $skaicius = 0; // static - paverte "skaiciu" globaliu
            echo $skaicius . " <br />";
            $skaicius++;
        }

        skaitliukas();
        skaitliukas();
        skaitliukas();


        // rekursija
        function skaiciuotiIki20() {
            static $sk = 0;
            $sk++;

            if( $sk <= 20 ) {
                echo "skaicius:  $sk <br />";
                skaiciuotiIki20();
            }
            echo "testas";
        }
 
        skaiciuotiIki20();


        ?>

    </body>
</html>
