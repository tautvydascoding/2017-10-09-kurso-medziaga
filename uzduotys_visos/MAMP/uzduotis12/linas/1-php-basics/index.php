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
    echo "O pries tai jo vardas buvo $name <br />";
    echo $name . "</br>";

    $age = 100;
    $y = &$age;
    echo "amzius " . $age . "<br />";
    echo " y = " . $y . "<br />";
    $age = 101;
    echo "amzius " . $age . "<br />";
    echo " y = " . $y . "<br />";

    function sendimaKopiuteri(&$amzius){ //ziuri i globalu kintamaji
      $amzius = $amzius + 1;
    }
    sendimaKopiuteri($age);
    echo "Amzius po funkcijos: $age </br>";

    // kintamasis-constant, kuri negales pakisti

    define("DB_NAME", "shark");
    define("DB_USERNAME", "ereli8s");
    define("DB_PASS", "fuga654");

    echo "Duomenu bazes pavadinimas: " . " DB_NAME " . " <br /> ";

    // $x = 1000; //  interger
    // $y = "1000"; // simplexml_load_string
    // settype($y, "integer");
    // $y++;

    $x = "ji";
    echo "teksto ilgis: " . strlen($x) . " <br/>";


    //if ifelse
    $xx = 500;
    if ($xx > 100) {
      echo $xx . "yra daugiau nei simtas <br />";
    } elseif ($xx < 50) {
      echo $xx . "yra maziau nei simtas <br />";
    } else {
      echo $xx . "yra daugiau nei 50, bet maziau neu 100 <br />";
    }
    //     salyga      if true  else
    $yy = ($xx > 1000) ? 1000 : 0;
    echo "$yy reiskme <br />";

    //switch
    switch ($xx) {
      case 1000:
        echo "$xx yra lygys 1000";
        break;
      case 500:
        echo "$xx yra lygys 500";
        break;
      case 100:
        echo "$xx yra lygys 100";
        break;

      default:
        echo "$xx nezinau tokio";
        break;
    }

    // arrays (masyvas)

    $darbuotojai = array("nr" => 1, "vardas" => "Paulius", "data" => 1999);
    print_r($darbuotojai); // print_r atspausdina masyvus

    $darbuotojai["vardas"] = "Timis";
    echo "darbuotojo vardas: " . $darbuotojai["vardas"];

  $string =  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $sakiniai = explode(".", $string);
  print_r ($sakiniai);
  echo "<br />";


 print_r ($darbuotojai);
 echo "<br />";
 ksort($darbuotojai);// surikiuoja pagal abecele masyvo elementus

 print_r ($darbuotojai);
 echo "<br />";

 $text = "povilas norejo pieno";
 $text = strtoupper($text);// teksta pavercia didziosiomis raidemis
 echo "didziosiomis: $text <br />";
 $text = strtolower($text);
 echo "mazosios: $text <br />";
 $text = ucfirst($text); // padidina tik pirma raidemis
 echo "pirma didzioji: $text <br />";

 $text1 = "povilas";
 $text2 = "povilas";
 echo strcmp($text1, $text2);
 $aaa = str_replace("Povilas", "Laba diena", $text);
 echo $aaa . "<br />";
 // if (strcmp($text, $text2)) {
 //   # code...
 // }
 $sk = 0.99999;
 $sk2 = 99.196;
 printf ("vyrai ejo i %s , o ten sutiko %s. taip ir baiges", $text1, $text2);

 printf ("vyrai ejo i %.2f , o ten sutiko %.1f . taip ir baiges", $sk, $sk2);

















     ?>

  </body>
</html>
