<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    echo "<h1>Mokinames PHP foreach</h1>";
    $ezeras = "Vistytis";
    $skaicius = 1000;
    $zuvis = "lydeku";
    printf("Uz devyniu juru ir 5 kalnu yra ezeras %s, kuriam gyvena %s %s", $ezeras, $skaicius, $zuvis);
    echo "<br />";

    $cars = array("Audi", "Bmw", "Opel", "L");
    echo "<br />";
    // ieskomsim "Opel"
    foreach ($cars as $car) { // issigalvotas kintamasis "$car", kiekviena karta jis bus lygus kitam stalciui ("Audi", "Bmw" ir t.t)
      echo $car . "<br />";
      // uzduotis: nustoti paieska, kai rasime "Opel"
      $auto = "Opel";
      if ($car == $auto) {
        echo "surasta masina:  " . $car . "<br />";
      }
    }
    $uzsakymai = array('', '', '150 morku', '', '20 kg bananu' );
    foreach ($uzsakymai as $uzsakymas) {
      if (strlen($uzsakymas) ==0) {
        continue;
      }
      echo "Jusu usakymas: " . $uzsakymas . "<br />";
    }

    $darbuotojai = array('name' => 'Paulius', 'lname' => 'Paulautis', 'kodas' => '165' );
    echo "Darbuotojo kodas: " . $darbuotojai['kodas'] . "<br />";
    foreach ($darbuotojai as $key) {
      echo $key . "<br />";
    }




    ?>

  </body>
</html>
