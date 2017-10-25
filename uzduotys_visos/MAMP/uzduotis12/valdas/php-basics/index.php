<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
    </head>
    <body>
        <?php
            $name = "bil";
            echo "<h2>Mano vardas</h2> </br>";
            echo $name;
            echo "Howdy, my name is $name </br>";
            echo ' it\'\'s   </br>';
            echo 'Howdy, my name is $name </br>';

            $age = 100;
            $y=&$age;

            echo "amzius = ". $age . "</br>";
            echo "y = ". $y . "</br>";

            $age = 101;

            echo "amzius = ". $age . "</br>";
            echo "y = ". $y . "</br>";

            function sendinaKompiuteri(&$amzius)
            { // & perduodam globalu kintamaji
                $amzius++;
            }

            sendinaKompiuteri($age);
            echo "Amzius po funkcijos: " . $age . "</br>" ;

            define("CONSTANT", "value"); //Konstanta (nekintanti reiksme) - CONSTANT visada is didziuju raidziu
            define("DB_NAME", "shark");
            define("DB_USERNAME", "name");
            define("DB_PASS", "pass");

            echo "Duomenu baze: " . DB_USERNAME . "</br>";

            $x=1000; //Integer
            $y = "1000"; // String
            Settype($y, "integer");
            $y++;
            Gettype($y);

            $x="alio";

            echo "teksto ilgis: " . strlen($x) . "</br>"; //kokio ilgumo tekstas

            // if (salyga) {
            //
            // } elseif {

            //
            // } else {
            //
            // }

            // (salyga) ? true : false;

            $xx = 116;
                        //
            if ($xx > 100) {
                echo "$xx yra daugiau už 100 </br>";
            } elseif ($xx<50) {
                echo "$xx yra daugiau už 50, bet mažiau nei 100 </br>";
            } else {
                echo "$xx yra mažiau už 50 </br>";
            }

            $y=($xx > 1000) ? 1000: 0;
            echo $y;

            switch ($xx) {
                case 1000:
                    echo "xx yra 1000";
                    break;
                case 500:
                    echo "xx yra 500";
                    break;
                case 100:
                    echo "xx yra 100";
                    break;

                default:
                    echo "xx neaiskus";
                    break;
            }

            echo "<br />";
            echo "<br />";

            $array = array(1, 2, 3, 4);
            echo $array[0] . "<br />";

            $names = array("Petras" => 21, "Jonas" => 35, "Tomas" => 40);
            echo $names["Petras"] . "<br />";

            $names["Justas"] = 43;
            echo $names["Justas"] . "<br />";

            print_r($names);
            echo "<br />";

            $darbuotojai =array("nr" => 1, "vardas" => "Paulius", "data" => 1999);
            $darbuotojai['vardas'] = "Saulius";
            print_r($darbuotojai);

            echo "<br />";

            $pizza = "piece1 piece2 piece3 piece4";
            $pieces = explode(" ", $pizza);
            echo $pieces[0] . "<br />";

            $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $sakiniai = explode(".", $string, 3); //priesingai implode
            print_r($sakiniai);
            echo "<br />";
            echo $sakiniai[0] . "<br />";
            echo "<br />";

            print_r($darbuotojai);
            ksort($darbuotojai);
            print_r($darbuotojai);
            echo "<br />";

            $text = "Povilas norejo pieno";
            $text1 = strtolower($text);
            $text2 = strtoupper($text); // visas i didziasias

            $text = strtolower($text); // visas i mazasias
            $text3 = ucfirst($text); // pirma raide didzioji

            echo $text1 . $text2 . $text3 . "<br />";

            $text4 = "povilas";

            echo strcmp($text, $text4) . "<br />"; // jei lygus 0

            $aaa = str_replace('povilas', "****", $text4);

            echo $aaa . "<br />";

            $sk = 0.9997;
            $sk2 = 99.1113;

            printf("Vyrai ejo i %s, o ten sutiko %s. Taip ir baigesi", $text1, $aaa);
            printf("Vyrai ejo i %.2f, o ten sutiko %.1f. Taip ir baigesi", $sk, $sk2);
            echo "<br />";



        ?>
    </body>
</html>
