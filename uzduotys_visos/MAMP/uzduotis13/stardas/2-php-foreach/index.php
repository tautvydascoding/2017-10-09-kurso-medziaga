<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      echo "<h1>mokinames PHP foreach cikla</h1>";
      $ezeras = "Vistytis";
      $zuvis = "Lydeka";
      $skaicius = 2;
      printf("Koks ezeras? %s - geras tai ezeras! Ten plaukioja %s. O kartais buna ir %s lydekos.", $ezeras, $zuvis, $skaicius);


      $cars = array("Audi", "BMW", "Opel", "Kia");
      // ieskosime Opel
      foreach ($cars as $car) { // issigalvotas kintamasis "$car". Kiekviena karta jis bus lygus vis kitam masyvo stalciui
        echo $car . "<br />";
        // sustabdyti paieska ties Opeliu
        if ($car == "Opel") {
          break;
        }
      }

      echo "<br>";

      //atspausdinti visas masinas, isskyrus BMW
      foreach ($cars as $masina) {
        if ($masina == "BMW") {
          continue;
        }
        echo $masina . "<br />";
      }

      $darbuotojai = array ("vardas" => "Paulius", "pavarde" => "Jonaitis", "kodas" => 165);
      echo "Darbuotojo kodas: " . $darbuotojai['kodas'] . "<br />";

     ?>

  </body>
</html>
