<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Mokomes PHP</h1>

        <?php
            echo "<h2>Mano vardas</h2>";
            $name = "Aurimas";
            echo "$name";
            echo " O pries tai vardas buvo $name </br>";
            echo ' O pries tai vardas buvo $name </br>';
            echo ' it\'s  \n </br>';
            echo $name . "</br> Zaromskis </br>";

            $age = 0;

            function sendina(&$amzius){
                $amzius += $amzius + 1;
            }

            sendina($age);
            echo "amzius po funkcijos: $age </br>";



            define ("DB_NAME", "shark");
            define ("DB_USERNAME", "eagle");
            define ("DB_PASS", "lalaland12");

            echo "Duomenu bazes pavadinimas: " . DB_NAME . "</br>";

            $x = "vataitau";
            echo "teksto ilgis: " . strlen($x) . "</br>";
            echo Gettype($x) . "</br>";

            echo "</br>";

            $xx = 1;
            $yy = ($xx > 1000) ? 1000 : 0;
            echo $yy . "</br>";

            $darbuotojai = array("nr" => 1, "vardas" => "Paulius", "data" => 1999);
            print_r($darbuotojai);
            echo "</br>";

            $darbuotojai['vardas'] = "Timis";
            echo "darbuotojo vardas: " . $darbuotojai["vardas"];
            echo "</br>";
            echo "</br>";


            $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

            $sakiniai = explode(".", $string, 3);
            print_r($sakiniai);
            echo "</br>";
            echo "</br>";

            print_r($darbuotojai);
            echo("</br>");
            ksort($darbuotojai);
            print_r($darbuotojai);
            echo "</br>";

            $text = "pPIHFFJoihoihjhf";
            $text = strtoupper($text);
            echo($text);
            echo "</br>";
            echo "</br>";

            $text2 = "juihuigKK";
            echo strcmp($text, $text2);
        ?>
    </body>
</html>
