<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Mokomes PHP</h1>


    <?php

      echo "<h2>H2 tekstas</h2>";
      $name = "Jonas";
      echo $name . "<br>";
      echo "Kazkas yra $name <br />";
      echo 'Kazkas yra $name <br />';
      echo $name . "<br>";

      $age = 100;
      $y = &$age;
      echo "amzius = " . $age . " <br />";
      echo " y = " . $y . " <br />";
      $age = 101;
      echo "amzius = " . $age . " <br />";
      echo "y = " . $y . " <br />";

      function sendinaKompiuteri (&$amzius) { //localus
        $amzius = $amzius + 1;
        $amzius = $amzius + 1;
        $amzius = $amzius + 1;
      }
      sendinaKompiuteri( $age);
      echo "Amzius po funkcijos: $age </br>";

      // kintamasis - konstanta (reiksme, kuri negales kisti)
      define ("DBNAME", "mano_baze");
      define ("DBUSERNAME", "erelis");
      define ("DB_PASS", "dF8yy");

      echo "Duomenu bazes pavadinimas: " . DBNAME . "<br />";

      $x = "tekstas testavimui";
      echo "teksto ilgis: " . strlen($x) . "<br />"; //strlen reikstu stringo lenght ir skaiciuoja automatiskai ilgi

      $xx = 500;
      if ($xx > 100) {
        echo $xx . " yra daugiau nei simtas";
      } else if ($xx < 50 ){
        echo $xx . " yra maziau nei simtas";
      } else {
        echo $xx . " yra daugiau nei 50, bet maziau nei 100";
      }

      // salyga  if tur          else
      $yy = ($xx > 1000) ? 1000 : 0;
      echo "$yy reiksme <br />";

      $yy = ($xx > 1000) ? : 0;

      switch ($xx) {
        case 1000:
          echo "$xx yra 1000";
          break;
        case 500:
          echo "$xx yra 500";
          break;

        default:
          echo "$xx yra kazkas, ko nezinau";
          break;
      }

      $darbuotojai = array("nr" => 1, "vardas" => "Paulius", "data" => 2013, "<br />");
      print_r ($darbuotojai);

      $darbuotojai["vardas"] = "Tomykas";
      echo "darbuotojo vardas: " . $darbuotojai["vardas"] . "<br />";

      $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mmet, consectetur.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mmet";
      $sakiniai = explode(".", $string, 3);
      print_r($sakiniai);
      echo "<br />";


      print_r($darbuotojai);
      echo "<br />";
      print_r(ksort($darbuotojai));

      $textas = "Povilas norejo kazko. <br>";
      $textas = strtolower($textas);
      echo "$textas";

      $textas = strtoupper($textas);
      echo "$textas";

      $textas2 = "povilas";
      echo strcmp($textas, $textas2);

      $textas3 = "Laba diena, fuck you!";
      $aaa = str_replace ('fuck', 'f**k', $textas3);
      echo $aaa . "<br />";

      printf("Vyrai ejo i %s , o ten sutiko %s. Taip ir baigesi", $textas, $textas2);



     ?>
  </body>
</html>
