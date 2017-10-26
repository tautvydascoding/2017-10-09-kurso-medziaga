<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>mokomes PHP</title>
</head>

<body>
    <h1>mokomes PHP</h1>

    <?php 
              echo "<h2>Mano vardas Mantas</h2><br/>";
              $name = "Timas";
              echo $name;
              echo "o pries tai jo vardas buvo $name <br/>";
              echo 'It\'\'\'s </br> \n\n\n aaa';
              
              
              $age = 100;
              $y = &$age;
              echo "amzius =".$age ."<br/>";
              echo "y = " . $y ." <br />";
              
              $age = 101;
              echo "amzius = " .$age . "<br/>";
              echo " y = " . $y ." <br />";
              
              
              function sendinaKompiuteri(&$amzius) {
              //ziurite i global kintamaji
                $amzius = $amzius +1;
                $amzius = $amzius +1;
                $amzius = $amzius +1;
              }
                sendinaKompiuteri($age);
                echo "Amzius po funkcijos: $age</br>";
                //keiciam globalu kintamaji, perduodam adresa, sutaupomas laikas;
        
        
                //kuriame kintamaji - konstanta- reiksme kuri nekinta
                define("DATABASE_NAME", "Ugnespasaulis");
                define("DB_USERNAME", "ugne");
                define("DB_PASS", "eld0radv0");
                //kaip tas reiksmes pasiekti?? atsispausdinti su echo;
                echo "duombazes pavadinimas: " .DATABASE_NAME . "<br />";
        
                $x = "";
                echo "teksto ilgis:" . strlen($x) . "<br/>"; //.strlen sujungia du kintamuosius;
                
                //mokomes IF
                //kuriame kintamaji
                    $xx = 116;
                    if ( $xx > 100 ) {
                        echo $xx . "yra daugiau nei simtas";
                    } else {
                        echo $xx . "yra maziau nei simtas";
                    }
                
        
                //sukuriam kintamaji yy
                //          salyga        if true    else
                    $yy = ($xx > 1000) ?  1000     : 0;
                    echo "$yy - y reiksme <br/>";
                        
                //else if
                $xx = 116;
                    if ( $xx > 100 ) {
                        echo $xx . "yra daugiau nei simtas";
                    } else if ($xx < 50){
                        echo $xx . "yra maziau nei 50";
                    } else {
                        echo $xx . "yra tarp 50 ir 100";
                    }
                
                //SWITCH mokomes, naudingas dirbant su ribota aibe;
                switch ($xx) {
                    case 1000:
                        echo "xx yra 1000";
                    break;
                    case 100:
                        echo "xx yra 500";
                    break;
                    
                    default:
                        echo "informacija nerasta";
                    break;
                }
                
                //MASYVU kurimas; print_r - masyvu isvedimas
                $darbuotojai = array("nr" => 1, "vardas" => "Paulius", "data" => 2009);
                print_r ($darbuotojai);
                //pakeiskime reiksme, pvz varda;
                $darbuotojai["vardas"] = "Tomas";
                print_r ("darb. vardas:" .$darbuotojai['vardas']);
                echo "darb vardas: " .$darbuotojai['vardas'];
        
                //priskiriam nauja elementa i masyva, suskaldyta kas taska
                $string ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
                $sakiniai = explode(".", $string, 3);
                print_r ($sakiniai);
                
        
        
                //surikiavimas masyvo ksort - sort by key, stalciu pavadinimus;
                echo ("<br/>");        
                print_r($darbuotojai);
                echo ("<br/>");
                ksort($darbuotojai); //surikiuojame masyva
                print_r( $darbuotojai );
        
                
                $text = "povilas norejo pieno.";
                //strtolower //string to lower - pakeicia imazasias raides
                //strtoupper($text); //[pakeicia i didziasias raides, bet info neissisaugo, nes niekam neprolyginom, reikia taip:
                $text = strtoupper($text);
                echo "didziosiomis raidemis: $text <br/>";
                $text = ucfirst ($text); //padidina tik pirmaja raide;
                echo "$text <br/>";
                
    
                //kaip pvz padidinti tik pirma raide
                
                $text = "as einu i miska.";
                $text = strtolower($text);
                echo "mazosiomis raidemis: $text <br/>";
                $text = ucfirst ($text); //padidina tik pirmaja raide;
                echo "pirma didzioji: $text <br/>";
                
                $text2 = "povilas";

                echo strcmp($text, $text2); //tiesiog patikrina kuris ilgesnis, jeigus pirmas trumpesnis, grazins -1, jei ilgesnis =1, o jei lygus, bus 0;
                //lyginame du strings su strcmp; pvz kuris ilgesnis, etc
                //if (strcmp ($text, $text2) )
    
                //keiksmazodziu salinimas:
                $text2 = str_replace ('povilas', '!#$%^', $text2);
                echo $text2 . "<br/>";
    
                //sakinio viduj galima laikyti kintamas reiksmes, pvz:
                pritnf("Vyrai ejo i  %s, o ten sutiko %s. Taip ir baiges", $text, $text2);
    
                //reikia skaiciu reiksmiu, galima atvaizduot tam tikra skaiciu kieki po kablelio; tiksliau atlieka apvalinima.
                $sk = 0.99397;
                $sk2 = 999.11113;
        
                pritnf("Vyrai ejo i  %.2f, o ten sutiko %.0f. Taip ir baiges", $sk, $sk2);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>

</body>

</html>