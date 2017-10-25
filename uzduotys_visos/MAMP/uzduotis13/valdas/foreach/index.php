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


        <?php

            echo "<h1>Mokinames Foreach</h1>";
            $nurodyta = "ezeras";
            $kas = "Vistytis";
            printf("Nurodytas %s: %s", $nurodyta, $kas);
            echo "<br />";
            echo "<br />";

            $cars = array("Audi", "BMW", "Opel", "Lexus");

            $q="Opel";
            foreach($cars as $car) {
                echo $car . "<br />";
                if ($car === $q) {  // break, kai randa Opeli
                    break;
                }
            }

            echo "<br />";
            echo "<br />";

            $query = "BMW";
            foreach($cars as $car) {
                if ($car === $query) {  // continue nutraukia esama ciklo iteracija ir vykdo toliau
                    continue;
                }
                echo $car . "<br />";
            }

            $uzsakymai = array("","", "150 morku", "", "20 bananu");

            if (isset($uzsakymai)) {
                foreach($uzsakymai as $uzsakymas) {
                    if($uzsakymas) {
                        echo $uzsakymas. "<br />";
                    }
                }
            }

            $darbuotojai = array("name"=>"Tomas", "pavarde"=>"Jonaitis", "kodas"=>156);
            foreach($darbuotojai as $key=>$darbuotojas) {
                echo $key . ": " . $darbuotojas . "<br />";
            }


        ?>


    </body>
</html>
