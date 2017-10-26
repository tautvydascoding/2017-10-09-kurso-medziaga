<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <?php

    echo "<h1>Mokomes PHP foreach cikla</h1>";
    $ezeras = "Vistytis";
    $zuvis = "karosas";
    $skaicius = "devyniu";
    printf( "Uz %s juru ir 5 kalnu yra ezeras %s, kuriam gyvena %s ",   $skaicius, $ezeras, $zuvis );

        ///
        $cars = array("Audi", "BMW", "Opel", "L");
        // for ($i=0; $i < ; $i++) {
        // issigalvotas kintamasis "$car". (kiekviena karta jis bus lygus vis kitam masyvo stalciui)
        // uzduotis 1: nustoti paieska, kai rasime "Opel"
        // ieskosime "opel"
        foreach ($cars as $car) {
            echo $car . "<br />";

            if ($car == "Opel") {
                break;
            }
        }
        // uzduotis 2
        // atspausdinti visas masinas isskyrus "BMW" (panaudokite "continue")
        foreach ($cars as $reiksme) {
            if ( $reiksme == "BMW") {
                continue;
            }
            echo $reiksme . "<br />";
        }

        $uzsakymai = array ("", "", "150 morku", "", "20 kg bananu");
        foreach ($uzsakymai as $uzsakymas) {
            if (  strlen($uzsakymas) == 0) {
                continue;
            }
            echo "Jusus uzsakymas:" . $uzsakymas . "<br />";
        }

        $darbuotojai = array ("name" => "Paulius", "lname" => "Pauliauskis", "kodas" => 165);
        echo "Darbuotjo kodas: " . $darbuotojai['kodas'] . "<br />";

        foreach($darbuotojai as $value) {
            echo $value . "<br />";
        }
     ?>




    </body>
</html>
