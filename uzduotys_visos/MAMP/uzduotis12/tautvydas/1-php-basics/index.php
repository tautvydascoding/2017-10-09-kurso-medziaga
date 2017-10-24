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


            $name = "Timas";
            echo $name;
            echo "O pries  \$tai jo vardas buvo $name </br>";
            echo 'O pries tai jo vardas buvo $name </br>';
            echo 'It\'\'\'s </br> \n \n \n aaaa';

            echo $name . "</br>";


            $age = 100;
            $y = &$age;
            echo "amzius = " . $age  . " <br />";
            echo " y = " . $y  . " <br />";
            $age = 101;
            echo "amzius = " . $age  . " <br />";
            echo " y = " . $y  . " <br />";

            function sendinaKompiuteri(&$amzius) {  // ziurite i global kintamaji
                $amzius = $amzius + 1;
                $amzius = $amzius + 1;
                $amzius = $amzius + 1;
            }
            sendinaKompiuteri($age);
            echo "Amzius po funkcijos:   $age </br>";

            // Kintamasis - konstanta ( reiksme, kuri negales pakisti)
            define("DB_NAME", "shark");
            define("DB_USERNAME", "ereli8s");
            define("DB_PASS", "fuga654");
            define("HP-FACE", 6);
            define("HP-POSTS", 8);

            echo "Duomenu bazes pavadinimas: " . DB_NAME . "<br />";

            $x =  "x";
            echo "teksto ilgis: " . strlen($x) . "<br />";

            $xx = 100;
            if ( $xx > 100 ) {
                echo $xx . " yra daugiau nei simtas";
            } elseif ( $xx < 50 ) {
                echo $xx . " yra maziau nei 50";
                } else {
                echo $xx . " yra daugiau nei 50, bet maziua nei 100";
            }

            //     salyga       if true   else
            $yy = ($xx > 1000) ? 1000   :   0;
            echo "$yy reiksme <br>";

            switch ($xx) {
                case 1000:
                        echo " xx yra 1000";
                        echo " xx yra 1000";
                        echo " xx yra 1000";
                    break;
                case 500:
                        echo " xx yra 500";
                    break;
                case 100:
                        echo " xx yra 100";
                    break;

                default:
                        echo  " xx tokio dydzio, kurio as nezinau";
                    break;
            }


            echo "<br /><br /><br /><br />";
            $darbuotojai = array("nr" => 1, "vardas" => "Paulius", "data" => 1999);
            print_r( $darbuotojai );

            $darbuotojai["vardas"] = "Timis";
            echo "darbuotojo vardas: " . $darbuotojai["vardas"];
            // echo "darbuotojo vardas:   { $darbuotojai['vardas']} ";

             $string = "Lorem. ipsum. dolor. sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ;
             $sakiniai = explode(".", $string );
             print_r ($sakiniai );
             echo "<br /><br /><br /><br />";
             var_dump ($sakiniai );

            echo "<br><br><br><br><br><br><br>";


            print_r($darbuotojai);
            echo("<br />");
            ksort($darbuotojai);
            print_r( $darbuotojai );

            //  echo nl2br(str_replace(' ', ' ', print_r($sakiniai, true)));

            $text = "povilas norejo pieno.";
            $text = strtoupper($text); // teksta pavercia didziosiomis raidemis
            echo "didziosiomis: $text <br />";
            $text = strtolower($text);
            $text = ucfirst($text);  // padidina tik pirma raide
            echo "pirmoji didzioji: $text <br />";
            $text2 = "povilas";
            $text1 = "tovilas";
            echo strcmp($text2, $text1);

            $aaa = str_replace ('Povilas', 'Laba diena', $text);
            echo $aaa . "<br />";
            // if  ( strcmp($text, $text2) )

            $sk = 0.99997;
            $sk2 = 999.11113;
            printf("Vyrai ejo i %s , o ten  sutiko %s. Taip ir baiges", $text1, $text2);
            printf("Vyrai ejo i %.2f , o ten  sutiko %.0f. Taip ir baiges", $sk, $sk2);

         ?>
    </body>
</html>
