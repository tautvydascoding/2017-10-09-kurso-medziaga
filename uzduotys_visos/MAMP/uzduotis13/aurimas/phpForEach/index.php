<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>foreach</title>
    </head>
    <body>
        <?php
            echo "<h1> Mokinames foreach su php</h1>";
            $zuvis = "lydeka";
            $skaicius = "devyniu";
            $ezeras = "Vistytis";
            printf("Uz %s juru ir devyniu kalnu yra %s, kuriam gyvena %s", $skaicius, $ezeras, $zuvis);
            echo "<br>";

            $cars = array("Audi", "BMW", "Opel", "Honda");

            $ieskomasAuto = "Opel";
            foreach($cars as $auto){
                echo $auto . " ";
                if($auto === $ieskomasAuto){
                    break;
                }
            }

            echo "<br />";

            foreach ($cars as $auto) {
                if($auto === $ieskomasAuto){
                    continue;
                }
                echo $auto . " ";
            }

            echo "<br />";

            $uzsakymai = array("", "", "150 morku", "", "20kg bananu");

            foreach ($uzsakymai as $orderis) {
                if($orderis == ""){
                        continue;
                } else{
                    echo "Uzsakyta: $orderis ";
                }
            }

            echo "<br />";

            $darbuotojai = array("Vardas" => "Aurimas", "Pavarde" => "Zaromskis", "Kodas" => 556);
            echo "Darbuotojo kodas: " . $darbuotojai['Kodas'] . "<br />";

            foreach ($darbuotojai as $worker) {
                echo $worker . "<br />";
            }
         ?>
    </body>
</html>
